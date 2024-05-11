@extends('layout.main')

@section('main-container')
    <main>
        <!-- page title area  -->
        <section class="page-title-area breadcrumb-spacing" data-background="{{ URL('assets/img/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-9">
                        <div class="page-title-wrapper text-center">
                            <h3 class="page-title mb-25">Contact</h3>
                            <div class="breadcrumb-menu">
                                <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin"><a href="home.html"><span>Home</span></a></li>
                                        <li class="trail-item trail-end"><span>Contact</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->

        <!-- contact area  -->
        <section class="contact-area pt-120 pb-80 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-6">
                        <div class="section-title-wrapper mb-15">
                            <h5 class="section-subtitle mb-20">contact with us</h5>
                            <h2 class="section-title">Speak with our
                                consultant</h2>
                        </div>
                        <div class="contact-info mr-50 mr-xs-0  mr-md-0">
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fad fa-comments"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>Call Anytime</span>
                                    <h5><a href="tell:+92 320 4069 243">+92 320 4069 243</a></h5>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fal fa-envelope"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>send email</span>
                                    <h5><a href="mailto:info@company.com">info@websourcetech.com</a> </h5>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                    <a href="#"><i class="fal fa-map-marker-alt"></i></a>
                                </div>
                                <div class="contact-info-text mt-10">
                                    <span>visit office</span>
                                    <h5><a href="#">Al Hammad Park 22B Street No. 11 Near Zakriya Masjid M2 Block Marghazar Colony Lahore</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6">
                        <div class="contact-form">

                            <form action="{{ route('web.store') }}" class="contact-form" method="POST">
                                @if (session('success'))
                                    <div class="alert alert-warning">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @csrf
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="name" type="text" placeholder="Your Name" required >
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="email" type="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="phone" type="text" placeholder="Phone" required>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-20">
                                        <input name="subject" type="text" placeholder="Subject" required>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 mb-20">
                                        <textarea placeholder="Write Massage" name="massage" required></textarea>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 mb-20">
                                        <button type="submit" value="submit" name="submit" class="theme-btn border-btn">Send a message</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->

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
                        <a href="service.html" class="theme-btn black-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta area end  -->

        < <!-- map area start here -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.7549048847286!2d74.2545854754052!3d31.503420074221797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919030529ce8939%3A0xd5b8bd4ed2cb64ab!2sWebSource%20Tech!5e0!3m2!1sen!2s!4v1711465792255!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3658.9879259396616!2d58.48372881497659!3d23.496944384714865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDI5JzQ5LjAiTiA1OMKwMjknMDkuMyJF!5e0!3m2!1sen!2s!4v1684321801425!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
        <!-- map area end here -->
    </main>
@endsection





