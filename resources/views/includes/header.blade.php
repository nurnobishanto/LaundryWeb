
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light">
    <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
            <!-- Default Logo -->
            <a class="navbar-brand" href="{{route('home')}}" aria-label="{{$webSetting->title??'ASLaundry'}}">
                @if($webSetting->logo)
                <img class="navbar-brand-logo" src="{{env('APP_STORAGE_URL').$logo->path}}" alt="Image Description">
                @else
                <h5>{{$webSetting->title??'ASLaundry'}}</h5>
                @endif
            </a>
            <!-- End Default Logo -->

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
                <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
            </button>
            <!-- End Toggler -->

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-absolute-top-scroller">
                    <ul class="navbar-nav">
                        <!-- Landings -->
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('home')}}" role="button" aria-expanded="false">Home</a></li>
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('home')}}#how-it-work" role="button" aria-expanded="false">How We Work</a></li>
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('home')}}#services" role="button" aria-expanded="false">Our Services</a></li>
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('home')}}#faq" role="button" aria-expanded="false">FAQ</a></li>
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('about')}}" role="button" aria-expanded="false">About</a></li>
                        <li class="nav-item"> <a id="" class="nav-link " aria-current="page" href="{{route('contact')}}" role="button" aria-expanded="false">Contact</a></li>
                        <!-- End Landings -->

                        <li class="nav-divider"></li>
                        @if(auth()->check())
                            <li class="hs-has-sub-menu nav-item">
                                <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button" aria-expanded="false">{{auth()->user()->first_name}}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <!-- Mega Menu -->
                                <div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 12rem;">
                                    <a class="dropdown-item " href="{{route('profile')}}"> Profile</a>
                                    <a class="dropdown-item " href="{{route('my_address')}}">Address</a>
                                    <a class="dropdown-item " href="{{route('my_orders')}}">My Orders</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                </div>
                                <!-- End Mega Menu -->
                            </li>

                        @else
                        <!-- Log in -->
                        <li class="nav-item">
                            <a class="js-animation-link btn btn-ghost-secondary btn-no-focus me-2 me-lg-0" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal" data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormLogin",
                             "groupName": "idForm"
                           }'>Log in</a>

                            <a class="js-animation-link d-lg-none btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal" data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>
                        <!-- End Log in -->

                        <!-- Sign up -->
                        <li class="nav-item">
                            <a class="js-animation-link d-none d-lg-inline-block btn btn-primary" href="javascript:;" role="button" data-bs-toggle="modal" data-bs-target="#signupModal" data-hs-show-animation-options='{
                             "targetSelector": "#signupModalFormSignup",
                             "groupName": "idForm"
                           }'>
                                <i class="bi-person-circle me-1"></i> Sign up
                            </a>
                        </li>
                        <!-- End Sign up -->

                        @endif
                    </ul>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </div>
</header>
