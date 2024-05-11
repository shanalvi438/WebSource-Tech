@extends('layout.main')

@section('main-container')

<main>
    <!-- page title area  -->
    <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="page-title-wrapper text-center">
                        <h3 class="page-title mb-25">Blog</h3>
                        <div class="breadcrumb-menu">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin"><a href="home.html"><span>Home</span></a></li>
                                    <li class="trail-item trail-end"><span>Blog</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end -->

    <!-- blog area start  -->
    <section class="blog-2 pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.development') }}"><img src="{{ URL('assets/img/blog/blog-img-9.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.development') }}"><i class="fal fa-user-circle"></i> by Admin</a>
                                <a href="{{ route('web.development') }}"><i class="fal fa-comments"></i> 2 Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.development') }}">Web design &
                                    Development Services</a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.development') }}">Read more <i class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.graphicDesignBlog') }}"><img src="{{ URL('assets/img/blog/blog-img-10.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.graphicDesignBlog') }}"><i class="fal fa-user-circle"></i> by Admin</a>
                                <a href="{{ route('web.graphicDesignBlog') }}"><i class="fal fa-comments"></i> 2 Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.graphicDesignBlog') }}">Graphic Design
                                    Services</a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.graphicDesignBlog') }}">Read more <i class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.digitalSocialMediaBlog') }}"><img src="{{ URL('assets/img/blog/blog-img-11.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.digitalSocialMediaBlog') }}"><i class="fal fa-user-circle"></i> by
                                    Admin</a>
                                <a href="{{ route('web.digitalSocialMediaBlog') }}"><i class="fal fa-comments"></i> 2
                                    Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.digitalSocialMediaBlog') }}">Digital &
                                    Social Media Marketing</a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.digitalSocialMediaBlog') }}">Read more <i
                                        class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.SeoContentWritingBlog') }}"><img src="{{ URL('assets/img/blog/blog-img-6.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.SeoContentWritingBlog') }}"><i class="fal fa-user-circle"></i> by
                                    Admin</a>
                                <a href="{{ route('web.SeoContentWritingBlog') }}"><i class="fal fa-comments"></i> 2 Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.SeoContentWritingBlog') }}">Seo and Content Writing Services </a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.SeoContentWritingBlog') }}">Read more <i
                                        class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.ecommerceBlog') }}"><img src="{{ URL('assets/img/blog/blog-img-7.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.ecommerceBlog') }}"><i class="fal fa-user-circle"></i> by Admin</a>
                                <a href="{{ route('web.ecommerceBlog') }}"><i class="fal fa-comments"></i>2 Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.ecommerceBlog') }}">E-commerce Solutions &
                                    Strategy</a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.ecommerceBlog') }}">Read more <i class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-40">
                    <div class="kblog">
                        <div class="kblog-img">
                            <a href="{{ route('web.AppDevelopmentBlog') }}"><img src="{{ URL('assets/img/blog/blog-img-8.jpg') }}"
                                    class="img-fluid" alt="blog-img"></a>
                        </div>
                        <div class="kblog-text">
                            <div class="kblog-meta">
                                <a href="{{ route('web.AppDevelopmentBlog') }}"><i class="fal fa-user-circle"></i> by Admin</a>
                                <a href="{{ route('web.AppDevelopmentBlog') }}"><i class="fal fa-comments"></i> 2 Comments</a>
                            </div>
                            <h3 class="kblog-text-title mb-20"><a href="{{ route('web.AppDevelopmentBlog') }}">Graphic Design & App Development</a></h3>
                            <div class="kblog-text-link">
                                <a href="{{ route('web.AppDevelopmentBlog') }}">Read more <i class="far fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end  -->
</main>

@endsection
