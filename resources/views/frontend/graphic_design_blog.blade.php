@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Graphic Designing</h3>
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
                                <a href="graphic-design-blog"><img src="{{ URL('assets/img/blog/blog-img-13.jpg') }}" class="img-fluid" alt="blog-img"></a>
                                <span>21 May</span>
                            </div>
                            <div class="kblog-text kblog-text2">
                                <div class="kblog-meta">
                                    <a href="graphic-design-blog"><i class="fal fa-user-circle"></i> by Admin</a>
                                    <a href="graphic-design-blog"><i class="fal fa-comments"></i> 2 Comments</a>
                                </div>
                                <h3 class="kblog-text-title2 mb-40"><a href="graphic-design-blog">Graphic Designing</a></h3>
                                <p class="mb-35">There are no boundaries attached to what you can get from our website called <b>WebSourceTech</b> for
                                    graphic designing purpose. We provide the best graphic design services in all over the world and there is
                                    no matter for what designs are looking for whether it is a logo or the designs for spectacular flyers, Our
                                    group of talented individuals will do the work for you just choose the design you like on you can also
                                    suggest designs of your own if you like. We pursue the work given to us by full potential provide high
                                    quality designs to our valuable customers. Get the accurate graphic design tips for your brand/company
                                    form our employees. </p>

                                <p><b>Web Source Tech</b> offers great professional graphics designing services in all over the world that can
                                    take company/ brand to a whole new levelNowadays marketing is considered as the main pillar of any kind of
                                    company/ brand. Marketing is not even possible without a decent designed logo which will represent your
                                    company/ brand. WebSource Tech is one
                                    of the best and most precise companies that provide you the best graphic design services with well
                                    qualified and experienced group of individuals. Our experts of the graphic designing have the potential
                                    and strong skill to perform the given work accurately and according to the customer’s choice.
                                </p>
                            </div>
                        </div>
                        <div class="row pr-15 pl-15">
                            <div class="blog-author bg-grey">
                                <div class="blog-author-img f-left">
                                    <a href="graphic-design-blog"><img src="{{ URL('assets/img/blog/blog-img-author.jpg') }}" alt="blog-img"></a>
                                </div>
                                <div class="blog-author-text fixed">
                                    <h4>Charlotte Amelia</h4>
                                    <p>Since having our new website built by WebSourceTech, we have seen a 200% increase in the number of
                                        online contact forms being filled out and returned to us. WebSourceTech and his team worked closely
                                        with us to provide a site that met all the criteria that we were looking for. The end result was
                                        website that is attractive, organized and effective. Thanks to for all of your hard work and support!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row pr-15 pl-15">
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3 class="comment-box-title"><a href="graphic-design-blog">2 Comments</a></h3>
                                </div>
                                <div class="blog-single-comment d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Michael Martin</h4>
                                        <p>“We love the artistry, creativity and quality that WebSourceTech brought to our logo design project.
                                            He is an excellent listener and that allows him to ‘get’ the idea we had in mind and bring it to
                                            life in a way that is even better than we were imagining it ourselves.WebSourceTech gets our
                                            highest recommendation for anyone seeking a top-notch graphic designer!” </p>
                                    </div>
                                </div>
                                <div class="blog-single-comment no-pt d-flex">
                                    <div class="blog-comment-text">
                                        <h4>Raya Wrenley</h4>
                                        <p>WebSourceTech did absolutely excellent work for me designing a logo, website, and other promotional material
                                            and did it quickly! I will use WebSourceTech every time I have a need. I can say enough positive things about
                                            the experience.” </p>
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
                                        <h3 class="ms-3 bs-widget-title pl-20 pt-4">Graphic Designing</h3>
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
