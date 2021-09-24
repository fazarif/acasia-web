@extends('layouts.master')

@section('main-body')

<style type="text/css">
.img-holder {
    display: inline-block;
    width: 100%;
    height: 75%;
    overflow: hidden;
}
.img-holder img {
    display: inline-block;
    width: 100%;
    height: 75%;
    margin: -7.5% 0;
}
</style>

<!--test-->
<section class="section-gap section-index section-top" id="gradient-header">
    <div class="hero-img bg-gradient-overlay" data-overlay="9"></div>
        <div class="container">
        <div class="row justify-content-center align-items-center text-center text-black">
            <div class="col-lg-10">
                <!-- heading -->
                <h1 class=" mb-4">
                    <span class="font-weight-300">ACASIA for</span><span class="font-weight-800 typist-text typist-blink" data-typist=" Malaysia., Singapore., Thailand., Vietnam., the Philippines., Indonesia., Brunei."> ASEAN.</span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!--hero end-->

<!--hero start-->
<section class="section-option index-slider section-full" id="sliderSection">
    <!--<div class="hero-img bg-overlay" data-overlay="7" style="background-image: url(assets/img/hero/img-4.jpg);"></div>-->
    <div class="bg-gray neg-mt-300 landing-slider pb-3">
        <div class="owl-carousel owl-theme dot-style-1" data-items="[2,2,2]" data-margin="30" data-autoplay="true" data-center="true" data-loop="true" data-autoWidth="true" data-dots="true" data-stagePadding="30" data-video="true" data-lazyLoad="true"  id="indexslider">
            @foreach($indexFile as $files)
                @if($files->youtube_url)
                <?php
                    $str = $files->youtube_url;
                    $dtr = str_replace('https://youtu.be/','', $str);
                ?>
                <div class="item-video img-holder">
                    <img class="rounded" src="https://img.youtube.com/vi/{{ $dtr }}/sddefault.jpg" alt=""/>
                    <div class="video-btn video-play-btn-align-center">
                        <a href="https://www.youtube.com/watch?v={{ $dtr }}" class="video-play-icon popup-youtube v-Center"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                @else
                    @if($files->href)
                    <a href="{{ $files->href }}" target="_blank">
                    @endif
                        <img class="rounded" src="/upload/index/{{ $files->file_path}} " alt="" />
                    @if($files->href)
                    </a>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
</section>
<!--hero end-->

<!--intro start-->
<section class="section-gap">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">
        <div class="row justify-content-md-center text-center mb-lg-5">
            <div class="col-md-12">
                <h2 class="mb-md-4">Who We Are</h2>
                <p class="lead text-muted">ACASIA is an ICT Solutions provider offering a comprehensive suite of connectivity services and digital infrastructure to take your business across ASEAN and global. We strive on delivering the best customer experience via continuous customer service quality improvements and innovations.
                <br><br>We are driven by our stakeholder value creation in a highly competitive environment via competitive edge technology to offer the best solutions for your business. We connect the dots between the ASEAN region and Global by leveraging on the strengths of our shareholders.</p>
            </div>
        </div>
        <div class="row"  style="margin-bottom: 4rem;">
            <div class="col-md-4">
                <div class="blurb blurb-border text-left box-hover">
                    <i class="vl-bulb"></i>
                    <h6 class="mb-3">About Us</h6>
                    <p>ACASIA is a unique ASEAN collaboration among 7 leading telecommunications providers in the region, aiming to connect ASEAN communities and businesses as One ASEAN.</p>
                    <a href="{{ route('about_us') }}" class="btn-read-more mt-4">Explore more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb blurb-border text-left box-hover">
                    <i class="vl-tag"></i>
                    <h6 class="mb-3">Solutions</h6>
                    <p>Made by the people of ASEAN, ACASIA fully understand the ASEAN digital landscape and strives to take your business to the next level.</p>
                    <a href="{{ route('product_services') }}" class="btn-read-more mt-4">Explore more</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb blurb-border text-left box-hover">
                    <i class="vl-finger-print"></i>
                    <h6 class="mb-3">Contact Us</h6>
                    <p>Gain rich experience with talented people across ASEAN through our 7 telecommunication partners.</p><br>
                    <a href="{{ route('contact') }}" class="btn-read-more mt-4">Explore more</a>
                </div>
            </div>
        </div>
        <!--<hr>-->
        <!--<div class="row pt-5 pb-5">-->
        <!--    <div class="col-md-5">-->
        <!--        <div class="blurb blurb-border" style="padding: 0.5rem;">-->
                     <!--<div id="map"> -->
                     <!--<iframe src="{{ asset('/img/webinar/series1/385 x 307.png') }}" frameborder="0" style="border:0;" allowfullscreen=""></iframe> -->

        <!--            <img src="{{ asset('/img/webinar/series2/385 x 307.png') }}">-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-md-7">-->
        <!--        <div class="blurb text-left">-->
        <!--            <i class="vl-monitor1"></i>-->
        <!--            <h4 class="mb-3"><mark style="background-color: #9698c4;">About ACASIA Webinar Series</mark></h4>-->
        <!--            <p style="color: black;">As part of ACASIA 25th Anniversary Campaign, we are hosting a series of webinars focused on the ASEAN business landscapes especially during COVID-19.</p>-->
        <!--            <p style="color: black;">This year, 2021, we will back with another exciting webinar series which we will be collaborating with our stakeholders, who will be sharing their experiences from various perspectives and addressing key questions.</p>-->
                    <!--<a href="{{ route('webinar-register') }}" class="btn-read-more mt-4">Register here</a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <hr>
        <div class="row pt-5">
            <div class="col-md-5">
                <div class="blurb text-left">
                    <i class="vl-bell"></i>
                    <h4 class="mb-3"><mark style="background-color: #ffeb83;">Our Address to COVID 19</mark></h4>
                    <p style="color: black;">We look to monitor COVID 19 situation closely as the effects are felt throughout all ASEAN countries. Meanwhile, this is what we are doing to ease this pandemic.</p>
                    <a href="https://infographics.channelnewsasia.com/covid-19/map.html" target="_blank" class="btn-read-more mt-4">Explore more</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="blurb blurb-border">
                    <!-- <div id="map"> -->
                    <iframe src="https://infographics.channelnewsasia.com/covid-19/map.html" width=100% height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!--intro end-->

<script type="text/javascript">
    
    $(document).ready(function() {

        function checkWidth(init)
        {
            /*If browser resized, check width again */
            if ($(window).width() < 768) {
                $("#indexslider").attr('data-items','[1,1]');
                $("#gradient-header").addClass('pb-0');
                return true;
            }
            else {
                if (!init) {
                    $("#indexslider").attr('data-items','[2,2,2]');
                    $("#gradient-header").removeClass('pb-0');
                }
            }
        }

        checkWidth(true);

        // $(window).resize(function() {
        //     if(checkWidth(false))
        //     {
        //         location.reload(true);
        //     }
        // });

    });

    function sortArray(a, b)
    {
        // console.log(a[1].position);
        return a[1].position - b[1].position;
    }

</script>

@endsection