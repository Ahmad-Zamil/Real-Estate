@extends('layouts.app')
@section('content')


<div class="banner-slider-wrapper overflow-hidden">
    <a href="#customers" class="animate-scroll scroll-down">
        <img src="assets/img/icons/arrow-down.svg" alt="down arrow">
    </a>
    <div class="no-pad project-detail-info fullscreen-content general-page">
        <div class="overlay-layer" style="background-color: #231F20;"></div>
        <div class="container-fluid full-height full-height-sm">

            <div class="row  full-height text-center no-margin table-all">
                <div class="col-sm-12 project-short-info full-height full-height-sm table-cell-all table-cell-all-vertical">

                    <h3 class="heading-fourth text-white mb-20 hover-line inline-block">
                        Contact </h3>
                    <h2 class="heading-primary text-white">
                        Customers </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bannerImageWrapper">
        <img src="assets/img/banner/1686482064pKz5T.jpg" alt="">
    </div>

</div>


<section id="board-of-directors" class="pb-0 pt-70 features_amenities no-bg">
    <div class="container-fluid">
        <div class="mb-60">
            <h2 class="heading-primary text-off-white">
            </h2>
        </div>
        <div class="top-management-members row mb-80 image-align-left">
            <div class="col-sm-6 col-md-5 ">
                <div class="image-box-holder">
                    <div class="image-box no-shadow " style="background-image: url(assets/img/1686627805ajTHl.jpg);">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 image-box-side-content">
                <div class="feature-details-box-wrapper mb-50">
                    <div class="feature-details mt-20">
                        <div class="mb-30">
                            <h3 class="board-member-title text-uppercase">Customers</h3>

                            <h4 class="board-member-desig text-uppercase"></h4>
                        </div>
                        <div class="line line--full line--1 line--grey mb-20"></div>
                        <div class="board-member-details">
                            We continuously strive to ensure your comfort and satisfaction, which is why we value every feedback from your end. For any customer service or FMS related inquiries regarding your apartment or commercial space, please get in touch at:<br />
                            <br />
                            Email: cs@shantaholdings.com, fms@shantaholdings.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection