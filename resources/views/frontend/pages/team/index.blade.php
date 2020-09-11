@extends('layouts.templatefront')

@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Leadership</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Leadership</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-space--mb_60 text-center">
                            <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                        </div>
                    </div>
                </div>
                <div class="row ht-team-member-style-two">
                	@foreach($teams as $team)
	                    {{-- <div class="col-lg-4 col-md-6 wow move-up">
	                        <div class="grid-item">
                                <a href="{{ route('frontend.leadership.show', $team->id) }}" class="ht-box-images style-02">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="/frontend/assets/images/team/team-member-01-370x455.jpg" alt="">
                                            <div class="social-networks">
                                                <div class="inner">
                                                    <a target="_blank" href="https://facebook.com/{{ $team->facebook }}" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a target="_blank" href="https://twitter.com/{{ $team->twitter }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="https://instagram.com/{{ $team->instagram }}" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-info text-center">
                                            <h5 class="name"><a href="{{ route('frontend.leadership.show', $team->id) }}">{{ $team->name }} (<em>{{ $team->title }}</em>)</a></h5>
                                            <div class="position">{{ $team->role }}</div>
                                        </div>
                                    </div>
                                </a>
	                        </div>
                        </div> --}}
                        <div class="col-lg-4 col-md-6  mt-30">
                            <!-- Box large image warap Start -->
                            <a href="{{ route('frontend.leadership.show', $team->path()) }}" class="box-large-image__wrap wow move-up animated">
                                <div class="box-large-image__box">
                                    <div class="box-large-image__midea">
                                        <div class="images-midea">
                                            <img src="frontend/assets/images/team/team-member-01-370x455.jpg" class="img-fluid" alt="">

                                            <div class="button-wrapper">
                                                <div class="btn tm-button">
                                                    <span class="button-text">Learn more</span>
                                                </div>
                                            </div>
                                            <div class="heading-wrap">
                                                <h5 class="heading">{{ $team->name }} <br> (<em>{{ $team->title }}</em>) </h5>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="box-large-image__content mt-30 text-center">
                                        <h6>{{ $team->role }}</h6>
                                        <p>
                                            {{ Str::limit($team->description, 150, '...') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Box large image warap End -->
                        </div>
                    @endforeach
                </div>
                <div class="row ht-team-member-style-three">

                    {{-- <div class="col-lg-3 col-md-6 wow move-up">
                        <div class="grid-item mb-30">
                            <div class="ht-team-member">
                                <div class="team-image">
                                    <img class="img-fluid" src="/frontend/assets/images/team/team-member-04-370x452.jpg" alt="">
                                    <div class="social-networks">
                                        <div class="inner">
                                            <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                            </a>
                                            <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                            </a>
                                            <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-info text-center">
                                    <h6 class="name">Stephany Mearsley </h6>
                                    <div class="position">Marketing</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
        <!-- ============ Team Member Wrapper End =============== -->

@endsection