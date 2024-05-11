@extends('layout.main')

@section('main-container')

<main>
    <!-- page title area  -->
    <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="page-title-wrapper text-center">
                        <h3 class="page-title mb-25">Projects</h3>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="home.html"><span>Home</span></a></li>
                                    <li class="trail-item trail-end"><span>Project</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- project area start  -->
    <section class="project-2 pt-115 pb-90 fix">
        <div class="container">

            <div class="row aportfolio-active" style="position: relative; height: 878.934px;">
                <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-5.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-5.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Frontend</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.WebProjects') }}">Web Project</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.WebProjects') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-6.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-6.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Design</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.WebDesigns') }}">Web Design</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.WebDesigns') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat3">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-7.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-7.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>SEO</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.ContentWritings') }}">SEO & Content
                                        writing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.ContentWritings') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-8.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-8.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Marketing</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.digitalMarketing') }}">Digital Media Marketing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.digitalMarketing') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat2 cat4">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-9.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-9.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Marketing</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.SocialMediaMarketing') }}">Social Media Marketing</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.SocialMediaMarketing') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat4">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-10.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-10.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Design</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.graphicDesigning') }}">Graphic Design Project</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.graphicDesigning') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat4"
                    style="position: absolute; left: 66.6667%; top: 439px;">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-11.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-11.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Development</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.webDesignProject') }}">Recently complete project</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.webDesignProject') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat4"
                    style="position: absolute; left: 66.6667%; top: 439px;">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-12.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-12.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Networking</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.ecommerce') }}">E-commerce solution</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.ecommerce') }}"><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grid-item cat1 cat4"
                    style="position: absolute; left: 66.6667%; top: 439px;">
                    <div class="kproject kproject-2 mb-30">
                        <a href="{{ URL('assets/img/project/project-img-13.jpg') }}" data-gall="myGallery" class="venobox"><img
                                src="{{ URL('assets/img/project/project-img-13.jpg') }}" class="img-fluid" alt="project_img"></a>
                        <div class="kproject-text kproject-text-2">
                            <div class="kproject-text-content">
                                <span>Brand</span>
                                <h5 class="kproject-text-title"><a href="{{ route('web.brandAwareness') }}">brand awareness strategy</a></h5>
                            </div>
                            <div class="kproject-text-icon">
                                <a href="{{ route('web.brandAwareness') }}"><i class="fal fa-long-arrow-right"></i></a>
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
