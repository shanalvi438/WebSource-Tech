@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25"> Web Project Details</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Web Project</span></li>
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
                            <img src="{{ URL('assets/img/project/project-big-img.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="p-details-content mb-40">
                            <h3>Documenting Web Projects</h3>
                            <p>It’s important to start with a project documentation definition.

                                Project documentation is very simple. It’s a collection of all the documents relating to a project,
                                containing core project specifications, goals to aim for, budgets, risks, and many more subjects
                                that are vital to know about. Documentation can be consulted by team members when they want to find
                                out the status of the project, what work still needs to be completed, or client requirements.
                                If you create project documents, the project has transparency and everyone is working from the same
                                playbook. You can track how well the project is going and whether it is meeting requirements. If someone
                                has a question about a previous stage of the project, you can check the documentation records for a
                                definitive answer.</p>
                                <p>Need something changed or is there something not quite working the way you envisaged?
                                Is your van a little old and tired and need refreshing? Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <h3>Benefits of Project Documentation</h3>
                            <p>There may be Project Managers out there who feel like they don’t have time to invest in making any kind
                                of project document. It’s hard enough to get a project off the ground without having to create numerous
                                documents that may or may not get read.

                                We’re here to tell you that project documentation has numerous benefits.</p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="sidebar-wrap mb-40">
                            <div class="sidebar-right">
                                <div class="sidebar-single">
                                    <label>Clients:</label>
                                    <span>Jessica Brown</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Category:</label>
                                    <span>Design, Development</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Value:</label>
                                    <span>Jessica Brown</span>
                                </div>
                                <div class="sidebar-single">
                                    <label>Date:</label>
                                    <span>20 June, 2022</span>
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
                                    <a href="brand-awareness" class="link-btn-2">
                                    <i class="fal fa-long-arrow-left"></i>
                                    Prev
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="portfolio__pagination text-end">
                                    <a href="web-design" class="link-btn-2">
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
