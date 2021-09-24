@extends('layouts.master-pages')

@section('main-body')

<!--page title start-->
<section class="section-gap section-tab bg-gray text-center">
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url( {{ asset('img/about-banner.jpg') }});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="col-md-7">
                <!-- heading -->
                <h2 class="">
                    News & Updates
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!-- products -->
<div class="component-footer bg-gray">
    
    <!-- tab -->
    <div class="text-center">
        <ul class="portfolio-filter">
            <li class="active"><a href="#" data-filter="*" id="news"> News & Press Release</a></li>
            <li><a href="#" id="gallery">Gallery</a></li>
            <li><a href="#" id="video">Videos</a></li>
        </ul>
    </div>
    <!-- tab header -->

    <!-- news & press -->
    <div class="container"  id="news-grid">
        <div class="row justify-content-between">
            <div class="col-lg-8">

                @foreach($array as $arrays)
                <div class="card border-0 mb-4 box-hover">
                    <div class="card-body row align-items-center">
                        <div class="col-md-4 mb-md-0 mb-3">
                            <img class="card-img" src="{{ asset('upload/news/'.$arrays->img_loc) }}" alt="">
                        </div>
                        <div class="col-md-8">
                            <a href="#" class="font-size-14" disabled>{{  $arrays->topic  }}</a>
                            <h6 class="my-2"><a href="{{ $arrays->web_link }}" target="_BLANK">{{ $arrays->title }}</a></h6>
                            <span class="font-size-14 text-muted">@if($arrays->display_date) {{ date('d M Y', strtotime($arrays->display_date)) }}  @else {{ date('d M Y', strtotime($arrays->created_at)) }} @endif</span>
                            <div class="mt-3">
                                <p class="news-desc">{!! nl2br($arrays->description) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="pagination justify-content-center">{{ $array->links() }}</div>

            </div>
            <div class="col-lg-4">
                <div class="blog-widget mb-4">
                    <form>
                        <div class="form-group">
                            <div class="icon-field">
                                <i class="vl-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="blog-widget mb-4">
                    <h6 class="mb-4">Press Release</h6>
                    <div class="card border-0 mb-1">
                        <div class="card-body row align-items-center">
                            <div class="col-12">
                                <h6 class="my-2 font-size-14"><a href="{{ asset('upload/pdf/HOTJOE-MayEdition2016.pdf') }}" target="_BLANK">Hot Joe - May 2016</a></h6>
                                <span class="font-size-14 text-muted">23 June 2016</span>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-1">
                        <div class="card-body row align-items-center">
                            <div class="col-12">
                                <h6 class="my-2 font-size-14"><a href="{{ asset('upload/pdf/160419-ACASIA-and-Rohde-Schwarz-Cybersecurity-Establish-Strategic-Partnership.pdf') }}" target="_BLANK">ACASIA and Rohde & Schwarz Cybersecurity establish strategic partnership</a></h6>
                                <span class="font-size-14 text-muted">19 April 2016</span>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-1">
                        <div class="card-body row align-items-center">
                            <div class="col-12">
                                <h6 class="my-2 font-size-14"><a href="{{ asset('upload/pdf/160418-ACASIA-Launches-Global-Warning-System-Application.pdf') }}" target="_BLANK">ACASIA launches global warning system application for government agencies</a></h6>
                                <span class="font-size-14 text-muted">18 April 2016</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="blog-widget mb-4">-->
                <!--    <div class="card card-body border-0 text-center p-2">-->
                        <!-- <h6 class="mb-2 text-muted mt-lg-4 font-size-14">ADD BANNER</h6>
                        <p class="text-muted font-size-14">500X400</p> -->
                <!--        <img src="{{ asset('img/parallax/news ad.jpg') }}" alt="" style="border-radius: 2px;">-->
                <!--    </div>-->
                <!--</div>-->
<!--                 <div class="blog-widget mb-4">
                    <div class="card card-body border-0">
                        <h6 class="mb-2">Instagram</h6>
                        <p class="text-muted font-size-14">Photos are showing from instagram</p>
                        <div class="instagram-feed">
                            <a href="#"><img src="{{ asset('img/cards/10a.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/cards/10b.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/cards/10c.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/cards/11a.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/cards/12a.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/cards/3a.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!--blog end-->

    <!-- gallery section -->
    <div class="portfolio-grid portfolio-gallery grid-4" id="img-grid" style="background-color: clear;">

        @foreach($galleryFile as $index => $files)
        <div class="portfolio-item {{ $index }}">
            @foreach($files as $index => $items)

            @if($index == 0)
            <a href="{{ asset('upload/gallery/'.$items->linked_folder.'/'.$items->file_loc) }}" class="portfolio-image popup-gallery" title="{{ $items->description }}">
                <img src="{{ asset('upload/gallery/'.$items->linked_folder.'/'.$items->file_loc) }}" alt="" class="gallery-grid"/>
                <div class="portfolio-hover-title">
                    <div class="portfolio-content col-md-10">
                        <h6>{{ $items->title }}</h6>
                        <div class="portfolio-category">
                            <span>{{ $items->description }}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endif
            @if($index != 0)
            <a href="{{ asset('upload/gallery/'.$items->linked_folder.'/'.$items->file_loc) }}" class="portfolio-image popup-gallery" title="{{ $items->description }}" style="display: none;">
                <img src="{{ asset('upload/gallery/'.$items->linked_folder.'/'.$items->file_loc) }}" alt=""/>
                <div class="portfolio-hover-title">
                    <div class="portfolio-content col-md-10">
                        <h6>{{ $items->title }}</h6>
                        <div class="portfolio-category">
                            <span>{{ $items->description }}</span>
                        </div>
                    </div>
                </div>
            </a>
            @endif
            @endforeach
        </div>
        @endforeach
<!--    <div class="portfolio-item">
            <a href="{{ asset('img/portfolio/even/2.jpg') }}" class="portfolio-image popup-gallery" title="Multipurpose Template">
                <img src="{{ asset('img/portfolio/even/2.jpg') }}" alt=""/>
                <div class="portfolio-hover-title">
                    <div class="portfolio-content col-md-10">
                        <h6>SOFEA Run</h6>
                        <div class="portfolio-category">
                            <span>For all categories</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
-->
    </div>

    <!-- video-grid -->

    <div class="container" style="display: none;" id="video-grid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="portfolio-grid portfolio-gallery grid-2 gutter">

                    @foreach($videos as $video)

                    <?php
                        $str = $video->url;
                        $nstr = str_replace('https://www.youtube.com/watch?v=','',$str);
                    ?>

                    <div class="portfolio-item">
                        <a href="#" class="portfolio-image" title="Vectorlab Product">
                            <img src="http://img.youtube.com/vi/{{ $nstr }}/0.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>{{ $video->title }}</h6>
                                    <div class="portfolio-category">
                                        <span>{{ $video->description }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="video-btn video-play-btn-align-center">
                                <a href="https://www.youtube.com/watch?v={{ $nstr }}" class="video-play-icon popup-youtube v-Center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- end video grid -->

</div>
<!-- products -->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

<!-- script for hide and show -->
<script type="text/javascript">

    $(document).ready( function() {

        $("#img-grid").hide();

        var test = ['img/blog/b1.jpg','img/blog/b2.jpg','img/blog/b3.jpg'];

        $("#news").click( function (){
            $("#img-grid, #video-grid").fadeOut();
            $("#news-grid").fadeIn();
        })

        $("#gallery").click( function (){
            $("#news-grid, #video-grid").fadeOut();
            $("#img-grid").fadeIn();
            
            var width = $('.gallery-grid').width();
            $('.gallery-grid').css("height", width);
        })

        $("#video").click( function (){
            $("#img-grid, #news-grid").fadeOut();
            $("#video-grid").fadeIn();
        })
        
        // $('.gallery-grid').on('load', function (){
        //     var width = $('.gallery-grid').width();
        //     // if(width != 0)
        //     // {
        //         $('.gallery-grid').css("height", width);
        //     // }  
        // });
        
        $('.news-desc').showMore({
            minheight: 250,
            buttontxtmore:"show more",
            buttontxtless:"show less",
            buttoncss:'showmore-button',
            animationspeed: 250
        });
    });
    
</script>

@endsection