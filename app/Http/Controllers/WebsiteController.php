<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Service;
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
}
