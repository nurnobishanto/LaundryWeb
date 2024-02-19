<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Area;
use App\Models\Customer;
use App\Models\Media;
use App\Models\Order;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Variant;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $data =  array();
        $data['services'] = Service::all();
        //return $data;
        return view('pages.home', $data);
    }
    public function service($id){
        $data =  array();
        $service = Service::find($id);
        $data['service'] = $service;
        //return $service->variants;
        return view('pages.service', $data);
    }
    public function about(){
        $data =  array();
        $data['page'] = Setting::find(4);
        return view('pages.page', $data);
    }
    public function contact(){
        $data =  array();
        $data['page'] = Setting::find(3);
        return view('pages.page', $data);
    }
    public function terms(){
        $data =  array();
        $data['page'] = Setting::find(2);
        return view('pages.page', $data);
    }
    public function privacy(){
        $data =  array();
        $data['page'] = Setting::find(1);
        return view('pages.page', $data);
    }
    public function profile(){
        $data =  array();
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $data['user'] = auth()->user();
        $data['areas'] = Area::all();
        $data['addresses'] = Address::where('customer_id',$customer->id)->get();
        $data['orders'] = Order::where('customer_id',$customer->id)->get();
        return view('pages.profile', $data);
    }
    public function my_address(){
        $data =  array();
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $data['user'] = auth()->user();
        $data['areas'] = Area::all();
        $data['addresses'] = Address::where('customer_id',$customer->id)->get();
        return view('pages.my-address', $data);
    }
    public function my_orders(){
        $data =  array();
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $data['orders'] = Order::where('customer_id',$customer->id)->get();
        return view('pages.my_orders', $data);
    }
    public function checkout(){
        $data =  array();
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        $data['user'] = auth()->user();
        $data['addresses'] = Address::where('customer_id',$customer->id)->get();

        return view('pages.checkout', $data);
    }
    public function add_address(Request $request){
        $customer = Customer::where('user_id',auth()->user()->id)->first();
        Address::create([
            'customer_id' => $customer->id,
            'address_name' => $request->address_name,
            'area' => $request->area,
            'flat_no' => $request->flat_no,
            'house_no' => $request->house_no,
            'block' => $request->block,
            'road_no' => $request->road_no,
        ]);
        return redirect()->back();
    }
}
