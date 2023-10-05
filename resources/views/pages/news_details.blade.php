@extends('layouts.app')
@section('content')
    @foreach ($BlogPost as $item)
        <div class="banner-slider-wrapper overflow-hidden">
            <a href="#superbrands-award-2023-24" class="animate-scroll scroll-down">
                <img src="{{ asset('assets/img/icons/arrow-down.svg') }}" alt="down arrow">
            </a>
            <div class="no-pad project-detail-info fullscreen-content general-page">
                <div class="overlay-layer" style="background-color: #231F20;"></div>
                <div class="container-fluid full-height full-height-sm">

                    <div class="row  full-height text-center no-margin table-all">
                        <div
                            class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                            <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                                11th February, 2023 </h3>
                            <h2 class="heading-primary text-white">
                                {{ $item->post_title }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bannerImageWrapper">
                <img src="{{ asset($item->post_image) }}" alt="">
            </div>

        </div>


        <section id="superbrands-award-2023-24" class="section-gap" style="background-color: #e0f2f2;">
            <div class="container-fluid mb-80">
                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                        <p
                            style="margin: 0px 0px 6px; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;">
                            {!! $item->post_long_description !!}</p>

                        <div class="text_exposed_show"
                            style="display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 14px;">
                            <p style="margin: 0px 0px 6px; font-family: inherit;">&nbsp;</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="gallery-wrapper light-gallery">
                <div class="overflow-hidden">
                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/1684059095eqcXq.png"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-1.png" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/16840599774N6ac.jpg"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-2.jpg" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/1684059519V6SAL.jpg"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-3.jpg" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/1684059519ikU4m.jpg"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-4.jpg" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/1684059519AshZ1.jpg"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-5.jpg" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-4">
                        <div class="row">
                            <a href="/admin/uploads/page/superbrands-award-2022-23/1684060080iFeRG.png"
                                data-sub-html="<h4>
                            Superbrands Award 2023-24                                                        </h4>">
                                <div class="gallery-image-container high-contrast">
                                    <div class="image-thumb">
                                        <img src="assets/img/N-6.png" alt="">
                                    </div>
                                    <div class="gallery-image-hover">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach
@endsection
