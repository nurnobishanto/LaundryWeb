<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/space-v2.3.1/landing-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 19:12:45 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    @yield('seo_meta')
    @php
        $webSetting =  \App\Models\WebSetting::find(1);
        $logo =  \App\Models\Media::find($webSetting->logo);
        $fav_icon =  \App\Models\Media::find($webSetting->fav_icon);

    @endphp

    <!-- Favicon -->

    <link rel="shortcut icon" href="{{ env('APP_STORAGE_URL') . ($fav_icon->path??'') }}">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('website')}}/css/vendor.min.css">

    <!-- CSS Space Template -->
    <link rel="stylesheet" href="{{asset('website')}}/css/theme.minc619.css?v=1.0">
</head>

<body>
<!-- ========== HEADER ========== -->
@include('includes.header')
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
  @yield('content')
</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- ========== FOOTER ========== -->
@include('includes.footer')
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Sign Up -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-close">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body p-sm-5">
                <!-- Log in -->
                <div id="signupModalFormLogin" style="display: none; opacity: 0;">
                    <!-- Heading -->
                    <div class="text-center mb-7">
                        <h4>Log in</h4>
                        <p>Don't have an account yet?
                            <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>Sign up here</a>
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- End Heading -->

                </div>
                <!-- End Log in -->

                <!-- Log in with Modal -->
                <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
                    <!-- Heading -->
                    <div class="text-center mb-7">
                        <h4>Log in</h4>
                        <p>Don't have an account yet?
                            <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormSignup",
                           "groupName": "idForm"
                         }'>Sign up here</a>
                        </p>
                    </div>
                    <!-- End Heading -->

                    <form class="js-validate needs-validation" novalidate>
                        <!-- Form -->
                        <div class="mb-3">
                            <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                            <span class="invalid-feedback">Please enter a valid email address.</span>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                                <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormResetPassword",
                         "groupName": "idForm"
                       }'>Forgot Password?</a>
                            </div>

                            <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                            <span class="invalid-feedback">Please enter a valid password.</span>
                        </div>
                        <!-- End Form -->

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                        </div>
                    </form>
                </div>
                <!-- End Log in with Modal -->

                <!-- Sign up -->
                <div id="signupModalFormSignup">
                    <!-- Heading -->
                    <div class="text-center mb-7">
                        <h4>Sign up</h4>
                        <p>Already have an account?
                            <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Log in here</a>
                        </p>
                    </div>
                    <!-- End Heading -->

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('Fist Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Sign up -->

                <!-- Sign up with Modal -->
                <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
                    <!-- Heading -->
                    <div class="text-center mb-7">
                        <h4>Sign up</h4>
                        <p>Already have an account?
                            <a class="js-animation-link" href="javascript:;" role="button" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>Log in here</a>
                        </p>
                    </div>
                    <!-- End Heading -->

                    <form class="js-validate need-validate" novalidate>
                        <!-- Form -->
                        <div class="mb-3">
                            <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                            <span class="invalid-feedback">Please enter a valid email address.</span>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-3">
                            <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                            <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                            <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-3" data-hs-validation-validate-class>
                            <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                            <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#signupModalFormSignupPassword">
                            <span class="invalid-feedback">Password does not match the confirm password.</span>
                        </div>
                        <!-- End Form -->

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">Sign up</button>
                        </div>

                        <div class="text-center">
                            <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
                        </div>
                    </form>
                </div>
                <!-- End Sign up with Modal -->

                <!-- Reset Password -->
                <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
                    <!-- Heading -->
                    <div class="text-center mb-7">
                        <h4>Forgot password?</h4>
                        <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
                    </div>
                    <!-- En dHeading -->

                    <form class="js-validate need-validate" novalidate>
                        <div class="mb-3">
                            <!-- Form -->
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>

                                <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                           "targetSelector": "#signupModalFormLogin",
                           "groupName": "idForm"
                         }'>
                                    <i class="bi-chevron-left small me-1"></i> Back to Log in
                                </a>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Reset Password -->
            </div>
            <!-- End Body -->

        </div>
    </div>
</div>

<!-- Go To -->
<a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
         "offsetTop": 700,
         "position": {
           "init": {
             "right": "2rem"
           },
           "show": {
             "bottom": "2rem"
           },
           "hide": {
             "bottom": "-2rem"
           }
         }
       }'>
    <i class="bi-chevron-up"></i>
</a>
<!-- ========== END SECONDARY CONTENTS ========== -->
<!-- Include jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include SweetAlert CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('website')}}/js/vendor.min.js"></script>

<!-- JS Space -->
<script src="{{asset('website')}}/js/theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
    (function() {
        // INITIALIZATION OF MEGA MENU
        // =======================================================
        const megaMenu = new HSMegaMenu('.js-mega-menu', {
            desktop: {
                position: 'left'
            }
        })


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF HEADER
        // =======================================================
        new HSHeader('#header').init()


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
            onSubmit: data => {
                data.event.preventDefault()
                alert('Submited')
            }
        })


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')
    })()
</script>
@yield('js')
</body>

<!-- Mirrored from htmlstream.com/preview/space-v2.3.1/landing-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 19:12:48 GMT -->
</html>
