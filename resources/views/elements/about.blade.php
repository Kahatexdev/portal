@extends('layout.layout')

@php
     $footer='true';
     $topToBottom='true';
@endphp

@section('content')

    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu">
                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Home <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu menu-skin-dark">
                            <div class="wrapper">
                                <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('mainDemo') }}"><img src="{{ asset('assets/images/splash/demo/h1.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('mainDemo') }}">Home Demo <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('marketplace') }}"><img src="{{ asset('assets/images/splash/demo/h12.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('marketplace') }}">Marketplace <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('kindergarten') }}"><img src="{{ asset('assets/images/splash/demo/h4.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('kindergarten') }}">kindergarten <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('universityClassic') }}"><img src="{{ asset('assets/images/splash/demo/h13.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('universityClassic') }}">University Classic <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('homeElegant') }}"><img src="{{ asset('assets/images/splash/demo/h14.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('homeElegant') }}">Home Elegant <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('gymCoaching') }}"><img src="{{ asset('assets/images/splash/demo/h9.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('gymCoaching') }}">Gym Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('onlineSchool') }}"><img src="{{ asset('assets/images/splash/demo/h3.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('onlineSchool') }}">Online School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('universityStatus') }}"><img src="{{ asset('assets/images/splash/demo/h6.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('universityStatus') }}">University Status <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('homeTechnology') }}"><img src="{{ asset('assets/images/splash/demo/h15.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('homeTechnology') }}">Home Technology <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('instructorPortfolio') }}"><img src="{{ asset('assets/images/splash/demo/h7.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('instructorPortfolio') }}">Instructor Portfolio <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('languageAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h8.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('languageAcademy') }}">Language Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('singleCourse') }}"><img src="{{ asset('assets/images/splash/demo/h11.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('singleCourse') }}">Single Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('onlineCourse') }}"><img src="{{ asset('assets/images/splash/demo/h10.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('onlineCourse') }}">Online Course <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('classicLms') }}"><img src="{{ asset('assets/images/splash/demo/h5.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('classicLms') }}">Classic Lms <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('courseSchool') }}"><img src="{{ asset('assets/images/splash/demo/h2.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('courseSchool') }}">Course School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('udemyAffiliate') }}"><img src="{{ asset('assets/images/splash/demo/h16.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('udemyAffiliate') }}">Udemy Affiliate <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('onlineAcademy') }}"><img src="{{ asset('assets/images/splash/demo/h17.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('onlineAcademy') }}">Online Academy <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('instructorsCoaches') }}"><img src="{{ asset('assets/images/splash/demo/h18.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('instructorsCoaches') }}">Instructor Coaches <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('modernUniversity') }}"><img src="{{ asset('assets/images/splash/demo/h19.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('modernUniversity') }}">Modern University <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('multilingual') }}"><img src="{{ asset('assets/images/splash/demo/h20.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('multilingual') }}">Multilingual <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('artDesignSchool') }}"><img src="{{ asset('assets/images/splash/demo/h21.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('artDesignSchool') }}">Art Design School <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('wishlist') }}"><img src="{{ asset('assets/images/splash/demo/h22.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('wishlist') }}">Wishlist <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('coaching') }}"><img src="{{ asset('assets/images/splash/demo/h23.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('coaching') }}">Coaching <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('healthWellnessInstitute') }}"><img src="{{ asset('assets/images/splash/demo/h24.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('healthWellnessInstitute') }}">Health Institute <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('lifeCoach') }}"><img src="{{ asset('assets/images/splash/demo/h25.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('lifeCoach') }}">Life Coach <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                    <!-- Start Single Demo  -->
                                    <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                        <div class="demo-single">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('islamicCenter') }}"><img src="{{ asset('assets/images/splash/demo/h26.jpg') }}" alt="Demo Images"></a> --}}
                                                </div>
                                                <div class="content">
                                                    {{-- <h4 class="title"><a href="{{ route('islamicCenter') }}">Islamic Center <span class="btn-icon"><i class="feather-arrow-right"></i></span></a></h4> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Demo  -->

                                </div>

                                <div class="load-demo-btn-wrap">
                                    <div class="load-demo-btn text-center">
                                        <span class="color-white b3">Scroll to view more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                              </svg></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item">
                        <a href="#">Courses <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-2">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mega-top-banner">
                                            <div class="content">
                                                <h4 class="title">Developer hub</h4>
                                                <p class="description">Start building fast, with code samples, key resources and more.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('courseFilterOneToggle') }}">Filter One Toggle</a></li> --}}
                                            {{-- <li><a href="{{ route('courseFilterOneOpen') }}">Filter One Open</a></li> --}}
                                            {{-- <li><a href="{{ route('courseFilterTwoToggle') }}">Filter Two Toggle</a></li> --}}
                                            {{-- <li><a href="{{ route('courseFilterTwoOpen') }}">Filter Two Open</a></li> --}}
                                            {{-- <li><a href="{{ route('courseWithTab') }}">Course With Tab</a></li> --}}
                                            {{-- <li><a href="{{ route('courseWithTabTwo') }}">Course With Tab Two</a></li> --}}
                                            {{-- <li><a href="{{ route('courseCard2') }}">Course Card Two</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-6 col-xxl-6 single-mega-item">
                                        <h3 class="rbt-short-title">Course Layout</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('courseCard3') }}">Course Card Three</a></li> --}}
                                            {{-- <li><a href="{{ route('courseMasonry') }}">Course Masonry</a></li> --}}
                                            {{-- <li><a href="{{ route('courseWithSidebar') }}">Course With Sidebar</a></li> --}}
                                            {{-- <li><a href="{{ route('courseDetails') }}">Course Details</a></li> --}}
                                            {{-- <li><a href="{{ route('courseDetails2') }}">Course Details Two</a></li> --}}
                                            {{-- <li><a href="{{ route('lesson') }}">Course Lesson <span class="rbt-badge-card">New</span></a></li> --}}
                                            {{-- <li><a href="{{ route('createCourse') }}">Create Course <span class="rbt-badge-card">New</span></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="nav-quick-access">
                                            <li><a href="#"><i class="feather-folder-minus"></i> Quick Start Guide</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> For Open Source</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> API Status</a></li>
                                            <li><a href="#"><i class="feather-folder-minus"></i> Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="has-dropdown has-menu-child-item">
                        <a href="#">Dashboard
                            <i class="feather-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                <ul class="submenu">
                                    {{-- <li><a href="{{ route('instructorDashboard') }}">Dashboard</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorProfile') }}">Profile</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorEnrolledCourses') }}">Enrolled Courses</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorWishlist') }}">Wishlist</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorReviews') }}">Reviews</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorMyQuizAttempts') }}">My Quiz Attempts</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorOrderHistory') }}">Order History</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorCourse') }}">My Course</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorAnnouncements') }}">Announcements</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorQuizAttempts') }}">Quiz Attempts</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorAssignments') }}">Assignments</a></li> --}}
                                    {{-- <li><a href="{{ route('instructorSettings') }}">Settings</a></li> --}}
                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                <ul class="submenu">
                                    {{-- <li><a href="{{ route('studentDashboard') }}">Dashboard</a></li> --}}
                                    {{-- <li><a href="{{ route('studentProfile') }}">Profile</a></li> --}}
                                    {{-- <li><a href="{{ route('studentEnrolledCourses') }}">Enrolled Courses</a></li> --}}
                                    {{-- <li><a href="{{ route('studentWishlist') }}">Wishlist</a></li> --}}
                                    {{-- <li><a href="{{ route('studentReviews') }}">Reviews</a></li> --}}
                                    {{-- <li><a href="{{ route('studentMyQuizAttempts') }}">My Quiz Attempts</a></li> --}}
                                    {{-- <li><a href="{{ route('studentOrderHistory') }}">Order History</a></li> --}}
                                    {{-- <li><a href="{{ route('studentSettings') }}">Settings</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Pages <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-4">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('aboutus01') }}">About Us</a></li> --}}
                                            {{-- <li><a href="{{ route('aboutus02') }}">About Us 02</a></li> --}}
                                            {{-- <li><a href="{{ route('eventGrid') }}">Event Grid</a></li> --}}
                                            {{-- <li><a href="{{ route('eventList') }}">Event List</a></li> --}}
                                            {{-- <li><a href="{{ route('eventSidebar') }}">Event Sidebar</a></li> --}}
                                            {{-- <li><a href="{{ route('eventDetails') }}">Event Details</a></li> --}}
                                            {{-- <li><a href="{{ route('academyGallery') }}">Academy Gallery</a></li> --}}
                                            {{-- <li><a href="{{ route('admissionGuide') }}">Admission Guide</a></li> --}}
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('profile') }}">Profile</a></li> --}}
                                            {{-- <li><a href="{{ route('contact') }}">Contact Us</a></li> --}}
                                            {{-- <li><a href="{{ route('becomeTeacher') }}">Become a Teacher</a></li> --}}
                                            {{-- <li><a href="{{ route('instructor') }}">Instructor</a></li> --}}
                                            {{-- <li><a href="{{ route('faqs') }}">FAQS</a></li> --}}
                                            {{-- <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li> --}}
                                            {{-- <li><a href="{{ route('pageError') }}">404 Page</a></li> --}}
                                            {{-- <li><a href="{{ route('maintenance') }}">Maintenance</a></li> --}}
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <h3 class="rbt-short-title">Shop Pages</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('shop') }}">Shop <span class="rbt-badge-card">Sale Anything</span></a></li> --}}
                                            {{-- <li><a href="{{ route('singleProduct') }}">Single Product</a></li> --}}
                                            {{-- <li><a href="{{ route('cart') }}">Cart Page</a></li> --}}
                                            {{-- <li><a href="{{ route('checkout') }}">Checkout</a></li> --}}
                                            {{-- <li><a href="{{ route('wishlist') }}">Wishlist Page</a></li> --}}
                                            {{-- <li><a href="{{ route('myAccount') }}">My Acount</a></li> --}}
                                            {{-- <li><a href="{{ route('login') }}">Login & Register</a></li> --}}
                                            {{-- <li><a href="{{ route('subscription') }}">Subscription</a></li> --}}
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                        <div class="mega-category-item">
                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-2.png') }}" alt="Course images"></div>
                                                    {{-- <a href="{{ route('courseFilterOneToggle') }}"> --}}
                                                        <span>Online Education</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-1.png') }}" alt="Course images"></div>
                                                    {{-- <a href="{{ route('courseFilterOneToggle') }}"> --}}
                                                        <span>Language Club</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-4.png') }}" alt="Course images"></div>
                                                    {{-- <a href="{{ route('courseFilterOneToggle') }}"> --}}
                                                        <span>University Status</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    {{-- <a href="{{ route('courseFilterOneToggle') }}"> --}}
                                                        <span>Course School</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                            <!-- Start Single Category  -->
                                            <div class="nav-category-item">
                                                <div class="thumbnail">
                                                    <div class="image"><img src="{{ asset('assets/images/course/category-9.png') }}" alt="Course images"></div>
                                                    {{-- <a href="{{ route('courseFilterOneToggle') }}"> --}}
                                                        <span>Academy</span>
                                                        <i class="feather-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End Single Category  -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Elements <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15 single-dropdown-menu-presentation">
                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('styleGuide') }}">Style Guide <span class="rbt-badge-card">Hot</span></a></li> --}}
                                            {{-- <li><a href="{{ route('accordion') }}">Accordion</a></li> --}}
                                            {{-- <li><a href="{{ route('advancetab') }}">Advance Tab</a></li> --}}
                                            {{-- <li><a href="{{ route('about') }}">About <span class="rbt-badge-card">New</span></a></li> --}}
                                            {{-- <li><a href="{{ route('brand') }}">Brand</a></li> --}}
                                            {{-- <li><a href="{{ route('button') }}">Button</a></li> --}}
                                            {{-- <li><a href="{{ route('badge') }}">Badge</a></li> --}}
                                            {{-- <li><a href="{{ route('card') }}">Card</a></li> --}}
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('callToAction') }}">Call To Action</a></li> --}}
                                            {{-- <li><a href="{{ route('counterup') }}">Counter</a></li> --}}
                                            {{-- <li><a href="{{ route('category') }}">Categories</a></li> --}}
                                            {{-- <li><a href="{{ route('header') }}">Header Style</a></li> --}}
                                            {{-- <li><a href="{{ route('newsletter') }}">Newsletter</a></li> --}}
                                            {{-- <li><a href="{{ route('team') }}">Team</a></li> --}}
                                            {{-- <li><a href="{{ route('social') }}">Social</a></li> --}}
                                            {{-- <li><a href="{{ route('listStyle') }}">List Style</a></li> --}}
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-4 col-xxl-4 single-mega-item">
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                                            {{-- <li><a href="{{ route('pricing') }}">Pricing</a></li> --}}
                                            {{-- <li><a href="{{ route('progressbar') }}">Progressbar</a></li> --}}
                                            {{-- <li><a href="{{ route('testimonial') }}">Testimonial</a></li> --}}
                                            {{-- <li><a href="{{ route('service') }}">Service</a></li> --}}
                                            {{-- <li><a href="{{ route('split') }}">Split Area</a></li> --}}
                                            {{-- <li><a href="{{ route('search') }}">Search Style</a></li> --}}
                                            {{-- <li><a href="{{ route('instagram') }}">Instagram Style</a></li> --}}
                                            <li><a href="#">& More Coming</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-wrapper">
                                            <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none" href="#">
                                                <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Visit Histudy Template</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>

                    <li class="with-megamenu has-menu-child-item position-static">
                        <a href="#">Blog <i class="feather-chevron-down"></i></a>
                        <!-- Start Mega Menu  -->
                        <div class="rbt-megamenu grid-item-3">
                            <div class="wrapper">
                                <div class="row row--15">
                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Blog Styles</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('blogList') }}">Blog List</a></li> --}}
                                            {{-- <li><a href="{{ route('blog') }}">Blog Grid</a></li> --}}
                                            {{-- <li><a href="{{ route('blogGridMinimal') }}">Blog Grid Minimal</a></li> --}}
                                            {{-- <li><a href="{{ route('blogWithSidebar') }}">Blog With Sidebar</a></li> --}}
                                            {{-- <li><a href="{{ route('blogDetails') }}">Blog Details</a></li> --}}
                                            {{-- <li><a href="{{ route('postFormatStandard') }}">Post Format Standard</a></li> --}}
                                            {{-- <li><a href="{{ route('postFormatGallery') }}">Post Format Gallery</a></li> --}}
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <h3 class="rbt-short-title">Get Started</h3>
                                        <ul class="mega-menu-item">
                                            {{-- <li><a href="{{ route('postFormatQuote') }}">Post Format Quote</a></li> --}}
                                            {{-- <li><a href="{{ route('postFormatAudio') }}">Post Format Audio</a></li> --}}
                                            {{-- <li><a href="{{ route('postFormatVideo') }}">Post Format Video</a></li> --}}
                                            <li><a href="#">Media Under Title <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Sticky Sidebar <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Auto Masonry <span class="rbt-badge-card">Coming</span></a></li>
                                            <li><a href="#">Meta Overlaid <span class="rbt-badge-card">Coming</span></a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-12 col-xl-4 col-xxl-4 single-mega-item">
                                        <div class="rbt-ads-wrapper">
                                            <a class="d-block" href="#"><img src="{{ asset('assets/images/service/mobile-cat.jpg') }}" alt="Education Images"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mega Menu  -->
                    </li>
                </ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Side Vav -->
    <x-sideVav/>
    <!-- End Side Vav -->

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">About</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="#">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{ asset('assets/images/about/about-07.jpg') }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{ asset('assets/images/about/about-09.jpg') }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{ asset('assets/images/about/about-08.jpg') }}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br /> Learning Platform</h2>
                        </div>
                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <!-- Start Feature List  -->
                        <div class="rbt-feature-wrapper mt--40">

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">It is a long established fact that a reader will
                                        be distracted by this on readable content of when looking at its layout.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                <div class="icon bg-coral-opacity">
                                    <i class="feather-monitor"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Experienced Teacher's service.</h6>
                                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, aliquid mollitia Officia, aliquid mollitia.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{ asset('assets/images/about/about-01.png') }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{ asset('assets/images/about/about-02.png') }}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{ asset('assets/images/about/about-03.png') }}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br /> Learning Platform</h2>
                        </div>

                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">It is a long established fact that a reader will
                                        be distracted by this on readable content of when looking at its layout.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <div class="content">
                        <h2 class="title mb--0" data-sal="slide-up" data-sal-duration="700">About the University we are creative preapre you for your career supportive.</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                    <p class="mb--40 mb_sm--20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil! Ipsa aspernatur aperiam recusandae pariatur odit repudiandae assumenda architecto.</p>
                    <div class="readmore-btn">
                        <a class="rbt-moderbt-btn" href="#">
                            <span class="moderbt-btn-text">University Overview</span>
                            <i class="feather-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-4">
                    <div class="content">
                        <h2 class="title" data-sal="slide-up" data-sal-duration="700">Graduate Programs.</h2>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="700">
                    <p>Graduate Programs dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row row--0 about-wrapper align-items-center theme-shape">
                        <div class="col-lg-6">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/about/about-12.jpg') }}" alt="About Images">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md--30 mt_sm--30">
                            <div class="content">
                                <div class="inner">
                                    <h4 class="title">I'm <span class="theme-gradient">John Lee</span> <br />The Founder Of Histudy Academy.</h4>
                                    <p>Web teacher and leacture for future development.</p>
                                    <ul class="contact-address">
                                        <li>
                                            <i class="feather-file"></i> Web designer &amp; developer
                                        </li>
                                        <li><i class="feather-phone"></i> +01910203040</li>
                                        <li>
                                            <i class="feather-map-pin"></i> Dhaka, Bangladesh
                                        </li>
                                    </ul>
                                    <div class="signature-image mt--20">
                                        <img src="{{ asset('assets/images/shape/signature.png') }}" alt="Signature Images">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-circle-shape position-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <img src="{{ asset('assets/images/about/about-06.png') }}" alt="About Images">
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                    <div class="inner pl--50 pl_sm--5">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">About Histudy</span>
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn radius rbt-marquee-btn marquee-text-y" href="#">
                                    <span data-text="Learn More">
                                Learn More
                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">About Histudy</span>
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="#">
                                    <span data-text="About Histudy">About Histudy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="content">
                        <img src="{{ asset('assets/images/about/about-06.png') }}" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 align-items-center row--30">
                <div class="col-lg-7">
                    <div class="content radius-6 overflow-hidden">
                        <div class="plyr__video-embed rbtplayer">
                            <iframe class="radius-6 overflow-hidden" src="{{ asset('https://www.youtube.com/embed/qKzhrXqT6oE') }}" allowfullscreen allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="inner">
                        <div class="section-title text-start">
                            <h2 class="title">What is Histudy For You?.</h2>
                            <p class="description mt--20"><strong>Histudy educational platform</strong> ipsum dolor sit amet consectetur adipisicing elit. Nam inventore praesentium alias incidunt! Veritatis, necessitatibus fuga dolore tenetur, beatae suscipit fugit est ea perspiciatis quo provident nisi dolor similique architecto nihil.</p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="#">
                                    <span data-text="About Histudy">About Histudy</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection