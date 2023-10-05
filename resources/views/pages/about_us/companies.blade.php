@extends('layouts.app')
@section('content')
    @php
        $ourStoryImages = App\Models\OurStoryImage::orderBy('id', 'ASC')
            ->where('id', '=', 5)
            ->get();
    @endphp

    <div class="banner-slider-wrapper overflow-hidden" style="margin-top: 61px;">
        <a href="#companies" class="animate-scroll scroll-down">
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
                            Companies </h2>
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

    <section id="companies" class="pt-80 pb-60 bg-light-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 mb-30">
                    <h2 class="heading-primary">Companies</h2>
                    <p>Shanta Holdings Ltd (SHL) is a key founding member and major stakeholder of the <a
                            href="https://stsgroupbd.com/">STS Group</a> - the promoter of the world-class <a
                            href="https://www.evercarebd.com/">Evercare Hospitals Dhaka</a> (previously Apollo Hospital) and
                        Chattogram,&nbsp;<a href="https://www.isdbd.org/">International School Dhaka (ISD)</a>, <a
                            href="https://glenrich.edu.bd/">Glenrich International School</a>, <a
                            href="https://ucbbd.org/">Universal College Bangladesh (UCB)</a> and the <a
                            href="https://dpsstsdhaka.org/">Delhi Public Schools</a>, Dhaka.<br />
                        <br />
                        <a href="https://shantalifestyle.com/">Shanta Lifestyle</a> was established with an aim to cater to
                        the rising interior design and home decor needs of Bangladeshi consumers searching for luxury and
                        exclusivity.<br />
                        <br />
                        <a href="https://www.shantasecurities.com/">Shanta Securities Ltd</a>. and <a
                            href="https://www.shanta-aml.com/">Shanta Asset Management Ltd</a>., subsidiaries of SHL, were
                        established with the aim of setting higher standards in the financial services sector.<br />
                        <br />
                        <a href="https://www.shantamultiverse.com/">Shanta Multiverse</a> marked SHL&#39;&rsquo;s entry into
                        the fast-growing F&amp;B sector of Bangladesh. It owns &ldquo;The White Canary
                        Caf&eacute;&rdquo;.<br />
                        <br />
                        <a href="https://shantaequity.net/">Shanta Equity Ltd</a>. is an innovative full-fledged merchant
                        bank offering a range of investment banking, corporate advisory and portfolio management solutions.
                    </p>
                </div>
                <div class="col-sm-6">
                    <ul class="row business-units-list">
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="https://shantalifestyle.com/" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">Shanta Lifestyle</div>
                                </div>
                            </a>
                        </li>
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="http://www.shanta-aml.com" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">Shanta Asset Management</div>
                                </div>
                            </a>
                        </li>
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="http://www.shantasecurities.com" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">Shanta Securities</div>
                                </div>
                            </a>
                        </li>
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="http://www.shantamultiverse.com/" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">Shanta Multiverse</div>
                                </div>
                            </a>
                        </li>
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="https://shantaequity.net" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">Shanta Equity</div>
                                </div>
                            </a>
                        </li>
                        <li class="custom-col-xs-6 col-sm-6 col-md-4">
                            <a href="http://www.stsgroupbd.com" target="_blank"
                                style="background-image: url(assets/img/1678168425mOKWs.jpg);" class="bg-cover-center">
                                <div class="caption-wrapper" style="background-color: #AAA000">
                                    <div class="caption">STS Group</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
