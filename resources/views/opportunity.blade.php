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
                    Our Team
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--about us start-->
<div class="section-gap">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">      
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5">
                <h6>Our Team</h6>
                <h2 class="mb-4">Why Join Us</h2>
                <p class="text-muted">In ACASIA, we believe in the vision of an integrated and connected ASEAN community. We strive to unite the ten nations through Information and Communications Technology (ICT).</p>
                <p class="text-muted">Come embark on our journey across the ASEAN region through our 7 telecommunications partners (TM, Indosat, CAT, Nexus, VNPT, Singtel, PLDT). Gain rich experience with talented people across ASEAN.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/parallax/team4.jpg') }}" alt="" style="border-radius: 5px; height: 400px;">
            </div>
        </div>
    </div>
</div>
<!--about us end-->

<!-- products -->
<div class="component-footer bg-dark">
    <div class="container">
        <h6 style="color: white;">Job Opportunities</h6>
        <h2 class="mb-4 text-white">Current Availability</h2>
        <div class="table-responsive">
            <table class="table vl-custom-table">
                <thead>
                <tr style="text-align: center;">
                    <th class="text-white">Date Posted</th>
                    <th class="text-white">Position</th>
                    <th class="text-white">Closing date</th>
                    <th class="text-white">Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach($careerList as $career)
                <tr style="text-align: center;">
                    <td>{{ date('d M Y', strtotime($career->created_at)) }}</td>
                    <td>
                        <h6>{{ $career->position }}</h6>
                    </td>
                    <td>
                        <h6>{{ date('d M Y', strtotime($career->closing_date)) }}</h6>
                         <span class="text-muted">2 Years experience </span> 
                    </td>
                    <td>
                        <a href="{{route('opportunity-detail', $career->id)}}" class="btn btn-pill btn-outline">Details</a>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- products -->

@endsection