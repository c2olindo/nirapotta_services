@extends('front.master')

@section('title', 'Home')

@section('content')

    @include('front.slider')
    @include('front.common.about')
    @include('front.common.counter')


    <section class="video-system">
        <div class="container">
            <div class="sec-title">
                <span>What WE Offer</span>
                <h2>Video Surveillance Systems</h2>
            </div><!-- sec-title end-->
            <div class="video-posts-sec">
                <div class="row vid-carousel">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img1.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Fingerprint Door Access</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img2.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Home Automation System</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img3.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Antenna Tagging System</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img1.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Fingerprint Door Access</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img2.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Home Automation System</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="video-post">
                            <div class="video-post-thumbnail">
                                <img src="{{ asset('assets/images/resources/img3.jpg') }}" alt="">
                                <div class="vid-post-info">
                                    <h2>Home Automation System</h2>
                                    <p>What if all the devices in your life could connect to the internet. clocks, speakers, lights, doorbells, cameras, windows, window blinds, hot water heaters.........</p>
                                </div>
                                <a href="services.html" title="" class="ext-link"></a>
                            </div><!--video-post-thumbnail end-->
                            <div class="video-post-info">
                                <a href="index2.html#" title="" class="rd-btn"><i class="fa fa-angle-double-right"></i></a>
                                <h2><a href="index2.html#" title="">Antenna Tagging System</a></h2>
                            </div>
                        </div><!--video-post end-->
                    </div>
                </div>
            </div><!--video-posts-sec end-->
        </div>
    </section><!--video-system end-->

    <section class="case-study-sec half-overlay">
        <div class="container">
            <div class="sec-title-style2">
                <div class="sec-title">
                    <span>Our Recent Work</span>
                    <h2>Our Case’s Study</h2>
                </div>
                <a href="index2.html#" title="" class="lnk-default">View All Project</a>
                <div class="clearfix"></div>
            </div><!--case-sec-title end-->
            <div class="case-study-section">
                <div class="case_slider">
                    <div class="case_slide">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="case-study-carouz">
                                    <div class="case-study-slide">
                                        <h4>Commerical</h4>
                                        <h2>Bussiness Building Secour Cam</h2>
                                        <span>Cayler Offices</span>
                                        <p>A simple and proven methodology that companies use to measure customer happiness as it relates to company brand, product or service.</p>
                                        <a href="index2.html#" title="" class="lnk-default">Read More</a>
                                    </div><!--case-study-slide end-->
                                </div><!--case-study-carouz end-->
                            </div>
                            <div class="col-lg-7">
                                <div class="gallery-row">
                                    <div class="gallery-thumb">
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="gallery-images-slide" id="custom-gallery">
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--gallery-row end-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="case_slide">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="case-study-carouz">
                                    <div class="case-study-slide">
                                        <h4>Commerical</h4>
                                        <h2>We Secure Your Home Excet Your Thought</h2>
                                        <span>Cayler Offices</span>
                                        <p>A simple and proven methodology that companies use to measure customer happiness as it relates to company brand, product or service.</p>
                                        <a href="index2.html#" title="" class="lnk-default">Read More</a>
                                    </div><!--case-study-slide end-->
                                </div><!--case-study-carouz end-->
                            </div>
                            <div class="col-lg-7">
                                <div class="gallery-row">
                                    <div class="gallery-thumb">
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="gallery-images-slide">
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--gallery-row end-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="case_slide">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="case-study-carouz">
                                    <div class="case-study-slide">
                                        <h4>Commerical</h4>
                                        <h2>Safty and Security at your Fingertips</h2>
                                        <span>Cayler Offices</span>
                                        <p>A simple and proven methodology that companies use to measure customer happiness as it relates to company brand, product or service.</p>
                                        <a href="index2.html#" title="" class="lnk-default">Read More</a>
                                    </div><!--case-study-slide end-->
                                </div><!--case-study-carouz end-->
                            </div>
                            <div class="col-lg-7">
                                <div class="gallery-row">
                                    <div class="gallery-thumb">
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}"" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                        <div class="gallery-th">
                                            <img src="{{ asset('assets/images/resources/thumb1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="gallery-images-slide">
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/gal4.jpg" alt="">
                                            <a href="assets/images/resources/gal4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="assets/images/resources/ga4.jpg" alt="">
                                            <a href="assets/images/resources/ga4.jpg" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                        <div class="gallery-image">
                                            <img src="{{ asset('assets/images/resources/gal3.jpg') }}" alt="">
                                            <a href="{{ asset('assets/images/resources/gal3.jpg') }}" title="" class="lightbox full-img">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--gallery-row end-->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--case-study-section end-->
        </div>
    </section><!--case-study-sec end-->

    @include('front.common.team_banner')

    @include('front.common.request_quote')

    @@include('front.common.inquiry')

    @include('front.common.testimonial')
    @include('front.common.partner')


@endsection