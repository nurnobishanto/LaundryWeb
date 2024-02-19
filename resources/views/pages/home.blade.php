@extends('layouts.master')
@section('seo_meta')
    <title>Home | Ahmadia Shop and Laundry</title>
@endsection
@section('content')
<!-- Hero -->
<div class="bg-soft-primary-light position-relative overflow-hidden">
    <div class="container content-space-t-2 content-space-t-md-3 content-space-b-1 content-space-b-md-1">
        <div class="row mb-5">
            <div class="col-md-7">
                <!-- Heading -->
                <div class="pe-lg-3">
                    <h1 class="display-4 text-primary">Professional Laundry & <span class="text-warning">Dry Cleaning Service</span></h1>
                    <p>We pickup, clean and return your clean clothes in as little as 24 hours</p>
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
<!-- Our Services -->
<div id="services" class="container content-space-t-1 content-space-t-md-2">
    <!-- Heading -->
    <div class="w-lg-65 text-center mx-lg-auto mb-7">
        <h3>Our Services</h3>
    </div>
    <!-- End Heading -->

    <div class="row mb-5 mb-sm-5">
        @foreach($services as $service)
        <div class="col-sm-6 col-lg-4 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card rounded border shadow ">
                <div class="card-body text-center ">
                    <img class=" w-50 rounded mx-auto d-block" src="{{env('APP_STORAGE_URL').$service->thumbnail->path}}" alt="{{$service->name}}">
                    <h5 class="card-title text-center mt-2">{{$service->name}}</h5>
{{--                    <p>{{$service->description}}</p>--}}
                    <a href="{{route('service',['id' => $service->id])}}" class="btn btn-outline-info">Get The Service</a>
                </div>
            </div>
            <!-- End Card -->
        </div>
        @endforeach
    </div>
    <!-- End Row -->

</div>
<!-- End Blog -->

<!-- Step -->
<div class="shape-container">
    <div class="container content-space-t-1 content-space-t-md-3">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-7">
            <h3>How it works</h3>
            <p class="fs-6">With Space, your company can be set up within days. We help with all the talking and walking.</p>
        </div>
        <!-- End Heading -->

        <!-- Step -->
        <ul class="step step-sm step-icon-lg step-centered mb-10">
            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper align-items-center">
              <span class="step-icon step-icon-border">
                <span class="svg-icon text-primary">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="#035A4B" />
                    <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648V2.06648Z" fill="#035A4B" />
                  </svg>

                </span>
              </span>
                    <div class="step-content">
                        <p class="step-title">Submit your documents</p>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper align-items-center">
              <span class="step-icon step-icon-border">
                <span class="svg-icon text-primary">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M4.875 20.75C4.63542 20.75 4.39583 20.6542 4.20417 20.4625L2.2875 18.5458C1.90417 18.1625 1.90417 17.5875 2.2875 17.2042C2.67083 16.8208 3.29375 16.8208 3.62917 17.2042L4.875 18.45L8.0375 15.2875C8.42083 14.9042 8.99583 14.9042 9.37917 15.2875C9.7625 15.6708 9.7625 16.2458 9.37917 16.6292L5.54583 20.4625C5.35417 20.6542 5.11458 20.75 4.875 20.75Z" fill="#035A4B" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 3C3.34315 3 2 4.34315 2 6V11.865C3.04486 11.3127 4.23591 11 5.5 11C9.47412 11 12.7263 14.091 12.9836 18H18.0249L20.3178 20.2929C20.9478 20.9229 22.0249 20.4767 22.0249 19.5858V15L22 15.0098L22 15V6C22 4.34315 20.6569 3 19 3H5ZM6 7C5.44772 7 5 7.44772 5 8C5 8.55228 5.44771 9 6 9H15C15.5523 9 16 8.55228 16 8C16 7.44772 15.5523 7 15 7H6Z" fill="#035A4B" />
                  </svg>

                </span>
              </span>
                    <div class="step-content">
                        <p class="step-title">Sign your company documents</p>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper align-items-center">
              <span class="step-icon step-icon-border">
                <span class="svg-icon text-primary">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z" fill="#035A4B" />
                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z" fill="#035A4B" />
                  </svg>

                </span>
              </span>
                    <div class="step-content">
                        <p class="step-title">Your company is reviewed</p>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
                <div class="step-content-wrapper align-items-center">
              <span class="step-icon step-icon-border">
                <span class="svg-icon text-primary">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="#035A4B" />
                    <path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="#035A4B" />
                  </svg>

                </span>
              </span>
                    <div class="step-content">
                        <p class="step-title">Your company is ready</p>
                    </div>
                </div>
            </li>
            <!-- End Step Item -->
        </ul>
        <!-- End Step -->


    </div>


    <!-- End Shape -->
</div>
<!-- End Step -->




<!-- Contact -->
<div class="container content-space-1 content-space-t-md-3">
    <div class="mx-auto" style="max-width: 37.5rem;">
        <!-- Card -->
        <div class="card card-lg">
            <div class="card-body">
                <!-- Heading -->
                <div class="w-lg-85 text-center mx-lg-auto mb-7">
                    <h4>How can we help?</h4>
                    <p class="fs-6">Need help, have questions or want to suggest a feature? Send us a message here.</p>
                </div>
                <!-- End Heading -->

                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label visually-hidden" for="contactEmail">Your name</label>
                                <input type="text" class="form-control form-control-lg" name="name" id="contactName" placeholder="Your name" aria-label="Your name" required data-msg="Please enter your name.">
                            </div>
                            <!-- End Form -->
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-6">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label visually-hidden" for="contactEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="contactEmail" placeholder="Your email" aria-label="Your email" required data-msg="Please enter a valid email address.">
                            </div>
                            <!-- End Form -->
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-12">
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="form-label visually-hidden" for="contactDetails">Detail</label>
                                <textarea class="form-control form-control-lg" id="contactDetails" rows="5" placeholder="Tell us more about detail" aria-label="Tell us more about detail"></textarea>
                            </div>
                            <!-- End Form -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <div class="d-grid">
                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Card -->
    </div>
</div>
<!-- End Contact -->

<!-- Shape -->
<div class="shape-container">
    <div class="shape shape-bottom text-primary-dark">
        <svg width="3000" height="400" viewBox="0 0 3000 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 400H3000V0L0 400Z" fill="#fff" />
        </svg>
    </div>
</div>
<!-- End Shape -->

<!-- Contact Info -->
<div class="bg-primary-dark">
    <div class="container content-space-b-1 content-space-b-md-3">
        <div class="row col-sm-divider col-divider-light">
            <div class="col-sm-4">
                <!-- Info -->
                <div class="text-center py-sm-5">
              <span class="svg-icon text-white mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="#035A4B" />
                  <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="#035A4B" />
                </svg>

              </span>

                    <h5 class="text-white">Visit us:</h5>
                    <p class="text-white-70 mb-0">153 Williamson Plaza, Maggieberg</p>
                </div>
                <!-- End Info -->
            </div>
            <!-- End Col -->

            <div class="col-sm-4">
                <!-- Info -->
                <div class="text-center py-sm-5">
              <span class="svg-icon text-white mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 21C6 21.6 6.4 22 7 22H17C17.6 22 18 21.6 18 21V20H6V21Z" fill="#035A4B" />
                  <path opacity="0.3" d="M17 2H7C6.4 2 6 2.4 6 3V20H18V3C18 2.4 17.6 2 17 2Z" fill="#035A4B" />
                  <path d="M12 4C11.4 4 11 3.6 11 3V2H13V3C13 3.6 12.6 4 12 4Z" fill="#035A4B" />
                </svg>

              </span>

                    <h5 class="text-white">Call us:</h5>
                    <p class="text-white-70 mb-0">+1 (062) 109-9222</p>
                </div>
                <!-- End Info -->
            </div>
            <!-- End Col -->

            <div class="col-sm-4">
                <!-- Info -->
                <div class="text-center py-sm-5">
              <span class="svg-icon text-white mb-3">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="#035A4B" />
                  <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648V2.06648Z" fill="#035A4B" />
                </svg>

              </span>

                    <h5 class="text-white">Email us:</h5>
                    <p class="text-white-70 mb-0">example@site.com</p>
                </div>
                <!-- End Info -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
</div>
<!-- End Contact Info -->
@endsection
