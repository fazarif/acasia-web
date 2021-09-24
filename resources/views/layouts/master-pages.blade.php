
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="http://ams.acasia.net/img/acasia-favicon.png">

    <title>ACASIA</title>

    <!--web fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400i" rel="stylesheet">

    <!--basic styles-->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/custom-icon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/vl-nav/css/core-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl/assets/owl.theme.default.min.css') }}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('swiper-master/package/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('swiper-master/package/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('show-more/showmore-default.css') }}">
    

    <!--[if (gt IE 9) |!(IE)]><!-->
    <!--<link rel="stylesheet" href="assets/vendor/custom-nav/css/effects/fade-menu.css"/>-->
    <link rel="stylesheet" href="{{ asset('vendor/vl-nav/css/effects/slide-menu.css') }}"/>
    <!--<![endif]-->

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178761027-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-178761027-1');
    </script>
</head>

<body>
    
@yield('style')

<!--header start-->
<header class="app-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="{{ route('index') }}">
                        <img class="logo-light" src="{{ asset('img/acasia/ACASIA_2021.png') }}" srcset="{{ asset('img/acasia/ACASIA_2021.png 2x') }}" alt="CLab">
                        <img class="logo-dark logo-header" src="{{ asset('img/acasia/ACASIA_2021.png') }}" srcset="{{ asset('img/acasia/ACASIA_2021.png 2x') }}" alt="CLab" width="80">
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">
                    <!--extra links end-->
                    <!--start nav-->
                    <ul class="vlmenu light-sub-menu slide-effect float-right">
                        <li><a href="{{ route('about_us') }}"> About Us </a></li>
                        <li><a href="{{ route('product_services') }}"> Solutions </a></li>
                        <li><a href="{{ route('news_update') }}"> News & Updates </a></li>
                        <li><a href="{{ route('experience') }}"> Experience </a></li>
                        <li><a href="{{ route('opportunity') }}"> Career </a></li>
                        <li class="menu-right"><a href="{{ route('contact') }}"> Contact Us </a></li>
                            <!--start level 2-->
                            <ul>
                                <li>
                                    <a href="mailto:dkmosa@gmail.com?subject=Clab-Support" class="d-flex">
                                        <i class="vl-support font-size-20"></i>
                                        <div class="font-weight-700">Get Support</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://thevectorlab.net/clab-doc" target="_blank" class="d-flex">
                                        <i class="vl-file font-size-20"></i>
                                        <div class="font-weight-700">Online Documentation</div>
                                    </a>
                                </li>
                            </ul>
                            <!--end level 2-->
                        </li>
                    </ul>
                    <!--end nav-->

                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->

@yield('main-body')


<!--clients start-->
<div class="footer-gap" style="background-color: white;">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-lg-4 mb-4">
                <h6>Our Partners</h6>
                <h2>The Magnificent Seven</h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dot-style-1 text-center" data-items="[7,5,3]" data-autoplay="true" data-margin="10" data-dots="true">
                    <div class="item">
                        <a href="https://www.tm.com.my/Pages/Home.aspx" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_tm.png') }}" alt=""></a>
                    </div>
                    <div class="item" style="margin-top: 10px;">
                        <a href="https://www.cattelecom.com/cat/index.php" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/CAT_2021.png') }}" alt="" ></a>
                    </div>
                    <div class="item">
                        <a href="http://indosat.com/id/personal" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_indosat.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="https://pldthome.com/" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_pldt.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="https://www.singtel.com/" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_singtel.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="http://www.telbru.com.bn/" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_nexus.png') }}" alt="" style="transform: scale(0.7);"></a>
                    </div>
                    <div class="item">
                        <a href="http://www.vnpt.vn/" target="_blank"><img class="clients-thumb" src="{{ asset('img/clients/acasia_vnpt.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--clients end-->

<!--footer start-->
<footer class="app-footer text-md-left text-center bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 mb-md-0 mb-4">
                <span class="pr-md-5 pr-0 py-3 border-right ">
                    <a href="{{ route('index') }}">
                    <img class="pr-3" src="{{ asset('img/acasia/ACASIA_2021.png') }}" srcset="{{ asset('img/acasia/ACASIA_2021.png 2x') }}" alt="" width="100" height="45"></a>
                </span>
            </div>
            <div class="col-md-6 mb-md-0 mb-4">
                <ul class="footer-link">
                    <li><a href="{{ route('about_us') }}">about us</a></li>
                    <li><a href="{{ route('product_services') }}">solutions </a></li>
                    <li><a href="{{ route('news_update') }}">news</a></li>
                    <li><a href="{{ route('opportunity') }}">career</a></li>
                </ul>
                <p class="copyright">&copy; 2020 ACASIA Communications.</p>
                <p class="copyright"> All rights reserved.</p>
            </div>
            <div class="col-md-4 text-md-right">
                <ul class="footer-link social-links">
                    <li><a href="https://www.facebook.com/acasiacomms" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/acasiacomms/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
                <p class="copyright">Support: inquiry@acasia.net</p>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!--basic scripts-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/vl-nav/js/vl-menu.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/owl/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('vendor/typist.js') }}"></script>
<script src="{{ asset('vendor/jquery.isotope.js') }}"></script>
<script src="{{ asset('vendor/imagesloaded.js') }}"></script>
<script src="{{ asset('vendor/visible.js') }}"></script>
<script src="{{ asset('vendor/wow.min.js') }}"></script>

<!--basic scripts initialization-->
<script type="text/javascript"> var flagsUrl = '{{ asset("img/acasia/") }}' </script>
<script src="{{ asset('js/scripts.js') }}"></script>

<script src="{{ asset('swiper-master/package/js/swiper.js') }}"></script>
<script src="{{ asset('swiper-master/package/js/swiper.min.js') }}"></script>
<script src="{{ asset('show-more/jquery.show-more.js') }}"></script>

</body>
</html>
