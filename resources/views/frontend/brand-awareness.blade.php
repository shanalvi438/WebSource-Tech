@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Brand Awareness strategy</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Brand Awareness</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- project details area start  -->
        <section class="project-details-area pt-120 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="project-big-thumb">
                            <img src="{{ URL('assets/img/project/project13.png" ') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3>Brand Awareness</h3>
                            <p>
                                A brand awareness strategy aims to build familiarity and name recognition so that potential customers will
                                think of the brand when they are ready to make a purchase. What Are 4 Types of Brands? There are numerous types
                                of brands, but the four most common ones include corporate brands, personal brands, product brands, and service
                                brands.
                                A Brand Strategist is a professional who develops position recommendations for companies looking at developing or
                                expanding their brands. They also help guide market research analysis and define a company's tone so that
                                everything matches with campaign initiatives.</p>
                            <p>Brand awareness is divided into two components: brand recall (also known as unaided recall or occasionally
                                spontaneous recall) and brand recognition (also known as aided brand recall). These types of awareness operate
                                in entirely different ways with important implications for marketing strategy and advertising.</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
                                <div class="sidebar-single">
                                    <label>Clients:</label>
                                    <span>Greyson Terry</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Category:</label>
                                    <span>Brand Awareness strategy</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Value:</label>
                                    <span>Greyson Terry</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Date:</label>
                                    <span>15 September, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project detials area end  -->

        <!-- pagination area  -->
        <div class="portfolio__pagination-wrapper">
            <div class="container">
                <div class="pagination-border pt-40 pb-40">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination">
                                    <a href="ecommerce" class="link-btn-2">
                                        <i class="fal fa-long-arrow-left"></i>
                                        Prev
                                    </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination text-end">
                                <a href="web-project" class="link-btn-2">
                                        Next
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination area  end-->

        <!-- project area start  -->
        <section class="project-2 pt-115 pb-90 fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title-wrapper mb-50 text-center">
                            <h5 class="section-subtitle mb-20">Our recent work</h5>
                            <h2 class="section-title">More similar work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                        <div class="kproject kproject-2 mb-30">
                            <img src="{{ URL('assets/img/project/project-img-5.jpg') }}" class="img-fluid" alt="project_img">
                            <div class="kproject-text kproject-text-2">
                                <div class="kproject-text-content">
                                    <span>Frontend</span>
                                    <h5 class="kproject-text-title"><a href="web-project">Web Project</a></h5>
                                </div>
                                <div class="kproject-text-icon">
                                    <a href="web-project"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-up" data-aos-duration="1000">
                        <div class="kproject kproject-2 mb-30">
                            <img src="{{ URL('assets/img/project/project-img-6.jpg') }}" class="img-fluid" alt="project_img">
                            <div class="kproject-text kproject-text-2">
                                <div class="kproject-text-content">
                                    <span>Design</span>
                                    <h5 class="kproject-text-title"><a href="web-design">Website Designing</a></h5>
                                </div>
                                <div class="kproject-text-icon">
                                    <a href="web-design"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1000">
                        <div class="kproject kproject-2 mb-30">
                            <img src="{{ URL('assets/img/project/project-img-7.jpg') }}" class="img-fluid" alt="project_img">
                            <div class="kproject-text kproject-text-2">
                                <div class="kproject-text-content">
                                    <span>Marketing</span>
                                    <h5 class="kproject-text-title"><a href="content-writing">SEO & Content Writing</a></h5>
                                </div>
                                <div class="kproject-text-icon">
                                    <a href="content-writing"><i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project area end  -->
    </main>
@endsection
