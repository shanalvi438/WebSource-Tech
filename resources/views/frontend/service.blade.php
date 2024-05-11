@extends('layout.main')

@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Services</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home.html"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Services</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- service area start here -->
        {{-- <section class="service-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".3s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="{{ route('web.webDevelopmet') }}">Website <br>Development</a></h4>
                                <i class="flaticon-stats"></i>
                            </div>
                            <div class="kservice-img-2">
                                <img src="{{ URL('assets/img/service/service-img-1.jpg') }}" class="img-fluid" alt="service-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".6s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="graphic-designing.html">Graphic <br>designing</a></h4>
                                <i class="flaticon-digital-marketing"></i>
                            </div>
                            <div class="kservice-img-2">
                                <img src="{{ URL('assets/img/service/service-img-2.jpg') }}" class="img-fluid" alt="service-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration=".9s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="seo.html">SEO & Content <br>writing</a></h4>
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kservice-img-2">
                                <img src="{{ URL('assets/img/service/service-img-3.jpg') }}" class="img-fluid" alt="service-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-sm-6">
                        <div class="kservice-2 mb-30 wow fadeInUp" data-wow-duration="1s">
                            <div class="kservice-text-2">
                                <span>Services</span>
                                <h4 class="kservice-title-2"><a href="digital-marketing.html">digital <br>marketing</a></h4>
                                <i class="flaticon-idea"></i>
                            </div>
                            <div class="kservice-img-2">
                                <img src="{{ URL('assets/img/service/service-img-4.jpg') }}" class="img-fluid" alt="service-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- service area end here -->

        <!-- about area start here -->
        <section class="why-we bg-grey pt-120 pb-125 pb-md-110 position-relative">
            <div class="common-shape-wrapper wow slideInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner wow slideInleft animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            </div>
            <div class="container z-index">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-thumb">
                            <img src="{{ URL('assets/img/about/about-img-7.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="provide-content">
                            <div class="section-title-wrapper mb-25">
                                <h5 class="section-subtitle mb-20">All Categories List</h5>
                                <h2 class="section-title mb-35">We provide a best <br>
                                    services
                                </h2>
                                <p>Web Designing and Programming, Graphic Designing, Search Engine Optimization, Logo designing and Content writing services.
                                </p>
                            </div>
                            <p>WebSourceTech offers the best solution for your budget. We use the latest technologies to develop a Website. We Believe in delivering
                                the best to our clients and for that sake we work 24/7/365 days and do our best to accommodate our client even in nights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

        <!-- service area start here -->
        <section class="service-area service-area2 pt-115 pb-100" data-background="{{ URL('assets/img/service/service-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15">All Categories List</h5>
                            <h2 class="kservice-text-title mb-40">The Services <br>We’re Offering</h2>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                            <p class="mb-45 mt-35 mt-md-0 mt-xs-0">Web Design & Development, WordPress, Graphic Designing, SEO experts,
                                Digital & Social Media Marketing Services & Online business Solution, Web Portal and Personal Website.</p>
                        </div>
                    </div>
                </div>

                <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-stats"></i>
                                {{-- <i class="flaticon-analytics"></i> --}}
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="{{ route('web.webDevelopmet') }}">Website <br>Development</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-digital-marketing"></i>
                                {{-- <i class="flaticon-marketing"></i> --}}
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="{{ route('web.graphicDesigning') }}">Graphic <br>Designing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-website"></i>
                                {{-- <i class="flaticon-profile"></i> --}}
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="{{ route('web.seoDetail') }}">SEO &amp; Content <br>writing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                        <div class="kservice text-center mb-20">
                            <div class="kservice-icon">
                                <i class="flaticon-idea"></i>
                                {{-- <i class="flaticon-website"></i> --}}
                            </div>
                            <div class="kservice-content">
                                <h5 class="kservice-content-title"><a href="{{ route('web.digitalMarketing') }}">Digital <br>marketing</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- brand area end here -->
        <div class="brand-area3  pt-100 pb-100">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-1.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".6s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-2.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".9s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-3.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.2s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-4.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.5s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-5.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-6.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-7.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-8.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-9.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s" data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-10.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end-->

        <!-- quality area start here -->
        <section class="quality-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-9">
                        <div class="kquality mb-30 aos-init aos-animate" data-aos="zoom-in-right">
                            <div class="kquality-icon">
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kquality-text fix">
                                <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                                <p>WebSourceTech have taken our Business to the next level. They have created 4 Different Websites
                                    for our companies; all with excellent results.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="text-lg-end mb-30 aos-init aos-animate" data-aos="zoom-in-left">
                            <div class="kquality-img">
                                <img src="{{ URL('assets/img/trust/cta-img.jpg') }}" class="img-fluid" alt="cta-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quality area start here -->
    </main>
    @endsection
