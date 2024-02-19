<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/space-v2.3.1/landing-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 19:12:45 GMT -->
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Services | Space - Multipurpose Responsive Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

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
                    </div>
                    <!-- End Heading -->

                    <div class="d-grid gap-2">
                        <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{asset('website')}}/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
                        </a>

                        <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLoginWithEmail",
                         "groupName": "idForm"
                       }'>Log in with Email</a>
                    </div>
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

                    <div class="d-grid gap-3">
                        <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="{{asset('website')}}/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
                        </a>

                        <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignupWithEmail",
                         "groupName": "idForm"
                       }'>Sign up with Email</a>

                        <div class="text-center">
                            <p class="small mb-0">By continuing you agree to our <a href="page-terms.html">Terms and Conditions</a></p>
                        </div>
                    </div>
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

            <!-- Footer -->
            <div class="modal-footer d-block text-center py-sm-5">
                <small class="text-cap mb-4">Trusted by the world's best teams</small>

                <div class="w-85 mx-auto">
                    <div class="row justify-content-between">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('website')}}/svg/brands/gitlab-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="{{asset('website')}}/svg/brands/fitbit-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="{{asset('website')}}/svg/brands/flow-xo-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->

                        <div class="col">
                            <img class="img-fluid" src="{{asset('website')}}/svg/brands/layar-gray.svg" alt="Logo">
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
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
</body>

<!-- Mirrored from htmlstream.com/preview/space-v2.3.1/landing-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 19:12:48 GMT -->
</html>
