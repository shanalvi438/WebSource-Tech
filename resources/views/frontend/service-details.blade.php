@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Web Development</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Services Details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- service details area start here -->
        <section class="service-detals pt-120 pb-100 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="develop-wrapper">
                            <div class="develop-thumb">
                                <img src="{{ URL('assets/img/service/service-img-5.jpg') }}" alt="">
                            </div>
                            <div class="develop-content">
                                <h3 class="service-title">Web Development Technology We Use</h3>
                                <p>WebSourceTech.com has developers of every technology from PHP to HTML5 with supreme talent in respective zone.
                                    We have experienced team with hands on PHP, MYSQL, JavaScript, Laravel, Codeigniter, JQuery, CSS3, HTML5, Web 3.0,
                                    WordPress Open Source Solutions, CMS Solutions.
                                    Hire us for WordPress, Drupal, Magento, Opencart, Joomla, Logo Design, E-Commerece etc based site.
                                </p>
                            </div>
                        </div>

                        <div class="planning-wrapper pt-50">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="plan-thumb mb-md-40 mb-xs-40">
                                        <img src="{{ URL('assets/img/service/service-img-6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="plan-content">
                                        <h4>planning & strategy</h4>
                                        <p>The WebSourceTech set our sight on developing websites that aid businesses to become
                                            a super power in market globe.</p>
                                        <ul>
                                            <li>Active and efficient.</li>
                                            <li>According to your niche.</li>
                                            <li>The ability to turnaround consulting</li>
                                            <li>Customer engagement matters</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="plan-content pr-10 pt-50 pt-xs-30 pt-md-30 pb-15">
                                        <p>WebSource Technologies is the best Web agency in the World. Developing a website right
                                            doesn’t cost you extra, but it takes selecting the right web
                                            development services company. We have a prominent record and unparalleled ability to
                                            benefit your business websites accordingly. We are thrilled to proclaim that we are a
                                            sophisticated and proficient Web Developer Agency that fulfills your defined requirements
                                            and conditions enthusiastically.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="choose-right aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            How to process the function for development?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>There are many variations of passages of available but the majority have suffered alteration in that some form by injected randomised words which don’t look even as slightly believable.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Where should I incorporate my business?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Web fonts are often terrible for web performance and none of the font loading strategies are particularly effective to address that. Upcoming font options may finally deliver on the promise.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How there are many variations of passages
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Front-end and design are remarkably complex these days. That’s why we invite kind, smart folks from the community to run online
                                                workshops for all of us to learn together. And we have new ones.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="bg-grey">
                                <h3 class="ms-3 pl-20 pt-4">Categories</h3>
                                <ul class="ms-4 ">
                                    <li class="mt-5 h5">Web Development</li>
                                    <li class="mt-5 h5">App Development</li>
                                    <li class="mt-5 h5">Web Portal & Personal Website</li>
                                    <li class="mt-5 h5">WordPress</li>
                                    <li class="mt-5 h5 pb-4">E-commerce</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service details area end here -->


        <!-- cta area  -->
        <section class="cta-area mb--60 z-index aos-init aos-animate fix" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
                        <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div>
                        <div class="cta-number-text fix">
                            <span class="uppercase">Get a Free Consultation</span>
                            <h2><a href="tell:+92 320 4069 243">+92 320 4069 243</a></h2>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p>Connect with one of our Expert Strategists to Learn how WebSourceTech can help you Reach your Business Goal.</p>
                    </div>
                    <div class="cta-btn text-lg-end text-start">
                        <a href="service" class="theme-btn black-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end  -->
    </main>
    @endsection
