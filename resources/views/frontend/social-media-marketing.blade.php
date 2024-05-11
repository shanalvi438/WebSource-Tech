@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Social Media Project Details</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Social Media Marketing</span></li>
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
                            <img src="{{ URL('assets/img/project/project6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3>Social Media Marketing</h3>
                            <p>Social media marketing is the use of social media platforms to connect with your audience to build your brand,
                                increase sales, and drive website traffic. This involves publishing great content on your social media profiles,
                                listening to and engaging your followers, analyzing your results, and running social media advertisements.
                                The major social media platforms (at the moment) are Facebook, Instagram, Twitter, LinkedIn, Pinterest, YouTube,
                                and Snapchat.
                                There are also a range of social media management tools that help businesses to get the most out of the social
                                media platforms listed above. For example, Buffer is a platform of social media management tools, which can help
                                you achieve success with your social media marketing. Whether you want to build a brand or grow your business,
                                we want to help you succeed.</p>
                            <p>Social media marketing first started with publishing. Businesses were sharing their content on social media to
                                generate traffic to their websites and, hopefully, sales. But social media has matured far beyond being just a
                                place to broadcast content.
                                Nowadays, businesses use social media in a myriad of different ways. For example, a business that is concerned
                                about what people are saying about its brand would monitor social media conversations and response to relevant
                                mentions (social media listening and engagement). A business that wants to understand how it’s performing on
                                social media would analyze its reach, engagement, and sales on social media with an analytics tool (social
                                media analytics). A business that wants to reach a specific set of audience at scale would run highly-targeted
                                social media ads (social media advertising).
                                As a whole, these are often also known as social media management.</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
                                <div class="sidebar-single">
                                    <label>Clients:</label>
                                    <span>Julian peter</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Category:</label>
                                    <span>Social Media Marketing</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Value:</label>
                                    <span>Julian peter</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Date:</label>
                                    <span>13 february, 2022</span>
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
                                    <a href="digital-media-marketing" class="link-btn-2">
                                        <i class="fal fa-long-arrow-left"></i>
                                        Prev
                                    </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination text-end">
                                <a href="graphic-design" class="link-btn-2">
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
