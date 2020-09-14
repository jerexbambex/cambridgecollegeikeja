<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cambridge College Ikeja</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('includes._head')

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('includes._header')

    <div class="site-wrapper-reveal">

        @yield('content')


        @include('includes._footer')

        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="{{ route('frontend.index') }}">
                                        <img src="assets/images/logo/logo-dark.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-right">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="">
                                <a href="{{ route('frontend.index') }}">Home</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.about') }}">About us</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.why') }}"><span>Why us</span></a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.programs') }}"><span>Programs</span></a>
                            </li>
                            <li class="">
                                <a href="#">Events</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.leadership') }}">Leadership</a>
                            </li>
                            <li class="">
                                <a href="{{ route('frontend.contact') }}">Contact us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->

    </div>



    @include('includes._scripts')
</body>

</html>