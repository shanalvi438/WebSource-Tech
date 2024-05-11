<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL('assets/img/logo/favicon.png') }}">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ URL('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/backToTop.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/swiper-bundle.css') }}">
        <link rel="stylesheet" href="{{ URL('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ URL('assets/css/whatsapp.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- //Chat Bot --}}

        {{-- <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <script type="text/javascript">
            var botmanWidget = {
                aboutText: 'WebSourceTech',
                introMessage: "I am Botman, Happy to talk with you!"
            };

        </script> --}}
        {{-- //End chat Bot --}}
    <title>Web Development Agency</title>
</head>

<body>
            <a href="https://api.whatsapp.com/send?phone=923204069243&text=Hi%21%20Can%20you%20help%20me." class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
            </a>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

<!-- header-area-start -->
<header>
    <div class="transparent-header">
        <div class="container-fluid">
            <div class="header-space">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-8">
                        <div class="header-logo">
                            <a href="{{ route('web.home') }}"><img src="{{ URL('assets/img/logo/websourcetech-logo.png') }}" class="img-fluid" alt="logo-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="menu-item-has-children"><a href="{{ route('web.home') }}">Home</a></li>
                                    <li class="menu-item-has-children"><a href="{{ route('web.service') }}">Services</a></li>
                                    <li class="menu-item-has-children"><a href="{{ route('web.project') }}">Projects</a></li>
                                    <li class="menu-item-has-children"><a href="{{ route('web.blog') }}">Blog</a></li>
                                    <li><a href="{{ route('web.contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="side-menu-icon d-xl-none text-end">
                            <button class="side-toggle"><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-2 d-none d-xl-block">
                        <div class="header-right text-end">
                            <div class="header-social">
                                <a href="https://www.facebook.com/WebSourceTechnologiess" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://www.instagram.com/websource.tech/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="header-search">
                                <a class="search-btn nav-search search-trigger" href="#"><i class="far fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
    <div class="fix">
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><img src="{{ URL('assets/img/icon/sidebar-icon-1.png') }}" class="img-fluid" alt="icon-img">31 Main
                                Jail Road, Lahore PK</li>
                            <li><img src="{{ URL('assets/img/icon/footer-icon-1.png') }}" class="img-fluid" alt="icon-img"><a
                                    href="mailto:info@websourcetech.com">info@websourcetech.com</a></li>
                            <li><img src="{{ URL('assets/img/icon/footer-icon-2.png') }}" class="img-fluid" alt="icon-img"><a
                                    href="tel:226668880000">22 666 888 0000</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
                            <a href="https://twitter.com/websourcetech" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/WebSourceTechnologiess" target="_blank"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="https://www.pinterest.com/websourcetech/" target="_blank"><i
                                    class="fab fa-pinterest-p"></i></a>
                            <a href="https://www.instagram.com/websource.tech/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
</body>

</html>
