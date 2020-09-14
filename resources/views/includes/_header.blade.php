    <!--====================  header area ====================-->
    <div class="header-area bg-white header-sticky only-mobile-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{ route('frontend.index') }}">
                                <img src="/frontend/assets/images/logo/logo-cci.png" class="img-fluid my-3" alt="">
                            </a>
                        </div>

                        <div class="header-right flexible-image-slider-wrap">

                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <!-- Header Search Form -->
                                <div class="header-search-form d-md-none d-block">
                                    <form action="#" class="search-form-top">
                                        <input class="search-field" type="text" placeholder="Search…">
                                        <button class="search-submit">
                                            <i class="search-btn-icon fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>

                                <!-- Header Top Info -->
                                <div class="swiper-container header-top-info-slider-werap top-info-slider__container mt-2">
                                    <div class="swiper-wrapper header-top-info-inner">
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">+2347 05 555 5801</h6>
                                                    <div class="info-sub-title">info@cambridgeikeja.com</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-map-marker-alt"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">64 Adekunle Fajuyi Way G.R.A.</h6>
                                                    <div class="info-sub-title">Ikeja, Lagos</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-clock"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">8:00AM - 4:00PM</h6>
                                                    <div class="info-sub-title">Monday to Friday</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="info-item">
                                                <div class="info-icon">
                                                    <span class="fa fa-comment-alt-lines"></span>
                                                </div>
                                                <div class="info-content">
                                                    <h6 class="info-title">Online 24/7</h6>
                                                    <div class="info-sub-title">07055555802, 08030961260</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Header Social Networks -->
                                <div class="header-social-networks style-icons">
                                    <div class="inner">
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Twitter" href="https://twitter.com/" data-hover="Twitter" target="_blank">
                                            <i class="social-icon fab fa-twitter"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Facebook" href="https://facebook.com/" data-hover="Facebook" target="_blank">
                                            <i class="social-icon fab fa-facebook-f"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Instagram" href="https://instagram.com/" data-hover="Instagram" target="_blank">
                                            <i class="social-icon fab fa-instagram"></i>
                                        </a>
                                        <a class=" social-link hint--bounce hint--bottom-left" aria-label="Linkedin" href="https://linkedin.com/" data-hover="Linkedin" target="_blank">
                                            <i class="social-icon fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                            <!-- hidden icons menu -->
                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap border-top d-md-block d-none header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-bottom-inner">
                            <div class="header-bottom-left-wrap">
                                <!-- navigation menu -->
                                <div class="header__navigation d-none d-xl-block">
                                    <nav class="navigation-menu">
                                        <ul>
                                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.index') }}"><span>Home</span></a>
                                            </li>
                                            <li class="{{ Request::is('/about') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.about') }}"><span>About us</span></a>
                                            </li>
                                            <li class="{{ Request::is('/why-us') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.why') }}"><span>Why us</span></a>
                                            </li>
                                            <li class="{{ Request::is('/programs*') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.programs') }}"><span>Programs</span></a>
                                            </li>
                                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                                <a href="#"><span>Events</span></a>
                                            </li>
                                            <li class="{{ Request::is('/leadership*') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.leadership') }}"><span>Leadership</span></a>
                                            </li>
                                            <li class="{{ Request::is('/contact-us') ? 'active' : '' }}">
                                                <a href="{{ route('frontend.contact') }}"><span>Contact Us</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="header-search-form">
                                <form action="#" class="search-form-top style-02">
                                    {{-- <input class="search-field" type="text" placeholder="Search…">
                                    <button class="search-submit">
                                        <i class="search-btn-icon fa fa-search"></i>
                                    </button> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--====================  End of header area  ====================-->