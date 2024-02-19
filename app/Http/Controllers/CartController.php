<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DeliveryCost;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);
        if (!$product) {
            abort(404);
        }
        $quantity = session()->get("cart.$productId", 0);
        $quantity++;

        session()->put("cart.$productId", $quantity);
        return response()->json([
            'message' => 'Product added to cart',
            'status' => 'success',
        ]);

    }

    public function minusFromCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);
        $cart = Session()->get('cart', []);
        if (!$product) {
            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                Session()->put('cart', $cart);
            }
        }
        $quantity = session()->get("cart.$productId", 0);
        $quantity--;
        if(0  < $quantity){
            session()->put("cart.$productId", $quantity);
        }else{
            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                Session()->put('cart', $cart);
            }
        }
        return response()->json(['message' => 'Product added to cart']);
    }
    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = Session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            Session()->put('cart', $cart);
        }
        return response()->json(['message' => 'Product removed from cart']);
    }
    public function getCart()
    {
        $cart = session()->get('cart', []);
        $cartList = [];
        $totalItemCount = 0;
        $subtotal = 0;

        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);

            if ($product) {
                $cartItem = [
                    'product_id' => $productId,
                    'name' => $product->name,
                    'image' => env('APP_STORAGE_URL').$product->thumbnail->path,
                    'price' => $product->discount_price,
                    'quantity' => $quantity,
                    'total' => $product->discount_price * $quantity,

                ];
                $cartList[] = $cartItem;
                $totalItemCount += $quantity;
                $subtotal += $cartItem['total'];
            }
        }

        $dc = DeliveryCost::find(1);
        $delivery_charge = 0;
        $minimum_order = 0;
        $canOrder = true;
        if ($dc){
            $delivery_charge = $dc->cost;
            if ($dc->fee_cost < $subtotal){
                $delivery_charge = 0;
            }
            if ($dc->minimum_cost){
                $minimum_order = $dc->minimum_cost;
                $canOrder = false;
                if ($subtotal >= $minimum_order){
                    $canOrder = true;
                }

            }
        }

        return response()->json([
            'cartList' => $cartList,
            'totalItemCount' => $totalItemCount,
            'subtotal' => $subtotal,
            'delivery_charge' => $delivery_charge,
            'payable_amount' =>$subtotal + $delivery_charge,
            'minimum_order' => $minimum_order,
            'canOrder' => $canOrder,
        ]);
    }
    public function orderConfirm(Request $request){

        $request->validate([
            'pick_date' => 'required',
            'delivery_date' => 'required',
            'pick_hour' => 'required',
            'delivery_hour' => 'required',
            'address_id' => 'required',
        ]);
        $order_code = Order::max('order_code');
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $order = Order::create([
            'order_code' => sprintf('%06d', $order_code+1),
            'prefix' => "LM",
            'customer_id' => $customer->id,
            'coupon_id' => null,
            'discount' => 0.0,
            'pick_date' => $request->pick_date,
            'delivery_date' => $request->delivery_date,
            'pick_hour' => $request->pick_hour.':00',
            'delivery_hour' => $request->delivery_hour.':00',
            'address_id' => $request->address_id,
            'amount' => 0,
            'total_amount' => 0,
            'payment_status' => 'Pending',
            'payment_type' => 'Cash on Delivery',
            'order_status' => 'Pending',
            'is_show' => 1,
            'delivery_charge' => 0.0,
        ]);


        $cart = session()->get('cart', []);
        $subtotal = 0;
        $productsWithPivot = [];
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            if ($product) {
                $sub_total = $quantity*$product->discount_price;
                $productsWithPivot[] = [
                    'product_id' => $productId,
                    'order_id' => $order->id,
                    'quantity' => $quantity,

                ];
                $subtotal += $sub_total;
            }
        }
        $dc = DeliveryCost::find(1);
        $delivery_charge = 0;
        if ($dc){
            $delivery_charge = $dc->cost;
            if ($dc->fee_cost < $subtotal){
                $delivery_charge = 0;
            }
        }
        DB::table('order_products')->insert($productsWithPivot);
        $order->amount = $subtotal;
        $order->delivery_charge = $delivery_charge;
        $order->total_amount = ($subtotal + $delivery_charge) - $order->discount;
        $order->update();

        Session()->put('cart',[]);
        return redirect(route('profile'));
    }

}
