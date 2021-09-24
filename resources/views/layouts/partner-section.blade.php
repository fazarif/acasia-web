@extends('layouts.master-pages')

@section('partner-sec')

<!--clients start-->
<div class="footer-gap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h6>Our Partners</h6>
                <h2 class="mb-4">The Magnificent Seven</h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dot-style-1 text-center" data-items="[7,3,2]" data-autoplay="true" data-margin="10" data-dots="true">
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/saas.png') }}" alt=""></div>
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/less.png') }}" alt=""></div>
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/github.png') }}" alt=""></div>
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/bootstrap.png') }}" alt=""></div>
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/jquery.png') }}" alt=""></div>

                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/less.png') }}" alt=""></div>
                    <div class="item"><img class="clients-thumb" src="{{ asset('img/clients/github.png') }}" alt=""></div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--clients end-->

@endsection