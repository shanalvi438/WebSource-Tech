@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">E-commerce</h3>
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
                                <a href="e-commerce-blog"><img src="{{ URL(assets/img/blog/blog-img-15.png) }}" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="e-commerce-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="e-commerce-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="e-commerce-blog">E-commerce Solution and strategy</a></h3>
                                <p class="mb-35">Are you willing to up your game in the virtual market? No worries! Our high-quality eCommerce
                                    development services and solutions aim to strengthen Customer Relations.
                                    We will help you with relaunching your website, introducing new products, SEO strategies, and newsletters.
                                    With our eCommerce development services and solutions, you will be able to increase your revenues online as
                                    we provide you with customized and modern content along with SEO and the latest data insights.
                                    In 2018, global e-commerce sales grew 22.9 percent compared to the previous year. During that period,
                                    retail e-commerce sales accounted for 12.2 percent of global retail sales.
                                    From developing, integrating, maintaining to creative marketing we have got it all! We give 100% customer
                                    satisfaction with our faster, customized Content Management System (CMS) backends. Our eCommerce developers
                                    and designers specialize in B2B and B2C e-commerce portals.
                                    We are known as the best eCommerce website development company is highly focused on creating highly
                                    compatible eCommerce websites, online stores, blogs and mobile applications for various industries like
                                    real estate, retail, education, sports, telecommunication.
                                    As an experienced providers of e-commerce development solutions, we improve our strategies while monitoring
                                    customer’s data with provisions of valuable insights, performance rate, and customer conduct.

                                </p>

                                <p>With the help of SEO, a business is able to increase the visibility of its site on search engines which
                                    helps the business to generate a higher turnover and response rate.
                                    WebSourceTech will optimize your eCommerce store according to the guidelines of search engine optimization SEO
                                    guidelines to increase your visibility in search engines to get more leads, traffic, sales, and conversions.
                                    We provide security to your valuable e-commerce websites through designing strong sites with anti-virus and
                                    anti-hacker technology that keeps your data safe and secure.
                                    We also provide product services like custom web development services, digital advertising, and catalogue
                                    production.
                                    We make sure to give our best on our client’s ecommerce project. Do you have any eCommerce website
                                    development project idea? Want to share with us? Just shout out and we are here to listen to you.
                                    We love hearing new amazing and inspiring project ideas. We will respond to your message as soon as possible.
                                    Fill out the form below to get your eCommerce store now.
                                </p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="e-commerce-blog"><img src="{{ URL(assets/img/blog/blog-img-author.jpg) }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Christive eve</h4>
                                    <p>I found this team very easy to work with. They were good at adapting to changes and fixing bugs. Well
                                        its a really good WebSource Tech company if you are starting an Ecommerce. Really a good start if its
                                        your first time working with e-commerce sites.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="e-commerce-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Grayson Leo</h4>
                                        <p>The WebSourceTech platform is really complete for developing a long term eCommerce strategy for large companies.</p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Matthew Luke</h4>
                                        <p>Hello, I am a bussiness man and looking to launch a eCommerce website development and your blog help me a lot
                                            and ehat customization i need in my website. Thanks for sharing this blog keep sharing information like this.</p>
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
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">E-commerce Solution</h3>
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
