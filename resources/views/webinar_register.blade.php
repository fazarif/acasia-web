@extends('layouts.master-pages')

@section('style')

<style type="text/css">
    
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .loader-overlay {
        position:fixed;
        top:50%;
        left:50%;
        background-color:rgba(0, 0, 0, 0);
        z-index:1002;
        overflow:auto;
        width:150px;
        height:150px;
        margin-left:-75px;
        margin-top:-75px;
    }

</style>

@endsection

@section('main-body')



<!--page title start-->
<section class="section-gap section-tab bg-gray text-center">
    <div class="hero-img bg-overlay" data-overlay="2" style="background-image: url( {{ asset('img/contact-banner.jpg') }});"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-lg-5">
            <div class="col-md-7">
                <!-- heading -->
                <h2 class="">
                    ACASIA Webinar Series
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<div class="loader loader-overlay" style="display: none;"></div>

<!--intro start-->
<div class="section-gap">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4">
            <div class="col-md-12">
<!--                 <h5 class="mb-4">The ACASIA Webinar Series will share information and business insights on ASEAN business landscapes especially during the pandemic crisis.</h5> 
                <h5>
                Made by the people of the ASEAN, the series will be free of charge and sharing by our shareholders as speaker. Stay tuned to this space for updates on our upcoming webinar</h5> -->
                <p><b>"</b>The ACASIA Webinar Series will share information and business insights on ASEAN business landscapes especially during the pandemic crisis.</p>
                <p>Made by the people of the ASEAN, the series will be free of charge and sharing by our stakeholders as speaker.<b>"</b></p>
                <br>
                <!--<i class="text-muted">Stay tuned to this space for updates on our upcoming webinar.</i>-->

            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-5 bg-gray rounded">
                <form class="p-4 py-5" action="#" method="post" name="form" id="contactForm">
                    {{ csrf_field() }}
                    <!-- <h5 class="mb-3">Feel free to get in touch</h5> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="First Name" name="first_name" required></div>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Last Name" name="last_name" required></div>                                              
                        </div>
                    </div>
<!--                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                    </div> -->
<!--                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                    </div> -->
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact Number" name="contact_number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company Name" name="company_name" required>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <select type="text" class="form-control" placeholder="Countries" name="country" required>
                                    <option value="" disabled selected>Country</option>
                                    @foreach($country as $key => $countries)
                                    <option value="{{$key}}">{{ $countries->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Industry" name="sector" required></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select type="text" class="form-control" placeholder="From where did you hear about our webinar?" name="sources"  required id="sources_select">
                            <option value="" disabled selected>Where did you hear about our webinar?</option>
                            <option value="1">ACASIA Facebook</option>
                            <option value="2">ACASIA Twitter</option>
                            <option value="3">ACASIA Instagram</option>
                            <option value="4">ACASIA Website</option>
                            <option value="5">ACASIA SOFEA Run Email</option>
                            <option value="6">TM Email</option>
                            <option value="7">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Please name the others" name="sources2" id="sources2">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="interest" name="interest">
                            <label class="custom-control-label" for="interest"><small>Do you want to participate for next webinar(if any) ?</small></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pill btn-primary" disabled>Submit</button>
                </form>
            </div>
            <div class="col-md-7">
                <div class="position-relative">
                    <img class="card-img-right flex-grow-1 rounded" src="{{ asset('/img/webinar/series2/635 x 597a.png') }}" alt="">
                    <div class="c-form-content text-left">
                        <!-- <h5 class="mb-3">(Placeholder images)</h5> -->
                        <p class="mb-3"></p>
                        <!-- <a href="#" class="btn btn-sm btn-pill btn-theme">Ask a Question</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--intro end-->

<a href="#" class="btn btn-pill btn-theme" data-toggle="modal" data-target="#Modal-1" style="display: none;" id="modalToggle">Launch Modal</a>
<!--modal-->
<div class="modal custom-modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-left pt-3">
                <h5 class="modal-title mb-3">Registration Successful</h5>
                <p>We will be in contact with you soon.</p>
                <p>If you do not receive the registration confirmation email within a few minutes of completing registration, please check your SPAM or JUNK folder.</p>
                <button type="button" class="btn btn-pill btn-primary mt-3" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){

        $('#sources2').hide();
        $('.loader-overlay').hide();
        
        $('#contactForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: "/webinar/create",
                data: $('#contactForm').serialize(),
                type: "POST",
                datatype: "json",
                beforeSend: function() {
                    $('.loader-overlay').show();
                },
                complete: function(){
                    $('.loader-overlay').hide();
                },
                success: function(e) {
                    // alert("Registration completed. We will be in contact with you soon.");
                    $('#modalToggle').click();
                    clearInput();
                },
                error: function (e){
                    console.log(JSON.stringify(e));
                }
            });
        });

        $('#sources_select').change(function(){
            var x = $('#sources_select').val();

            if ( x  == '7') {
                $('#sources2').show();
                $('#sources2').attr('required', true);
            }

            else{
                $('#sources2').hide();
                $('#sources2').attr('required', false);
            }
        });
        
        $('#Modal-1').on('hidden.bs.modal', function(){
            location.reload();
        });

        function clearInput(){
            $('input').each(function(){
                $(this).val('');
            })
        }

    })

</script>

@endsection