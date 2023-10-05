@extends('layouts.app')
@section('content')

<section class="banner-secondary projects-cat-banner" style="background-image: url('assets/img/cityscape-shl.png')">
    <div class="container-fluid">
        <h1 class="heading-primary style-1">
            <span>Upcoming<br/></span>
            Discover the future</h1>
    </div>
</section>

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

            
                    <div data-ref="mixitup-target"
                         class="mixit-item residential   custom-col-xs-6 col-md-4 col-sm-6 no-pad square">
                        <a href="projects-detils.php">
                            <div class="relative" style="overflow: hidden">
                                                                <div class="bg-thumb high-contrast">
                                    <div class="bg-thumb-inner" style="background-image: url('assets/img/upcoming.gif')">

                                    </div>
                                </div>
                                <div class="thumb-desc">
                                    <h4 class="project-name">Utopia</h4>
                                    <span class="project-address">Mirpur DOHS Road</span>
                                </div>
                            </div>

                            <div class="thumb-overlay">
                                <h4 class="project-name">Utopia</h4>
                                <span class="project-address">Mirpur DOHS Road</span>
                                <hr class="overlay-line">
                                <p>Who decisively attachment has dispatched. Fruit defer in party me built under first.
                                    Forbade him but savings sending ham general. So play do in near park that pain. </p>

                                <!-- <div class="overlay-list">
                                  <ul>
                                    <li>At a Glance</li>
                                    <li>Features & Amenities</li>
                                    <li>Location</li>
                                    <li>Gallery</li>
                                  </ul>
                                </div> -->
                            </div>
                        </a>
                    </div>

                   
              
                    

        </div>
    </div>
</section>

@endsection