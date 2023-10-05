@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 3)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#board-of-directors" class="animate-scroll scroll-down">
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
                            Board of Directors </h2>
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


    <section id="board-of-directors" class="pb-0 pt-70 features_amenities no-bg">
        <div class="container-fluid">
            <div class="mb-60">
                <h2 class="heading-primary text-off-white">
                </h2>
            </div>

            @foreach ($bod as $item)
                @php
                    $id = $item->id;
                    $d = $id % 2;
                @endphp
                @if ($d == 0)
                    <div class="top-management-members row mb-80 image-align-left">
                        <div class="col-sm-6 col-md-5 ">
                            <div class="image-box-holder">
                                <div class="image-box no-shadow " style="background-image: url({{ asset($item->image) }});">
                                </div>
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
                                        <p style="text-align: justify;">{!! $item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($d != 0)
                    <div class="top-management-members mb-60 row image-align-right">
                        <div class="col-sm-6 col-md-5 col-sm-push-6 col-md-push-7 ">
                            <div class="image-box-holder">
                                <div class="image-box no-shadow " style="background-image: url({{ asset($item->image) }});">
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-sm-6 col-md-6 col-sm-pull-6 col-md-pull-5 image-box-side-content text-right text-left-xs">
                            <div class="feature-details-box-wrapper mb-50">
                                <div class="feature-details mt-20">
                                    <div class="mb-30">
                                        <h3 class="board-member-title text-uppercase">{{ $item->name }}</h3>
                                        <h4 class="board-member-desig text-uppercase">{{ $item->designation }}</h4>
                                    </div>
                                    <div class="line line--full line--1 line--grey mb-20"></div>
                                    <div class="board-member-details">
                                        <p style="text-align: justify;">{!! $item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section>
@endsection
