
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
    
    <style type="text/css">
    .podbar {
        bottom:0;
        position:fixed;
        z-index:150;
        _position:absolute;
        _top:expression(eval(document.documentElement.scrollTop+
            (document.documentElement.clientHeight-this.offsetHeight)));
        height:auto;
        width: 100%;
    }
    
    .hero-img{
        background-position: 0 0;
    }
    
    @media only screen and (max-width: 600px) {
        .hero-img {
            background-size: 150%;
            background-position: left center;
        }
        
        .podbar .card{
            background-color: #fff0;
        }
        
        .card-phone{
            transform: scale(0.7);
            text-align: right !important;
        }
        
        .text-phone{
            display: none;
        }
        
        .button-phone{
            margin-top: 0rem !important;
            right: -5rem;
        }
    }
    
    @media only screen and (min-width: 1500px){
        .bottom-banner {
            margin-left: 300px;
        }
    }

    .app-footer {
        padding-bottom: 7rem !important;
    }

    .demo i {
      color: #bbb;
      font-size: 40px;
    }

    .demo span {
      text-transform: uppercase;
      color: #bbb;
    }
    
    .bottom-banner{
        margin-right: 0px !important;
    }

    </style>

</head>

<body>
<!--header start-->
<header class="app-header transparent-header transparent-header-dark-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="{{ route('index') }}">
                        <!-- <img class="logo-light" src="{{ asset('img/acasia/logo.png') }}" srcset="{{ asset('img/acasia/logo@2x.png 2x') }}" alt="CLab"> -->
                        <img class="logo-dark logo-header" src="{{ asset('img/acasia/ACASIA_2021.png') }}"  alt="CLab" width="145" id="headerACASIA">

                        <!--kalau besar pakai yg 2x version tau)-->

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
                    <!--extra links start-->
                    <!--extra links end-->
                    <!--start nav-->
                    <ul class="vlmenu light-sub-menu slide-effect float-right">

                        <li><a href="{{ route('about_us') }}">About Us </a>
                            <!--mega menu start-->
                            <!--mega menu end-->
                        </li>
                        <li><a href="{{ route('product_services') }}">Solutions </a>
                            <!--start level 2-->
                            <!--end level 2-->
                        </li>
                        <li><a href="{{ route('news_update') }}">News & Updates </a>
                            <!--start level 2-->
                            <!--end level 2-->
                        </li>
                        <li><a href="{{ route('experience') }}">Experience </a>
                            <!--mega menu start-->
                            <!--mega menu end-->
                        </li>
                        <li><a href="{{ route('opportunity') }}">Career </a>
                            <!--mega menu start-->
                            <!--mega menu end-->
                        </li>
                        <li class="{{ route('contact') }}"><a href="{{ route('contact') }}">Contact Us </a>
                            <!--start level 2-->
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
<div class="footer-gap bg-gray">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h6>Our Partners</h6>
                <h2 class="mb-4">The Magnificent Seven</h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dot-style-1 text-center" data-items="[7,3,2]" data-autoplay="true" data-margin="10" data-dots="true">
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
<footer class="app-footer text-md-left text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 mb-md-0 mb-4">
                <span class="pr-md-5 pr-0 py-3 border-right ">
                    <a href="{{ route('index') }}"><img class="pr-3" src="{{ asset('img/acasia/ACASIA_2021.png') }}" srcset="{{ asset('img/acasia/ACASIA_2021o.png 2x') }}" alt="" width="100" height="45"></a>
                </span>
            </div>
            <div class="col-md-6 mb-md-0 mb-4">
                <ul class="footer-link">
                    <li><a href="{{ route('about_us') }}">about us</a></li>
                    <li><a href="{{ route('product_services') }}">solutions </a></li>
                    <li><a href="{{ route('news_update') }}">news</a></li>
                    <li><a href="{{ route('opportunity') }}">career</a></li>
                </ul>
                <p class="copyright">&copy; 2020 ACASIA Communications Sdn Bhd.</p>
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

<!--<div class="podbar">-->
<!--    <section class="card border-0 rounded-0 p-3">-->
<!--        <div class="hero-img overflow-hidden" data-overlay="2" style="background-image: url('/img/webinar/series2/1903 x 76.png'); max-width: 100%; object-fit: contain;"></div>-->
<!--        <div class="container bottom-banner">-->
<!--            <div class="row justify-content-center align-items-center text-center text-white card-phone">-->
<!--                <div class="col-md-8 text-md-right text-phone">-->
<!--                    <h class="d-inline-block mb-0">Our first ACASIA Webinar session! </h>-->
<!--                </div>-->
<!--                <div class="col-md-4 mt-md-0 mt-3 text-md-left button-phone">-->
<!--                    <a href="{{ route('webinar-register') }}" class="btn btn-pill btn-outline">Register Now</a>-->
<!--                </div><!-- -->
<!--                <div class="col-md-3 mt-md-0 mt-3 text-md-left">-->
<!--                    <div class="timer demo"></div>-->
<!--                </div> -->-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--</div>-->

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
<script src="{{ asset('js/scripts3.js') }}"></script>


</body>
</html>
