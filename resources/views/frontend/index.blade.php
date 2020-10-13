@extends('layouts.templatefront')

@section('content')

    <!--============ Infotechno Hero Start ============-->
    <div class="processing-hero processing-hero-bg">
        <div class="container">
            <div class="row align-items-center">
                <!--baseline-->
                <div class="col-lg-8 col-md-7">
                    <div class="processing-hero-text wow move-up">
                        <h6>Cambridge College Ikeja</h6>
                        <h6>The Best A Level College in Nigeria</h6>
                        <h1 class="text-white font-weight--reguler mb-15" style="font-size: 40px;">We inculcate in our students <span class="text-color-secondary">skills acquisition</span> with <span class="text-color-secondary">academic</span> activities to help achieve excellence in A Levels.</h1>
                        <div class="hero-button mt-30">
                            <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Dig deeper now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="processing-hero-images-wrap wow move-up">
                        <div class="processing-hero-images section-space--mt_80">
                            <div class="inner-img-one">
                                <img class="img-fluid worldRotate" src="/frontend/assets/images/hero/mitech-slider-cybersecurity-global-image.png" alt="">
                            </div>{{-- 
                            <div class="inner-img-two">
                                <img class="img-fluid" src="/frontend/assets/images/hero/pic1.png" alt="">
                            </div> --}}
                            <div class="processing-hero-images">
                                <img class="img-fluid" src="/frontend/assets/images/hero/pic1.png" alt="" width="90%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ Infotechno Hero End ============-->

    <!--============ Cybersecurity Hero Start ============-->
    {{-- <div class="processing-hero processing-hero-bg processing-hero-bg__color ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--baseline-->
                <div class="col-lg-6 col-md-7">
                    <div class="processing-hero-text cybersecurity-hero-text wow move-up">
                        <h6>At Cambridge College Ikeja </h6>
                        <h3 class="text-white font-weight--reguler mb-30">We inculcate in our students <span class="text-color-secondary">skills acquisition</span> with <span class="text-color-secondary">academic</span> activities to raise world-class products</h3>
                        <div class="hero-button mt-30">
                            <a href="#" class="ht-btn ht-btn-md">Dig deeper now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="processing-hero-images-wrap wow move-up">
                        <div class="processing-hero-images section-space--mt_80">
                            <div class="inner-img-one">
                                <img class="img-fluid worldRotate" src="/frontend/assets/images/hero/mitech-slider-cybersecurity-global-image.png" alt="">
                            </div>
                            <div class="inner-img-two">
                                <img class="img-fluid  ml-5 " src="/frontend/assets/images/hero/pic1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--============ Cybersecurity Hero End ============-->

        <div class="section-space--ptb_100 infotechno-section-bg-01">

            <div class="our-experience-wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="section-title small-mb__40 tablet-mb__40">
                                {{-- <h6 class="section-sub-title mb-20">Our company</h6> --}}
                                <h3 class="heading">Our <span class="text-color-primary">History</span></h3>
                                <p class="text mt-20">{!! Str::limit(nl2br($about->body), 700) !!}</p>

                                <div class="sider-title-button-box mt-30">
                                    <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Find out more</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-5 align-items-center">
                            <div class="rv-video-section align-items-center p-2">
                                <img src="/frontend/assets/images/cambridge/animat-lightbulb-color.gif" class="img-fluid">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 128 128"><defs><linearGradient id="linear-gradient" x1="53" y1="105.07" x2="53" y2="1" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#7aa8d7"/><stop offset="1" stop-color="#96c8ea"/></linearGradient><linearGradient id="linear-gradient-2" x1="53" y1="97" x2="53" y2="9" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#dde1e8"/><stop offset="1" stop-color="#f3f4f5"/></linearGradient><linearGradient id="linear-gradient-3" x1="96" y1="127" x2="96" y2="119" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9b756d"/><stop offset="1" stop-color="#bc9388"/></linearGradient><linearGradient id="linear-gradient-4" y1="61" y2="53" xlink:href="#linear-gradient-3"/><linearGradient id="linear-gradient-5" x1="96" y1="119" x2="96" y2="61" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9dd5df"/><stop offset="1" stop-color="#c3e1f5"/></linearGradient><linearGradient id="linear-gradient-6" x1="96.01" y1="92" x2="96.01" y2="77" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#d1a788"/><stop offset="1" stop-color="#f2d3b8"/></linearGradient><linearGradient id="linear-gradient-7" x1="96" y1="119" x2="96" y2="99" xlink:href="#linear-gradient-6"/><style>.cls-7{fill:#8a6762}.cls-13{fill:#47566a}</style></defs><g id="Waiting"><path d="M105 53A52 52 0 001 53c0 36.63 37.11 62 71.24 48.32A52 52 0 00105 53z" fill="url(#linear-gradient)"/><path d="M72.25 101.3c-36 14-72.9-13.92-71.2-50.24a52 52 0 0032.7 46.24 52.15 52.15 0 0038.48 0A52 52 0 00105 51.08a52 52 0 01-32.75 50.22z" fill="#5b8dc9"/><path d="M97 53a44 44 0 10-41.85 44A44 44 0 0097 53z" fill="url(#linear-gradient-2)"/><path d="M97 55a44 44 0 00-87.9 0C7.59 30.94 27.28 9 53 9s45.41 21.91 44 46z" fill="#c7cdd8"/><path fill="url(#linear-gradient-3)" d="M67 119h58v8H67z"/><path fill="url(#linear-gradient-4)" d="M67 53h58v8H67z"/><path class="cls-7" d="M67 58h58v3H67zM67 124h58v3H67z"/><path d="M122 71.46V61H70v10.46a12.58 12.58 0 004.68 9.84L85.6 90l-10.92 8.7a12.58 12.58 0 00-4.68 9.84V119h52v-10.46a12.58 12.58 0 00-4.68-9.84L106.4 90l10.92-8.7a12.58 12.58 0 004.68-9.84z" fill="url(#linear-gradient-5)"/><path fill="#77cacb" d="M70 115h52v4H70z"/><path d="M78.92 77a64.74 64.74 0 0034.17 0C96.66 90.09 97 89.36 96 92c-1-2.73-.92-2.12-17.08-15z" fill="url(#linear-gradient-6)"/><path fill="url(#linear-gradient-7)" d="M116 119H76l20-20 20 20z"/><path d="M116 119H76c11-5.32 28.92-5.35 40 0z" fill="#cba07a"/><path class="cls-13" d="M123 71.46V62h2a1 1 0 001-1v-8a1 1 0 00-1-1h-19A53 53 0 000 53c0 36.31 35.87 61.89 70.1 50.2-1.4 3.3-1.1 4.55-1.1 14.8h-2a1 1 0 00-1 1v8a1 1 0 001 1h58a1 1 0 001-1v-8a1 1 0 00-1-1h-2v-9.44a13.66 13.66 0 00-5-10.65L108 90l10-7.91a13.66 13.66 0 005-10.63zM124 60H68v-6h56zm-57 2h2v9.44a13.66 13.66 0 005 10.65l5.7 4.55C51.87 108.81 10 89.1 10 53a43 43 0 0186-1H67a1 1 0 00-1 1v8a1 1 0 001 1zM2 53a51 51 0 01102-1h-6a45 45 0 00-90 1c0 38 44.21 58.66 73.39 34.94L84 90c-10.78 8.59-10.89 8.47-12.33 10.46C38.43 113.55 2 89 2 53zm122 73H68v-6h56zM96 89.78c-1-1.47-.83-1.14-12.9-10.76a65.57 65.57 0 0025.81 0C96.5 88.91 96.94 88.4 96 89.78zm0 10.66L113.54 118H78.46zm20.69-19.94c-11.79 9.39-11.31 8.8-11.31 9.5s-.43.15 11.31 9.5a11.61 11.61 0 014.29 9v9.5h-4.56L96.9 98.46c.17-.33.12.06.12-6.27.82-2.1.44-1.44 16.71-14.39a1 1 0 00-.91-1.79 63.75 63.75 0 01-33.63 0 1 1 0 00-.91 1.79C94.49 90.71 94.16 90.09 95 92.19V98c0 .83 2.59-2-19.4 20H71v-9.44a11.61 11.61 0 014.29-9l10.93-8.7a1 1 0 000-1.6L75.31 80.5a11.61 11.61 0 01-4.29-9V62h50v9.44a11.61 11.61 0 01-4.33 9.06z"/><path class="cls-13" d="M54 15v-2a1 1 0 00-2 0v2a1 1 0 002 0zM52 91v2a1 1 0 002 0v-2a1 1 0 00-2 0zM15 52h-2a1 1 0 000 2h2a1 1 0 000-2zM33.5 19.22a1 1 0 00-1-1.73 1 1 0 001 1.73zM73.5 88.51a1 1 0 00-1-1.74 1 1 0 001 1.74zM72.5 19.22a1 1 0 001-1.73 1 1 0 00-1 1.73zM33.5 86.77a1 1 0 00-1 1.74 1 1 0 001-1.74zM88.14 33.87a1 1 0 00-1-1.74 1 1 0 001 1.74zM17.86 72.13a1 1 0 001 1.74 1 1 0 00-1-1.74zM18.86 32.13a1 1 0 00-1 1.74 1 1 0 001-1.74zM57 52h-2.27c-1-1.72-.71 4.12-.71-29a1 1 0 00-2 0v28.27c-1.72 1 3.58.71-25 .71a1 1 0 000 2c28.61 0 23.25-.31 25 .71V58a1 1 0 002 0v-3.27a1.86 1.86 0 00.71-.71H57A1 1 0 0057 52z"/></g></svg> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!--===========  feature-images-wrapper  Start =============-->
    <div class="feature-images-wrapper section-space--ptb_100 row-separators-wrap">
        <div class="wavify-wrapper">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wavify-item">
                <path class="feel-the-wave" d="M 0 179.97 C 190.3 161.84 190.3 161.84 380.6 170.905 C 570.9000000000001 179.97 570.9000000000001 179.97 761.2 147.551 C 951.5 115.132 951.5 115.132 1141.8 118.065 C 1332.1 120.998 1332.1 120.998 1522.4 92.748 C 1712.7000000000003 64.498 1712.7000000000003 64.498 1903 132.94 L 1903 499 L 0 499 Z" fill="rgba(224,238,255,0.5)"></path>
                <path class="feel-the-wave-two" d="M 0 137.473 C 237.875 103.719 237.875 103.719 475.75 120.596 C 713.625 137.473 713.625 137.473 951.5 130.753 C 1189.375 124.032 1189.375 124.032 1427.25 158.603 C 1665.125 193.175 1665.125 193.175 1903 130.753 L 1903 499 L 0 499 Z" fill="rgba(224,238,255,0.4)"></path>
            </svg>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_30">
                        <h3 class="heading">Our <span class="text-color-primary"> Programs</span></h3><br>
                        <h6 class="text">With a well curated curriculum, our A Level programme is the best in Nigeria.</h6>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="feature-images__four">
                <div class=" row">
                    @foreach($programs as $program)
                        <div class="col-lg-4 col-md-6">
                            <div class="ht-box-icon style-02 single-svg-icon-box">
                                <div class="icon-box-wrap">
                                    <div class="icon">
                                        <img class="img-fulid" src="/frontend/assets/images/icons/mitech-box-image-style-05-image-01-60x60.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h5 class="heading">{{ $program->name }} </h5>
                                        <div class="text">{{ $program->description }}</div>
                                        <div class="feature-btn">
                                            <a href="{{ route('frontend.program.show', $program->path()) }}">
                                                <span class="button-text">Discover now</span>
                                                <i class="far fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach     
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->


    <!--===========  Our Company History Start =============-->

    <div class="our-company-history section-space--ptb_100">
        <div class="container-fluid">
            <div class="grid-wrapper">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title mb-20">Cambridge College Ikeja</h6>
                            <h3 class="heading">We’ve been successful <br> for over <span class="text-color-primary"> 20 years</span> and we are known as the <br> Top A Levels school <br> in Lagos and Nigeria as a whole.</h3>

                                <p class="text mt-30" style="font-size: 20px;">Cambridge College is full of exceptional students who believe they can make meaningful contributions to society – and they can. We are more than two decades in existence and have produced several first class alumni who have either graduated or are presently in different fields of studies in Ivy league universities around the globe.</p>

                                <div class="inner-button-box section-space--mt_60">
                                    <a href="{{ route('frontend.why') }}" class="ht-btn ht-btn-md">Find out more</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-video-section">

                        <div class="ht-banner-01 ">
                            <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="/frontend/assets/images/cambridge/1.jpg" alt="">
                        </div>

                        <div class="ht-banner-02">
                            <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="/frontend/assets/images/cambridge/2.jpg" alt="">
                        </div>

                        <div class="main-video-box video-popup">
                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link  mt-30"> --}}
                                <div class="single-popup-wrap">
                                    <img class="img-fluid border-radus-5" src="/frontend/assets/images/cambridge/5.jpg" alt="">
                                    <div class="ht-popup-video video-button">
                                        <div class="video-mark">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                        </div>
                                        <div class="video-button__two">
                                            <div class="video-play">
                                                <span class="video-play-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>


                        <div class="ht-banner-03">
                            <img class="img-fluid border-radus-5 animation_images three wow fadeInDown" src="/frontend/assets/images/cambridge/4.jpg" alt="">
                        </div>

                        <div class="ht-banner-04">
                            <img class="img-fluid border-radus-5 animation_images four wow fadeInDown" src="/frontend/assets/images/cambridge/3.jpg" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  Our Company History Start  End =============-->


    <!--====================  Contact us Section Start ====================-->
    <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading text-white">Obtain more information about A Levels in Nigeria. </h3>

                        <div class="sub-heading text-white">We’re available for 24 hours a day!<br>Contact to require a detailed analysis and assessment of your plan.</div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-info-two text-center">
                            <div class="icon">
                                <span class="fal fa-phone"></span>
                            </div>
                            <h6 class="heading font-weight--reguler">Reach out now!</h6>
                            <h5 class="call-us">
                                <a href="tel:+2347055555801">+2347 05 555 5801</a>, 
                                <a href="tel:+2347055555802">+2347 05 555 5802</a>, 
                                <a href="tel:+2348030961260"> +2348 03 096 1260,</a>
                            </h5>
                            <div class="contact-us-button mt-20">
                                {{-- <a href="#" class="btn btn--secondary">Contact us</a> --}}
                            </div>
                        </div>
						
						<div class="contact-info-two text-center">
                            <div class="icon">
                                <span class="fal fa-envelope"></span>
                            </div>
                            <h6 class="heading font-weight--reguler">Send Us a Message</h6>
                            <h5 class="call-us"><a href="mailto:info@cambridgecollegeikeja.com">info@cambridgecollegeikeja.com</a></h5>
                            <div class="contact-us-button mt-20">
                                <a href="{{ route('frontend.contact') }}" class="btn btn--secondary">Contact us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->
    </div>

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="tabs-wrapper  section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">Discover Cambridge College Ikeja</h6>
                        <h3 class="section-title">We have these to say <span class="text-color-primary">from the best A level School in Nigeria!</span> </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ht-tab-wrap">
                    <div class="row">
                        <div class="col-12 text-center wow move-up ">
                            <ul class="nav justify-content-center ht-tab-menu" role="tablist">
                                <li class="tab__item nav-item active">
                                    <a class="nav-link active" id="nav-tab1" data-toggle="tab" href="#history-tab" role="tab" aria-selected="true">Director's Welcome</a>
                                </li>
                                <li class="tab__item nav-item">
                                    <a class="nav-link" id="nav-tab2" data-toggle="tab" href="#mission-tab" role="tab" aria-selected="false">Principal's Message</a>
                                </li>
                                <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#support-tab" role="tab" aria-selected="false">Co-ordinator's Message</a>
                                </li>
                                {{-- <li class="tab__item nav-item ">
                                    <a class="nav-link" id="nav-tab5" data-toggle="tab" href="#awards-tab" role="tab" aria-selected="false">Our awards</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content ht-tab__content wow move-up">

                        <div class="tab-pane fade show active" id="history-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="/frontend/assets/images/team/team-member-01-370x455.jpg" alt="">
                                                    {{-- <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                <span class="video-play-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($director->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="mission-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="/frontend/assets/images/team/team-member-01-370x455.jpg" alt="">
                                                    {{-- <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                <span class="video-play-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($principal->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="support-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            {{-- <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link"> --}}
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="/frontend/assets/images/team/team-member-01-370x455.jpg" alt="">
                                                    {{-- <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                <span class="video-play-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            {{-- </a> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">
                                                {!! nl2br($coordinator->body) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="tab-pane fade" id="awards-tab" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">
                                    <div class="col-lg-6 ">
                                        <div class="tab-history-image video-popup mt-30">
                                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="video-link">
                                                <div class="single-popup-wrap">
                                                    <img class="img-fluid" src="/frontend/assets/images/bg/home-processing-video-intro-slider-slide-01-image-01-570x350.jpg" alt="">
                                                    <div class="ht-popup-video video-button">
                                                        <div class="video-mark">
                                                            <div class="wave-pulse wave-pulse-1"></div>
                                                            <div class="wave-pulse wave-pulse-2"></div>
                                                        </div>
                                                        <div class="video-button__two">
                                                            <div class="video-play">
                                                                <span class="video-play-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 offset-lg-1 ">
                                        <div class="tab-content-inner  mt-30">
                                            <div class="text mb-30">We’re available for 8 hours a day! <br>Contact to require a detailed analysis and assessment of your plan.</div>
                                            <ul class="check-list section-space--mb_40">
                                                <li class="list-item">Receive real-time business analytics </li>
                                                <li class="list-item">Cross-browser Compatible Design </li>
                                                <li class="list-item">Completely Gutenberg Ready </li>
                                                <li class="list-item">Highly Responsive Tools </li>
                                            </ul>

                                            <div class="tab-button">
                                                <a class="btn-text" href="#">
                                                    <span class="button-text">Let's get started <i class="far fa-long-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== Tabs Wrapper End ======== -->
    <!--===========  feature-large-images-wrapper  End =============-->


    <!--====================  testimonial section ====================-->
    <div class="testimonial-slider-area section-space--ptb_100 slayouts-section-wrap layout-section-bg section-space--pt_80">
    {{-- <div class="testimonial-slider-area section-space--ptb_100 row-separators-wrap bg-primary 1separators-space" style="background: #072b83;"> --}}
        {{-- <div class="constellation-wrapper">
            <div id="particles-js"><canvas class="particles-js-canvas-el" width="1903" height="952" style="width: 100%; height: 100%;"></canvas></div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Alumni Testimonials</h6>
                        <h3 class="heading">What do people praise about <span class="text-primary"> Cambridge College Ikeja?</span></h3>
                    </div>
                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                @foreach($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="testimonial-slider__one wow move-up">

                                            <div class="testimonial-slider--info">
                                                <div class="testimonial-slider__media">
                                                    <img src="{{$testimonial->avatar ? json_decode($testimonial->avatar)->secure_url : '/frontend/assets/images/testimonial/reply-comm.jpg' }}" class="img-fluid" alt="">
                                                </div>

                                                <div class="testimonial-slider__author">
                                                    <div class="testimonial-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="author-info">
                                                        <h6 class="name">{{ $testimonial->name }}</h6><br>
                                                        <span class="designation">{{ $testimonial->title }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="testimonial-slider__text small" style="font-size: 15px;">{{ $testimonial->body }}</div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial section  ====================-->

@endsection