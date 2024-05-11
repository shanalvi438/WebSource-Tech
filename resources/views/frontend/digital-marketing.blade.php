@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Digital & Social Media</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Services Details</span></li>
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
                                <h3 class="service-title">Digital Marketing</h3>
                                <p>The purpose of digital marketing is to implement a variety of digital channels to grow sales and profits,
                                    create brand awareness and customer trust, create value, and much more. Those in charge of a digital
                                    marketing strategy are responsible for testing strategies, measuring analytics, and making campaign
                                    changes to determine what strategies work best for a brand or business. They use tools like search
                                    engine optimization (SEO) tools, content creation tools, targeted social media marketing, paid
                                    social media marketing, website analytics, the list goes on. It’s not necessary to include all
                                    available digital channels in a marketing strategy. Instead, digital marketers create a customized marketing
                                    strategy that consists of the most appropriate digital marketing channels that fit your business, target
                                    audience and budget.</p>
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
                                        <h4>Marketing</h4>
                                        <p>Social media marketing uses social media platforms to create awareness about the product/</p>
                                        <ul>
                                            <li>Paid social media marketing</li>
                                            <li>Video hosting tools</li>
                                            <li>Website analytics</li>
                                            <li>Customer service tools</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="plan-content pr-10 pt-50 pt-xs-30 pt-md-30 pb-15">
                                        <h3>Social Media Marketing</h3>
                                        <p>Social media marketing focuses solely on marketing strategies distributed across social channels like
                                            Facebook, Instagram, Twitter, YouTube, Pinterest, TikTok, Snapchat, and many more.
                                            Similar to a digital marketing campaign, it’s not necessary to include all social channels in a marketing
                                            strategy. When choosing which social media platforms to use, marketers will include the social media
                                            channels that best express your brand voice, give you optimal visibility, and allow customers to engage
                                            with you the most. The social platforms chosen will also highly depend on your target audience.
                                            For example, your target audience is going to be different on Snapchat than it is on Facebook.
                                            Young users typically use Snapchat, and if you are targeting a more mature audience, Facebook will be
                                            your best option.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="choose-right aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What is difference between social media and digital media?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Digital meaning is typical defined as any online or offline method used to reach a large audience.
                                                Digital media platforms include Google and Amazon. Social media is a type of digital media,
                                                but is restricted to online platforms only. Social media includes Facebook, Twitter, and YouTube.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is social media marketing is a type of digital marketing?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Digital marketing can be broadly broken into 8 main categories including: Search Engine Optimization,
                                                Pay-per-Click, Social Media Marketing, Content Marketing, Email Marketing, Mobile Marketing,
                                                Marketing Analytics and Affiliate Marketing .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Is YouTube digital media?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>One of the biggest players in visual digital media is YouTube, which hosts billions of videos.
                                                Launched in 2005, the website is one of the most popular destinations on the web.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="bg-grey">
                                <h3 class="ms-3 pl-20 pt-4">Digital & Social Media</h3>
                                <ul class="ms-4 ">
                                    <li class="mt-5 h5">Website Marketing</li>
                                    <li class="mt-5 h5">Email Marketing</li>
                                    <li class="mt-5 h5">Content Marketing</li>
                                    <li class="mt-5 h5">Video Marketing</li>
                                    <li class="mt-5 h5 pb-4">Affiliate Marketing</li>
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
