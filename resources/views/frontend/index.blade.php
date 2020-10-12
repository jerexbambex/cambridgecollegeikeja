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
                    <div class="row flex-row">
                        <div class="col-lg-5">
                            <div class="section-title small-mb__40 tablet-mb__40">
                                {{-- <h6 class="section-sub-title mb-20">Our company</h6> --}}
                                <h3 class="heading">Our <span class="text-color-primary">History</span></h3>
                                <p class="text mt-20">{!! Str::limit(nl2br($about->body), 700) !!}</p>

                                <div class="sider-title-button-box mt-30">
                                    <a href="{{ route('frontend.about') }}" class="ht-btn ht-btn-md">Find out more</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-5 align-content-center">
                            {{-- <div class="ht-list style-auto-numbered-02"> --}}
                                <img src="/frontend/assets/images/cambridge/history.png" class="img-fluid">
                            {{-- </div> --}}
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