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
                    Our Experience: Digital Services
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--intro start-->
<section class="section-gap" style="padding-bottom: 1rem;">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">      
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4">
            <div class="col-md-12 mb-lg-5 mb-4">
                <!-- <h2 class="mb-4">Let Our Expertise Solve Your Problem</h2> -->
                <p class="lead">We started our digital journey in 2018 with aim to become the ASEAN digital enabler through these pillars - healthy lifetsyle, safety and digital sports.</p>
            </div>
        </div>
    </div>
</section> 

<!--image block start-->
<section class="section-gap bg-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-lg-5 mb-4">Fitness & Wellness</h2>
                <p>Launched in the second half of 2018, SOFEA Run has gathered approximately 16,900 downloaders around the world especially from ASEAN countries. 210,000 km has been accumulated by SOFEA Runners with a total of 33 races organized by SOFEA Run, leading the virtual running scene in Malaysia. Being a virtual event, anybody from anywhere around the world can participate.</p>
            </div>
            <div class="col-md-6">
                <div class="owl-carousel owl-theme dot-style-1 nav-round exp-slider" data-items="[1,1]" data-margin="50" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false">

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/1.jpg') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/2.png') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/3.png') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/3a.jpg') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/4.png') }}" alt="card image" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/5.png') }}" alt="card image" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/6.png') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/7.png') }}" alt="card image" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/8.png') }}" alt="card image" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/fitness and wellness/9.png') }}" alt="card image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--image block end-->

<!--image block start-->
<section class="section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="mb-lg-5 mb-4">Safety & Security</h2>
                <p>SOFEA+ is a personal safety and travel warning solution that provides real-time status on warnings, alerts and localized security information where ever you are. Safeture together with ACASIA for several years provided International Businesses, NGOs and Government Agencies with high end security and convenience through the ACASIA SOFEA+ App.</p>
                <a id="showMoreBtn1"><p class="text-muted">++ more</p></a>
                <p class="pt-3" id="showMore">Key features include - </p>
                <ul class="custom-list custom-list-border" id="showMore2">
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Share your position </li>
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Get local news </a></li>
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Direct push notification </a></li>
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Worldwide detection of local SOS emergency numbers with one click </a></li>
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Every country safety and travel information </a></li>
                    <li><i class="fa fa-check font-size-12 pr-3"></i>Automatic translation of messages and texts into 40 languages </a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="owl-carousel owl-theme dot-style-1 nav-round exp-slider" data-items="[1,1]" data-margin="50" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false">
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/safety and security/1.png') }}" alt="card image" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/safety and security/2.png') }}" alt="card image" />
                        </a>
                    </div>

                    <div class="item">
                        <a href="#" class="card border-0">
                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/safety and security/3.png') }}" alt="card image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--image block end-->
<hr>

<!--image block start-->
<!--<section class="section-gap bg-gray">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-center">-->
<!--            <div class="col-md-6">-->
<!--                <h2 class="mb-lg-5 mb-4">Entertainment</h2>-->
<!--                <p>- Coming soon -</p>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <div class="owl-carousel owl-theme dot-style-1 nav-round exp-slider" data-items="[1,1]" data-margin="50" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false">-->
<!--                    <div class="item">-->
<!--                        <a href="#" class="card border-0">-->
<!--                            <img class="card-img rounded" src="{{ asset('/img/acasia/exp/trex/1.jpg') }}" alt="card image" />-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--image block end-->

<script src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script type="text/javascript">

    $('#showMoreBtn1').click(function(){
        $('#showMore').show();
        $('#showMore2').show();
        $('#showMoreBtn1').hide();
    });

</script>

@endsection