@extends('layouts.app')
@section('content')

<div class="banner-slider-wrapper overflow-hidden">
    <a href="#vision-mission--values" class="animate-scroll scroll-down">
        <img src="assets/img/icons/arrow-down.svg" alt="down arrow">
    </a>
    <div class="no-pad project-detail-info fullscreen-content general-page">
        <div class="overlay-layer" style="background-color: #231F20;"></div>
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

    <div class="bannerImageWrapper">
        <img src="assets/img/banner/1686628353Ny3ND.jpg" alt="">
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
                    <div class="col-sm-5 col-md-4">
                        <div class="mission-box">
                            <div class="inner-content">
                                <h2 class="mission-title">
                                    Vision </h2>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-7 col-md-8">
                        <h3 class="mission-slogan">To set SHL as an icon for both clients and competitors in the fields
                            of innovation, product quality, service standard, profitability and community work.</h3>
                    </div>

                </div>
                <div class="row mission_div">
                    <div class="col-sm-7 col-md-8 mt-40">
                        <ul class="mission-list">
                            <li><span class="list-heading">For Our Clients:</span> To offer a global touch, maintaining
                                Bangladeshi culture in living and work places, with utmost uncompromising service to our
                                clients and value for money.</li>
                            <li><span class="list-heading">For Our Investors:</span> To ensure a smooth
                                upward-reasonable trend of return on investment.</li>
                            <li><span class="list-heading">For Our Employees:</span> To give employees a feeling of
                                satisfaction by maximizing their potentials and providing means for their personal
                                well-being and career development.</li>
                        </ul>

                        <div class="symble-holder hidden-xs">
                            &
                        </div>
                    </div>

                    <div class="col-sm-5 col-md-4">
                        <div class="mission-box">
                            <div class="inner-content align-bottom">
                                <h2 class="mission-title text-right">
                                    MISSION </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-sm-5 col-md-4 pt40">
                        <div class="mission-box ">
                            <div class="inner-content">
                                <h2 class="mission-title">
                                    Values </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <p>Our vision &amp; mission are being made into reality through the belief and implementation of
                            6 core values. Excellence, Innovation, Commitment, Quality, Valuing People &amp; Customer
                            Satisfaction are embedded in our DNA and drives toward our motto of &ldquo;setting
                            standards&rdquo;.</p>

                        <ul class="mission-list">
                            <li><span class="list-heading">Excellence:</span> Excellence in every aspect of each project
                                is how SHL aims to win the hearts of their clients, because at the end of the day
                                &ndash; home is where the heart is.</li>
                            <li><span class="list-heading">Innovation:</span> Continuous improvement and innovation is
                                key to remaining at the top of the industry. SHL aims to set new standards in each
                                project, so having an innovative mindset is what drives them to go further.</li>
                            <li><span class="list-heading">Commitment:</span> Commitment to their customers and
                                landowners in terms of on-time delivery of their dream projects, with the promised
                                quality and specifications. Commitment to their team members, to maximize their
                                potentials and provide means for their well-being and career development.</li>
                            <li><span class="list-heading">Quality:</span> Quality is the core guiding principle at SHL,
                                it&rsquo;s what sets them apart. They aim to set new benchmarks of quality without
                                compromise, both in terms of their products and their customer service.</li>
                            <li><span class="list-heading">Value People:</span> SHL value the talent, time and
                                intentions of everyone they work with. They take interest in and embrace each
                                other&rsquo;s individuality, stay true to who they are, stand up for what they believe
                                in, and are always mindful of others.</li>
                            <li><span class="list-heading">Customer Satisfaction:&nbsp;</span>Ensuring utmost
                                uncompromising service to the clients and value for money is the key of their loyal
                                customer base.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection