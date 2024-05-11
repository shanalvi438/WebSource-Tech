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
                                <a href="seo-content-writing-blog"><img src="{{ URL('assets/img/blog/blog-img-12.jpg') }}" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="seo-content-writing-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="seo-content-writing-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="seo-content-writing-blog">SEO and Content writing</a></h3>
                                <p class="mb-35">More than 50% of traffic to Wiley Online Library comes directly from Google, Google Scholar,
                                    and other search engines. Wiley does everything possible to ensure that all research content is visible
                                    and high ranking in the search results of Google and other engines.
                                    It’s no secret that to rank in Google awesome content is KEY.
                                    That said: just pumping out high-quality content isn’t enough.
                                    For your content to rank, it also needs legit search engine optimization.
                                    Put another way:
                                    Amazing content + solid on-page SEO = SEO writing.
                                    SEO writing is important because Google gets an estimated 3.5 billion searches per day. This means your
                                    customers are most certainly using Google to find information.
                                    Additionally, once you rank on the first page of Google for your target keywords, you’re getting free,
                                    recurring, and highly relevant traffic to your website.
                                    In other words, SEO = money in the bank.
                                    As paid advertising costs rise and social media engagement becomes harder and harder to come by, organic
                                    traffic continues to dominate as one of the most important marketing channels any modern business can
                                    invest in.
                                </p>
                                <p>People search for information on various search engines all the time. It is extremely valuable for a
                                    website to get these specific, high-intent traffic. For any website that has a lot of articles from
                                    different writers, the content writers need to keep in mind that if the website appears high in the search
                                    results, their content would be read more, shared more, and in turn, have a better reputation. It gives
                                    them more opportunities to connect with people and help answer their questions, solve their problems,
                                    and become a trusted resource for them. This SEO content writing tip is number one for a reason. It seems
                                    easy enough, yet so many companies make content for all the wrong reasons. Write content that appeals to
                                    the interests of your target market or answers their questions. Not all posts need to be about your product
                                    or service, but they all should be industry related. Assert yourself and your company as an expert in your
                                    industry by writing SEO-friendly content that is interesting and informative, and do it better than your
                                    competition.</p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="seo-content-writing-blog"><img src="{{ URL('assets/img/blog/blog-img-author.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Christive eve</h4>
                                    <p>We put quality written content at the heart of your company's growth strategy. Our mission is to connect
                                        businesses with diverse audiences through powerful content crafted by specialized writers, managed by a
                                        team that puts people first.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="seo-content-writing-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Kevin Martin</h4>
                                        <p>A step-by-step tutorial on adding authentication and authorization to your Next.js apps, with Auth0. We’ll be using a Next.js SDK to connect our application. </p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Jessica Brown</h4>
                                        <p>Everything to keep in mind when designing and building a mega-dropdown, common pitfalls, hover entry/exit delays, trajectory triangle technique. </p>
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
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">SEO & Content Writing</h3>
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
