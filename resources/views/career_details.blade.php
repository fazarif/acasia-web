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
                    Job Opportunities
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--page title start-->
<!-- <section class="section-gap pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <img class="rounded" src="assets/img/portfolio/ps.jpg" alt="">
            </div>
        </div>
    </div>
</section> -->
<!--page title end-->

<!--blog start-->
<section class="section-gap pt-lg-5" style="padding-bottom: 1.5rem !important">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="border-0 blog-single">
                    <h2 class="mb-4 pb-5"><mark style="background-color: #9698c4;">Position: {{  $indexFile->position  }}</mark></h2>
                    <h5 class="mb-4">Who are we searching for?</h5>
                    <p><strong>{!! nl2br($indexFile->searching_for) !!}</strong></p>
                    <h5 class="mb-4">Strategic Role</h5>
                    <p>{!! nl2br($indexFile->strategic_role) !!}</p>
<!--                     <ul class="list-unstyled mb-lg-5 mb-4 text-muted">
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Nunc placerat mi id nam laoreet urna</li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Praesent pharetra, justo ut  </li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Leo quam aliquet diam  ></li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Vivamus eget molestie neque  </li>
                    </ul> -->
                    <h5 class="mb-4">Key Responsibilities</h5>
                    <p>{!! nl2br($indexFile->key_respo) !!}</p>
<!--                     <ul class="list-unstyled mb-4 text-muted">
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Nunc placerat mi id nam laoreet urna</li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Praesent pharetra, justo ut  </li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Leo quam aliquet diam  ></li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Vivamus eget molestie neque  </li>
                    </ul> -->
                    
                    <h5 class="mb-4">Qualifications and Experience</h5>
                    <p>{!! nl2br($indexFile->quali_exp) !!}</p>
<!--                     <ul class="list-unstyled mb-4 text-muted">
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Nunc placerat mi id nam laoreet urna</li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Praesent pharetra, justo ut  </li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Leo quam aliquet diam  ></li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Vivamus eget molestie neque  </li>
                    </ul> -->

                    <h5 class="mb-4">Skills and Requirements</h5>
                    <p style="margin-bottom: 0 !important">{!! nl2br($indexFile->skills_req) !!}</p>
<!--                     <ul class="list-unstyled mb-4 text-muted">
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Nunc placerat mi id nam laoreet urna</li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Praesent pharetra, justo ut  </li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Leo quam aliquet diam  ></li>
                        <li> <i class="vl-minus font-size-12 pr-3"></i>Vivamus eget molestie neque  </li>
                    </ul> -->

                </div>
            </div>
            <div class="col-lg-4 pt-3">
                <!--<h2 class="mb-4 invisible">Features</h2>-->
                <div class="card p-4">
                    <dl class="row mb-0">
                        <dt class="col-sm-5">Position :</dt>
                        <dd class="col-sm-7">{{ $indexFile->position }}</dd>
                        <dt class="col-sm-5">Closing Date :	</dt>
                        <dd class="col-sm-7">{{ date('d M Y', strtotime($indexFile->closing_date)) }}</dd><!-- 
                        <dt class="col-sm-5 text-truncate">Tags :</dt>
                        <dd class="col-sm-7"><a href="#" class="text-dark">Art</a>, <a href="#" class="text-dark">Branding</a>, <a href="#" class="text-dark">Design</a></dd> -->
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="component-footer bg-dark" style="padding-top: 3rem !important">
        <div class="container">
            <h6 style="color: white; text-align: center;">Interested applicants please forward your updated resume in Microsoft Words format stating <br>current and expected salary together with a recent photo to:</h6>
            <h5 class="pt-2" style=" text-align: center;"><strong><mark style="background-color: white;">hradmin@acasia.net</mark></strong></h5>
            <p style="color: white; text-align: center;" class="pt-2"><i>We regret that only short listed candidates will be notified.</i></p>

        </div>
    </div>
<!-- products -->
</section>

<!--blog end-->

@endsection