@extends('layouts.master')
@section('seo_meta')
    <title>My Address</title>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-soft-primary-light position-relative overflow-hidden">
        <div class="container content-space-t-1 content-space-t-md-3 ">
            <div class="row ">
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="pe-lg-3">
                        <h1 class="display-4 text-primary">My Address</h1>
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
            <div class="col-md-12">
                <h5>My Address</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('add_address')}}" method="post">
                            @csrf
                            <div class="row gy-5">
                                <div class="col-12">
                                    <div class="row" role="" aria-label="Basic radio toggle button group">
                                        <div class="col-4">
                                            <input type="radio" class="btn-check form-control" name="address_name" id="btnradio1" value="Home" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary d-block" for="btnradio1">Home</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="address_name" id="btnradio2" value="Office" autocomplete="off">
                                            <label class="btn btn-outline-primary d-block" for="btnradio2">Office</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="radio" class="btn-check" name="address_name" id="btnradio3" value="Others" autocomplete="off">
                                            <label class="btn btn-outline-primary d-block" for="btnradio3">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="area">Select Area</label>
                                    <select class="form-control" name="area" id="area">
                                        @foreach($areas as $area)
                                            <option value="{{$area->name}}">{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3"><input class="form-control" placeholder="Flat" name="flat_no" required></div>
                                <div class="col-3"><input class="form-control" placeholder="House" name="house_no" required></div>
                                <div class="col-3"><input class="form-control" placeholder="Block" name="block" required></div>
                                <div class="col-3"><input class="form-control" placeholder="Road" name="road_no" required></div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-success" value="Add Address">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=" col-md-6">
                        @foreach($addresses as $address)
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h5 class="card-title">Area : {{$address->area}}</h5>
                                    <strong>Address Name: {{$address->address_name}}</strong><br>
                                    <strong>Flat : {{$address->flat_no}}, House: {{$address->house_no}}, Block: {{$address->block}},Road: {{$address->road_no}}</strong>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
