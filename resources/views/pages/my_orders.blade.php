@extends('layouts.master')
@section('seo_meta')
    <title>Profile</title>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-soft-primary-light position-relative overflow-hidden">
        <div class="container content-space-t-1 content-space-t-md-3 ">
            <div class="row ">
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="pe-lg-3">
                        <h1 class="display-4 text-primary">My Orders</h1>
                    </div>
                    <!-- End Heading -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

        </div>

        <!-- SVG Elements -->
        <div class="position-absolute top-0 end-0">
            <img src="{{asset('website')}}/svg/components/shape-3.svg" alt="SVG" width="350">
        </div>
        <div class="position-absolute bottom-0 end-0 me-10">
            <img src="{{asset('website')}}/svg/components/shape-1.svg" alt="SVG" width="200">
        </div>
        <!-- End SVG Elements -->
    </div>
    <!-- End Hero -->

    <div class="container my-3 my-sm-5 my-md-10">



        <div class="row gy-5">


            <div class="col-12">
                <h4>My Orders</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Order AT</th>
                            <th>Pickup Date</th>
                            <th>Delivery Date</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->prefix.$order->order_code}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->pick_date}}</td>
                                <td>{{$order->delivery_date}}</td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->order_status}}</td>

                                <td>#</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
