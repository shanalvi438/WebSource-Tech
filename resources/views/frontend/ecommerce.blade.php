@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcru.jpgmb-bg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">E-commerce Project</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>e-commerce</span></li>
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
                            <img src="{{ URL('assets/img/project/project9.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3>E-commerce</h3>
                            <p>There are three main types of e-commerce: business-to-business (websites such as Shopify), business-to-consumer
                                (websites such as Amazon), and consumer-to-consumer (websites such as eBay)
                                E-commerce (electronic commerce) is the buying and selling of goods and services, or the transmitting of funds
                                or data, over an electronic network, primarily the internet. These business transactions occur either as
                                business-to-business (B2B), business-to-consumer (B2C), consumer-to-consumer or consumer-to-business.

                                Personalization is the process of showing the products or things that the user is already looking for. This is
                                possible with modern-day technologies like AI and ML. The combination of artificial intelligence and machine
                                learning reads the data behavior of users and presents users with personalized experiences.</p>
                            <p>
                                By the year 2023, it's estimated that ecommerce purchases will rise from 14.1% to 22%. These estimations are
                                highly optimistic and they show that ecommerce, as a business, is yet to reach its potential. Mobile ecommerce
                                sales are also expected to rise, estimated to reach almost 2.91 trillion in 2020.
                                E-commerce or Electronic commerce is termed as selling and buying behaviour of products and services over the
                                internet. It is also referred to as the sales of different items on the marketplaces in which money transaction
                                activity takes place.
                            </p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
                                <div class="sidebar-single">
                                    <label>Clients:</label>
                                    <span>Sebastian Stefan</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Category:</label>
                                    <span>E-commerce</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Value:</label>
                                    <span>Sebastian Stefan</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Date:</label>
                                    <span>7 August, 2022</span>
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
                                    <a href="web-design-project" class="link-btn-2">
                                        <i class="fal fa-long-arrow-left"></i>
                                        Prev
                                    </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination text-end">
                                <a href="brand-awareness" class="link-btn-2">
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
