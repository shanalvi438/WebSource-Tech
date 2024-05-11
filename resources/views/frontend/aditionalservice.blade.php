@extends('layout.main')


@section('main-container')
    <section class="service-area service-area2 pt-115 pb-100"
        data-background="{{ URL('assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-6 col-lg-6">
                    <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                        <h5 class="kservice-text-subtitle mb-15">All Categories List</h5>
                        <h2 class="kservice-text-title mb-40">The Our Additional <br> Services</h2>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div class="kservice-text mb-50 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
                        <p class="mb-45 mt-35 mt-md-0 mt-xs-0">Photography & Videography, Weddings, Products, Documentary,
                            Foods, Promotion, Commercial, Fashion etc..
                            <br>
                            <strong>
                                Animation,
                                Motion Graphics,
                                Banner Designing,
                                Logo Designing.
                        </p>
                        </strong>
                    </div>
                </div>
            </div>

            <div class="row custom-mar-20 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                    <div class="kservice text-center mb-20">
                        <div class="kservice-icon">
                            <i class="fas fa-draw-polygon fa-flip"></i>
                            {{-- <i class="flaticon-analytics"></i> --}}
                        </div>
                        <div class="kservice-content">
                            <h5 class="kservice-content-title"><a href="{{ route('web.webDevelopmet') }}">Motion Graphics
                                    <br>Logo Designing</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                    <div class="kservice text-center mb-20">
                        <div class="kservice-icon">
                            <i class="fa-solid fa-camera-rotate fa-flip"></i>
                            {{-- <i class="flaticon-marketing"></i> --}}
                        </div>
                        <div class="kservice-content">
                            <h5 class="kservice-content-title"><a href="{{ route('web.graphicDesigning') }}">Photography
                                    <br>Videography</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                    <div class="kservice text-center mb-20">
                        <div class="kservice-icon">
                            <i class="fa-solid fa-scroll fa-flip" style="--fa-flip-x: 1; --fa-flip-y: 0;"></i>
                            {{-- <i class="flaticon-profile"></i> --}}
                        </div>
                        <div class="kservice-content">
                            <h5 class="kservice-content-title"><a href="{{ route('web.seoDetail') }}">Banner
                                    <br>Designing</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-sm-6 custom-pad-20">
                    <div class="kservice text-center mb-20">
                        <div class="kservice-icon">
                            {{-- <i  id="div1" class="fas fa"></i> --}}
                            <div id="div1" class="fa"></div>

                            <script>
                                function smile() {
                                    var a;
                                    a = document.getElementById("div1");
                                    a.innerHTML = "&#xf118;";
                                    setTimeout(function() {
                                        a.innerHTML = "&#xf11a;";
                                    }, 1000);
                                    setTimeout(function() {
                                        a.innerHTML = "&#xf119;";
                                    }, 2000);
                                    setTimeout(function() {
                                        a.innerHTML = "&#xf11a;";
                                    }, 3000);
                                }
                                smile();
                                setInterval(smile, 4000);
                            </script>
                            {{-- <i class="flaticon-website"></i> --}}
                        </div>
                        <div class="kservice-content">
                            <h5 class="kservice-content-title mt-1 p-1"><a href="{{ route('web.digitalMarketing') }}"> Animation
                                    <br><br></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
