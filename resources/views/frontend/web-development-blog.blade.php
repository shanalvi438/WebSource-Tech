@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Web design & Development</h3>
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
                                <a href="web-development-blog"><img src="{{ URL('assets/img/blog/blog-img-12.jpg') }}" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="web-development-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="web-development-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="web-development-blog">Web Design & Development</a></h3>
                                <p class="mb-35">If you own a business, you need a website. This is your online shop window to sell your
                                    products or services to your target audience. But where do you start?
                                    With a small business, perhaps you simply need a couple of pages of content including your contact details.
                                    However, with a larger business, especially one that includes e-commerce, you need an expert in web
                                    development.
                                    Many people aren’t aware of just how much goes on behind the scenes with building a website.
                                    The user or client hopefully sees a well-made, clear website which is easy to navigate and use. If it
                                    includes buying a product, they will take the quickest and easiest route to buy it. They can see the
                                    website on any device in a responsive format and everything they click on is easy to do.
                                    However, it’s easy to use and look at thanks to all the work that takes place by the web developer.
                                    Or in the case of a larger website, the web development team.
                                    Web development is the structure behind building and developing a fantastic and responsive website for your
                                    business.
                                    It can start from a single static page to a comprehensive list of applications and social network services.
                                    Hence web development can include engineering, design, content development, client liaison, scripting,
                                    security and e-commerce development. Which still doesn’t cover everything.
                                    Generally speaking, it refers to the main non-design aspects of building websites, such as coding.
                                    Furthermore, web developers can design content management systems (CMS) to enable clients to change the
                                    content themselves and use basic technical skills. </p>

                                <p>An ever growing set of tools and technologies means that developers can build even more dynamic and
                                    interactive websites.
                                    For example, online retailers such as Amazon and auction sites like eBay have changed the way consumers
                                    find and buy goods.
                                    The web development teams behind those websites are making the user journey easy to enable consumers to
                                    buy as quickly as possible. Thus increasing sales. Also, the design is key in attracting consumers to
                                    the websites repeatedly.
                                    Furthermore blogs are changing the way people communicate and write about their own experiences.
                                    An excellent blog can raise interest in your business and provide users with valuable content. This is all
                                    part of the clients experience when they visit your website.
                                    Additionally, the rise in cloud services such as dropbox and google drive means that users can now interact
                                    with applications from many locations.
                                    For example, you no longer need to work on or visit a website from a single workstation. A good responsive
                                    website is accessible from any device and any location.
                                </p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="web-development-blog"><img src="{{ URL('{{ URL('assets/img/blog/blog-img-author.jpg') }}') }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Charlotte Amelia</h4>
                                    <p>Since having our new website built by WebSourceTech, we have seen a 200% increase in the number of
                                        online contact forms being filled out and returned to us. WebSourceTech and his team worked closely
                                        with us to provide a site that met all of the criteria that we were looking for. The end result was
                                        website that is attractive, organized and effective. Thanks to for all of your hard work and support!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="web-development-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Kevin Martin</h4>
                                        <p>I would highly recommend WebSourceTech Company. They are great to work with. The traffic to our
                                            website has increased thanks to their SEO program. </p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-img">
                                        <a href="#"><img src="{{ URL('assets/img/blog/blog-img-author3.png') }}" alt="blog-img"></a>
                                    </div>
                                    <div class="blog-comment-text">
                                        <h4>Jessica Brown</h4>
                                        <p>The entire process from sales through development and launch was timely and
                                            extremely efficient. A fantastic experience all around! </p>
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
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">Web Design & Development</h3>
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
