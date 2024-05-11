@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">SEO & Content Writing</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Content Writing</span></li>
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
                            <img src="{{ URL('assets/img/project/project3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3>SEO & Content Writing</h3>
                            <p>Search engines are the ways for billions of people to find exactly what they are looking for, which is why
                                countless companies create content that is meant to specifically use certain keywords so that their content
                                ranks higher, so that they can get more exposure, and potentially more customers. SEO writing stands for
                                search-optimization writing, where writing is specifically designed to drive traffic to websites so that
                                they can grow their consumer base.
                                SEO writing can be integral to a business gaining the right amount of exposure to attract a customer base
                                through search engines, and can end up being a massive turning point with regards to a platform. The content
                                that ensures that a certain amount of people are targeted can truly be a foundation for the right company or
                                platform to build upon.
                                It doesn’t matter how big or small a business is , they want the consumer to see their brand as much as possible,
                                and develop a brand identity that helps them communicate more effectively to customers. SEO writing allows this
                                to happen, and can be a tool to not only grow a customer base, but ensure that for the company, a certain
                                demographic always remains targeted, and engaged.</p>
                            <h3>Why Is SEO Writing Important?</h3>
                            <p>It’s no secret that to rank in Google awesome content is KEY.
                                That said: just pumping out high-quality content isn’t enough.
                                For your content to rank, it also needs legit search engine optimization.
                                Put another way:
                                Amazing content + solid on-page SEO = SEO writing.
                                he higher a website ranks in Google or Bing, the more people will visit their site. More visitors means more
                                sales or just more readers or fans. SEO content-writing jobs are increasingly in demand, so having an
                                understanding of what exactly the job entails means you will be a more valuable asset to any company that hires
                                you</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
                                <div class="sidebar-single">
                                    <label>Clients:</label>
                                    <span>Amelia Sophia</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Category:</label>
                                    <span>SEO, Content Writing</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Value:</label>
                                    <span>Amelia Sophia From United States</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Date:</label>
                                    <span>8 September, 2022</span>
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
                                    <a href="web-design" class="link-btn-2">
                                        <i class="fal fa-long-arrow-left"></i>
                                        Prev
                                    </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination text-end">
                                    <a href="digital-media-marketing" class="link-btn-2">
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
