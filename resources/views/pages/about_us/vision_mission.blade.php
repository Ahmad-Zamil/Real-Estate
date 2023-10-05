@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 2)
            ->get();
        
        $vision = App\Models\MissionVisionValues::orderBy('id', 'ASC')
            ->where('id', '=', 1)
            ->get();
        
        $mission = App\Models\MissionVisionValues::orderBy('id', 'ASC')
            ->where('id', '=', 2)
            ->get();
        
        $values = App\Models\MissionVisionValues::orderBy('id', 'ASC')
            ->where('id', '=', 3)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#vision-mission--values" class="animate-scroll scroll-down">
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
                            Vision, Mission & Values </h2>
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
        .pt40 {
            padding-top: 40px;
        }

        .mission_div {
            position: relative;
            bottom: 0;
            left: 0;
            top: unset;
            bottom: 0;
        }
    </style>
    <section id="678" class="section-gap mission-vission bg-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10 col-md-8 center-block">

                    <div class="row mb-50">
                        @foreach ($vision as $item)
                            <div class="col-sm-5 col-md-4">
                                <div class="mission-box">
                                    <img src="{{ asset($item->image) }}" alt="" style="width: 255px;height: 255px;">
                                </div>

                            </div>
                            <div class="col-sm-7 col-md-8">
                                <h3 class="mission-slogan">
                                    <h2 style="text-decoration: underline;margin-bottom: 2rem;text-transform: uppercase;">
                                        {{ $item->name }}
                                    </h2>
                                    <p>{!! $item->description !!}</p>
                                </h3>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mission_div">
                        @foreach ($mission as $item)
                            <div class="col-sm-7 col-md-8 mt-40">
                                <h3 class="mission-slogan">
                                    <h2 style="text-decoration: underline;margin-bottom: 2rem;text-transform: uppercase;">
                                        {{ $item->name }}
                                    </h2>
                                    <p>{!! $item->description !!}</p>
                                </h3>

                                <div class="symble-holder hidden-xs">
                                    &
                                </div>
                            </div>

                            <div class="col-sm-5 col-md-4">
                                <div class="mission-box">
                                    <img src="{{ asset($item->image) }}" alt="" style="width: 255px;height: 255px;">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row ">
                        @foreach ($values as $item)
                            <div class="col-sm-5 col-md-4 pt40">
                                <div class="mission-box ">
                                    <img src="{{ asset($item->image) }}" alt="" style="width: 255px;height: 255px;">
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-8">
                                <h3 class="mission-slogan">
                                    <h2 style="text-decoration: underline;margin-bottom: 2rem;text-transform: uppercase;">
                                        {{ $item->name }}
                                    </h2>
                                    <p>{!! $item->description !!}</p>
                                </h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
