<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'total' => $product->price * $quantity,

                ];
                $cartList[] = $cartItem;
                $totalItemCount += $quantity;
                $subtotal += $cartItem['total'];
            }
        }

        return response()->json([
            'cartList' => $cartList,
            'totalItemCount' => $totalItemCount,
            'subtotal' => $subtotal,
        ]);
    }
//    public function orderConfirm(Request $request){
//        $request->validate([
//            'name' => 'required',
//            'phone' => ['required', 'regex:/^(01|\+8801|8801)[3456789]\d{8}$/'],
//            'address' => 'required|min:12',
//            'delivery_zone_id' => 'required',
//        ]);
//
//        if (getSetting('payment_method') == 'show') {
//            if ($request->payment_method_id === "cod" || $request->payment_method_id === ""){
//
//            }else{
//                $request->validate([
//                    'payment_method_id' => 'required',
//                    'trxid' => 'required',
//                    'paid_amount' => 'required',
//                    'sent_from' => 'required',
//                ]);
//            }
//        }
//
//
//        $admin =  Admin::first();
//        $delivery_zone = DeliveryZone::find($request->delivery_zone_id);
//        $order = Order::create([
//            'name' => $request->name,
//            'phone' => $request->phone,
//            'address' => $request->address,
//            'order_note' => $request->order_note,
//            'delivery_zone_id' => $request->delivery_zone_id,
//            'status' => 'pending',
//            'subtotal' => 0,
//            'ip_address' => $request->ip(),
//            'delivery_charge' => $delivery_zone->charge,
//            'created_by' => $admin->id,
//            'updated_by' => $admin->id,
//        ]);
//        if (getSetting('payment_method') == 'show' && $request->payment_method_id !== 'cod' && !empty($request->payment_method_id)) {
//            $order->payment_method_id = $request->payment_method_id;
//            $order->trxid = $request->trxid;
//            $order->sent_from = $request->sent_from;
//            $order->paid_amount = $request->paid_amount;
//            $order->discount_percent = getSetting('payment_discount');
//            $order->max_discount = getSetting('payment_max_discount');
//        }
//
//        $cart = session()->get('cart', []);
//        $subtotal = 0;
//        $productsWithPivot = [];
//        foreach ($cart as $productId => $quantity) {
//            $product = Product::find($productId);
//            if ($product) {
//                $product->quantity = $product->quantity -$quantity;
//                $product->update();
//                $sub_total = $quantity*$product->price;
//                $productsWithPivot[] = [
//                    'product_id' => $productId,
//                    'order_id' => $order->id,
//                    'quantity' => $quantity,
//                    'price' => $product->price,
//                    'sub_total' => $quantity*$product->price,
//                ];
//                $subtotal += $sub_total;
//            }
//        }
//        DB::table('order_product')->insert($productsWithPivot);
//        $order->subtotal = $subtotal;
//        $order->update();
//        $userIp = $request->ip();
//        $request->session()->put('blocked_ip_' . $userIp, true);
//
//        Session()->put('cart',[]);
//        toastr()->success($order->name.__('global.created_success'),__('global.order').__('global.created'));
//        return redirect(route('success',['id'=>$order->id]));
//    }

}
