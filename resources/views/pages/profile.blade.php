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
                        <h1 class="display-4 text-primary">Profile</h1>
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
                <h4>My Profile</h4>
                <hr>
                <form action="" method="post">
                    @csrf
                    <div class="row gy-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input class="form-control" name="first_name" id="first_name" value="{{$user->first_name}}" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input class="form-control" name="last_name" id="last_name" value="{{$user->last_name}}" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" name="email" id="email" value="{{$user->email}}" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input class="form-control" name="mobile" id="mobile" value="{{$user->mobile}}" placeholder="Enter mobile number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control btn btn-success" type="submit" value="Update Profile">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
