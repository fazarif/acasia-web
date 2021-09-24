@extends('layouts.master-pages')

@section('main-body')

<!--page title start-->
<section class="section-gap section-tab bg-gray text-center">
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url( {{ asset('img/contact-banner.jpg') }});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="col-md-7">
                <!-- heading -->
                <h2 class="">
                    Our Experience
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--intro start-->
<div class="section-gap" style="padding-bottom: 4rem;">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">
        <div class="row justify-content-center align-items-center text-center mb-3">
            <div class="col-md-12 mb-lg-5 mb-4">
                <h2 class="mb-4">Our works are our testimonial we love to show it</h2>
                <p class="lead">For the people of ASEAN, we serve multitude of verticals within ASEAN ranging from its people to businesses via our digital and connectivity solutions.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="{{ route('experience-digital') }}" style="color: black;">
                <div class="card mb-md-0 mb-3 box-hover">
                    <img class="card-img-top" src="{{ asset('img/cards/digital_card.jpg') }}" alt="card image">
                    <div class="card-body pt-4 pb-0">
                        <p class="mb-2 d-block" style="color: blue;">Pionering the Digital Lifestyle</p>
                        <h5 class="mb-4">Digital</h5>
                        <div class="mb-4">
                            <p>We started our digital journey in 2018 with the aim to become ASEAN's digital enabler through these pillars - healthy lifetsyle, safety and digital sports.</p>
                        </div>
                        <br>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('experience-connectivity') }}" style="color: black;">
                    <div class="card mb-md-0 mb-3 box-hover">
                        <img class="card-img-top" src="{{ asset('img/cards/connectivity_card.jpg') }}" alt="card image">
                        <div class="card-body pt-4 pb-0">
                            <p class="mb-2 d-block" style="color: blue;">Connecting ASEANs</p>
                            <h5 class="mb-4">Connectivity</h5>
                            <div class="mb-4">
                                <p>We provide regional connectivity throughout ASEAN using a platform that offers connectivity and facility services that help enhance our customer’s business performance.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!--intro end-->

<!-- components client -->

<div class="component-section bg-dark" >
    <!--show markup button-->
    
    <!--

    <div class="row justify-content-center align-items-center text-center mb-lg-2">
        <div class="col-md-10">
            <p class="lead text-white">At ACASIA, we take pride in the knowledge, expertise and collaboration that we have gained from working on many challenging but rewarding projects throughout the ASEAN.</p>
        </div>
    </div>
    
    -->

    <!--title-->
    
    <!--
    <div class="text-center pb-md-5 pb-4">
        <p class="mb-0 lead"><span class="badge badge-pill badge-dark">OUR STRATEGIC PARTNERS</span></p>
    </div>

    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,4,4]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/vox.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/caas.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/orient_telecom.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/gitn.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/chungwha_telecom.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/maxis.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/mitsubishi.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,4,4,4]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/fiberail.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/hgc.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/lintasarta.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/china_telecom.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/vads.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/equinix.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/china_mobile.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,4,4]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/true.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/starhub.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/pccw.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-4" src="{{ asset('img/acasia/strategic_partners/ix.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9">
                                <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/china_unicom.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/sggs.png') }}" alt=""></div>
                                    <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/strategic_partners/vox.png') }}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swir-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</div>
-->
<!-- clients 02 -->

<!-- components client -->
<div class="component-section bg-dark">
    <!--show markup button-->

    <div class="row justify-content-center align-items-center text-center mb-lg-2 mb-2">
        <div class="col-md-10">
            <p class="lead text-white">SOFEA Run's partners and clients connect us to a wider audience in providing and contributing towards that healthier lifestyle. Powered by our own app, SOFEA Run.</p>
        </div>
    </div>

    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="container">
                        <div class="text-center pb-md-5 pb-4">
                            <p class="mb-0 lead"><span class="badge badge-pill badge-dark">OUR EVENT ORGANIZERS</span></p>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/Man Utd.jpg') }}" alt=""></div>
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/MWM.jpg') }}" alt=""></div>
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/HSN21KM.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/Twincity.jpg') }}" alt=""></div>
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/CAT10K.jpg') }}" alt=""></div>
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/ONERun.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="text-center pb-md-5 pb-4">
                            <p class="mb-0 lead"><span class="badge badge-pill badge-dark">UNIVERSITIES AND SCHOOL ALUMNIS</span></p>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,2]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/events/utem.jfif') }}" alt=""></div>
                                        <div class="item card py-2 border-0"><img class="clients-thumb client-logo-3" src="{{ asset('img/acasia/events/uitm.png') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,2]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/TKC.jpg') }}" alt=""></div>
                                        <div class="item card border-0"><img class="event-logo-3" src="{{ asset('img/acasia/event/Bungwak.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container">
                        <div class="text-center pb-md-5 pb-4">
                            <p class="mb-0 lead"><span class="badge badge-pill badge-dark">CORPORATES</span></p>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card py-2 border-0"><img class="clients-thumb corporate-logo-2" src="{{ asset('img/acasia/corporate/rotary.png') }}" alt=""></div>
                                        <div class="item card py-2 border-0"><img class="clients-thumb corporate-logo-2" src="{{ asset('img//acasia/corporate/tm_global_hr.png') }}" alt="" style="transform: scale(0.8);"></div>
                                        <div class="item card py-2 border-0"><img class="clients-thumb corporate-logo-2" src="{{ asset('img/acasia/corporate/tm_kastel.png') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-9">
                                    <div class="owl-carousel owl-theme dot-style-2 text-center" data-items="[4,3,3]" data-autoplay="true" data-margin="10" data-dots="true">
                                        <div class="item card py-2 border-0"><img class="clients-thumb corporate-logo-2" src="{{ asset('img/acasia/corporate/tm_noc.png') }}" alt=""></div>
                                        <div class="item card py-2 border-0"><img class="clients-thumb corporate-logo-2" src="{{ asset('img/acasia/corporate/tm_one.png') }}" alt="" style="transform: scale(0.7);"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swir-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

</div>
<!-- clients 02 -->


<!--FAQ start-->
<div class="section-gap bg-gray pb-0" style="padding-top: 0 !important;">
    <img src="{{ asset('img/parallax/exp_banner.jpg') }}" alt="">
</div>
<!--FAQ end-->

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
    })

</script>

@endsection