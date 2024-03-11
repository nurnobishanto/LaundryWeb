@extends('layouts.master')
@section('seo_meta')
    <title>Checkout</title>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-soft-primary-light position-relative overflow-hidden">
        <div class="container content-space-t-1 content-space-t-md-3 ">
            <div class="row ">
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="pe-lg-3">
                        <h1 class="display-4 text-primary">Checkout</h1>
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

    <div class="container my-3 my-sm-5">
        <form action="{{route('orderConfirm')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="full_name">Full Name</label>
                    <input type="text" value="{{$user->first_name." ".$user->last_name}}" class="form-control" id="full_name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
            </div>

            <div class="row mt-5">
                <div class="form-group col-md-6">
                    <label for="pick_date">Pick-up Date</label>
                    <input type="date" class="form-control" name="pick_date" id="pick_date" min="<?php echo date('Y-m-d'); ?>" onchange="updateTimeOptions('pick_time', this.value); updateMinDeliveryDate(this.value);" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="delivery_date">Delivery Date</label>
                    <input type="date" class="form-control" id="delivery_date"  name="delivery_date" required>
                </div>
            </div>

            <div class="row  mt-5">
                <div class="form-group col-md-6">
                    <label for="pick_time">Pick-up Time</label>
                    <select class="form-control" id="pick_time" name="pick_hour" required>
                        <!-- Options will be dynamically updated based on pick_date -->
                        <option value="">9:00AM - 12:00AM</option>
                        <option value="">2:00PM - 4:00PM</option>
                        <option value="">6:00PM - 8:00PM</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="delivery_time">Delivery Time</label>
                    <select class="form-control" id="delivery_time" name="delivery_hour" required>
                        <!-- Options will be dynamically updated based on delivery_date -->
                        <option value="">9:00AM - 12:00AM</option>
                        <option value="">2:00PM - 4:00PM</option>
                        <option value="">6:00PM - 8:00PM</option>
                    </select>
                </div>
            </div>

            <div class="form-group  mt-5">
                <label for="address_id">Address</label>
                <select  class="form-control" name="address_id" id="address_id" required>
                    <option value="" selected disabled>Select an address</option>
                    @foreach($addresses as $address)
                    <option value="{{$address->id}}">{{$address->area}} - {{$address->address_name}}(Flat : {{$address->flat_no}}, House: {{$address->house_no}}, Block: {{$address->block}},Road: {{$address->road_no}})</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary  my-5 ">Place Order</button>
        </form>
    </div>
@endsection
@section('js')
    <script>
        // Function to update time options based on the selected date
        function updateTimeOptions(selectId, selectedDate) {
            // Clear existing options
            $('#' + selectId).empty();

            // Get current date and time
            const currentDate = new Date();
            let currentTime = currentDate.getHours() + ':' + currentDate.getMinutes();

            // Set minimum time for the current date
            if (selectedDate === currentDate.toISOString().split('T')[0]) {
                const currentHour = currentDate.getHours();
                const currentMinute = currentDate.getMinutes() < 30 ? '30' : '00';
                currentTime = currentHour + ':' + currentMinute;
            }

            // Add options based on the selected date
            for (let i = 8; i < 20; i++) {
                for (let j = 0; j < 2; j++) {
                    const time = (i < 10 ? '0' : '') + i + ':' + (j === 0 ? '00' : '30');
                    if (selectedDate !== currentDate.toISOString().split('T')[0] || time > currentTime) {
                        $('#' + selectId).append($('<option>', {
                            value: time,
                            text: time
                        }));
                    }
                }
            }
        }

        // Function to update minimum delivery date based on the pick-up date
        function updateMinDeliveryDate(pickDate) {
            const nextDay = new Date(pickDate);
            nextDay.setDate(nextDay.getDate() + 1);
            const formattedNextDay = nextDay.toISOString().split('T')[0];
            $('#delivery_date').attr('min', formattedNextDay);

        }

        // Initialize time options based on current date for pick-up and delivery
        //updateTimeOptions('pick_time', $('#pick_date').val());
        //updateTimeOptions('delivery_time', $('#delivery_date').val());
    </script>

@endsection
