@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 1)
            ->get();
        
        $ourStories1 = App\Models\OurStory::orderBy('id', 'ASC')
            ->where('id', '=', 1)
            ->get();
        
        $ourStories2 = App\Models\OurStory::orderBy('id', 'ASC')
            ->where('id', '=', 2)
            ->get();
        
        $ourStories3 = App\Models\OurStory::orderBy('id', 'ASC')
            ->where('id', '=', 3)
            ->get();
        
        $ourStories4 = App\Models\OurStory::orderBy('id', 'ASC')
            ->where('id', '=', 4)
            ->get();
    @endphp



    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#our-story" class="animate-scroll scroll-down">
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
                            About us </h3>
                        <h2 class="heading-primary text-white">
                            Our Story </h2>
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



    <style>
        @media only screen and (max-width: 480px) {
            .custom_mobile_top {
                margin-top: 3rem;
            }
        }
    </style>
    <section id="background" class="our-background custom_mobile_top">
        <div class="clearfix">
            @foreach ($ourStories1 as $key => $item)
                <div class="col-sm-6 no-pad parallax-holder col-sm-46-percent"
                    style="background-image: url({{ asset($item->image) }});">
                </div>
                <div class="col-sm-6 no-pad col-sm-push-6 col-sm-54-percent col-sm-push-46-percent">
                    <div class="content-holder no-before-after bg-white section-gap">
                        <h2 class="heading-primary style-1">{{ $item->title }}</h2>
                        <p>{!! $item->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section id="who-we-are" class="who-we-are-section section-gap bg-grey pb-40">
        <div class="container-fluid">
            @foreach ($ourStories2 as $key => $item)
                <div class="mb-40">
                    <h2 class="heading-primary text-white">{{ $item->title }}</h2>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-sm-46-percent">
                        <div class="image-box-holder">
                            <div class="image-box " style="background-image: url({{ asset($item->image) }});">
                                <div class="inner-content text-white">
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6  col-sm-54-percent image-box-side-content no-pad no-margin">
                        <div class="mt-20 content-holder">
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    @foreach ($ourStories3 as $key => $item)
        <section id="our-approach" class="section-gap paraxify bg-cover-center text-white has-overlay-layer"
            style="background-image: url({{ asset($item->image) }});">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2  ">
                        <h2 class="heading-primary mb-20">{{ $item->title }}</h2>
                        <p>{!! $item->description !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach


    <section id="our-logo" class="who-we-are-section section-gap bg-light-white pb-40">
        <div class="container-fluid">
            @foreach ($ourStories4 as $key => $item)
                <div class="mb-40">
                    <h2 class="heading-primary text-black">{{ $item->title }}</h2>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-5 col-sm-46-percent">
                        <div class="image-box-holder">
                            <div class="image-box " style="background-image: url({{ asset($item->image) }});">
                                <div class="inner-content text-white">
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6  col-sm-54-percent image-box-side-content no-pad no-margin">
                        <div class="mt-20 content-holder">
                            <p>{!! $item->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
