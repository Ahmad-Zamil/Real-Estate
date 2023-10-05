@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 12)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#board-of-directors" class="animate-scroll scroll-down">
            <img src="assets/img/icons/arrow-down.svg" alt="down arrow">
        </a>
        <div class="no-pad project-detail-info fullscreen-content general-page">
            <div class="overlay-layer" style="background-color: #231F20;"></div>
            <div class="container-fluid full-height full-height-sm">

                <div class="row  full-height text-center no-margin table-all" style="height: 50%;">
                    <div
                        class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                        <h3 class="heading-fourth text-white mb-20 hover-line inline-block" style="font-size: 3rem;">
                            Completed
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="bannerImageWrapper" style="height: 300px;">
            @foreach ($ourStoryImages as $item)
                <img src="{{ asset($item->background_image) }}" alt="">
            @endforeach
        </div>
    </div>

    <section class="projects-ongoing">
        <div class="container-fluid projects-listings-nav-wrapper">
            <div class="projects-listings">
                <ul class="sorting-nav controls">
                    <li class="active">
                        <span class="control" data-filter="all">All</span>
                    </li>
                    <li class="control">
                        <span class="control" data-filter=".residential">Residential</span>
                    </li>
                    <li class="control">
                        <span class="control" data-filter=".commercial">Commercial</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="projects-wrapper">
            <div class="clearfix mixitup-container">


                   @foreach($completed as $item)
                <div data-ref="mixitup-target" class="mixit-item residential   custom-col-xs-6 col-md-4 col-sm-6 no-pad square">
                    <a href="{{ url('project/details/' . $item->id) }}">
                        <div class="relative" style="overflow: hidden">
                            <!--<p class="soldout">Sold Out!</p>-->
                            <div class="bg-thumb high-contrast">
                                <div class="bg-thumb-inner" style="background-image: url({{ asset($item->product_thambnail) }})">

                                </div>
                            </div>
                            <div class="thumb-desc">
                                <h4 class="project-name">{{ $item->project_name }}</h4>
                                <span class="project-address">{{ $item->project_address }}</span>
                            </div>
                        </div>

                       
                    </a>
                </div>
                @endforeach





            </div>
        </div>
    </section>
@endsection
