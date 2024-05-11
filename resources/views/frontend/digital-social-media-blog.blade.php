@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Digital & Social Media Marketing</h3>
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
                                <a href="digital-social-media-blog"><img src="{{ URL('assets/img/blog/blog-img-14.png') }}" class="img-fluid" alt="blog-img"></a>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="digital-social-media-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="digital-social-media-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="digital-social-media-blog">Digital & Social Media Marketing</a></h3>
                                <p class="mb-35">According to the dictionary, marketing is the action of promoting business’ products or
                                    services to make them more noticeable to the people and drive sales. The addition of the word ‘digital’
                                    to marketing means utilizing digital media channels to promote your products or services.
                                    Digital marketing is about the implementation of a variety of customized digital media marketing channels
                                    to achieve any of the following objectives:
                                    To grow your products or services sales and profits
                                    Create your brand awareness and build a strong relationship with your target audience
                                    Create and add value
                                    Promote your products or services or brand
                                    And many more!
                                    Remember that it is not necessary to include all available digital media marketing channels in your
                                    marketing campaign to accomplish your goals. Digital marketers develop a customized digital marketing
                                    strategy that includes the most appropriate digital marketing channels that fit your business,
                                    target audience, and of course, your budget. Using all the digital marketing channels is not a wise decision
                                    and do not have the right impact. The choice of digital media channels depends on your industry, business,
                                    and type of audience. Due to this, you often need to test, make changes, retest and measure the outcomes of
                                    your digital marketing campaigns to determine which works best for your brand or business. Based on these
                                    results, you can drop those digital marketing channels, which fail to provide satisfactory growth</p>

                                <p>Social media marketing is only one aspect of digital marketing. It implies the use of social media channels
                                    such as Facebook, Twitter, Instagram, YouTube, Goggle+, Snapchat, etc. to marketing your products, services,
                                    or brand. Typically, it involves engagement with your target audience, followers, seeking industry influencers,
                                    posting fresh and unique content, arranging contests and adopting a variety of other means to grab the
                                    attention of the audience present on different social media channels.</p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="digital-social-media-blog"><img src="{{ URL('assets/img/blog/blog-img-author.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Christive</h4>
                                    <p>WebSourceTech contributions boosted the client's conversion rate, meeting their expectations.
                                        The reliable team communicated regularly to ensure a seamless and efficient workflow. Their industry
                                        expertise and quick turnaround time were the team's highlights. Moreover, they've handled all of their
                                        services under one roof.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="digital-social-media-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Flora Murphy</h4>
                                        <p> It is a pleasure to work with the team at WebSourceTech.  They're knowledge of websites and all things
                                            digital is a breath of fresh air.  Many agencies claim to understand and know what's going on in the
                                            marketplace, but this firm really does!  They recently completed a targeted for us in a very short
                                            period of time and knocked it out of the park</p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Ethan Daniel</h4>
                                        <p>We are so pleased with the professionalism and talent that has been provided! WebSourceTech is
                                            easy to work with and knew what our goal was from the beginning. He did a fabulous job with the
                                            final outcome.  I would definitely hire WebSourceTech again. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-comment-form">
                            <div class="comment-title2">
                                <h3 class="comment-box-title"><a href="#">Leave a Comment</a></h3>
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
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">Digital & Social Media</h3>
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
