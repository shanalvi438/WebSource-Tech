@extends('layout.main')
@section('main-container')

    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing fix" data-background="assets/img/bg/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Pricing Plans</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Pricing Plans</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- pricing area start -->
        <section class="pricing-area pt-120 pb-90 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-wrapper text-center mb-30">
                            <div class="pricing-icon mb-25">
                                <span><i class="fal fa-star"></i></span>
                            </div>
                            <div class="pricing-price mb-25">
                                <h5 class="pricing-subtitle">Star Plan</h5>
                                <h3 class="pricing-title">$25.00</h3>
                            </div>
                            <div class="pricing-list-bg">
                                <div class="pricing-list mb-45">
                                    <ul>
                                        <li><i class="fal fa-check"></i> Extra features</li>
                                        <li><i class="fal fa-check"></i> Lifetime free support</li>
                                        <li><i class="fal fa-times cross-icon"></i> Upgrate options</li>
                                        <li><i class="fal fa-times cross-icon"></i> Full access</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="theme-btn">Choose a plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-wrapper text-center mb-30">
                            <div class="pricing-icon mb-25">
                                <span><i class="fal fa-heart"></i></span>
                            </div>
                            <div class="pricing-price mb-25">
                                <h5 class="pricing-subtitle">Heart plan</h5>
                                <h3 class="pricing-title">$35.00</h3>
                            </div>
                            <div class="pricing-list-bg">
                                <div class="pricing-list mb-45">
                                    <ul>
                                        <li><i class="fal fa-check"></i> Extra features</li>
                                        <li><i class="fal fa-check"></i> Lifetime free support</li>
                                        <li><i class="fal fa-check"></i> Upgrate options</li>
                                        <li><i class="fal fa-times cross-icon"></i> Full access</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="theme-btn">Choose a plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-wrapper text-center mb-30">
                            <div class="pricing-icon mb-25">
                                <span><i class="fal fa-gem"></i></span>
                            </div>
                            <div class="pricing-price mb-25">
                                <h5 class="pricing-subtitle">Diamond Plan</h5>
                                <h3 class="pricing-title">$45.00</h3>
                            </div>
                            <div class="pricing-list-bg">
                                <div class="pricing-list mb-45">
                                    <ul>
                                        <li><i class="fal fa-check"></i> Extra features</li>
                                        <li><i class="fal fa-check"></i> Lifetime free support</li>
                                        <li><i class="fal fa-check"></i> Upgrate options</li>
                                        <li><i class="fal fa-check"></i> Full access</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="theme-btn">Choose a plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing area end -->

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
                            <h3><a href="tell:6668880000">666 888 0000</a></h3>
                        </div>
                    </div>
                    <div class="cta-description">
                        <p>Lorem ipsum dolor sit amet nsectetur
                            cing elituspe ndisse suscipit.</p>
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
