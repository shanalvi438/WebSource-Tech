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
                                        <li class="trail-item trail-begin"><a href="service"><span>Service</span></a></li>
                                        <li class="trail-item trail-end"><span>SEO & Content Writing</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- service details area start here -->
        <section class="service-detals pt-120 pb-100 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="develop-wrapper">
                            <div class="develop-thumb">
                                <img src="{{ URL('assets/img/service/service-img-5.jpg') }}" alt="">
                            </div>
                            <div class="develop-content">
                                <h3 class="service-title">What is SEO Content?</h3>
                                <p>Let’s start off by defining what SEO content actually means. As we should all know, SEO is an acronym
                                    for Search Engine Optimisation, a method used to increase a website’s rankings in the search engines
                                    results pages and, as a result, increase website traffic. SEO content involves creating content that
                                    either educates readers, entertains them or offers a solution to a pain point; it is essentially any
                                    form of content that provides value to the reader in any shape or form. The key difference between
                                    SEO content and regular content is that you are writing for both search engines and users which means
                                    taking into consideration keywords with search volume, E-A-T, readability, alt tags on images,
                                    optimising meta data, imagery, internal linking and much more. This could be in the form of articles,
                                    blog posts, videos or images, for instance..
                                </p>
                            </div>
                        </div>

                        <div class="planning-wrapper pt-50">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="plan-thumb mb-md-40 mb-xs-40">
                                        <img src="{{ URL('assets/img/service/service-img-6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="plan-content">
                                        <h4>SEO & Content Writing</h4>
                                        <p>SEO content is any content created with the goal of attracting search engine traffic.</p>
                                        <ul>
                                            <li>Keyword Research</li>
                                            <li>Keyword Optimization</li>
                                            <li>Content Organization</li>
                                            <li>Content Promotion</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="plan-content pr-10 pt-50 pt-xs-30 pt-md-30 pb-15">
                                        <p>SEO writing is done to help content rank better on Google. If the content is not optimized, it
                                            will come up several pages back in a search. And why is it so important to get on that first page?
                                            A study found that the number of clicks that pages get depends not only on getting onto that first
                                            page of search results, it also depends greatly on getting as high up on that page as possible.
                                            The first result on the first page gets clicked on by more than 28% of people doing the searching.
                                            After that first result, the percentages go down with each spot on the page. So you need your site
                                            to be one of the first results that people see. Writing for SEO is also important because it is a
                                            marketing technique that keeps going for the life of your website. Many people do well with PPC
                                            advertising, but if they stop paying for that advertising, it will no longer bring traffic.
                                            Good SEO content keeps working for your website no matter what else you do to market your site.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="choose-right aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Does content writing include SEO?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>SEO writing is the process of writing content with the goal of ranking on the first page of search engines like Google.
                                                This is achieved by researching relevant keywords and creating optimized content that answers the user's intent.
                                                Google, for example, uses “spiders” that crawl content to see what it's about.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is copy writing and content writing the same?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>A copywriter sells your target audience to your brand. On the other hand, a content writer informs,
                                                educates, entertains, or instructs readers. Sonia Simone, founding partner of Copy blogger Media
                                                further explains the difference</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is the difference between SEO and content writing?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>The key difference between SEO content and regular content is that you are writing for both search
                                                engines and users which means taking into consideration keywords with search volume, E-A-T,
                                                readability, alt tags on images, optimising meta data, imagery, internal linking and much more</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="bg-grey">
                                <h3 class="ms-3 pl-20 pt-4">SEO Terms</h3>
                                <ul class="ms-4 ">
                                    <li class="mt-5 h5">Long-tail keywords</li>
                                    <li class="mt-5 h5">SERP: Search engine results pages</li>
                                    <li class="mt-5 h5">Search queries</li>
                                    <li class="mt-5 h5">Click-through rate</li>
                                    <li class="mt-5 h5 pb-4">Ranking factors</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service details area end here -->


        <!-- cta area  -->
        <section class="cta-area mb--60 z-index aos-init aos-animate fix" data-aos="fade-up">
            <div class="container">
                <div class="cta-bg bg-theme">
                    <div class="cta-number">
                        <div class="cta-number-icon mr-30">
                            <i class="flaticon-reaction"></i>
                        </div>
                        <div class="cta-number-text fix">
                            <span class="uppercase">Get a Free Consultation</span>
                            <h2><a href="tell:+92 320 4069 243">+92 320 4069 243</a></h2>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p>Connect with one of our Expert Strategists to Learn how WebSourceTech can help you Reach your Business Goal.</p>
                    </div>
                    <div class="cta-btn text-lg-end text-start">
                        <a href="service" class="theme-btn black-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end  -->
    </main>
@endsection
