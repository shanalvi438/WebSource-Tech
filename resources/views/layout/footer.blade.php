<!-- footer area start here -->
<footer data-background="assets/img/bg/fact-bg.jpg" class="pt-95 position-relative">
    <div class="common-shape-wrapper wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="common-shape-inner wow slideInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
    </div>
</footer>
    <!-- Footer -->

    <footer class="text-center text-lg-start bg-dark text-muted ">

        <!-- Section: Links  -->
        <section class="footer-area pb-60 pt-60">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-4 col-sm-6 mt-5">
                        <!-- Content -->
                        <div class="footer-logo mb-15">
                            <a href="#"><img src="{{ URL('assets/img/logo/websourcetech-logo.png') }}" class="img-fluid" alt="footer-logo"></a>
                        </div>
                        <p class="mb-10 pr-35">We provide quality services for our local clients in Lahore Pakistan as well as overseas
                            clients worldwide. We have developed more than 2000 plus website for our clients.</p>
                        <!-- Section: Social media -->
                            <div class="footer-social">
                                <a href="https://twitter.com/websourcetech" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/WebSourceTechnologiess" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.pinterest.com/websourcetech/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/websource.tech/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        <!-- Section: Social media End -->
                    </div>

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-6 mt-5">
                        <!-- Links -->
                        <h4 class="text-uppercase fw-bold mb-4 text-white">
                            Links
                        </h4>
                        <p>
                            <a href="{{ route('web.service') }}" class="text-reset">Our Services</a>
                        </p>

                        <p>
                            <a href="{{ route('web.webProject') }}" class="text-reset">Our Portfolio</a>
                        </p>
                        <p>
                            <a href="{{ route('web.contact') }}" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-3 col-sm-6 mt-5">
                        <!-- Links -->
                        <h4 class="text-uppercase fw-bold mb-4 text-white">Contact</h4>
                        <p></i>Al Hammad Park 22B Street No. 11 Near Zakriya Masjid M2 Block Marghazar Colony,<b> Lahore</b>.</p>
                        <p>
                        <p>
                            <a href="contact" class="text-reset">Contact</a>
                        </p>
                            <i class="fas fa-envelope me-3"></i><a href="mailto:info@websourcetech.com"class="text-reset">info@websourcetech.com</a>
                        </p>
                        <p>
                            <i class="fas fa-phone me-3"></i><a href="tel:+92 320 4069243"class="text-reset">+92 320 4069 243</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <div class="col-lg-3 col-sm-6 mt-5">
                        <!-- Links -->
                        <h4 class="text-uppercase fw-bold mb-4 text-white">
                            Newsletter
                        </h4>
                        <p class="mb-20">Subscribe to Our Newsletter for Daily News and Updates</p>
                        @if (session('send'))
                        <div class="alert alert-warning">
                            {{ session('send') }}
                        </div>
                    @endif
                        <div class="widget-newsletter">

                            <form action="{{ route('send.mail') }}" method="post">
                                @csrf
                                <input type="email" name="email"  placeholder="Email Address" >
                                        <button type="submit" >
                                            Subcribe
                                        </button>
                            </form>
                    </div>

                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            </div>
        </section>
        <!-- Section: Links  -->

        <div class="copyright-area">
        <div class="container">
            <div class="copyright-bg">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            <span>Copyright ©2022 webSourceTech.com All Rights Reserved</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="privacy-text text-center text-md-end">
                            <ul>
                                <li>
                                    <a href="faq">Terms & Condition</a>
                                    <a href="contact">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end here -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://kit.fontawesome.com/1b826abc14.js" crossorigin="anonymous"></script>
<script src="{{ URL('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL('assets/js/popper.minx.js') }}"></script>
<script src="{{ URL('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL('assets/js/metisMenu.min.js') }}"></script>
<script src="{{ URL('assets/js/ajax-form.js') }}"></script>
<script src="{{ URL('assets/js/backToTop.js') }}"></script>
<script src="{{ URL('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ URL('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL('assets/js/aos.js') }}"></script>
<script src="{{ URL('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ URL('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ URL('assets/js/venobox.min.js') }}"></script>
<script src="{{ URL('assets/js/counter-up.min.js') }}"></script>
<script src="{{ URL('assets/js/wow.min.js') }}"></script>
<script src="{{ URL('assets/js/script.js') }}"></script>

