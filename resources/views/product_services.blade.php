@extends('layouts.master-pages')

@section('main-body')


<style type="text/css">
    
</style>

<!--page title start-->
<section class="section-gap section-tab bg-gray text-center">
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url( {{ asset('img/about-banner.jpg') }});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="col-md-7">
                <!-- heading -->
                <h2 class="">
                    Product & Services
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--about us start-->
<div class="section-gap bg-gray pb-5">
<!--     <div class="container">
        <div class="row justify-content-between align-items-center">

        </div>
    </div> -->
    <div class="text-center">
            <div class="col-md-12">
                <h2 class="mb-4">Customize Your Solutions with Us</h2>
                <!--    <p class="text-muted">Philosophically, ACASIA adopted the legend of the Phoenix, in which it symbolizes cyclical regeneration, breathing new life by arising from the ashes of its predecessor. After 20 years of incorporation, 2015 marks a new beginning of ACASIA. Embrace the rise of a new ACASIA.</p>
                <p class="text-muted">With Malaysia chairing ASEAN for 2015 and ACASIA being a Malaysian corporation, ACASIA pledges 6 new initiatives onto the ASEAN platform this year. All these initiatives are masterfully crafted to be derivatives from the foundations and pillars of ASEAN ICT Masterplan 2015, where the successful integration of an ASEAN community and prosperity of ASEAN businesses is the end game.</p> -->
            </div>
        <ul class="portfolio-filter">
            <li class="active"><a href="#" data-filter="*"> All </a></li>
            <li><a href="#" data-filter=".cat1">Connectivity Services</a></li>
            <li><a href="#" data-filter=".cat2">Digital Infrastructure</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="portfolio-grid grid-4 gutter">
            @foreach($prod as $prods)
            <div class="portfolio-item {{$prods->category}}">
                <a href="#" class="portfolio-image" title="{{$prods->name}} Details" data-toggle="modal" data-target="#popupModal" data-img="{{ $prods->img_dir }}" data-name="{{ $prods->name }}" data-desc="{{ $prods->description }}" data-cat="{{ $prods->category }}" data-url="{{ $prods->url }}" data-play="{{ $prods->android_url }}" data-ios="{{ $prods->ios_url }}" >
                    <img src="{{ asset($prods->img_dir) }}" alt=""/>
                    <div class="portfolio-hover-title">
                        <div class="portfolio-content col-md-11">
                            <h6>{{ $prods->name }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- modal -->
    <div class="modal custom-modal fade" id="popupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-image" style="border-bottom: solid black 1px; ">
                    <img src="" alt="Image" class="modal-image" id="modalImg">
                    <button type="button" class="close close-absolute" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <a id="urlHref" href="#" target="_blank"><span class="badge badge-pill badge-dark px-3 py-2 mb-4" id="modalUrl"><i class="fa fa-link"></i>&nbspsofearun.com</span></a>
                    <p id="modalDesc"></p>

                    <!--<div class="text-right" id="storeLink">-->
                    <!--    <a href="#" target="_blank" id="modalIos"><img src="{{ asset('img/store/app-store.png') }}" style="max-width: 6rem"></a>-->
                    <!--    <a href="#" target="_blank" id="modalPlay"><img src="{{ asset('img/store/play-store.png') }}" style="max-width: 6rem"></a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--about us end-->

<div class="section-gap bg-gray pb-0" style="padding-top: 0 !important;">
    <img src="{{ asset('img/product/Global Presence.png') }}" alt="">
</div>

<!-- products -->

<!-- products -->

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('show.bs.modal','#popupModal', function (e) {
            var prodTitle = $(e.relatedTarget).data('name');
            var prodDesc = $(e.relatedTarget).data('desc');
            var prodImg = $(e.relatedTarget).data('img');
            var prodCat = $(e.relatedTarget).data('cat');
            var prodUrl = $(e.relatedTarget).data('url');
            var prodPlay = $(e.relatedTarget).data('play');
            var prodIos = $(e.relatedTarget).data('ios');

            $('#modalTitle').html(prodTitle);
            $('#modalDesc').html(prodDesc);
            $('#modalImg').attr("src", prodImg);

            if (prodCat == 'cat1' || prodTitle == 'TREX Esports' || prodTitle == 'SOFEA Run') {
                $('#storeLink').hide();
            }
            else
            {
                $('#storeLink').show();
                $('#modalPlay').attr("href", prodPlay);
                $('#modalIos').attr("href", prodIos);
            }


            if(prodUrl)
            {
                $('#modalUrl').html('<i class="fa fa-link"></i>&nbsp'+prodUrl);
                $('#urlHref').attr("href", prodUrl);
                $('#modalUrl').show();
            }
            else
                $('#modalUrl').hide();
        })
    })
</script>

@endsection