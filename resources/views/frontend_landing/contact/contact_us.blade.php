@extends('layouts.app')
@section('content')

<div class="banner-slider-wrapper overflow-hidden">
    <a href="#contact-us" class="animate-scroll scroll-down">
        <img src="assets/img/icons/arrow-down.svg" alt="down arrow">
    </a>
    <div class="no-pad project-detail-info fullscreen-content general-page">
        <div class="overlay-layer" style="background-color: #231F20;"></div>
        <div class="container-fluid full-height full-height-sm">

            <div class="row  full-height text-center no-margin table-all">
                <div class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                    <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                        Contact </h3>
                    <h2 class="heading-primary text-white">
                        Get in touch </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bannerImageWrapper">
        <img src="assets/img/banner/1686480677jVCnJ.jpg" alt="">
    </div>

</div>


<section id="contact-us" class=" our-background">
    <div class="clearfix">
        <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent " style="background-image: url(assets/img/1686481016Xqn3A.jpg);">

        </div>
        <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent ">
            <div class="content-holder no-before-after bg-white section-gap-50">
                <h2 class="heading-primary style-1">
                    Contact Us </h2>
                <span style="font-size:16px;"><strong>Shanta Holdings Limited</strong></span><br />
                <br />
                Forum, East Tower, Level 20 - 22<br />
                187-188/B, Bir Uttam Mir Shawkat Sarak<br />
                Tejgaon, Dhaka 1208.<br />
                <br />
                Hotline: 16634<br />
                Cell:+88 01678 666444<br />
                Email: info@shantaholdings.com<br />
                &nbsp; <!-- <a href="#" class="button button-outline button-outline-skyblue mt-30">Explore</a> -->
            </div>
        </div>
    </div>
</section>
<section id="who-we-are" class="section-gap bg-dark-grey pb-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-md-8 center-block">
                <div class="mb-60">
                    <h2 class="heading-primary text-white">
                        Write to us </h2>
                </div>
                <div>







                    <form id="contact-form" class="dynamic_form form-primary all-text-white custom-select" action="/site/dynamic_form" method="post" data-pjax="false">
                        <input type="hidden" name="_csrf-frontend" value="0fq8Etriq7SzZgu8qR7DZKNSO1jkWPhSfbW9rT927HyeltBnr4OT3fsLZff6eI0KxgRiMtE1kT0Ph_neYCmhNg==">
                        <div class="row">
                            <div class="col-sm-5 mb-50">
                                <input type="hidden" id="contact-form" class="form-control" name="form_id" value="contact-form">



                                <div class="form-message-container success_wrapper hide success_wrapper_contact-form">
                                    <div class="form-message-body">
                                        <div class="cross-popup" data-msg-close>
                                            X
                                        </div>
                                        <span class="success_container_contact-form"></span>
                                        <div>
                                            <div data-msg-close class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">Ok</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-message-container error_wrapper hide error_wrapper_contact-form">
                                    <div class="form-message-body">
                                        <div class="cross-popup" data-msg-close>
                                            X
                                        </div>
                                        <span class="error_container_contact-form"></span>
                                        <div>
                                            <div data-msg-close class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">Ok</div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="Dynamicform[spam_protector]" style="display:none;">
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="name">Name*</label>
                                        <input type="text" id="name" class="form-control" name="Dynamicform[name]" placeholder="Enter your full name here">
                                        <div class="hint-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="email">Email*</label>
                                        <input type="text" id="email" class="form-control" name="Dynamicform[email]" placeholder="Enter your email ID here">
                                        <div class="hint-block"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label class="control-label" for="Message">Message</label>
                                        <textarea id="Message" class="form-control" name="Dynamicform[Message]" placeholder="Enter your message here"></textarea>
                                        <div class="hint-block"></div>
                                    </div>
                                </div>


                                <div class="form-group no-border">
                                    <div>
                                        <button type="submit" class="dynamic_submit_btn button button-outline button-outline-white mt-30">Submit</button>
                                    </div>
                                </div>

                                <!-- </div> -->
                            </div>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</section>


<!--<section id="location-map" class="location-map-wrapper">-->
<!--    <div id="map" class="location-map-holder"></div>-->
<!--</section>-->


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3550420611464!2d90.40683279999999!3d23.7703682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77bbd0b4a67%3A0xca06d440b4fa70e!2sShanta%20Holdings%20Limited!5e0!3m2!1sen!2sbd!4v1686817730002!5m2!1sen!2sbd" style="height: 70vh;    margin-bottom: -5px; width: 100%;" frameborder="0" style="border:0"></iframe>

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3550420611464!2d90.40683279999999!3d23.7703682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77bbd0b4a67%3A0xca06d440b4fa70e!2sShanta%20Holdings%20Limited!5e0!3m2!1sen!2sbd!4v1686817730002!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->



@endsection