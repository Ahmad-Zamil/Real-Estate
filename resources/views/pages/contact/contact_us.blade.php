@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 9)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#contact-us" class="animate-scroll scroll-down">
            <img src="assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">

            <style>
                @media only screen and (max-width: 480px) {
                    .custom_mobile_overlay {
                        height: 550px;
                    }
                }
            </style>
            <div class="overlay-layer custom_mobile_overlay" style="background-color: #231F20;"></div>

            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                            Contact </h3>
                        <h2 class="heading-primary text-white">
                            Get in touch </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerImageWrapper" style="height: 550px;">
            @foreach ($ourStoryImages as $item)
                <img src="{{ asset($item->background_image) }}" alt="">
            @endforeach
        </div>
    </div>


    <section id="contact-us" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent "
                style="background-image: url(assets/img/1686481016Xqn3A.jpg);">

            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent ">
                <div class="content-holder no-before-after bg-white section-gap-50">
                    <h2 class="heading-primary style-1">
                        Contact Us </h2>
                    <span style="font-size:16px;"><strong>3D Homes</strong></span><br />
                    <br />
                    150 Lake Circus <br>
                    (Abed Dhali Road) <br>
                    Dhaka 1205
                    <br />
                    {{-- Hotline: 16634<br /> --}}
                    Cell:+880 1310-143188<br />
                    {{-- Email: info@shantaholdings.com<br /> --}}
                    &nbsp;
                    <!-- <a href="#" class="button button-outline button-outline-skyblue mt-30">Explore</a> -->
                </div>
            </div>
        </div>
    </section>



    <section class="who-we-are-section section-gap bg-grey pb-40" style="background-color: #fff;">
        <div class="container-fluid">
            <div class="mb-40">
                <h2 class="heading-primary text-white" style="color: #aab0b2;">Write to us</h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-md-6">

                    <form id="book-now" class="dynamic_form form-primary all-text-white custom-select"
                        action="/site/dynamic_form" method="post" data-pjax="false">
                        <input type="hidden" name="_csrf-frontend"
                            value="SU-h4LcIPuoKcR2jW-HzQYRxil_W40foFMue5F0R89MrB5SM1WtLx1s3MPYCppAL8zanDbeGE4xkqvuqbFOX6g==">
                        <!-- form full -->
                        <input type="hidden" id="book-now" class="form-control" name="form_id" value="book-now">



                        <div class="form-message-container success_wrapper hide success_wrapper_book-now">
                            <div class="form-message-body">
                                <div class="cross-popup" data-msg-close>
                                    X
                                </div>
                                <span class="success_container_book-now"></span>
                                <div>
                                    <div data-msg-close
                                        class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                        Ok</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-message-container error_wrapper hide error_wrapper_book-now">
                            <div class="form-message-body">
                                <div class="cross-popup" data-msg-close>
                                    X
                                </div>
                                <span class="error_container_book-now"></span>
                                <div>
                                    <div data-msg-close
                                        class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                                        Ok</div>
                                </div>
                            </div>
                        </div>

                        <div class="othersss">

                            <input type="hidden" id="project_title" class="form-control" name="Dynamicform[project_title]"
                                value="Splendor">

                        </div>


                        <input type="text" name="Dynamicform[spam_protector]" style="display:none;">

                        <div class="form-group" style="border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
                            <div>
                                <label class="control-label" for="name" style="color: #000;">Name*</label>
                                <input type="text" id="name" class="form-control" name="Dynamicform[name]"
                                    placeholder="Enter your full name here">
                                <div class="hint-block"></div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
                            <div>
                                <label class="control-label" for="email" style="color: #000;">Email</label>
                                <input type="text" id="email" class="form-control" name="Dynamicform[email]"
                                    placeholder="Enter your email ID here">
                                <div class="hint-block"></div>
                            </div>
                        </div>

                        <div class="form-group" style="border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
                            <div>
                                <label class="control-label" for="phone" style="color: #000;">Contact number*</label>
                                <input type="text" id="phone" class="form-control" name="Dynamicform[phone]"
                                    placeholder="Enter your contact number here">
                                <div class="hint-block"></div>
                            </div>
                        </div>
                        <div class="form-group" style="border-bottom: 1px solid rgba(0, 0, 0, 0.25);">
                            <div>
                                <label class="control-label" for="Message" style="color: #000;">Message</label>
                                <textarea id="Message" class="form-control" name="Dynamicform[Message]" placeholder="Enter your message here"></textarea>
                                <div class="hint-block"></div>
                            </div>
                        </div>


                        <div class="form-group no-border">
                            <div>
                                <button type="submit"
                                    class="dynamic_submit_btn button button-outline button-outline-white mt-30"
                                    style="color: #000;border-color: #aab0b2;">
                                    Submit
                                </button>
                            </div>
                        </div>


                        <!-- end of form full -->

                    </form>



                </div>

                <div class="col-sm-6 col-md-6">
                    <div class="image-box-holder">
                        <div class="image-box "
                            style="background-image: url({{ asset('frontend_landing/assets/img/book_now_three.png') }});">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29210.80843686418!2d90.37269203185096!3d23.77051026307004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b1ed945f59%3A0x53ddf2303467090!2s3D%20Homes%20Ltd.!5e0!3m2!1sen!2sbd!4v1690025094973!5m2!1sen!2sbd"
        width="100%" style="border:0; height:30rem;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!--<section id="location-map" class="location-map-wrapper">-->
    <!--    <div id="map" class="location-map-holder"></div>-->
    <!--</section>-->




    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3550420611464!2d90.40683279999999!3d23.7703682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77bbd0b4a67%3A0xca06d440b4fa70e!2sShanta%20Holdings%20Limited!5e0!3m2!1sen!2sbd!4v1686817730002!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
@endsection
