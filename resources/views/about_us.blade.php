@extends('layouts.master-pages')

@section('main-body')

<!--page title start-->
<section class="section-gap section-tab bg-gray text-center">
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url( {{ asset('img/about-banner.jpg') }});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="col-md-7">
                <!-- heading -->
                <h2>
                    About Us
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<div class="component-footer bg-gray">
    <!-- tab -->
    <div class="text-center">
        <div class="col-md-12">
            <h2 class="mb-4">We Craft ICT Solutions to Take Your Business Across ASEAN and Global</h2>
        </div>
        <ul class="portfolio-filter mb-4">
            <li class="active"><a href="#" data-filter="*" id="companyProfileBtn">Company Profile</a></li>
            <li><a href="#" id="visionBtn">Vision and Mission</a></li>
            <!-- <li><a href="#" id="partnerBtn">Our Partners</a></li> -->
            <li><a href="#" id="bodBtn">Board of Directors</a></li>
            <li><a href="#" id="managementBtn">Management</a></li>
        </ul>
    </div>
    <!-- tab header -->
</div>

<!--about us start-->
<div id="companyProfileSection">

<div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="section-gap">
                    <div class="container">
                        <img class="block-image custom-background" style="opacity: 0.4;">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-5">
                                <h6>Company profile</h6>
                                <h2 class="mb-4">Universally Connected</h2>
                                <p class="text-muted">Incorporated in 1995 in Kuala Lumpur, Malaysia, ACASIA Communications Sdn Bhd is a unique ASEAN collaboration among 7 leading telecommunications providers in the region - TM (Malaysia), CAT (Thailand), Indosat (Indonesia), PLDT (Philippines), Singtel (Singapore), Nexus (Brunei) and VNPT (Vietnam).</p>
                                <p class="text-muted">In the spirit of ASEAN, ACASIA is fully equipped with a comprehensive suite of connectivity services and digital infrastructure to serve a multitude of verticals ranging from people, small medium enterprises (SMEs), multinationals, broadcasters, telcos, financial institutions, education sectors and government agencies via our seamless ICT Solutions.</p>
                                <p class="text-muted">Made to connect the dots between the ASEAN region and Global, we leverage on strengths of our shareholders and ready to play a significant role in the digital transformation connecting ASEAN and global business.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="owl-carousel owl-theme dot-style-1 nav-round" data-items="[1,1]" data-margin="30" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true">
                                    <div class="item">
                                        <a href="#" class="card border-0">
                                            <img class="card-img rounded" src="{{ asset('/img/acasia/Shareholder Updated as MCMC.png') }}" alt="card image" />
                                        </a>
                                    </div>
                                    <!--<div class="item">-->
                                    <!--    <a href="#" class="card border-0">-->
                                    <!--        <img class="card-img rounded" src="{{ asset('img/acasia/acasia_new.png') }}" alt="card image" />-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                    <div class="item">
                                        <a href="#" class="card border-0">
                                            <img class="card-img rounded" src="{{ asset('/img/acasia/Corporate Structure_2021.png') }}" alt="card image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--about us end-->
            </div>
            <div class="swiper-slide">
                    <!--gallery start-->
                    <div class="section-gap bg-dark text-white" style="min-height: 90vh;">
                        <div class="container">
<!--                             <div class="row justify-content-between align-items-center">
                                <div class="col-md-6 mb-lg-0 mb-0">
                                    <h6>Initiatives</h6>
                                    <h2 class="mb-4">Our Every Journey Starts From Within, Infinity and Beyond.</h2>
                                </div>
                            </div> -->
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-5">
<!--                                     <h6>Company profile</h6> -->
                                    <h2 class="mb-4">Our Every Journey Starts From Within, Infinity and Beyond.</h2>
                                    <p class="text-white">Philosophically, ACASIA adopted the legend of the Phoenix, which symbolizes cyclical regeneration, breathing new life by rising from the ashes of its predecessor.</p>
                                    <p class="text-white">Our journey began in June 1995, where we offered telecommunication services as our core business and later in 2015, we relaunched with new business direction and continued to serve a multitude of verticals within ASEAN via seamless connectivity services and ICT solutions.</p>
                                    <p class="text-white">2021 marks the growth of ACASIA beyond ASEAN. We expand our footprint by reaching out to the Global business.</p>
                                    <p class="text-white">Throughout the 25 years journey, ACASIA actively transformed in meeting market demand and technological advancement, now becoming a Universally Connected ASEAN Telco, Beyond ASEAN. </p>
                                </div>
                                <div class="col-md-7">
                                    <div class="owl-carousel owl-theme dot-style-1 nav-round" data-items="[1,1]" data-margin="30" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true">
                                        <div class="item">
                                            <a href="#" class="card border-0">
                                                <img class="card-img rounded" src="{{ asset('/img/acasia/Milestone_2.png') }}" alt="card image" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                         <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-md-11 mb-lg-3 mb-0">
                                    <p class="text-muted">Philosophically, ACASIA adopted the legend of the Phoenix, which symbolizes cyclical regeneration, breathing new life by rising from the ashes of its predecessor. This year 2020, we celebrate our 25 years of camaraderie since our incorporation in 1995.</p>
                                    <p class="text-muted mb-lg-3 mb-4">Our journey began in June 1995, where we offered telecommunication services as our core business and later in 2015, we relaunched with new a business direction and continued to serve a multitude of verticals within ASEAN via seamless connectivity services and ICT solutions. In line with recent IR 4.0, we have forged ahead by embracing the digital culture – aspiring to be ASEAN’s Digital Lifestyle Enabler.</p>
                                </div>
                            </div>
                        </div> -->
<!--                         <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="portfolio-grid portfolio-gallery grid-4 gutter">
                                        <div class="portfolio-item cat1 cat3 cat5">
                                            <a href="{{ route('product_services') }}" class="portfolio-image" title="SOFEA Run">
                                                <img src="{{ asset('img/product/SOFEA Run.jpg') }}" alt=""/>
                                                <div class="portfolio-title">
                                                    <div class="portfolio-content">
                                                        <h6 class="text-white">SOFEA Run</h6>
                                                        <div class="portfolio-category">
                                                            <span>Healthy Lifestyle</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="portfolio-item cat2 cat3 cat4">
                                            <a href="{{ route('product_services') }}" class="portfolio-image" title="SOFEA+">
                                                <img src="{{ asset('img/product/SOFEA.jpg') }}" alt=""/>
                                                <div class="portfolio-title">
                                                    <div class="portfolio-content">
                                                        <h6 class="text-white">SOFEA+</h6>
                                                        <div class="portfolio-category">
                                                            <span>Safer Community</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="portfolio-item cat1 cat2 cat3">
                                            <a href="{{ route('product_services') }}" class="portfolio-image" title="TREX Esports">
                                                <img src="{{ asset('img/product/TREX Esports.jpg') }}" alt=""/>
                                                <div class="portfolio-title">
                                                    <div class="portfolio-content">
                                                        <h6 class="text-white">TREX Esports</h6>
                                                        <div class="portfolio-category">
                                                            <span>The Digital Wave</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="portfolio-item cat1 cat4">
                                            <a href="{{ route('product_services') }}" class="portfolio-image" title="aRC">
                                                <img src="{{ asset('img/product/aRC.jpg') }}" alt=""/>
                                                <div class="portfolio-title">
                                                    <div class="portfolio-content">
                                                        <h6 class="text-white">aRC</h6>
                                                        <div class="portfolio-category">
                                                            <span>Connecting ASEAN</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    
                    <!--gallery end-->
                </div>
            </div>
        </div>

        <div class="swir-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    
</div>

    <!--image block start-->
    <section class="section-gap" style="min-height: 90vh;">
        <img class="block-image" src="{{ asset('img/parallax/team3.png') }}" alt="Image" style="transform: scale(1.02);">
        <div class="container">
            <div class="row justify-content-start">
<!--                 <div class="col-10 col-md-6">
                    <div class="p-md-5 p-3 rounded bg-white">
                        <h5 class="mb-4">
                            Never Discount Yourself !
                        </h5>
                        <p class="text-muted font-lora">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod lorem ipsum
                        </p>
                        <p>- M Satya Riayatsyah, CEO of ACASIA Communications</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--image block end-->

</div>

<div id="visionSection">
        <!--goal start-->
    <div class="section-gap bg-gray" style="min-height: 100vh; z-index: 1;">
        <img class="block-image" src="{{ asset('img/parallax/p20.jpg') }}" alt="Image">
        <div class="container">
            <div class="row justify-content-between align-items-center" style="position: absolute; display: block;">
                <div class="col-md-5 mb-lg-5 mb-4">
                    <h6 class="text-white">Our goal</h6>
                    <h2 class="mb-4 text-white">We are here to solve your problems and deliver your needs</h2>
                </div>
                <div class="col-md-5 col-sm-3 mb-lg-5 mb-4 pt-lg-5 pt-2 aboutUs">
                    <h4 class="text-dark bg-white">&nbspMission</h4>
                    <p class="text-light">Connecting ASEAN communities and businesses as One ASEAN.</p>
                </div>
                <div class="col-md-5 mb-lg-5 mb-4 aboutUs">
                    <h4 class="text-dark bg-white">&nbspVision</h4>
                    <p class="text-light">ASEAN’s preferred Integrated Communications Provider.</p>
                </div>
            </div>
        </div>
    </div>
    <!--goal end-->
</div>

<div id="bodSection">

    <div class="section-gap" style="border-bottom: 1px solid; border-bottom-color: #f5ecec;">
        <img class="block-image custom-background" style="opacity: 0.4;">        
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 mb-lg-0 mb-0">
                    <!-- <h6>Initiatives</h6> -->
                    <h6>Our</h6>
                    <h2 style="margin-bottom: 2.5rem;" class="text-dark">Board of Directors</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- <div class="owl-carousel owl-theme dot-style-2 nav-circle" data-items="[4,4,4]" data-margin="20" data-nav="true" data-dots="true"> -->
            <div class="portfolio-grid grid-4 gutter">
                <div class="portfolio-item">
                    <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=0 data-src="{{ asset('/img/acasia/bod/TM 2_2021.png') }}">

                    <div class="team-hover card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/TM 22_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Amar Huzaimi Md. Deris</h6>
                                    <p class="mb-1">Chairman of ACASIA Communications Sdn Bhd / </p>
                                    <p class="mb-0">Executive Vice President</p>
                                    <p>TM WHOLESALE of TM</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                    </div>
                    </a>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=1 data-src="{{ asset('/img/acasia/bod/Indosat_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/Indosat_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>M. Askal Fansuri</h6>
                                    <p class="mb-0">Group Head</p>
                                    <p>International Business & Carrier of Indosat</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=2 data-src="{{ asset('/img/acasia/bod/PLDT_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/PLDT_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Juan Victor I. Hernandez</h6>
                                    <p class="mb-1">President and CEO -  ePLDT Group</p>
                                    <p class="mb-0">Senior Vice President and Head</p>
                                    <p>of PLDT Smart Enterprise Business Groups</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=3 data-src="{{ asset('/img/acasia/bod/Singtel_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/Singtel_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Ooi Seng Keat</h6>
                                    <p class="mb-0">Vice President </p>
                                    <p>Carrier Services of Singtel</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        
        </div>

        <div class="container" style="padding-top: 1rem;">
            <!-- <div class="owl-carousel owl-theme dot-style-2 nav-circle" data-portfolio-items="[4,4,4]" data-margin="20" data-nav="true" data-dots="true"> -->
            <div class="portfolio-grid grid-4 gutter">

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=4 data-src="{{ asset('/img/acasia/bod/TM 1_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/TM 11_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Mohd Roslan Mohd Rashidi</h6>
                                    <p class="mb-0">Vice President (Sales)</p>
                                    <p>TM ONE of TM</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <!--<div class="portfolio-item">-->
                <!--    <div class="team-hover card border-0">-->
                <!--        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=5 data-src="{{ asset('/img/acasia/bod/CAT.png') }}">-->
                <!--        <img class="card-img rounded" src="{{ asset('/img/acasia/bod/CAT.png') }}" alt="" />-->
                <!--        <div class="team-info">-->
                <!--            <div class="team-title">-->
                <!--                <h6>Dr. Dhanant Subhadrabandhu</h6>-->
                <!--                <p class="mb-0">Senior Executive Vice President</p>-->
                <!--                <p>Marketing & Service of CAT</p>-->
                <!--            </div>-->
                <!--             <div class="team-social-links">-->
                <!--                <a href="#"><i class="fab fa-facebook-f"></i></a>-->
                <!--                <a href="#"><i class="fab fa-twitter"></i></a>-->
                <!--                <a href="#"><i class="fab fa-google-plus-g"></i></a>-->
                <!--                <a href="#"><i class="fab fa-dribbble"></i></a>-->
                <!--            </div> -->-->
                <!--        </div>-->
                <!--        </a>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=6 data-src="{{ asset('/img/acasia/bod/VNPT_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/VNPT_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Lam Quoc Cuong</h6>
                                    <p class="mb-0">Managing Director</p>
                                    <p>of VNPT International</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=7 data-src="{{ asset('/img/acasia/bod/nexus_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/bod/NEXUS_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Muhammad Hafiz Haslen</h6>
                                    <p class="mb-0">Investment Associate</p>
                                    <p>of Darussalam Assets Sdn Bhd</p>
                                </div>
                                <!-- <div class="team-social-links">-->
                                <!--    <a href="#"><i class="fab fa-facebook-f"></i></a>-->
                                <!--    <a href="#"><i class="fab fa-twitter"></i></a>-->
                                <!--    <a href="#"><i class="fab fa-google-plus-g"></i></a>-->
                                <!--    <a href="#"><i class="fab fa-dribbble"></i></a>-->
                                <!--</div> -->-->
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        
        </div>

            <!-- modal -->
            <div class="modal custom-modal fade" id="popupModal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="container bg-gray">
                            <div class="row py-3">
                                <div class="col-md-4" style="padding-right: 0px;">
                                    <div class="card border-0 mb-md-0 mb-3 px-0">
                                        <div class="position-relative">
                                            <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="" id="bodModalImage">
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="d-flex align-items-center justify-content-between text-center">
                                                <div style="margin-right: auto; margin-left: auto;">
                                                    <span id="bodModalName">SATYA RIAYATSYAH SYAFRUDDIN</span>
                                                    <span class="text-muted d-block font-size-16" id="bodModalTitle">Chief Executive Officer</span>
                                                    <span class="text-muted d-block font-size-16" id="bodModalFrom">of ACASIA</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card border-0 mb-md-0 mb-3" style="text-align: left;">
                                        <div class="card-body" style="text-align: justify;">
                                            <p class="text" style="font-size: 13px;" id="bodModalProf">
                                                Appointed as Chief Operating Officer in 1st March, Syahrir Nizam is an experienced technologist who has a history of 17 years stint in the telecommunication industry.
                                            <br><br>
                                                Prior to joining ACASIA, he was a Service Architect in TM ONE, an Enterprise arm of Telekom Malaysia Berhad. His experience includes areas of Sales, Service Management, Enterprise Solutioning and Product management focusing on Connectivity, SDN/NFV, SDWAN, Big Data Analytics, Smart Services and Security.
                                            <br><br>
                                                Nizam's professional qualifications include both a Certified Internetwork Associates and Cisco Network Professional, a Riverbed Authorized Support Partner - SDW and a specialization in Data Science from the University of John Hopkins, US. He also attended the leadership programme by Cranfield University, UK.
                                            <br><br>
                                                He graduated from University of Surrey, United Kingdom with a Masters of Science in Telecommunication Engineering and Bachelor of Engineering (Electronics), Multimedia University, Malaysia.
                                            <br><br>
                                                In his capacity as Chief Operating Officer (COO), he oversees the salesforce, product , solutions as well as the fulfilment and assurance team.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<!-- bodSection closing -->
</div>

<div id="managementSection">



    <section class="section-gap">
        <img class="block-image custom-background" style="opacity: 0.4;">        
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 mb-lg-0 mb-0">
                    <!-- <h6>Initiatives</h6> -->
                    <h2 class="mb-4">Management Team</h2>
                </div>
            </div>
        </div>
        <!-- first row -->
        <div class="container"> 
            <!-- <div class="owl-carousel owl-theme dot-style-2 nav-circle" data-items="[4,4,4]" data-margin="20" data-nav="true" data-dots="true"> -->
            <div class="portfolio-grid grid-3 gutter">

                <div class="portfolio-item">
                    <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=0 data-src="{{ asset('/img/acasia/mng/CEO_2021.png') }}">

                    <div class="team-hover card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/mng/CEO_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>M Satya Riayatsyah Syafruddin</h6>
                                    <p>Chief Executive Officer</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                    </div>
                    </a>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=1 data-src="{{ asset('/img/acasia/mng/CCO_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/mng/CCO_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Syahrir Nizam Jalis</h6>
                                    <p>Chief Commercial Officer</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=2 data-src="{{ asset('/img/acasia/mng/CFO_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/mng/CFO_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Kamal Ariffin Ahmad Nor</h6>
                                    <p>Chief Financial Officer</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                        </div>
                        </a>
                    </div>
                </div>


            </div>
            

            <!-- modal -->
            <div class="modal custom-modal fade" id="mngModal" tabindex="-1" role="dialog" aria-hidden="false">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="container bg-gray">
                            <div class="row py-3">
                                <div class="col-md-4" style="padding-right: 0px;">
                                    <div class="card border-0 mb-md-0 mb-3 px-0">
                                        <div class="position-relative">
                                            <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="" id="mngModalImage">
                                        </div>
                                        <div class="card-footer border-0">
                                            <div class="d-flex align-items-center justify-content-between text-center">
                                                <div style="margin-right: auto; margin-left: auto;">
                                                    <span id="mngModalName">SATYA RIAYATSYAH SYAFRUDDIN</span>
                                                    <span class="text-muted d-block font-size-16" id="mngModalTitle">Chief Executive Officer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card border-0 mb-md-0 mb-3" style="text-align: left;">
                                        <div class="card-body" style="text-align: justify;">
                                            <p class="text" style="font-size: 13px;" id="mngModalDesc">
                                                Appointed as Chief Operating Officer in 1st March, Syahrir Nizam is an experienced technologist who has a history of 17 years stint in the telecommunication industry.
                                            <br><br>
                                                Prior to joining ACASIA, he was a Service Architect in TM ONE, an Enterprise arm of Telekom Malaysia Berhad. His experience includes areas of Sales, Service Management, Enterprise Solutioning and Product management focusing on Connectivity, SDN/NFV, SDWAN, Big Data Analytics, Smart Services and Security.
                                            <br><br>
                                                Nizam's professional qualifications include both a Certified Internetwork Associates and Cisco Network Professional, a Riverbed Authorized Support Partner - SDW and a specialization in Data Science from the University of John Hopkins, US. He also attended the leadership programme by Cranfield University, UK.
                                            <br><br>
                                                He graduated from University of Surrey, United Kingdom with a Masters of Science in Telecommunication Engineering and Bachelor of Engineering (Electronics), Multimedia University, Malaysia.
                                            <br><br>
                                                In his capacity as Chief Operating Officer (COO), he oversees the salesforce, product , solutions as well as the fulfilment and assurance team.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="container">
            <!-- <div class="owl-carousel owl-theme dot-style-2 nav-circle" data-items="[4,4,4]" data-margin="20" data-nav="true" data-dots="true"> -->
            <div class="portfolio-grid grid-3 gutter justify-content-center">

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=2 data-src="{{ asset('/img/acasia/mng/CTO_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/mng/CTO_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Hasna Hashim</h6>
                                    <p>Chief Technology Officer</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                        </div>
                        </a>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="team-hover card border-0">
                        <a href="#" class="portfolio-image" title="" data-toggle="modal" data-target="#" data-value=3 data-src="{{ asset('/img/acasia/mng/DOS_2021.png') }}">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/mng/DOS_2021.png') }}" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Suzanna Mohd Janis</h6>
                                    <p>Chief Strategy Officer</p>
                                </div>
<!--                                 <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div> -->
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
<!--         <div class="container">
            <div class="list-group list-group-gap list-group-right-arrow list-group-right-arrow-on-hover" style="text-align: center;">
                <a href="#collapseCEO" class="list-group-item border-0 bg-gray" data-toggle="collapse" role="button" aria-expanded="false">
                    <p class="lead mb-0" style="color: #4a4a4a;">SATYA RIAYATSYAH SYAFRUDDIN</p></a>
                <div class="container mb-4 collapse" id="collapseCEO">
                    <div class="row">
                        <div class="col-md-4 px-0">
                            <div class="card border-0 mb-md-0 mb-3 px-0 bg-gray">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="">
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex align-items-center justify-content-between text-center">
                                        <div style="margin-right: auto; margin-left: auto;">
                                            SATYA RIAYATSYAH SYAFRUDDIN
                                            <span class="text-muted d-block font-size-16">Chief Executive Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-right: 0px;">
                            <div class="card border-0 mb-md-0 mb-3 bg-gray" style="text-align: left;">
                                <div class="card-body" style="text-align: justify;">
                                    <p class="text">
                                        Appointed as Chief Operating Officer in 1st March, Syahrir Nizam is an experienced technologist who has a history of 17 years stint in the telecommunication industry.
                                    </p>
                                    <p class="text">
                                        Prior to joining ACASIA, he was a Service Architect in TM ONE, an Enterprise arm of Telekom Malaysia Berhad. His experience includes areas of Sales, Service Management, Enterprise Solutioning and Product management focusing on Connectivity, SDN/NFV, SDWAN, Big Data Analytics, Smart Services and Security.
                                    </p>
                                    <p class="text">
                                        Nizam's professional qualifications include both a Certified Internetwork Associates and Cisco Network Professional, a Riverbed Authorized Support Partner - SDW and a specialization in Data Science from the University of John Hopkins, US. He also attended the leadership programme by Cranfield University, UK.
                                    </p>
                                    <p class="text">
                                        He graduated from University of Surrey, United Kingdom with a Masters of Science in Telecommunication Engineering and Bachelor of Engineering (Electronics), Multimedia University, Malaysia.
                                    </p>
                                    <p class="text">
                                        In his capacity as Chief Operating Officer (COO), he oversees the salesforce, product , solutions as well as the fulfilment and assurance team.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#collapseCOO" class="list-group-item border-0 bg-gray" data-toggle="collapse" role="button" aria-expanded="false">
                <p class="lead mb-0" style="color: #4a4a4a;">SYAHRIR NIZAM JALIS</p></a>
                <div class="container mb-4 collapse" id="collapseCOO">
                    <div class="row">
                        <div class="col-md-4 px-0">
                            <div class="card border-0 mb-md-0 mb-3 px-0">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="">
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex align-items-center justify-content-between text-center">
                                        <div style="margin-right: auto; margin-left: auto;">
                                            SYAHRIR NIZAM JALIS
                                            <span class="text-muted d-block font-size-16">Chief Operating Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-right: 0px;">
                            <div class="card border-0 mb-md-0 mb-3" style="text-align: left;">
                                <div class="card-body" style="text-align: justify;">
                                    <p class="text">
                                        Appointed as Chief Operating Officer in 1st March, Syahrir Nizam is an experienced technologist who has a history of 17 years stint in the telecommunication industry.
                                    </p>
                                    <p class="text">
                                        Prior to joining ACASIA, he was a Service Architect in TM ONE, an Enterprise arm of Telekom Malaysia Berhad. His experience includes areas of Sales, Service Management, Enterprise Solutioning and Product management focusing on Connectivity, SDN/NFV, SDWAN, Big Data Analytics, Smart Services and Security.
                                    </p>
                                    <p class="text">
                                        Nizam's professional qualifications include both a Certified Internetwork Associates and Cisco Network Professional, a Riverbed Authorized Support Partner - SDW and a specialization in Data Science from the University of John Hopkins, US. He also attended the leadership programme by Cranfield University, UK.
                                    </p>
                                    <p class="text">
                                        He graduated from University of Surrey, United Kingdom with a Masters of Science in Telecommunication Engineering and Bachelor of Engineering (Electronics), Multimedia University, Malaysia.
                                    </p>
                                    <p class="text">
                                        In his capacity as Chief Operating Officer (COO), he oversees the salesforce, product , solutions as well as the fulfilment and assurance team.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#collapseCFO" class="list-group-item border-0 bg-gray" data-toggle="collapse" role="button" aria-expanded="false">
                <p class="lead mb-0" style="color: #4a4a4a;">KAMAL ARIFFIN AHMAD NOR</p></a>
                <div class="container mb-4 collapse" id="collapseCFO">
                    <div class="row">
                        <div class="col-md-4 px-0">
                            <div class="card border-0 mb-md-0 mb-3 px-0">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="">
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex align-items-center justify-content-between text-center">
                                        <div style="margin-right: auto; margin-left: auto;">
                                            KAMAL ARIFFIN AHMAD NOR
                                            <span class="text-muted d-block font-size-16">Chief Financial Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-right: 0px;">
                            <div class="card border-0 mb-md-0 mb-3" style="text-align: left;">
                                <div class="card-body" style="text-align: justify;">
                                    <p class="text">
                                        Kamal Ariffin joined ACASIA as Chief Financial Officer (CFO) on 1st September 2019. He is a Chartered Accountant with experience in the private sector for more than 15 years and has undertaken overall responsibility in accounting practice, statutory compliance and management accounting including management of regional offices.
                                    </p>
                                    <p class="text">
                                        Kamal who is also a Member of Malaysia Institute of Accountants (MIA), graduated from Universiti Kebangsaan Malaysia, Malaysia with a Bachelor of Accounting.
                                    </p>
                                    <p class="text">
                                        As the Chief Financial Officer (CFO), Kamal oversees ACASIA’s financial management and operations, as well as leads the Human Capital & Corporate Affairs division.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#collapseDOS" class="list-group-item border-0 bg-gray" data-toggle="collapse" role="button" aria-expanded="false">
                <p class="lead mb-0" style="color: #4a4a4a;">SUZANNA JALIS</p></a>
                <div class="container mb-4 collapse" id="collapseDOS">
                    <div class="row">
                        <div class="col-md-4 px-0">
                            <div class="card border-0 mb-md-0 mb-3 px-0">
                                <div class="position-relative">
                                    <img class="card-img-top" src="{{ asset('/img/team/t-1.jpg') }}" alt="">
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex align-items-center justify-content-between text-center">
                                        <div style="margin-right: auto; margin-left: auto;">
                                            SUZANNA JALIS
                                            <span class="text-muted d-block font-size-16">Director of Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8" style="padding-right: 0px;">
                            <div class="card border-0 mb-md-0 mb-3" style="text-align: left;">
                                <div class="card-body" style="text-align: justify;">
                                    <p class="text">
                                        Suzanna joined ACASIA as Director of Strategy on 1st October 2019. Her 10-year experience serving various operations and strategy functions of Human Capital in the telecommunications industry includes working under HR Program Management Office (PMO) overseeing human capital transformation strategy and initiatives.
                                    </p>
                                    <p class="text">
                                        Suzanna graduated with Masters of Science in International Management from the University of Southampton, United Kingdom and a Bachelor of Business Administration, majoring in Banking & Finance from Multimedia University, Malaysia. She is also a certified Human Resource Manager from Malaysian Institute of HR and holds a certification in profiling assessment.
                                    </p>
                                    <p class="text">
                                        As Director of Strategy, she oversees the company’s strategic matters, business initiatives as well as branding and marketing communications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> -->
    </section>
    
</div>

<script type="text/javascript">
    
    $(document).ready(function(){

        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },

        })

        $('#companyProfileSection').show();
        $('#visionSection').hide();
        $('#bodSection').hide();
        $('#managementSection').hide();

        $('#companyProfileBtn').click(function(){
            $('#visionSection').hide();
            $('#bodSection').hide();
            $('#managementSection').hide();
            $('#companyProfileSection').show();
        })

        $('#visionBtn').click(function(){
            $('#companyProfileSection').hide();
            $('#bodSection').hide();
            $('#managementSection').hide();
            $('#visionSection').show();
        })

        $('#bodBtn').click(function(){
            $('#companyProfileSection').hide();
            $('#visionSection').hide();
            $('#managementSection').hide();
            $('#bodSection').show();
        })

        $('#managementBtn').click(function(){
            $('#companyProfileSection').hide();
            $('#visionSection').hide();
            $('#bodSection').hide();
            $('#managementSection').show();
        })

        var bodName = [ 'Amar Huzaimi Md. Deris', 'M. Askal Fansuri', 'Juan Victor I. Hernandez', 'Ooi Seng Keat', 'Mohd Roslan Mohd Rashidi','Dr. Dhanant Subhadrabandhu', 'Lam Quoc Cuong', 'Hajah Kartini DP Hj Ismail'];
        var bodTitle = ['Chairman of ACASIA Communications Sdn Bhd / Executive Vice President', 'Group Head', 'Senior Vice President<br>Head Enterprise Business','Vice President', 'Vice President', 'Senior Executive Vice President', 'Managing Director', 'Director of Business Development'];
        var bodFrom = ['TM WHOLESALE of TM', 'International Business & Carrier of Indosat', 'of PLDT', 'Carrier Services of Singtel', 'of TM Sales', 'of CAT', 'of VNPT International (VNPT-I)', 'of Nexus'];
        var bodDesc = [
            'Amar graduated from Monash University (Clayton), Australia with a bachelor’s degree in commerce (Accounting and Finance) and a master’s degree in Business Administration (MBA) from Deakin University Australia. He is also a Fellow Certified Practicing Accountant Australia (FCPA Australia) and a former Certified Information System Auditor (CISA). He has attended various leadership programmes, including Proteus at London Business School (LBS). In 2012, Amar was listed in Certified Practising Accountant (CPA) Australia’s Top 40 Young Business Leaders for his outstanding leadership qualities.<br><br>His experiences include various business and operational capacities as well as in the area of risk management, Internal Controls, economic regulation and governance processes. The highlights of his career includes his role as Deputy Chief Internal Auditor of TM and as a key leader at TM Group Chief Executive Officer’s Office, entrusted to manage key strategic initiatives portfolio.<br><br>In October 2016, he assumed the role of Vice President, Carrier Sales of TM GLOBAL, responsible for fostering domestic and international carrier business opportunities; and managing TM regional offices in the UK, USA, Hong Kong, Singapore, Dubai and Australia.<br><br>Amar was appointed as the Executive Vice President (EVP), TM GLOBAL on 1 September 2018. He was subsequently redesignated as EVP TM WHOLESALE on 1 February 2020 and continue leading the TM’s global and wholesale business.<br><br>Amar is currently the Chairman of ACASIA Communications Sdn Bhd.',
            'Mr. M. Askal Fansuri is a Group Head International Business & Carrier at Indosat. He studied at Institute of Technology Surabaya Telecommunications Engineering.<br><br>Prior to his appointment, he was a Division Head of International Roaming (2011-2016) and Division Head of International Business Support (2010-2011) of Indosat.',
            'Juan Victor I. Hernandez is Senior Vice President - Head Enterprise Business of PLDT. As an Enterprise Business Head,  he is responsible for setting and driving the overall business directions for Corporate and SME businesses of the PLDT Group.<br><br>He joined the Company in October 2000 as Executive Trainee under the Corporate Business Group and served as Head of Corporate Credit Management from August 2001 to February 2003, Head of PLDT Corporate Business Group –Visayas from 2003 to 2005, Convergence Business B Head from 2003 to July 2009 and Corporate Business Head from August 2009 to November 2016.Later in 2017, he becoming the First Vice President of PLDT.<br><br>He obtained his BS Agricultural Economics Degree from the University of the Philippines and Masters in Business Management Degree from the Asian Institute of Management.',
            'of Singtel', 
            'Mohd Roslan, holds a degree in Electrical Engineering from Columbia University, New York City in 1984 and obtained a Master’s degree in Communications Management, from University of Strathclyde, Scotland in 2008.<br><br>He joined TM in 1990 as a Switching Engineer and in 1995 seconded to Multimedia Development Corporation (MDeC).  From 1997-2005, he served in TM Net Sdn Bhd as Chief Technology Officer and later in  In 2005, he was appointed CEO of Meganet Communications Sdn Bhd, a JV company between TM and NTT Japan.<br><br>In 2007, he was entrusted to draft and develop the Iskandar Development Region (IDR) masterplan with IRDA and other stakeholders. He was then appointed as TM’s Johor State Vice President, where he was instrumental in putting TM’s presence in Nusajaya, the starting point for TM’s direct involvement in Iskandar Malaysia’s development.<br><br>Mohd Roslan was appointed as Chief Executive Officer of GITN in 2014. He was promoted to his current role as TM’s Head of Government on 15 May 2017 to have a more effective role in managing the government sector in a broader context while continuing to serve as the CEO of GITN.<br><br>As of 1 February 2019, Roslan is leading TM ONE’s Sales division nationwide.',
            'Dr. Dhanant Subhadrabandhu was appointed as ACASIA BOD on 25 February, 2013.<br><br>Dr. Dhanant holds Ph.D in Electrical and System Engineering from University of Pennsylvania USA, MBA from Sasin Graduate School of Business Administration of  Chulalongkorn University Thailand, MS in Telecommunications Engineering from Columbia University, New York and Bachelor of Engineering in Electronics Engineering from King Mongkut\'s Insititute of Technology Ladkrabang.<br><br>Prior to his appointment, he was Executive Vice President, Product Development Group of CAT. He has more than 20 years\' experience in telecommunications industry in both technical and business areas.<br><br>Dr. Dhanant Subhadrabandhu is the member of the ACASIA Board of Directors and Senior Executive Vice President of CAT.', 
            'of VNPT',
            'Hajah Kartini DP Hj Ismail holds Bachelor Degree in Science from University of Western Australia and Executive Masters in People leadership from Open University Malaysia.<br><br>She is the Director of Business Development for NEXUS who responsible for taking up the Industry Revolution 4.0 challenge by innovating, creating and developing digital eco-system, potential spin offs and idea hubs for emerging business while supporting entrepreneurship in Nexus.<br><br>Having over 24 years of working experience, she had becoming Head of Business Management with a demonstrated history working in the telecommunications industry. She also skilled in Management, Leadership, Team Leadership, Strategic Planning and Business Development.'
        ];

        $(document).on('show.bs.modal','#popupModal', function (e) {
            var prodValue = $(e.relatedTarget).data('value');
            var imgSrc = $(e.relatedTarget).data('src');

            $('#bodModalName').html(bodName[prodValue]);
            $('#bodModalTitle').html(bodTitle[prodValue]);
            $('#bodModalFrom').html(bodFrom[prodValue]);
            $('#bodModalProf').html(bodDesc[prodValue]);
            $('#bodModalImage').attr('src', imgSrc);

        })

        var mngName = ['SATYA RIAYATSYAH SYAFRUDDIN', 'SYAHRIR NIZAM JALIS', 'SUZANNA JALIS', 'KAMAL ARIFFIN AHMAD NOR'];
        var mngTitle = ['Chief Executive Officer', 'Chief Commercial Officer', 'Director of Strategy', 'Chief Finance Officer'];
        var mngDesc = [
            'M Satya Riayatsyah is the Chief Executive Officer of ACASIA Communications Sdn Bhd. An engineer by background, Satya has 20 years of experience in the telecommunications industry, with extensive exposure in global sales and marketing, business development, product development, international business and relations.<br><br>Satya holds a Bachelor of Engineering (B.Eng.) in Electrical and Electronics from Vanderbilt University, Nashville, Tennessee, USA. He also attended a leadership program by Cranfield University, UK.<br><br>Satya launched his career in Telekom Malaysia (TM) in an international division of TM called International Venture Division (IVD), now known as AXIATA Group Berhad. His career expanded to various roles within TM’s subsidiary and business alliance such as Telekom Technology Sdn Bhd (TTSB) and Mutiara.Com Sdn Bhd. He is instrumental and pivotal to the success of Mutiara.Com’s corporate turnaround exercise and led the team to being one of the leading ICT organizations of the Northern Region.<br><br>Before joining ACASIA in 2014, Satya holds several key roles in TM GLOBAL and has acquainted himself with business relations within the countries in ASEAN and was successful in leading TM to clinch major deals out of Thailand, Indonesia and Myanmar.<br><br>Prior to his appointment as Chief Executive Officer, he was ACASIA’s Chief Marketing Officer with history of turning around ACASIA to where it is today. As a business leader, Satya portrays clear vision in creating new challenges to the norms and is zealous in doing things differently. Today, he continues to drive the business transformation of the organisation.',
            'Appointed as Chief Operating Officer in 1st March, Syahrir Nizam is an experienced technologist who has a history of 17 years stint in the telecommunication industry.<br><br>Prior to joining ACASIA, he was a Service Architect in TM ONE, an Enterprise arm of Telekom Malaysia Berhad. His experience includes areas of Sales, Service Management, Enterprise Solutioning and Product management focusing on Connectivity, SDN/NFV, SDWAN, Big Data Analytics, Smart Services and Security.<br><br>Nizam\'s professional qualifications include both a Certified Internetwork Associates and Cisco Network Professional, a Riverbed Authorized Support Partner - SDW and a specialization in Data Science from the University of John Hopkins, US. He also attended the leadership programme by Cranfield University, UK.<br><br>He graduated from University of Surrey, United Kingdom with a Masters of Science in Telecommunication Engineering and Bachelor of Engineering (Electronics), Multimedia University, Malaysia.<br><br>In his capacity as Chief Operating Officer (COO), he oversees the salesforce, product , solutions as well as the fulfilment and assurance team.', 
            'Kamal Ariffin joined ACASIA as Chief Financial Officer (CFO) on 1st September 2019. He is a Chartered Accountant with experience in the private sector for more than 15 years and has undertaken overall responsibility in accounting practice, statutory compliance and management accounting including management of regional offices.<br><br>Kamal who is also a Member of Malaysia Institute of Accountants (MIA), graduated from Universiti Kebangsaan Malaysia, Malaysia with a Bachelor of Accounting.<br><br>As the Chief Financial Officer (CFO), Kamal oversees ACASIA’s financial management and operations, as well as leads the Human Capital & Corporate Affairs division.<br><br>', 
            'Suzanna joined ACASIA as Director of Strategy on 1st October 2019. Her 10-year experience serving various operations and strategy functions of Human Capital in the telecommunications industry includes working under HR Program Management Office (PMO) overseeing human capital transformation strategy and initiatives.<br><br>Suzanna graduated with Masters of Science in International Management from the University of Southampton, United Kingdom and a Bachelor of Business Administration, majoring in Banking & Finance from Multimedia University, Malaysia. She is also a certified Human Resource Manager from Malaysian Institute of HR and holds a certification in profiling assessment.<br><br>As Director of Strategy, she oversees the company’s strategic matters, business initiatives as well as branding and marketing communications.',
        ];




        $(document).on('show.bs.modal','#mngModal', function (e) {
            var prodValue = $(e.relatedTarget).data('value');
            var imgSrc = $(e.relatedTarget).data('src');
            // console.log(imgSrc);

            $('#mngModalName').html(mngName[prodValue]);
            $('#mngModalTitle').html(mngTitle[prodValue]);
            $('#mngModalDesc').html(mngDesc[prodValue]);
            $('#mngModalImage').attr('src',imgSrc);

            // $('#modalFrom').html(bodFrom[prodValue]);
            // $('#modalImg').attr('src', imgSrc);

        })

    })
</script>

@endsection