@extends('layouts.master')
@section('seo_meta')
    <title>Service | Ahmadia Shop and Laundry</title>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-soft-primary-light position-relative overflow-hidden">
        <div class="container content-space-t-1 content-space-t-md-3 ">
            <div class="row ">
                <div class="col-md-6">
                    <!-- Heading -->
                    <div class="pe-lg-3">
                        <h2 class="display-6 text-primary">{{$service->name}}</h2>
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
    <section id="service" class="my-3 my-sm-5 my-md-7">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($service->variants as $variant)
                    <h5>{{$variant->name}}</h5>
                    <hr>
                    <div class="row gy-2 mb-5">
                        @foreach($variant->products as $product)
                            @if($product->service_id == $service->id)
                                <div class="col-md-4 col-sm-6">
                                    <div class="card text-center border">
                                        <img class="img-fluid w-50 mx-auto" src="{{env('APP_STORAGE_URL').$product->thumbnail->path}}">
                                        <div class="card-body">
                                            <h6 class="card-title">{{$product->name}}</h6>
                                            <p>{{$product->description}}</p>
                                            @if($product->discount_price)
                                            <p>Tk.{{$product->discount_price}} <del class="text-danger">Tk.{{$product->price}}</del></p>
                                            @else
                                            <p>Tk.{{$product->price}}</p>
                                            @endif
                                            <button onclick="addToCart({{$product->id}})" class="btn btn-primary btn-sm">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <h6>My Basket</h6>
                    <div class="cart-list"></div>
                    <div class="cart-button"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>

        function getCartInfo() {
            $.ajax({
                type: 'GET',
                url: '/cart/get',
                success: function(response) {
                    console.log(response);
                    if (response.totalItemCount > 0 ) {
                        $('.cart-empty').addClass('d-none')
                        $('.cart-empty').removeClass('d-block')
                        $('.cart-count').text(response.totalItemCount)
                        updateCartInfo(response.cartList, response.totalItemCount, response.subtotal, response.canOrder, response.minimum_order, response.delivery_charge, response.payable_amount)

                    } else {
                        $('.cart-empty').addClass('d-block')
                        $('.cart-empty').removeClass('d-none')

                        $('.cart-list').html('');
                        $('.cart-button').html('');
                        $('.cart-list').html('Cart is empty');
                        $('.cart-count').text(0)

                    }
                },
                error: function(xhr, status, error) {
                    console.log('Status :'+status+', Error: '+error+', xhr:'+xhr)
                }
            });

        }
        function updateCartInfo(cartList, totalItemCount, subtotal, canOrder, minimum_order, delivery_charge, payable_amount) {
            // Update your HTML elements or template here to display the cart information
            // Example: Update a cart table, total count, and subtotal
            $('.cart-list').html('');
            $('.cart-button').html('');
            // Loop through the cartList and append each item to the cart table
            cartList.forEach(function(item) {
                // Customize this based on your HTML structure
                var cartRow = '<li class="list-group-item py-3 ps-0">' +
                    '<div class="row align-items-center">' +
                    '<div class="col-5">' +
                    '<div class="d-flex">' +
                    '<img  src="'+ item.image +'" alt="" class="icon-shape icon-md img-thumbnail w-50">' +
                    '<div class="ms-3">' +
                    '<a href="'+ item.url +'" class="text-inherit">' +
                    '<h6 class="mb-0">'+ item.name +'</h6>' +
                    '</a>' +
                    '<span><small class="text-muted">Tk.'+ item.price +'</small></span>' +
                    '<div class="mt-2 small lh-1">' +
                    ' <a role="button" onclick="removeFromCart(' + item.product_id + ')" class="text-decoration-none text-inherit">Remove</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-5">' +
                    '<div class="input-group input-spinner  ">' +
                    '<input type="button" value="-" class="button-minus  btn btn-danger  btn-sm " onclick="minusFromCart(' + item.product_id + ')" data-field="quantity">' +
                    '<input type="button" disabled step="1" max="10" value="'+ item.quantity +'" name="quantity" class="quantity-field form-control-sm form-input  ">' +
                    '<button type="button" class="button-plus btn btn-success btn-sm " onclick="addToCart(' + item.product_id + ')" data-field="quantity">+</button>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-2 text-lg-end text-start text-md-end col-md-2 p-0">' +
                    '<span class="fw-bold">Tk.'+ item.total +'</span>' +
                    '</div>' +
                    '</div>' +
                    '</li>';

                $('.cart-list').append(cartRow);

            });
            $('.cart-list').append('<div class="text-end fw-bold mt-2 px-3">Sub Total : Tk.<span class="product_sub_total">'+subtotal+'</span></div>');
            $('.cart-list').append('<div class="text-end fw-bold mt-2 px-3">Delivery Charge : Tk.<span class="product_sub_total">'+delivery_charge+'</span></div>');
            $('.cart-list').append('<hr>');
            $('.cart-list').append('<div class="text-end fw-bold mt-2 px-3">Payble Amount : Tk.<span class="product_sub_total">'+payable_amount+'</span></div>');
            if(canOrder){
                $('.cart-button').append(' <div class="d-flex justify-content-between mt-4">' +
                    '<a href="{{route('home')}}" class="btn btn-success">Continue Shopping</a>' +
                    '<a href="{{route('checkout')}}" class="btn btn-danger">Checkout</a>' +
                    '</div>');
            }else {
                $('.cart-button').append(' <div class="d-flex justify-content-between mt-4">' +
                    '<span  class="text-danger">Minimum Order value : '+minimum_order+'</span>' +
                    '</div>');
            }


            updateTotal();

        }

        function removeFromCart(productId){
            $.ajax({
                type: 'DELETE',
                url: '/cart/remove',
                data: { product_id: productId },
                success: function(response) {
                    // Swal.fire({
                    //     title: 'Removed!',
                    //     text: response.message,
                    //     icon: response.status,
                    // })
                    getCartInfo()
                }
            });
        }
        function minusFromCart(productId){
            $.ajax({
                type: 'DELETE',
                url: '/cart/minus',
                data: { product_id: productId },
                success: function(response) {
                    getCartInfo()
                }
            });
        }
        function addToCart(productId){
            $.ajax({
                type: 'POST',
                url: '/cart/add',
                data: { product_id: productId },
                success: function(response) {
                    // Swal.fire({
                    //     title: 'Success!',
                    //     text: response.message,
                    //     icon: response.status,
                    //
                    // })
                    console.log(response);
                    getCartInfo()

                }
            });
        }
        function updateTotal() {
            var subtotal = parseFloat($('.product_sub_total:first').html());
            $('#total_amount').text(subtotal);

        }

        function orderNow(productId){
            $.ajax({
                type: 'POST',
                url: '/cart/add',
                data: { product_id: productId },
                success: function(response) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: response.status,

                    })
                    getCartInfo()
                    updateTotal()
                    window.location.replace("{{route('checkout')}}");
                }
            });
        }

        $(document).ready(function() {
            // Include the CSRF token in the AJAX request headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            getCartInfo();
            updateTotal();


            // Listen for changes in the select element
            $('#delivery_zone_id').on('change', function () {
                updateTotal();
            });

            // Add to Cart
            $('.add-to-cart').click(function() {
                var productId = $(this).data('product-id');
                $.ajax({
                    type: 'POST',
                    url: '/cart/add',
                    data: { product_id: productId },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: response.status,

                        })
                        getCartInfo();

                    }
                });
            });
            var phoneInput = $('#phone');
            var validationMessage = $('#validationMessage');
            var pattern = /^(?:\+8801|8801|01)([3456789]\d{8})$/;
            function validatePhoneNumber() {
                var phoneNumber = phoneInput.val();
                if (pattern.test(phoneNumber)) {
                    validationMessage.text('Valid Bangladeshi phone number').css('color', 'green');
                } else {
                    validationMessage.text('Invalid Bangladeshi phone number').css('color', 'red');
                }
            }
            phoneInput.on('input', validatePhoneNumber);
        });
    </script>


@endsection
