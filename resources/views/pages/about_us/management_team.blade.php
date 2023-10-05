@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 4)
            ->get();
        
        $managementTeams1 = App\Models\ManagementTeam::orderBy('id', 'ASC')
            ->where('id', '=', 1)
            ->get();
        
        $managementTeams = App\Models\ManagementTeam::orderBy('id', 'ASC')
            ->where('id', '>', 1)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#management-team" class="animate-scroll scroll-down">
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
                            Management Team </h2>
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


    <section id="habibul-basit" class="pb-0 pt-70 features_amenities no-bg">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                    CEO
                </h2>
            </div>
            <div class="top-management-members row image-align-left">
                @foreach ($managementTeams1 as $item)
                    <div class="col-sm-6 col-md-5 ">
                        <div class="image-box-holder">
                            <style>
                                .custom_mobile_management_image_one {
                                    background-image: url({{ asset($item->image) }});
                                    width: 470px;
                                    height: 500px;
                                }

                                @media only screen and (max-width: 480px) {
                                    .custom_mobile_management_image_one {
                                        width: 100%;
                                        height: 100%;
                                    }
                                }
                            </style>
                            <div class="image-box no-shadow custom_mobile_management_image_one"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 image-box-side-content">
                        <div class="feature-details-box-wrapper mb-50">
                            <div class="feature-details mt-20">
                                <div class="mb-30">
                                    <h3 class="board-member-title text-uppercase">{{ $item->name }}</h3>

                                    <h4 class="board-member-desig text-uppercase">{{ $item->designation }}</h4>
                                </div>
                                <div class="line line--full line--1 line--grey mb-20"></div>
                                <div class="board-member-details">
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section-gap pb-0 pt-80">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                    Senior Management </h2>
            </div>
            <div class="row member-list">

                @foreach ($managementTeams as $item)
                    <div class="member-list-item custom-col-xs-6 col-sm-6 col-md-4">
                        <div class="member-thumb-wrapper pb-60 mb-30">
                            <style>
                                .custom_mobile_management_image_two {
                                    width: 396px;
                                    height: 486px;
                                }

                                @media only screen and (max-width: 480px) {
                                    .custom_mobile_management_image_two {
                                        width: 100%;
                                        height: 100%;
                                    }
                                }
                            </style>
                            <img class="custom_mobile_management_image_two" src="{{ asset($item->image) }}" alt="">
                        </div>
                        <div class="member-info">
                            <div class="top-info">
                                <h3 class="board-member-title text-uppercase">{{ $item->name }}</h3>
                                <h4 class="board-member-desig text-uppercase">{{ $item->designation }}</h4>
                            </div>
                            <div class="details-info">
                                <p>{!! $item->description !!}</p>
                            </div>
                            <button class="member-details-expand">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
