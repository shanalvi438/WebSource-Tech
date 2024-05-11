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
                                <h3 class="service-title">Graphic Designing Services</h3>
                                <p>At WebSourceTech Services, professionalism is an implied condition when you have opportune us with your task.
                                    The process begins at ‘blueprinting’ your thoughts in a rough sketch followed by implementing high and technologies to shape them.
                                    Regular updates on the current proceedings ensures that you stay updated about your project and do not face any complications
                                    from our side. Once we are done, you will be offered with numerous choices to make a vivid selection from our furnished options.
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
                                        <h4>Graphic Design works</h4>
                                        <p>With a variety of different types of graphic design specialties available, below are four of the most common areas.</p>
                                        <ul>
                                            <li>Brand Identity and Logo Design</li>
                                            <li>Packaging Design</li>
                                            <li>Web and Mobile Design</li>
                                            <li>Layout and Print Design</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-xxl-12">
                                    <div class="plan-content pr-10 pt-50 pt-xs-30 pt-md-30 pb-15">
                                        <p>Design is a powerful branding tool and is one of the most significant sales tools to help promote
                                            your company. Great design will help your company stand out among the competition and will assist
                                            in increasing brand awareness. WebSourceTech offers a wide range of services to help create,
                                            maintain, or improve your branding. From graphic design, illustration and logo development
                                            to our in-house digital printing and large format services, our creative team has the resources
                                            you need to be noticed in today’s competitive market. Custom Logo Design, Custom Packaging,
                                            Developing new brands and identities, Business Forms, Business Cards, Register Forms,
                                            Advertising Specialties, Calendars, Door Hangers, Employment Forms, Folded Cards, Flyers,
                                            Brochures, Letterhead, Memo and Notepads, Newsletters, Pocket Folders, Rack Cards, Reports,
                                            Table Tents, Booklets, Big Color Posters, Envelopes, Postcards and also all type of Printing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="choose-right aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            What is a graphic design company?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Graphic design agencies create visual communication materials for their clients such as logos, marketing materials and
                                                advertising. They work with their clients to identify business objectives, create strategies and implement them with a
                                                range of design, advertising, branding and marketing projects.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Why do I need a graphic designer?

                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Every company today needs the services of a graphic designer not only to create impressive marketing materials like brochures,
                                                stationery, websites, and social media designs but also to effectively communicate the message to the target audience..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What are 2 responsibilities of a graphic designer?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <p>Conceptualizing visuals based on requirements. Creating images and layouts by hand or using design software.
                                                Testing graphics across various media.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="sidebar-wrap">
                            <div class="bg-grey">
                                <h3 class="ms-3 bs-widget-title pl-20 pt-4">Categories</h3>
                                <ul class="ms-4 ">
                                    <li class="mt-5 h5">Branding design</li>
                                    <li class="mt-5 h5">new products</li>
                                    <li class="mt-5 h5">Animation design</li>
                                    <li class="mt-5 h5">Publishing design</li>
                                    <li class="mt-5 h5 pb-4">Environmental design</li>
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
