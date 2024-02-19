@extends('layouts.master')
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

    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-title"><h6>Personal Info</h6></div>
            <div class="row">
                <div class="col-md-6 mb-4"><label class="m-0">Full name</label>
                    <input type="text" placeholder="First name" required="required"
                           aria-required="true" class="form-control" id="__BVID__196"></div>
                <div class="col-md-6 mb-4"><label class="m-0">Email
                        Address</label> <input type="email" placeholder="Email Address"
                                               class="form-control" id="__BVID__197"></div>
                <div class="col-md-6 mb-4"><label class="m-0">Phone Number</label>
                    <input type="number" disabled="disabled" placeholder="Phone Number"
                           class="form-control" id="__BVID__198"></div>
                <div class="col-md-6 mb-4"><label class="m-0">Alternative Phone
                        Number</label> <input type="number" placeholder="Alternative Phone Number"
                                              class="form-control" id="__BVID__199"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-title"><h6>Pickup Schedule</h6></div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div role="group"
                         class="b-form-btn-label-control dropdown b-form-datepicker form-control"
                         id="__BVID__200__outer_" lang="en-US" aria-labelledby="__BVID__200__value_">
                        <button type="button" aria-haspopup="dialog" aria-expanded="false" class="btn h-auto"
                                id="__BVID__200">
                            <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img"
                                 aria-label="calendar" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor" class="bi-calendar b-icon bi">
                                <g>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                                </g>
                            </svg>
                        </button><!---->
                        <div role="dialog" tabindex="-1" aria-modal="false" class="dropdown-menu"
                             id="__BVID__200__dialog_" aria-labelledby="__BVID__200__value_" style=""><!----></div>
                        <label class="form-control" id="__BVID__200__value_" for="__BVID__200">Monday, February 19,
                            2024</label></div> <!----></div>
                <div class="col-lg-6 mb-3"><select
                        class="form-control custom-select"
                        id="__BVID__203">
                        <option value="" selected="selected" disabled="disabled">-- Select Pick up
                            slot --
                        </option>
                    </select> <!----></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-title"><h6>Delivery Schedule</h6></div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div id="delivery_date-datepicker__outer_" role="group" aria-disabled="true"
                         aria-labelledby="delivery_date-datepicker__value_"
                         class="b-form-btn-label-control dropdown b-form-datepicker form-control" lang="en-US">
                        <button id="delivery_date-datepicker" type="button" disabled="disabled" aria-haspopup="dialog"
                                aria-expanded="false" class="btn h-auto">
                            <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img"
                                 aria-label="calendar" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="currentColor" class="bi-calendar b-icon bi">
                                <g>
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                                </g>
                            </svg>
                        </button><!---->
                        <div id="delivery_date-datepicker__dialog_" role="dialog" tabindex="-1" aria-modal="false"
                             aria-labelledby="delivery_date-datepicker__value_" class="dropdown-menu"><!----></div>
                        <label id="delivery_date-datepicker__value_" for="delivery_date-datepicker"
                               class="form-control text-muted">No date selected</label></div> <!----></div>
                <div class="col-lg-6 mb-3"><select disabled="disabled"
                                                   class="form-control custom-select"
                                                   id="__BVID__212">
                        <option value="" selected="selected" disabled="disabled">-- Select delivery
                            slot --
                        </option>
                    </select> <!----></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-title"><h6>Address</h6></div>
            <div class="row">
                <div class="col-12 mb-4"><select class="form-control">
                        <option value="" selected="selected" disabled="disabled">Select Address
                        </option>
                        <option id="newAddress" value="new">
                            Add New
                        </option>
                    </select> <!----></div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-title"><h6>Your address</h6></div>
            <div class="row"><!----></div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="form-title"><h6>Additional Instruction:</h6></div>
            <div class="row">
                <div class="col-12 mb-4"><textarea
                        placeholder="For e.g. Call before delivery"
                        rows="2" wrap="soft" class="form-control"
                        type="date" id="__BVID__204"></textarea></div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="form-title"><h6>Payment Method</h6></div>
            <div class="row">
                <div class="col-md-8 cod mb-4 d-flex align-items-center">
                    <div class="payment-method-radio"><input id="radioCash"
                                                             type="radio" value="cashOnDelivery">
                        <label for="radioCash">
                            <div class="payment-method"><img
                                    src="/images/cash-on-delivery.svg"
                                    height="50" alt="">
                                <div class="mt-2"><h6 class="m-0 p-0"><strong
                                        >Cash on Delivery</strong></h6></div>
                            </div>
                        </label></div>
                    <div class="payment-method-radio flex-shrink-0"><input
                            id="radioStripe"
                            type="radio"
                            value="stripe"> <label
                            for="radioStripe">
                            <div class="payment-method"><img
                                    src="/images/stripe.png" height="42"
                                    alt="">
                                <div><h6 class="m-0 p-0"><strong
                                        >Pay Online</strong></h6></div>
                            </div>
                        </label></div>
                </div>
                <div class="col-md-4 cod mb-4 pt-4">
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary h-46 w-100">
                            Place Order
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
