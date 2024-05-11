@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Graphic Designing & App Development</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Blog Details</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- blog details area -->
        <section class="blog-details-area  pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12">
                        <div class="kblog">
                            <div class="kblog-img">
                                <a href="app-development-blog"><img src="{{ URL('assets/img/blog/blog-img-16.jpg') }}" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="app-development-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="app-development-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="app-development-blog">Graphic Design and App Development</a></h3>
                                <p class="mb-35">Mobile application development is the set of processes and procedures involved in writing
                                    software for small, wireless computing devices, such as smartphones and other hand-held devices.
                                    Like web application development, mobile application development has its roots in more traditional software
                                    development. One critical difference, however, is that mobile apps are often written specifically to take
                                    advantage of the unique features of a particular mobile device.There are two dominant platforms in the
                                    modern smartphone market. One is the iOS platform from Apple Inc. The iOS platform is the operating system
                                    that powers Apple's popular line of iPhone smartphones. The second is Android from Google. The Android
                                    operating system is used not only by Google devices but also by many other OEMs to built their own
                                    smartphones and other smart devices. </p>

                                <p>There are over 3.5 billion smartphone users worldwide, so there is no doubt that the industry is healthy
                                    and thriving. Stats are growing steadily, without any indications of slowing down. And studies show that
                                    an average American checks their phone at least once every twelve minutes, and over 10% of these people
                                    check their phone about every four minutes. There are some more statistics to keep in mind.
                                    People spend over half of the time they spend with digital media on mobile.
                                    Smartphone users spend 90% of their screen-on time using mobile apps.
                                    Over 85% of consumers prefer native apps over mobile cross websites.
                                    Revenue from mobile apps is set to cross $693 billion in 2021.
                                    The average consumer has over 30 apps installed on their device.
                                    An average user spends about 35 hours per month using mobile apps.
                                    The mobile app development industry is going through a transformative phase. With the advancement in
                                    micro-processing technologies, you will be able to run mobile applications on multiple platforms.
                                    For example, apps built for mobiles will run seamlessly on desktops in the coming years. Moreover, mobile
                                    apps built with Flutter or React Native will work on Android Phones, iPhones, Macs, as well as PCs. But
                                    before we get more in-depth, let’s dig into the mobile app usage statistics to understand how users are
                                    spending their time using mobile phones, and what are the opportunities in building your own mobile
                                    application.
                                </p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="app-development-blog"><img src="{{ URL('assets/img/blog/blog-img-author.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Christive eve</h4>
                                    <p>I speak for the honestly and recomend WebSourceTech when I tell you how pleased we are with the website
                                        you designed for us. You have met those needs and then some. I personally want to thank you and
                                        your staff for their patience and diligence in promptly meeting each of our requests for the site
                                        during its development</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="app-development-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Jayden Gabriel</h4>
                                        <p>WebSourceTech is a great company to work with, I use them for a lot more than just building a website. It’s
                                            almost as if they are an employee. WebSourceTech is a company you can really trust. They handle my PHP
                                            development work, web design, web hosting and search engine optimization.</p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Lincoln Anthony</h4>
                                        <p>WebSourceTech is the best web development firm we have worked with as a company. dev USA has gone
                                            through this process a couple times before and the WebSourceTech team was far and away the best one
                                            we have worked with. We came in on budget and on time.  We really appreciate their creativity as well
                                            as their customer service. Thank you again.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-comment-form">
                            <div class="comment-title2">
                                <h3 class="comment-box-title">Leave a Comment</h3>
                            </div>
                            <form action="https://www.devsnews.com/template/kimox/kimox/mail.php" id="contact-form" method="POST">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="email" type="text" placeholder="Your Email">
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 mb-20">
                                        <textarea name="message" placeholder="Write Massage"></textarea>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 mb-20">
                                        <button type="submit" class="theme-btn border-btn">Submit comment</button>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-md-40 mt-xs-40">
                        <div class="sidebar-wrap">
                            <div class="sidebar-search-from mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"> <i class="fal fa-search"></i> </button>
                                </form>
                            </div>
                                <div class="sidebar-wrap">
                                    <div class="bg-grey">
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">Graphic Designing & App Development</h3>
                                        <ul class="ms-4 ">
                                            <li class="mt-5 h5">Web Development</li>
                                            <li class="mt-5 h5">Graphic Design</li>
                                            <li class="mt-5 h5">SEO &amp; Content Writing</li>
                                            <li class="mt-5 h5">Digital Marketing</li>
                                            <li class="mt-5 h5 pb-4">App Development</li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog details area end  -->
    </main>
@endsection
