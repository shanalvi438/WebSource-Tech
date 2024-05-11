@extends('layout.main')
@section('main-container')
    <main>
        <!-- slider area start here -->
        <section class="slider-area fix position-relative">
            <div class="slider-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="single-slider slider-height swiper-slide" data-swiper-autoplay="10000">
                        <div class="slide-bg" data-background="{{ URL('assets/img/slider/slider-1.jpg') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kslider z-index">

                                        <p class="kslider--title mb-25" data-animation="fadeInUp" data-delay="0.5s">
                                            Welcome to <br> Software Development agency
                                            </p>
                                        <div class="kslider--btn" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="{{ route('web.service') }}" class="theme-btn">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-shape shape-1"><img src="{{ URL('assets/img/slider/slider-shape-1.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                        <div class="slide-shape shape-2"><img src="{{ URL('assets/img/slider/slider-shape-2.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                    </div>
                    <div class="single-slider slider-height swiper-slide" data-swiper-autoplay="10000">
                        <div class="slide-bg" data-background="assets/img/slider/slider-2.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kslider z-index">
                                        <h5 class="kslider--subtitle mb-25" data-animation="fadeInUp" data-delay="0.3s">
                                            Welcome to digital agency</h5>
                                        <h2 class="kslider--title mb-40" data-animation="fadeInUp" data-delay="0.5s">Social
                                            Media<br>Agency</h2>
                                        <div class="kslider--btn" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="service" class="theme-btn">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-shape shape-1"><img src="{{ URL('assets/img/slider/slider-shape-1.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                        <div class="slide-shape shape-2"><img src="{{ URL('assets/img/slider/slider-shape-2.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                    </div>
                    <div class="single-slider slider-height swiper-slide" data-swiper-autoplay="10000">
                        <div class="slide-bg" data-background="{{ URL('assets/img/slider/slider-3.jpg') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="kslider z-index">
                                        <h5 class="kslider--subtitle mb-25" data-animation="fadeInUp" data-delay="0.3s">
                                            Welcome to digital agency</h5>
                                        <h2 class="kslider--title mb-40" data-animation="fadeInUp" data-delay="0.5s">SEO &
                                            Content Writing Agency</h2>
                                        <div class="kslider--btn" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="service" class="theme-btn">Our Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-shape shape-1"><img src="{{ URL('assets/img/slider/slider-shape-1.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                        <div class="slide-shape shape-2"><img src="{{ URL('assets/img/slider/slider-shape-2.png') }}"
                                class="img-fluid" alt="shape-img"></div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="slider-paginations slide-dots"></div>
            </div>
        </section>
        <!-- slider area end here -->

        <!-- service area start here -->
        <section class="service-area pt-120 pb-130" data-background="{{ URL('assets/img/service/service-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="kservice-text mb-50" data-aos="fade-right" data-aos-duration="1000">
                            <h5 class="kservice-text-subtitle mb-15">All Categories List</h5>
                            <h2 class="kservice-text-title mb-40">The Services <br>We’re Offering</h2>
                            <p class="mb-45">Web Design & Development, WordPress, Graphic Designing, SEO experts, Digital &
                                Social Media Marketing Services
                                & Online business Solution. </p>
                            <div class="kservice-author">
                                <div class="kservice-author-sign">
                                    <span>G M Zeeshan Alvi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <div class="row custom-mar-20" data-aos="fade-down" data-aos-duration="1000">
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-analytics"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a
                                                href="{{ route('web.webDevelopmet') }}">Website <br>Development</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-marketing"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a
                                                href="{{ route('web.graphicDesigning') }}">Graphic<br>Designing</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-profile"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a href="{{ route('web.seoDetail') }}">SEO &
                                                Content<br>writing</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 custom-pad-20">
                                <div class="kservice text-center mb-20">
                                    <div class="kservice-icon">
                                        <i class="flaticon-website"></i>
                                    </div>
                                    <div class="kservice-content">
                                        <h5 class="kservice-content-title"><a
                                                href="{{ route('web.digitalMarketing') }}">Digital <br>marketing</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end here -->

        <!-- cta area start here -->
        <section class="cta-area mt--60 z-index" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
                        <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div>
                        <div class="cta-number-text fix">
                            <span class="uppercase">Get a Free Consultation</span>
                            <h2>
                                <a href="tel:+923204069243">Call us at +92 320 406 9243</a>
                            </h2>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p>Connect with one of our Expert Strategists to Learn how WebSourceTech can help you Reach your
                            Business Goal</p>
                    </div>
                    <div class="cta-btn text-lg-end text-start">
                        <a href="service" class="theme-btn black-btn">Services</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end here -->

        <!-- about area start here -->
        <section class="about-area pt-120 pb-70 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="kabout-img mb-50 mr-70" data-aos="zoom-out-up" data-swiper-autoplay="10000">
                            <div class="kabout-img-shape"></div>
                            <img src="{{ URL('assets/img/about/about-img-1.jpg') }}" class="img-fluid z-index"
                                alt="about-img">
                            <div class="kabout-img-small">
                                <img src="{{ URL('assets/img/about/about-img-2.jpg') }}" class="img-fluid"
                                    alt="about-img">
                                <div class="kabout-img-small-icon play_btn">
                                    <span>
                                        <i class="flaticon-idea"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="kabout mb-50" data-aos="zoom-out-down" data-swiper-autoplay="10000">
                            <div class="section-title-wrapper mb-45">
                                <h5 class="section-subtitle mb-20">get to know us</h5>
                                <h2 class="section-title mb-35">Web Development
                                    <br>Company
                                </h2>
                                <p>WebSource Technologies is the best web Design Company in the World and an initiative for
                                    excellence in Web
                                    designing and development services for all kinds of business industries.</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title">The Best Services</h4>
                                        <p>Web Design & <br>App Development</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="kabout-service mb-30">
                                        <h4 class="kabout-service-title">Expert Designers</h4>
                                        <p>Web Portal & Personal Website<br>Search Engine Optimization<br>E-Commerce
                                            Websites</p>
                                    </div>
                                </div>
                            </div>
                            <ul class="mt-20 mb-55">
                                <li><i class="fal fa-check"></i>Client-focused, customer-centric.</li>
                                <li><i class="fal fa-check"></i>If you are going to use a passage.</li>
                                <li><i class="fal fa-check"></i>99.99% Uptime Guarantee & 24/7 Chat Support</li>
                            </ul>
                            <div class="kabout-btn">
                                <a href="{{ route('web.services') }}" class="theme-btn border-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end here -->

        <!-- project area strat here -->
        <section class="project-area bg-grey pt-115 pb-110 fix">
            <div class="common-shape-wrapper wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="common-shape-inner"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title-wrapper mb-45">
                            <h5 class="section-subtitle mb-20">Our recent work</h5>
                            <h2 class="section-title">Work showcase</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="lol text-md-end">
                            <!-- If we need navigation buttons -->
                            <div class="project-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                            <div class="project-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-1.png') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Frontend</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.webProject') }}">Web
                                        Development</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.webProject') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-2.jpeg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Design</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.webDesign') }}">Web Design</a>
                                </h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.webDesign') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-3.jpg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>SEO</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.ContentWritings') }}">SEO &
                                        Content Writing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.ContentWritings') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-4.jpg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Marketing</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.contentWriting') }}">Digital Media
                                        Marketing </a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.contentWriting') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-14.jpg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Marketing</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.SocialMediaMarketing') }}">Social
                                        Media Marketing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.SocialMediaMarketing') }}"><i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-15.jpeg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>Design</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.GraphicsDesign') }}">Graphic
                                        Designing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.GraphicsDesign') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="kproject swiper-slide">
                        <img src="{{ URL('assets/img/project/project-img-16.jpg') }}" class="img-fluid"
                            alt="project_img">
                        <div class="kproject-text">
                            <div class="kproject-text-content">
                                <span>shopping</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.ecommerceBlog') }}">E-Commerce</a>
                                </h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.ecommerceBlog') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project area end here -->

        <!-- testimonial area start here -->
        <section class="testimonial-area pt-115 pb-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center mb-45">
                            <h5 class="section-subtitle mb-20">client Satisfaction</h5>
                            <h2 class="section-title mb-35">What they say?</h2>
                        </div>
                    </div>
                </div>

                <div class="testimonial-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Thanks to their knowledge and Determination our website looks great and functions really
                                    good.
                                    I am recommend anyone that is looking for a custom website to give them a call and speak
                                    to Gus,
                                    he will guide you to the right direction.
                                </p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="{{ URL('assets/img/testimonial/testimonial-img-1.jpg') }}"
                                        class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Jessica Brown</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Excellent, working with WebSource Technologies was great. Extremely helpful,
                                    user-friendly, innovative and reliable.
                                    Very satisfactory outcome, knowing that I can go back to them at any time for further
                                    help
                                    – the quality is superb.
                                </p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="{{ URL('assets/img/testimonial/testimonial-img-2.jpg') }}"
                                        class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Mike Hardson</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>Overall very pleased with Managing Director & his friendliness with us. He did everything
                                    we asked in
                                    a timely matter. I will definitely be recommending him to other companies. Thanks for
                                    such good work.
                                    I really appreciate your work here.
                                </p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="{{ URL('assets/img/testimonial/testimonial-img-3.jpg') }}"
                                        class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Sarah Albert</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>As an SEO practitioner, I find the content you publish to be of the highest quality and
                                    degree of usefulness, whether it's a post in SEO
                                    Launchpad on Facebook (of which I'm proud to be a member), or on SEO bits. I am
                                    definitely a fan webSourceTech.</p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="{{ URL('assets/img/testimonial/testimonial-img-4.jpg') }}"
                                        class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Melinda Brown</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="ktestimonial mb-30 swiper-slide">
                            <div class="ktestimonial-text">
                                <p>I am really happy with your service. When I have a question they answer it at once, I'd
                                    say that
                                    Web SourceTech people are V.professional & knowledge is incredible, they also solve
                                    problems very fast. I recommend WebSource Tech to all my customers.
                                </p>
                            </div>
                            <div class="ktestimonial-author">
                                <div class="ktestimonial-author-img">
                                    <img src="{{ URL('assets/img/testimonial/testimonial-img-5.jpg') }}"
                                        class="img-fluid" alt="client-img">
                                </div>
                                <div class="ktestimonial-author-text">
                                    <h5 class="uppercase">Andrew Tye</h5>
                                    <span class="uppercase">Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end here -->

        <!-- brand area end here -->
        <div class="brand-area pt-100 pb-100">
            <div class="container">
                <div class="brand-active swiper-container">
                    <div class="swiper-wrapper align-items-center">
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-1.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".6s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-2.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay=".9s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-3.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.2s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-4.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.5s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-5.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-6.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-7.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-8.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-9.png') }}" class="img-fluid" alt="img">
                        </div>
                        <div class="brand-wrapper swiper-slide wow fadeInUp" data-wow-delay="1.8s"
                            data-swiper-autoplay="10000">
                            <img src="{{ URL('assets/img/brand/brand-10.png') }}" class="img-fluid" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area start here -->

        <!-- trust area start here -->
        <section class="trust-area pt-105 pb-120">
            <div class="trust-bg" data-background="assets/img/trust/trust-bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ktrust text-center z-index">
                            <h2 class="ktrust-title mb-45 wow fadeInUp" data-wow-delay=".2s">where you find all the
                                solutions for your website</h2>
                            <div class="ktrust-btn">
                                <a href="{{ route('web.showmore') }}" class="theme-btn">Show more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trust area end here -->

        <!-- blog area start here -->
        <section class="blog-area pt-120" data-background="{{ URL('assets/img/blog/blog-bg-1.jpg') }}">
            <div class="blog-space pb-120">
                <div class="blog-text pt-60" data-aos="zoom-in">
                    <div class="section-title-wrapper pr-25 mb-50">
                        <h5 class="section-subtitle mb-20">recent blog posts</h5>
                        <h2 class="section-title mb-35">Latest News & Articles</h2>
                        <p class="pr-50">We will assist you to increase your market size, sales and operating profit.</p>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="kblog-arrow">
                        <div class="blog-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                        <div class="blog-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
                    </div>
                </div>
                <div class="blog-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="{{ route('web.development') }}"><img
                                        src="{{ URL('assets/img/blog/blog-img-1.jpg') }}" class="img-fluid"
                                        alt="blog-img"></a>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="{{ route('web.development') }}"><i class="fal fa-user-circle"></i> by
                                        Admin</a>
                                    <a href="{{ route('web.development') }}"><i class="fal fa-comments"></i> 2
                                        Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="{{ route('web.development') }}">Web design &
                                        Development Services</a></h3>
                                <div class="kblog-text-link">
                                    <a href="{{ route('web.development') }}">Read more <i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="{{ route('web.graphicDesignBlog') }}"><img
                                        src="{{ URL('assets/img/blog/blog-img-2.jpg') }}" class="img-fluid"
                                        alt="blog-img"></a>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="{{ route('web.graphicDesignBlog') }}"><i class="fal fa-user-circle"></i> by
                                        Admin</a>
                                    <a href="{{ route('web.graphicDesignBlog') }}"><i class="fal fa-comments"></i> 2
                                        Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="{{ route('web.graphicDesignBlog') }}">Graphic
                                        Designing Services you need to know</a></h3>
                                <div class="kblog-text-link">
                                    <a href="{{ route('web.graphicDesignBlog') }}">Read more <i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="{{ route('web.digitalSocialMediaBlog') }}"><img
                                        src="{{ URL('assets/img/blog/blog-img-3.jpg') }}" class="img-fluid"
                                        alt="blog-img"></a>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="{{ route('web.digitalSocialMediaBlog') }}"><i
                                            class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="{{ route('web.digitalSocialMediaBlog') }}"><i class="fal fa-comments"></i> 2
                                        Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a
                                        href="{{ route('web.digitalSocialMediaBlog') }}">digital and Social Media
                                        Marketing strategies</a></h3>
                                <div class="kblog-text-link">
                                    <a href="{{ route('web.digitalSocialMediaBlog') }}">Read more <i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="{{ route('web.SeoContentWritingBlog') }}"><img
                                        src="{{ URL('assets/img/blog/blog-img-4.jpg') }}" class="img-fluid"
                                        alt="blog-img"></a>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="{{ route('web.SeoContentWritingBlog') }}"><i class="fal fa-user-circle"></i>
                                        by Admin</a>
                                    <a href="{{ route('web.SeoContentWritingBlog') }}"><i class="fal fa-comments"></i> 2
                                        Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a
                                        href="{{ route('web.SeoContentWritingBlog') }}">Search Engine optimization and
                                        Content Writing</a></h3>
                                <div class="kblog-text-link">
                                    <a href="{{ route('web.SeoContentWritingBlog') }}">Read more <i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="kblog swiper-slide">
                            <div class="kblog-img">
                                <a href="{{ route('web.EcommerceBlogs') }}"><img
                                        src="{{ URL('assets/img/blog/blog-img-5.jpg') }}" class="img-fluid"
                                        alt="blog-img"></a>
                            </div>
                            <div class="kblog-text">
                                <div class="kblog-meta">
                                    <a href="{{ route('web.EcommerceBlogs') }}"><i class="fal fa-user-circle"></i> by
                                        Admin</a>
                                    <a href="{{ route('web.EcommerceBlogs') }}"><i class="fal fa-comments"></i>2
                                        Comments</a>
                                </div>
                                <h3 class="kblog-text-title mb-20"><a href="{{ route('web.EcommerceBlogs') }}">E-COMMERCE
                                        SOLUTIONS & STRATEGY</a></h3>
                                <div class="kblog-text-link">
                                    <a href="{{ route('web.EcommerceBlogs') }}">Read more <i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end here -->

        <!-- quality area start here -->
        <section class="quality-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="kquality mb-30" data-aos="zoom-in-right">
                            <div class="kquality-icon">
                                <i class="flaticon-website"></i>
                            </div>
                            <div class="kquality-text fix">
                                <h3 class="mb-20 kquality-text-title">We Deliver the Best Quality</h3>
                                <p>WebSourceTech have taken our Business to the next level. They have created 4 Different
                                    Websites
                                    for our companies; all with excellent results.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-lg-end mb-30" data-aos="zoom-in-left">
                            <div class="kquality-img">
                                <img src="{{ URL('assets/img/trust/cta-img.jpg') }}" class="img-fluid" alt="cta-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quality area end here -->



        <!-- map area start here -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3658.9879259396616!2d58.48372881497659!3d23.496944384714865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDI5JzQ5LjAiTiA1OMKwMjknMDkuMyJF!5e0!3m2!1sen!2s!4v1684321801425!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- map area end here -->

    </main>
@endsection
