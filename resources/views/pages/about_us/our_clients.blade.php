@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 6)
            ->get();
        
        $clients = App\Models\LandingCompany::orderBy('id', 'ASC')->get();
    @endphp


    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#our-clients" class="animate-scroll scroll-down">
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
                            Our Clients </h2>
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

    <section style="padding: 30px 0">
        <div class="container">
            <div class="content-holder no-before-after bg-white section-gap-50 col-md-8 col-md-offset-2">
                <h2 class="heading-primary style-1 text-center"> A Footprint of Renowned Names </h2>
                {{-- <p style="margin-top: 30px; text-align: center">We pride ourselves in creating spaces where leading
                    corporates choose to establish their place of business. At Shanta, you become part of an elite community
                    of renowned local and global names <br>.</p> --}}
            </div>
        </div>
    </section>

    <section style="background: gainsboro;">
        <div class="container-fluid">
            <ul class="row business-units-list clients-list" style="margin: 75px 0 45px 0;">
                @foreach ($clients as $item)
                    <li class="custom-col-xs-6 col-sm-6 col-md-3">
                        <style>
                            @media only screen and (max-width: 480px) {
                                .custom_mobile_clients_images {
                                    height: 203px !important;
                                }
                            }
                        </style>
                        <a href="javascript: void;" class="bg-cover-center custom_mobile_clients_images"
                            style="background-image: url('{{ asset($item->landing_company_image) }}');
                            background-size: contain;
                            background-color: #fff;">
                            <div class=" caption-wrapper" style="background-color: #AAA000">
                                <div class="caption">{{ $item->landing_company_title }}</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
