@extends('layouts.app')
@section('content')
    <div class="banner-slider-wrapper overflow-hidden">
        <a href="#feature_amenity" class="animate-scroll scroll-down">
            <img src="{{ asset('assets/img/icons/arrow-down.svg') }}" alt="down arrow">
        </a>
        <div class="banner-bar">

        </div>
        <div class="section-gap project-detail-info fullscreen-content pb-0">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row full-height-sm project-title-row">
                    <div class="col-sm-5 col-md-5 project-short-info full-height full-height-sm">
                        <h2 class="heading-primary text-white">{{ $project_details->project_name }}</h2>
                        <span>{{ $project_details->project_address }}</span>
                    </div>
                </div>
                <div class="row  full-height-sm project-info-row">
                </div>
            </div>
        </div>

        <div class="bannerImageWrapper">
            <img src="{{ asset($project_details->product_thambnail) }}" alt="">
        </div>

    </div>


    <section id="at-a-glance" class=" our-background">
        <div class="clearfix">
            <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent"
                style="background-image: url({{ asset($project_details->first_image) }}); overflow: hidden;">
            </div>
            <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent">
                <div class="content-holder no-before-after bg-white section-gap">
                    <h2 class="heading-primary style-1 mb-60">
                        At a Glance
                    </h2>
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20">
                            {!! $project_details->project_glance !!}
                        </div>
                        <a href="" class="button button-outline button-outline-blackish mt-30 explore-btn">
                            Expand
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features--amenities" class="section-gap section-gap-bottom-features_amenities features_amenities">
        <div class="container-fluid">
            <div class="mb-80">
                <h2 class="heading-primary text-off-white">
                    Features &amp; Amenities
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-5 col-md-push-7">
                    <div class="image-box-holder">
                        <div class="image-box no-shadow "
                            style="background-image: url({{ asset($project_details->feature_image) }});">
                            <div class="inner-content text-white">
                                <p class="text-bold hide">
                                </p>
                                <!-- <a href="" class="button button-outline button-outline-white mt-30">
                                        Explore
                                    </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-md-pull-5 no-margin image-box-side-content">
                    <div class="feature-details-box-wrapper mb-50">
                        <div class="feature-details mt-20 text-white">
                            <div
                                style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Calibri, Arial, Helvetica, sans-serif; vertical-align: baseline; color: rgb(0, 0, 0);">
                                <div
                                    style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Calibri, Arial, Helvetica, sans-serif; vertical-align: baseline; color: inherit;">
                                    <div style="margin-top: 0px; margin-bottom: 0px;">
                                        <span style="color:#FFFFFF;">
                                            {!! $project_details->features !!}
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="" class="button button-outline button-outline-white mt-30 explore-btn">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="interior--exterior<br>gallery" class="project-gallery pb-70 pt-70">
        <div class="container-fluid">
            <div class="mb-50">
                <h1 class="heading-primary style-1">
                    Gallery
                </h1>
            </div>
        </div>

        <div class="gallery-wrapper light-gallery">
            <div class="overflow-hidden">

                @foreach ($multiImage as $img)
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="row">
                            <a href="{{ asset($img->photo_name) }}" data-sub-html="<h4>Splendor</h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="{{ asset($img->photo_name) }}" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>


    <!--<section id="" class="section-gap paraxify text-white project-video-section youtube-light-gallery">-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">-->
    <!--                <h2 class="heading-primary mb-50">Video tour</h2>-->
    <!--                <iframe width="100%" height="415" src="{{ $project_details->project_video }}"-->
    <!--                    title="YouTube video player" frameborder="0"-->
    <!--                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"-->
    <!--                    allowfullscreen></iframe>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->




    <section id="map-location" class="location-map-wrapper pt-70">
        <div class="container-fluid">
            <div class="mb-50">
                <h1 class="heading-primary style-1">
                    Location
                </h1>
            </div>
        </div>

        <!--      <div id="map" class="location-map-holder"></div>-->

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29210.80843686418!2d90.37269203185096!3d23.77051026307004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b1ed945f59%3A0x53ddf2303467090!2s3D%20Homes%20Ltd.!5e0!3m2!1sen!2sbd!4v1690025094973!5m2!1sen!2sbd"
            width="100%" style="border:0; height:30rem;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <script>
        // ------------------------------- Google Map ------------------

        // Styles of the map
        var mapStyle = [{
                "featureType": "all",
                "elementType": "all",
                "stylers": [{
                    "visibility": "on"
                }]
            },
            {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [{
                        "weight": "2.00"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fc0000"
                }]
            },
            {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "on"
                }]
            },
            {
                "featureType": "administrative.country",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#7b7b7b"
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                        "color": "#46bcec"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c8d7d4"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#070707"
                }]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }
        ];

        var infoWindow = null;

        function initMap() {
            var mapLatitude = 23.792580;
            var mapLongitude = 90.413018;
            var iconPath = "/themes/real_estate/assets/img/icons/map-pointer-main.svg";
            var latlong = {
                lat: mapLatitude,
                lng: mapLongitude
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                scrollwheel: false,
                mapTypeControl: false,
                streetViewControl: false,
                center: latlong,
                styles: mapStyle
            });
            var marker = new google.maps.Marker({
                position: latlong,
                map: map,
                icon: iconPath,
            });

            var infoWindow = new google.maps.InfoWindow({
                content: "<div class=\"map-window\">" +
                    "<h3><strong>" + "Splendor" + "</strong></h3>" +
                    "<h5>" + "Plot  26, Road  47, Gulshan" + "</h5>" +
                    "</div>"
            });

            marker.addListener('click', function() {
                if (infoWindow) {
                    infoWindow.close();
                }
                infoWindow.open(map, marker);
            });

            infoWindow.open(map, marker);

            /*infoWindow.open(map.map, marker);*/
            google.maps.event.addListenerOnce(map, 'idle', function() {
                function hideMapLink(el) {
                    el = jQuery(el).length ? jQuery(el) : jQuery('#map');
                    if (el.length) {
                        var mapLinks = el.find('a');
                        if (mapLinks.length) {
                            mapLinks.hide(0);
                            mapLinks.each(function() {
                                if (jQuery(this).next('span').length) {
                                    jQuery(this).next('span').hide(0);
                                }
                            });
                        }
                    }
                }

                hideMapLink();
            });
        }
    </script>

    <!--    <script async defer-->
                <!--            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCuwXtAIgV8jsWpwyG4MrmlTrTQTn5Hao&callback=initMap"></script>-->
    <!--    -->



    <section class="who-we-are-section section-gap bg-grey pb-40" style="background-color: #fff;">
        <div class="container-fluid">
            <div class="mb-40">
                <h2 class="heading-primary text-white" style="color: #aab0b2;">Book Now </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="image-box-holder">
                        <div class="image-box "
                            style="background-image: url({{ asset('frontend_landing/assets/img/book_now_two.png') }});">
                        </div>
                    </div>
                </div>

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

                            <input type="hidden" id="project_title" class="form-control"
                                name="Dynamicform[project_title]" value="Splendor">

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
                                    Book Now
                                </button>
                            </div>
                        </div>


                        <!-- end of form full -->

                    </form>



                </div>
            </div>
        </div>
    </section>


   

    <style>
        .project-youtube {
            position: absolute;
            /*right: 50px;*/
            margin-left: 50px;
            bottom: 150px;
            z-index: 99;
            color: white;
            width: 35px;
            height: 35px;
            font-size: 80px;
            line-height: 35px;
            transition: color 0.8s;
        }

        .project-youtube:hover {
            color: #9d2622;
        }

        .project-youtube:focus {
            color: #9d2622;
        }
    </style>

    <footer class="site-main-footer">
        <!-- Landing footer -->

        {{-- <div class="footer-top parallax-container" data-stellar-background-ratio="0.1"
            style="background-image: url(assets/img/footer.jpg)">
            <div class="container-fluid">
                <div class="box-parent three-items">
                    <div class="box">
                        <a href="contact/landowners">
                            <div class="inner">
                                <h3 class="title">Landowners</h3>
                                <p>Meet the professionals</p>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="contact/buyers">
                            <div class="inner">
                                <h3 class="title">Buyers</h3>
                                <p>Explore the options</p>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="contact/customers">
                            <div class="inner">
                                <h3 class="title">Customers</h3>
                                <p>Share your feedback</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    @endsection
