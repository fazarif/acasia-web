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
                    Contact Us
                </h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--intro start-->
<div class="section-gap">
    <div class="container">
        <img class="block-image custom-background" style="opacity: 0.5;">      
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4">
            <div class="col-md-6">
                <h2 class="mb-4">Have some questions?</h2>
                <p class="text-muted">We’d love to hear from you! Here’s how you can reach us...</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="blurb blurb-border mb-4">
                    <i class="vl-building text-primary"></i>
                    <h6 class="mb-3">ACASIA Office</h6>
                    <p>Level 13, TM Annexe 2, Jalan Pantai Baharu, 50672 Kuala Lumpur, Malaysia</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blurb blurb-border mb-4">
                    <i class="vl-envelop2 text-primary"></i>
                    <h6 class="mb-3">Mailing Address </h6>
                    <p>inquiry@acasia.net<br>&nbsp</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blurb blurb-border mb-4">
                    <i class="vl-chat text-primary"></i>
                    <h6 class="mb-3">Business Phone</h6>
                    <p>+60 3 2241 1200 <br>
                        +61 3 8376 7654</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="blurb blurb-border mb-4">
                    <i class="vl-identity-card text-primary"></i>
                    <h6 class="mb-3">Social Media</h6>
                    <!-- <p>Facebook: ACASIA<br>
                        Instagram: ACASIA</p> -->
                        <div class="my-md-2 my-2">
                            <div class="social-links">
                                <a href="https://www.facebook.com/acasiacomms"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/acasiacomms/?hl=en"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/acasia-communications-sdn-bhd/mycompany/"><i class="fab fa-linkedin"></i></a>
                                <!--<a href="#"><i class="fab fa-dribbble"></i></a>-->
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="blurb blurb-border">
                    <!-- <div id="map"> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.067408665427!2d101.6650731397071!3d3.114809481791243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4981a5c75555%3A0xd83921b69136022d!2sTM%20Annexe%202!5e0!3m2!1sen!2smy!4v1578988118152!5m2!1sen!2smy" width=100% height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!--intro end-->

<!--contact form start-->
<div class="section-gap bg-dark">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="position-relative">
                    <img class="card-img-right flex-grow-1 rounded" src="{{ asset('img/cards/contact us.jpg') }}" alt="">
                    <div class="c-form-content text-left">
                        <h5 class="mb-3">Alternatively, you may also fill in the form below and our support staff will be in touch.</h5>
                        <p class="mb-3"></p>
                        <!-- <a href="#" class="btn btn-sm btn-pill btn-theme">Ask a Question</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-gray rounded">

                <form class="p-4 py-5" action="#" method="post" name="form" id="contactForm">
                    {{ csrf_field() }}
                    <!-- <h5 class="mb-3">Feel free to get in touch</h5> -->
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-pill btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!--contact form end-->

<!--FAQ start-->
<!-- <div class="section-gap bg-gray pb-4">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mb-lg-5 mb-4 pb-lg-5">
            <div class="col-md-8">
                <h2 class="mb-4">Frequently Asked Question</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid delectus, dolor
                    doloremque enim eos est fugit inventore ipsam iure laudantium molestiae.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">How does payment work?</h6>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat
                        labore libero
                        molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis
                        soluta
                        totam, voluptas voluptate!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">How install application in Linux?</h6>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat
                        labore libero
                        molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis
                        soluta
                        totam, voluptas voluptate!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">Is there any hidden cost?</h6>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat
                        labore libero
                        molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis
                        soluta
                        totam, voluptas voluptate!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-4">
                    <h6 class="mb-4">How to get the service via online?</h6>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat
                        labore libero
                        molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis
                        soluta
                        totam, voluptas voluptate!</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/contact-bottom.jpg') }}" alt="">
</div> -->
<!--FAQ end-->

<script type="text/javascript">

    $('#contactForm').submit(function(e){

        e.preventDefault();

        $.ajax({
            url: "/contactus/create",
            data: $('#contactForm').serialize(),
            type: "POST",
            datatype: "json",
            success: function(e) {
                alert("Email sent. We will be in contact with you soon.");
            },
            error: function (e){
                console.log(JSON.stringify(e));
            }
        });
    });

</script>

@endsection