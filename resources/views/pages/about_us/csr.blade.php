@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 7)
            ->get();
        
        $CSR = App\Models\CSR::orderBy('id', 'ASC')->get();
        
        $CSRGallery = App\Models\CSRGallery::orderBy('id', 'ASC')->get();
        
    @endphp


    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#csr" class="animate-scroll scroll-down">
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
                            CSR </h2>
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


    <section id="csr" class="section-gap" style="background-color: #e0f2f2;">
        <div class="container-fluid mb-80">
            <div class="row">
                @foreach ($CSR as $item)
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="mb-60">
                            <h2 class="heading-primary text-off-white">
                                {{ $item->title }} </h2>
                        </div>
                        {!! $item->description !!}
                    </div>
                @endforeach
            </div>
        </div>

        <div class="gallery-wrapper light-gallery">
            <div class="overflow-hidden">
                @foreach ($CSRGallery as $item)
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="gallery-image-container high-contrast">
                                <div class="image-thumb">
                                    <img src="{{ asset($item->image) }}" alt="">
                                </div>
                                <div class="gallery-image-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
