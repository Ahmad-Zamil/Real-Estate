@extends('layouts.app')
@section('content')

<div class="Popup-wrap">
    <div class="Popup-wrap__content">
      <div class="Popup-close"></div>
      <div class="Popup-img-wrapper">
        <img src="assets/img/banner/close_btn.png" class="Popup-close Popup-close-icon" alt="" />
        <a styler="display:block;" href="" target="_blank">
          <img src="assets/img/banner/pop_up.jpg" alt="" />
        </a>
      </div>
    </div>
  </div>
  
  <div class="banner-slider-wrapper" style="background-color: #fff">
    <a href="#lands-to-landmark" class="animate-scroll scroll-down">
      <img src="assets/img/icons/arrow-down.svg" alt="down arrow" />
    </a>
    <div id="layerslider" class="fitvidsignore" style="width: 100%; height: 100%">
      <div data-color="#837B10" class="ls-slide banner-slider-item slider_topper" data-ls="slidedelay:5500;transition2d:12;">
        <img src="assets/img/banner/bg-1.jpg" class="ls-bg" alt="Shantaholdings Slide" />
      </div>
      <div data-color="#837B10" class="ls-slide banner-slider-item slider_topper" data-ls="slidedelay:5500;transition2d:12;">
        <img src="assets/img/banner/bg-2.jpg" class="ls-bg" alt="Shantaholdings Slide" />
      </div>
      <div data-color="#1500BA" class="ls-slide banner-slider-item slider_topper" data-ls="slidedelay:5500;transition2d:12;">
        <img src="assets/img/banner/bg-3.jpg" class="ls-bg" alt="Shantaholdings Slide" />
      </div>
      <div data-color="#837B10" class="ls-slide banner-slider-item slider_topper" data-ls="slidedelay:5500;transition2d:12;">
        <img src="assets/img/banner/bg-4.jpg" class="ls-bg" alt="Shantaholdings Slide" />
      </div>
    </div>
  
    <!-- unique circle design -->
  
    <!-- <div class="circle-menu inactive">
            <div class="circle-inner">
              <h2 class="slogan">
                <span>Setting Standards</span>
                <span>Explore</span>
              </h2>
            </div>
            <ul class="circle-text text-uppercase">
              <li>
                <a href="//shantaholdings.com/projects/ongoing">
                  &nbsp; Ongoing &nbsp; |</a
                >
              </li>
              <li>
                <a href="//shantaholdings.com/projects/ongoing">
                  &nbsp; Ongoing &nbsp; |</a
                >
              </li>
              <li>
                <a href="//shantaholdings.com/projects/completed"
                  >&nbsp; Completed &nbsp; | &nbsp;</a
                >
              </li>
              <li>
                              <a href="//shantaholdings.com/projects/completed">&nbsp; Completed &nbsp; | &nbsp;</a>
                          </li>
                                                  <li>
                              <a href="//shantaholdings.com/projects/upcoming">&nbsp;Upcoming</a>
                          </li>
                           <li>
                              <a href="//shantaholdings.com/projects/upcoming">&nbsp;Upcoming &nbsp; | &nbsp;</a>
                          </li>
            </ul>
            <div class="circle-bg"></div>
            <div class="init-animation loader-line-mask">
              <div class="loader-line"></div>
          </div>
          </div> -->
  </div>
  
  <section id="lands-to-landmark" class="section-gap parallax-container" data-stellar-background-ratio="0.1" style="background-image: url(assets/img/cy-sketch_background.jpg)">
    <div class="container-fluid">
      <div class="row mb-40">
        <div class="col-sm-7 col-md-12">
          <h2 class="heading-primary style-1">
            WITNESS, AS WE TRANSFORM <br />YOUR LAND TO A LANDMARK
          </h2>
          <p>
            Partner with the best Artisan, to transform your land into a
            milestone of aesthetic marvel and superior value.
          </p>
        </div>
      </div>
  
      <div class="row">
        <div class="col-xs-12">
          <div class="carousel-wrapper has-shadow">
            <div class="carousel-primary slick-theme">
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/aura">
                    <div class="image-thumb high-contrast">
                      <img src="assets/img/slider-image/s-1.jpg" alt="Aura" title="Aura" />
                    </div>
                    <h3 class="title">Aura</h3>
                    <h5 class="sub-title">Road 83, Gulshan</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/the-sanctum">
                    <div class="image-thumb high-contrast">
                      <img src="assets/img/slider-image/s-2.jpg" alt="The Sanctum" title="The Sanctum" />
                    </div>
                    <h3 class="title">The Sanctum</h3>
                    <h5 class="sub-title">Road 81, Gulshan</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/zephyr">
                    <div class="image-thumb high-contrast">
                      <img src="assets/img/slider-image/s-3.jpg" alt="Zephyr" title="Zephyr" />
                    </div>
                    <h3 class="title">Zephyr</h3>
                    <h5 class="sub-title">Road 100 & 103, Gulshan</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/affinity">
                    <div class="image-thumb high-contrast">
                      <img src="assets/img/slider-image/s-4.jpg" alt="Affinity" title="Affinity" />
                    </div>
                    <h3 class="title">Affinity</h3>
                    <h5 class="sub-title">Road 11, Baridhara</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/adore">
                    <div class="image-thumb high-contrast">
                      <img src="assets/img/slider-image/s-5.jpg" alt="Adore" title="Adore" />
                    </div>
                    <h3 class="title">Adore</h3>
                    <h5 class="sub-title">Road 43, Gulshan</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
  
              <div class="carousel-item">
                <div class="inner">
                  <a href="//shantaholdings.com/ongoing/project/divine">
                    <div class="image-thumb high-contrast">
                      <img src="/admin/uploads/product/unnamed6/450x600/1684309442H7fXf.jpg" alt="Divine" title="Divine" />
                    </div>
                    <h3 class="title">Divine</h3>
                    <h5 class="sub-title">56, UN Road, Baridhara</h5>
                    <span class="read-more"> Residential </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="carousel-nav">
              <img class="prev slick-prev" src="assets/img/icons/arrow_Dark_left.svg" data-src="assets/img/icons/arrow_colored_left.svg" alt="Arrow left" />
              <img class="next slick-next" src="assets/img/icons/arrow_Dark_right.svg" data-src="assets/img/icons/arrow_colored_right.svg" alt="Arrow right" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-gap pt-100 bg-light-grey why-us pb-0 bg-cover-center parallax-container parallax-img" data-stellar-background-ratio="0.1" style="background-image: url(assets/img/BG-whyus.jpg)" data-image-src="/themes/real_estate/assets/img/images/BG-whyus-4.2.jpg">
    <div class="container-fluid">
      <div class="mb-30 hide">
        <h2 class="heading-primary text-white">WHY SHANTA HOLDINGS</h2>
      </div>
      <div class="row pt-70 mobile-pt-0">
        <div class="col-sm-6 col-md-5">
          <h2 class="heading-primary text-white">WHY SHANTA HOLDINGS</h2>
          <div class="text-white">
            <p>
              Shanta aspires to weave an unprecedented experience of fin
              living cocooned in comfort for you. It’s the statement of
              prestige and elegant Architecture that sets us apart.
            </p>
          </div>
          <div class="mb-30">
            <a href="//shantaholdings.com/why-shanta-holdings" class="hidden-xs button button-outline button-outline-white mtb-30">
              Explore
            </a>
          </div>
  
          <div class="image-box-holder flow-down hide">
            <div class="image-box" style="background-image: url()">
              <div class="inner-content text-white text-bold">
                <p>
                  Shanta aspires to weave an unprecedented experience of
                  fine living cocooned in comfort for you. It’s the
                  statement of prestige and elegant Architecture that sets
                  us apart.
                </p>
                <a href="//shantaholdings.com/about-us/who-we-are" class="button button-outline button-outline-white">
                  Explore
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-md-offset-1 mb-70 mobile-mb-0">
          <div class="bordered-tiles our-specility-lightbox-wrapper mobile-mb-0 stagger-wrapper mb-0">
            <div class="row parent">
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-1" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text"> Prime Locations </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
  
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-2" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text"> Top Consultants </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
  
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-3" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text">
                            Highest Quality Materials
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
  
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-4" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text">
                            Uncompromised Safety
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
  
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-5" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text"> On-time Delivery </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
  
              <div class="col-xs-4 col-sm-6 col-md-4 borderd-tile-item mb-30 no-border sm">
                <a href="#specility-lightbox-6" class="lbox-btn">
                  <div class="inner">
                    <div class="content">
                      <div class="table-all">
                        <span class="vertical-center">
                          <span class="tile-text">
                            Professional Management
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="visible-xs">
              <a href="//shantaholdings.com/why-shanta-holdings" class="button button-outline button-outline-white mt-30 mb-100">
                Explore
              </a>
            </div>
            <div class="lightbox-content-wrapper">
              <div id="specility-lightbox-1" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">Prime Locations</h3>
                  <div class="desc">
                    <p>
                      We offer a selection from the most lucrative locations
                      across the city. Our project locations are selected
                      intelligently, keeping in mind the things that matter
                      to you most.
                    </p>
                  </div>
                </div>
              </div>
  
              <div id="specility-lightbox-2" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">Top Consultants</h3>
                  <div class="desc">
                    We engage the leading consultants in their respective
                    fields from both home and abroad, to ensure that every
                    facet of a project is designed to perfection. After all,
                    the best designs can only come from the best minds.
                  </div>
                </div>
              </div>
  
              <div id="specility-lightbox-3" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">
                    Highest Quality Materials
                  </h3>
                  <div class="desc">
                    <p>
                      We continuously explore material sourcing globally to
                      enhance the comfort and lifestyle of our clients. Each
                      material used in our projects is selected with the
                      utmost attention to quality, suitability and
                      durability.
                    </p>
                  </div>
                </div>
              </div>
  
              <div id="specility-lightbox-4" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">Uncompromised Safety</h3>
                  <div class="desc">
                    <p>
                      Our priority to safety is second to none. Structural,
                      electro-mechanical and fire safety stand paramount in
                      our planning and construction methodology, in order to
                      ensure your safety in your sanctuary.
                    </p>
                  </div>
                </div>
              </div>
  
              <div id="specility-lightbox-5" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">On-time Delivery</h3>
                  <div class="desc">
                    <p>
                      Our experienced team of highly qualified engineers and
                      management professionals work relentlessly in perfect
                      synergy. At Shanta, delivering uncompromised quality,
                      on time, has become our mantra.
                    </p>
                  </div>
                </div>
              </div>
  
              <div id="specility-lightbox-6" class="specility-lightbox-item text-left bg-white">
                <a href="#" class="close-lightbox text-30">
                  <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" alt="close" />
                </a>
                <div class="inner">
                  <h3 class="title text-18 mb-20">
                    Professional Management
                  </h3>
                  <div class="desc">
                    <p>
                      A safe, clean and comfortable living environment can
                      only be maintained by a team of professionals with an
                      eye for perfection. Our Facility Management team will
                      ensure your desire to live in a beautiful community
                      remains fulfilled.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Map Locator -->
  <style>
    .hideafterclick::after {
      opacity: 0;
      transition-delay: 4s;
      transition: 4s all !important;
      visibility: hidden;
    }
  
    .hideafterclick a {
      display: none;
    }
  
    .location-map-holder {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  
    .location-map-holder:hover::after {
      background-color: rgba(0, 0, 0, 0.7);
    }
  
    .location-map-holder::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 0;
      top: 0;
  
      transition: 0.7s all ease-in;
      background-image: url("/themes/real_estate/assets/img/maponclickbg.jpg");
      background-color: rgba(0, 0, 0, 0);
      background-blend-mode: multiply;
    }
  
    .location-map-holder a {
      font-size: inherit;
      padding: 10px 29px;
      text-transform: uppercase;
      color: white;
      border: 3px solid;
      background: 0 0;
      font-family: "DIN Next LT Pro", sans-serif;
      font-weight: 700;
      position: relative;
      z-index: 3;
      transition: all 0.3s;
      opacity: 0;
      visibility: hidden;
    }
  
    .location-map-holder:hover a {
      opacity: 1;
      visibility: visible;
      display: inline-block;
    }
  
    .location-map-holder a:hover {
      background-color: #fff;
      color: #000;
      border-color: white;
    }
  </style>
  <section id="map-location" class="location-map-wrapper section-gap" style="background-image: url(assets/img/cy-sketch_background.jpg)">
    <div class="container-fluid" style="margin-bottom: 40px">
      <div class="row">
        <div class="col-sm-3">
          <h1 class="heading-primary style-1">OUR PROJECTS</h1>
        </div>
        <div class="col-sm-5" style="margin-bottom: 10px">
          <div class="inner-addon right-addon">
            <span class="glyphicon glyphicon-search" style="font-size: 18px"></span>
  
            <input style="border-radius: 1.5rem; height: 50px; font-size: 15px" type="text" class="form-control map-search-bar" id="search-bar" placeholder="Type the Project name or Location" />
          </div>
        </div>
        <div class="col-md-2">
          <select style="border-radius: 1.5rem; height: 50px; margin-bottom: 10px" name="" id="productCategory" class="form-control">
            <option value="">Project Status</option>
            <option value="4">Ongoing</option>
            <option value="7">Upcoming</option>
            <option value="8">Completed</option>
          </select>
        </div>
        <div class="col-md-2 mt-1">
          <select style="border-radius: 1.5rem; height: 50px" name="" id="subCategory" class="form-control">
            <option value="">Project Type</option>
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
          </select>
        </div>
      </div>
    </div>
  
    <div id="map" class="location-map-holder">
      <a href="javascript:" id="loadMap">click to load the map</a>
    </div>
  </section>
  
  <!-- Sidebar Modal -->
  <div id="myModal" class="modal left fade" role="dialog" data-keyboard="true" data-backdrop="true">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header center">
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
          <center>
            <img src="/admin/settings_images/logo-1488715861.svg" alt="Logo" style="height: auto; width: 50%" />
          </center>
        </div>
        <br />
        <div class="modal-body">
          <h3 class="title text-bold text-uppercase text-wi" id="project-title" style="letter-spacing: 3px"></h3>
          <div class="text" id="project-description"></div>
          <hr />
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Features</a>
            </li>
            <li class="nav-item" id="gallaryModalLoaderBtn">
              <a href="#" class="nav-link" id="gallary-modal-loader" type="button" class="hidden" data-toggle="modal" data-target="#gallaryModal">Gallery</a>
            </li>
            <li class="nav-item" id="galleryBtnForMobile">
              <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade in active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h4 class="title text-bold mt-3">PROJECT DETAILS</h4>
              <ul class="list-unstyled" id="project-specifications"></ul>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h4 class="title text-bold">FEATURES & AMENITIES</h4>
              <ul class="list-unstyled" id="featureAndAmenities"></ul>
            </div>
            <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="home-tab">
              <h4 class="title text-bold mt-3">Gallery</h4>
            </div>
          </div>
        </div>
        <div class="map-infobar-footer">
          <br />
          <a href="" class="text-white" data-toggle="modal" data-target="#contactFormModal">
            <h3 class="title text-bold">Contact Us</h3>
          </a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Image Gallary Modal -->
  <div id="gallaryModal" class="modal bottom fade" role="dialog" data-keyboard="true" data-backdrop="true">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <div class="owl-carousel"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact Form Modal -->
  <div class="modal fade contact-modal" id="contactFormModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="message" style="width: 95%"></div>
          <h4 class="modal-title">Query About</h4>
          <h2 id="contact-project-title"></h2>
        </div>
        <form id="contact-form" action="/site/send_email" method="post">
          <div class="modal-body">
            <div class="form">
              <input type="hidden" name="_csrf-frontend" value="cDZBOVVyRXYgAxUNbBkiGxlVdVQcCzE6I1wGWBgdJh0vZCBQZhYfFw==" />
              <input type="hidden" id="contact-form" class="form-control" name="form_id" value="contact-form" />
              <input type="hidden" class="form-control project_name" name="Dynamicform[project_name]" />
              <div class="form-group">
                <input type="text" class="form-control" required name="Dynamicform[name]" id="name" placeholder="Your Name" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required name="Dynamicform[email]" id="email" placeholder="E-mail address" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required name="Dynamicform[phone]" id="phone" placeholder="Phone Number" />
              </div>
              <div class="form-group">
                <textarea class="form-control" required name="Dynamicform[message]" id="message-text" placeholder="Your Message"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="mailSend" class="btn btn-deepgreen">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <button id="modal-loader" type="button" class="hidden" data-toggle="modal" data-target="#myModal"></button>
  <button id="gallary-modal-loader" type="button" class="hidden" data-toggle="modal" data-target="#gallaryModal"></button>
  
  <script>
    jQuery(document).on(
      "click",
      '[data-toggle="lightbox"]',
      function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      }
    );
  
    jQuery("#productCategory").on("change", function() {
      let residential = "residential";
      let commercial = "commercial";
  
      if ($(this).val() == 4) {
        residential = 15;
        commercial = 10;
      }
  
      if ($(this).val() == 7) {
        residential = 11;
        commercial = 12;
      }
  
      if ($(this).val() == 8) {
        residential = 13;
        commercial = 14;
      }
  
      $("#subCategory").find("option").not(":first").remove();
      $("#subCategory").append(`
              <option value="${residential}">Residential</option>
              <option value="${commercial}">Commercial</option>
          `);
  
      // set empty search box data
      projects = [];
  
      // re-initialize map
      initMap();
    });
  
    $("#subCategory").on("change", function() {
      // set empty search box data
      projects = [];
  
      // re-initialize map
      initMap();
    });
  
    /** Send Email */
    $(document).delegate("#mailSend", "click", function(event) {
      event.preventDefault();
      let buttonRef = $("#mailSend");
      loadingInfo();
  
      var form = $(this).closest("form");
  
      $.ajax({
        url: "/site/send_email",
        type: "post",
        data: form.serialize(),
        success: function(data) {
          if (data.result == "success") {
            $(".message").append(
              `<p class='alert alert-success contact-msg'>Message Sent Successfully!</p>`
            );
  
            stopLoadingInfo(buttonRef);
          } else {
            $(".message").append(
              `<p class='alert alert-danger'>Please Try Again!</p>`
            );
          }
  
          setTimeout(function() {
            $(".contact-msg").remove();
          }, 15000);
        },
      });
  
      return false;
    });
  
    /** Send Mail Loading Functions */
    function loadingInfo() {
      let placeholder = `Sending`;
      let buttonRef = $("#mailSend")
        .removeClass("btn-deepgreen")
        .addClass("btn-success");
      buttonRef.html(placeholder);
      let counter = 1;
      myInterval = setInterval(function() {
        if (counter > 0 && counter < 4) {
          buttonRef.append(".");
        } else {
          counter = 0;
          buttonRef.html(placeholder);
        }
        counter++;
      }, 200);
    }
  
    function stopLoadingInfo(buttonRef) {
      buttonRef.removeClass("btn-success").addClass("btn-deepgreen");
      buttonRef.text(`Submit`);
      clearInterval(myInterval);
    }
  
    // ------------------------------- Google Map ------------------
  
    // Styles of the map
    var mapStyle = [{
        featureType: "all",
        elementType: "all",
        stylers: [{
          visibility: "on",
        }, ],
      },
      {
        featureType: "all",
        elementType: "geometry.fill",
        stylers: [{
            weight: "2.00",
          },
          {
            visibility: "on",
          },
        ],
      },
      {
        featureType: "all",
        elementType: "geometry.stroke",
        stylers: [{
          color: "#fc0000",
        }, ],
      },
      {
        featureType: "all",
        elementType: "labels.text",
        stylers: [{
          visibility: "on",
        }, ],
      },
      {
        featureType: "administrative.country",
        elementType: "geometry.fill",
        stylers: [{
          visibility: "on",
        }, ],
      },
      {
        featureType: "landscape",
        elementType: "all",
        stylers: [{
          color: "#f2f2f2",
        }, ],
      },
      {
        featureType: "landscape",
        elementType: "geometry.fill",
        stylers: [{
          color: "#ffffff",
        }, ],
      },
      {
        featureType: "landscape.man_made",
        elementType: "geometry.fill",
        stylers: [{
          color: "#ffffff",
        }, ],
      },
      {
        featureType: "poi",
        elementType: "all",
        stylers: [{
          visibility: "off",
        }, ],
      },
      {
        featureType: "road",
        elementType: "all",
        stylers: [{
            saturation: -100,
          },
          {
            lightness: 45,
          },
        ],
      },
      {
        featureType: "road",
        elementType: "geometry.fill",
        stylers: [{
          color: "#eeeeee",
        }, ],
      },
      {
        featureType: "road",
        elementType: "labels.text.fill",
        stylers: [{
          color: "#7b7b7b",
        }, ],
      },
      {
        featureType: "road",
        elementType: "labels.text.stroke",
        stylers: [{
          color: "#ffffff",
        }, ],
      },
      {
        featureType: "road.highway",
        elementType: "all",
        stylers: [{
          visibility: "simplified",
        }, ],
      },
      {
        featureType: "road.arterial",
        elementType: "labels.icon",
        stylers: [{
          visibility: "off",
        }, ],
      },
      {
        featureType: "transit",
        elementType: "all",
        stylers: [{
          visibility: "off",
        }, ],
      },
      {
        featureType: "water",
        elementType: "all",
        stylers: [{
            color: "#46bcec",
          },
          {
            visibility: "on",
          },
        ],
      },
      {
        featureType: "water",
        elementType: "geometry.fill",
        stylers: [{
          color: "#c8d7d4",
        }, ],
      },
      {
        featureType: "water",
        elementType: "labels.text.fill",
        stylers: [{
          color: "#070707",
        }, ],
      },
      {
        featureType: "water",
        elementType: "labels.text.stroke",
        stylers: [{
          color: "#ffffff",
        }, ],
      },
    ];
  
    var infoWindow = null;
    var lastOpenedInfoWindow = null;
  
    let projects = [];
    let projectParams = [];
  
    let sidebar = function sideBar(params) {
      $("#project-title, #contact-project-title").html(params.title);
      $(".project_name").val(params.title);
      $("#project-description").html(params.short_desc);
      $("#project-specifications").html(params.specification);
      $("#featureAndAmenities").html(params.features);
      $(".owl-carousel").html("");
      $(".owl-carousel").append(params.images).owlCarousel("destroy");
      owlCarouselInit();
      $("#gallery").html(params.images);
      $("#modal-loader").trigger("click");
      $("#gallary-modal-loader").trigger("click");
      $(".modal-backdrop").removeClass("modal-backdrop");
    };
  
    function jumpToLocation() {}
  
    /** Owl Carousel JS */
    function owlCarouselInit() {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
      $(".owl-carousel").trigger("to.owl.carousel", [2, 1]);
    }
  
    function initMap() {
      var mapLatitude = 23.7702;
      var mapLongitude = 90.4063;
      var iconPath = "/themes/real_estate/assets/img/map-icon.png";
      var latlong = {
        lat: mapLatitude,
        lng: mapLongitude
      };
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        scrollwheel: false,
        mapTypeControl: false,
        streetViewControl: false,
        center: latlong,
        styles: mapStyle,
      });
  
      function addMarker(params) {
        var marker = new google.maps.Marker({
          position: params.coords,
          map: map,
          icon: iconPath,
        });
  
        var infoWindow = new google.maps.InfoWindow({
          content: "<div>" +
            "<h3><strong>" +
            params.content.title +
            "</strong></h3>" +
            "<h5>" +
            params.content.short_desc +
            "</h5>" +
            "</div>",
          disableAutoPan: false,
        });
  
        marker.addListener("click", function() {
          if (lastOpenedInfoWindow) {
            lastOpenedInfoWindow.close();
          }
          infoWindow.open(map, marker);
          lastOpenedInfoWindow = infoWindow;
          //descriptionInfoWindow.open(map, marker);
          sidebar(params.content);
        });
  
        return marker;
      }
  
      var productTitle = "Northern Lights";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge <div>&nbsp;</div> <div>Professionally Designed Landscaping, Lighting and Water Features</div> <div>&nbsp;</div> <div>Children&#39;s Play Area</div> <div>&nbsp;</div> <div>Gym with State-of-the-art Equipment<br /> <br /> Rooftop Party Space</div> <div>&nbsp;</div> <div>Outdoor Activity Zone &amp; Sitting Area</div> <div><br /> Elegantly&nbsp;Furnished Party Room<br /> <br /> Swimming Pool<br /> <br /> Multi-level Basement Car Parking with&nbsp;Ventilation System<br /> <br /> Fire Fighting and Smoke Detection System</div>";
      var productDesc = "Plot 09, Road 69, Block NW (A),Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.803798,
          lng: 90.409997,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 30.14 katha<br></li><li style='margin-bottom: 10px'>Land Orientation: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: G+12<br></li><li style='margin-bottom: 10px'>Number of Apartments: 22<br></li><li style='margin-bottom: 10px'>Size of Units: 5,948 - 6,435 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 66<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 222/14/284<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484mHl1l.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484mHl1l.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484sb108.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484sb108.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484SDkkX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484SDkkX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15738334842K26M.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15738334842K26M.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15738334844QwCn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15738334844QwCn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484PZ4a0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484PZ4a0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484qCcsD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484qCcsD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573833484beHFN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573833484beHFN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15738334843JEAm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15738334843JEAm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15738334841pm6z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15738334841pm6z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1573834018Si1WX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1573834018Si1WX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15738340183aNOx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15738340183aNOx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1574167031afkk4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1574167031afkk4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1574167083QNtY4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1574167083QNtY4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1574167083X3Fn2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1574167083X3Fn2.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Mirzam";
      var features =
        '<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping, Lighting and Water Features</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Parking Fee Ground Floor</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement Car Parking with Ventilation System</span></span></span></span></p>';
      var productDesc = "Plot 3/7, Asad Avenue, Block A, Mohammadpur";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.760153,
          lng: 90.368811,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Iqbal Habib<br></li><li style='margin-bottom: 10px'>Land Area: 12.50 kathas<br></li><li style='margin-bottom: 10px'>Land Orientation: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 75 feet wide<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Number of Apartments: 26<br></li><li style='margin-bottom: 10px'>Size of Units: 1,633 sft – 2,647 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 36<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 943/15/865<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480YsODO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480YsODO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480QXwxu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480QXwxu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480OsJnc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480OsJnc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16123714800KX52.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16123714800KX52.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480j2sXB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480j2sXB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480TQBF8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480TQBF8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480MKI70.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480MKI70.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480EBJxf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480EBJxf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480oHgtS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480oHgtS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480eQGlC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480eQGlC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480eQs17.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480eQs17.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1612371480BkPdx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1612371480BkPdx.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Skymark";
      var features =
        '<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Designed Atrium Entry of 40 Feet Height to Reception Zone</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Insulated, Double-glazing, Low-emission &amp; Heat-resistant Glass</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">11.5 Feet Floor to Floor Height for Comfortable Interior Arrangement&nbsp;</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professional Landscaping &amp; Lighting</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Four High-Speed Elevators from Internationally Reputed Brand</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Four-Layered Basement Parking with Mechanical Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Vehicular Entry and Exit&nbsp;</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Centrally Air-conditioned System with Load Management</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Load Power Backup with Most Advanced Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State-of-the-art Sub-station with Modern Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Building Automation System (BAS) for Energy-efficient Operation of the Building</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Two Fire Stairs with UL Listed Two Hours Fire Rated Door</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Building Facilities Management by Shanta Holdings for Five Years</span></span></span></span></p>';
      var productDesc = "18, Gulshan Avenue, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.78262222,
          lng: 90.41665556,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ehsan Khan<br></li><li style='margin-bottom: 10px'>Land Area: 26.6 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 100 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: Ground + 13 floors<br></li><li style='margin-bottom: 10px'>Size of Units: 5,811 -10,392 sft (approx)<br></li><li style='margin-bottom: 10px'>Built Area: 163,444 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 04<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 113<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 146/13/806<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140EcyYs.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140EcyYs.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140bikEe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140bikEe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140KZjn0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140KZjn0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140MLe0Z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140MLe0Z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/15498911405uPav.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/15498911405uPav.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140ub81W.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140ub81W.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140wF85E.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140wF85E.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140BhXWV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140BhXWV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140bGVv4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140bGVv4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140VhQ9i.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140VhQ9i.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140PfNFq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140PfNFq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/skymark/1549891140i9Bqa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/skymark/1549891140i9Bqa.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "14",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Serenity";
      var features =
        "<p>Single unit apartments per floor<br /> <br /> Fully furnished party room<br /> <br /> Fully equipped gym at rooftop<br /> <br /> The building design oriented to maximize light and air flow<br /> <br /> Professional landscaping and lighting</p>";
      var productDesc = "Plot 16, Road 79, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80215278,
          lng: 90.41608333,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 10.2 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: North Gulshan, single unit per floor<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 10<br></li><li style='margin-bottom: 10px'>Size of Units: 4,055 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 20<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 804/10/74<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149139691134hbA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149139691134hbA.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491396911QBucl.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491396911QBucl.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491396911dfao4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491396911dfao4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14913969112akDY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14913969112akDY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491396911q1TCF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491396911q1TCF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491396911Mj57t.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491396911Mj57t.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491396911QYtrY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491396911QYtrY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639323xer98.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639323xer98.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639323zusKS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639323zusKS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639323OkR2Y.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639323OkR2Y.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Amari Hotel Dhaka";
      var features =
        "<p>Centrally air-conditioned<br /> <br /> Banquet hall<br /> <br /> Business centre<br /> <br /> Fine dine restaurant<br /> <br /> Round the clock cafe<br /> <br /> Rooftop bar<br /> <br /> Swimming pool<br /> <br /> Fitness centre<br /> <br /> Jacuzzi<br /> <br /> Spa</p>";
      var productDesc = "47, Road no  41, Gulshan-2";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79036389,
          lng: 90.412775,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Type: Luxury Hotel<br></li><li style='margin-bottom: 10px'>Owner: Karishma Services Ltd.<br></li><li style='margin-bottom: 10px'> Developer: Shanta Holdings Ltd.<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Total Built Area: 136,000 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Floors: 14<br></li><li style='margin-bottom: 10px'>Number of Rooms: 134<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14979392590ihJM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14979392590ihJM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939275n4QQI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939275n4QQI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939291KuMI8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939291KuMI8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939315MmvmG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939315MmvmG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939807RimML.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939807RimML.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939826NnTA8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939826NnTA8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939850eAAIi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939850eAAIi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939871FcGqA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939871FcGqA.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497939883ACSe9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497939883ACSe9.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "14",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Landing 104 ";
      var features =
        "<p>Situated at the widest and cleanest part of Gulshan Lake<br /> <br /> Grand reception and waiting lounge<br /> <br /> Fully equipped state-of-the-art gym<br /> <br /> Elegantly furnished party room<br /> <br /> Functional jacuzzi at rooftop<br /> <br /> Children&rsquo;s play area<br /> <br /> Community office&nbsp;<br /> &nbsp;<br /> Landscaped deck and seating at rooftop<br /> <br /> Professionally designed landscaping, lighting &amp; water features<br /> <br /> Water purification and geyser systems<br /> <br /> Multi-layered basement parking with&nbsp;ventilation system</p>";
      var productDesc = "Plot CEN (F) 01, Road 104, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79401389,
          lng: 90.42009167,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Mustafa Ameen<br></li><li style='margin-bottom: 10px'>Landscaping Consultant: An Australian Consulting Firm<br></li><li style='margin-bottom: 10px'>Land Area: 17.8 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Lakeside & Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road: 55 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 22<br></li><li style='margin-bottom: 10px'>Size of Units: 3,300 - 3,500 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 44<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 489/10/172<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=KQuEt5m-Lvs&t=210s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165xpZQY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165xpZQY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165vQXmI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165vQXmI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165n9aqo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165n9aqo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165yRk7b.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165yRk7b.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165Gk2mk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165Gk2mk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165rmNiG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165rmNiG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497941165VQ6VG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497941165VQ6VG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14979411654qw2M.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14979411654qw2M.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Jalalabad House";
      var features =
        "<p>Elegant reception and waiting lounge<br /> <br /> Fully equipped state-of-the-art gym<br /> <br /> Rooftop party space<br /> <br /> Rooftop swimming pool<br /> <br /> Children&rsquo;s play area<br /> <br /> Elegantly furnished party room<br /> <br /> Landscaped deck and seating at rooftop<br /> <br /> Professionally designed landscaping, lighting and water features<br /> <br /> Management office&nbsp;<br /> <br /> Multi-layered basement parking with ventilation system&nbsp;<br /> <br /> Central water purification system</p>";
      var productDesc = "Plot 21, Road 47, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79223611,
          lng: 90.41138056,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Ishtiaque Zahir<br></li><li style='margin-bottom: 10px'>Land Area: 20.25 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 18<br></li><li style='margin-bottom: 10px'>Size of Units: 4,226-4,247 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 36<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 1029/11/587<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942acQB0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942acQB0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942mio1V.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942mio1V.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942sXJaH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942sXJaH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15089219424Pcj6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15089219424Pcj6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942GFkiH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942GFkiH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942Jbz8V.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942Jbz8V.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942Ki7AU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942Ki7AU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15089219428XdwZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15089219428XdwZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15089219429ZWTa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15089219429ZWTa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942EXZRh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942EXZRh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15089219426yWqQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15089219426yWqQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942Ea1ej.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942Ea1ej.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942WYB4z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942WYB4z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942wcxJJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942wcxJJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942wTItM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942wTItM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1508921942T8JSZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1508921942T8JSZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15089219421ZxYq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15089219421ZxYq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1511239137fzlNO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1511239137fzlNO.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Araddho";
      var features =
        '<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Designed Double-height Entry </span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-Purpose Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Zone</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Landscaped Rooftop with Sitting Arrangements </span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping, Lighting &amp; Water Features</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-layered Basement Parking with Automated Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State-of-the-art Firefighting System</span></span></span></span></p>';
      var productDesc = "Plot # 32, Road # 13/A, Dhanmondi";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.75032222,
          lng: 90.37096667,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Landscaping Consultant: An Australian Consulting Firm<br></li><li style='margin-bottom: 10px'>Land Area: 10 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Abahoni Field is on the South<br></li><li style='margin-bottom: 10px'>Front Road: 30 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 14<br></li><li style='margin-bottom: 10px'>Size of Units: Simplex 2,368 - 3,654 sft (approx); Duplex: 4,079 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Parking: 26 nos. <br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 170/11/338<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507447984hhL40.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507447984hhL40.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507447984N4phj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507447984N4phj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507447984xGfXx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507447984xGfXx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15074479846M5P9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15074479846M5P9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940d6D0l.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940d6D0l.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940ateuI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940ateuI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940WRcMM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940WRcMM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940wAtG0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940wAtG0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940ddcvm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940ddcvm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940IBqC3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940IBqC3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1507448940wPa9Q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1507448940wPa9Q.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Akashprodip";
      var features =
        "<p>Purposefully designed green and water features<br /> <br /> Elegant reception and waiting lounge<br /> <br /> Indoor and outdoor children&rsquo;s play zones<br /> <br /> Multi-purpose community space with kitchen and wash facilities<br /> <br /> Community office with powder room<br /> <br /> Multi-layered basement parking with automated ventilation system<br /> <br /> Rooftop garden with sitting arrangement<br /> <br /> Landscaping and water features designed by Australian consultants<br /> <br /> Water purification and geyser systems</p>";
      var productDesc = "Plot 46, Road 25, Block A, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79828611,
          lng: 90.40411111,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil <br></li><li style='margin-bottom: 10px'>Land Area: 11.9 katha<br></li><li style='margin-bottom: 10px'>Orientation of Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 17<br></li><li style='margin-bottom: 10px'>Size of Units: 2,440-2,589 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of  Basement: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 34<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 47/11/1024<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14979437563DgYS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14979437563DgYS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497943756zikNV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497943756zikNV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14979437561RhCl.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14979437561RhCl.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497943756ChCq4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497943756ChCq4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149794375665Thk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149794375665Thk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497943756m3xGQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497943756m3xGQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1497943756tIILk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1497943756tIILk.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Polaris";
      var features =
        "<p>Grand drop off area<br /> <br /> Elegant reception and waiting Lounge<br /> <br /> Gym with state-of-the-art equipment<br /> <br /> Children&#39;s play area<br /> <br /> Professionally designed landscaping, lighting &amp; water features<br /> <br /> Fire fighting and smoke detection system</p>";
      var productDesc = "Plot 01, Shahid Sarani Road, Dhaka Cantonment";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79526389,
          lng: 90.39260278,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 17.23 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 110 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 18<br></li><li style='margin-bottom: 10px'>Size of Units: 3,198 - 3,281 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basement: 01<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 33<br></li><li style='margin-bottom: 10px'>Board Approval Number: 27/24/662<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722BsmXC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722BsmXC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722RPDgo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722RPDgo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/157777672224kqE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/157777672224kqE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722Im7qT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722Im7qT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15777767227nFSc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15777767227nFSc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722cQtu1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722cQtu1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722gMIBd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722gMIBd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722tB89u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722tB89u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1577776722klkOP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1577776722klkOP.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Chitra";
      var features =
        "<p>Grand Double-height Entry</p> Elegant Reception &amp; Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Outdoor Activity Zone <p>Elegantly Furnished&nbsp;Party Room<br /> <br /> Multi-layered Basement Car Parking with ventilation system<br /> <br /> Professional Landscaping, Lighting and Water features<br /> <br /> Children&#39;s Play Area<br /> <br /> Landscaped Rooftop with Water features<br /> <br /> Rooftop Party Space<br /> <br /> Separate Fire Stairs<br /> <br /> Fire Fighting and Smoke Detection System</p>";
      var productDesc = "Plot  11, Road  66, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80368056,
          lng: 90.40766111,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 19.98 Katha<br></li><li style='margin-bottom: 10px'>Orientation of Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 24<br></li><li style='margin-bottom: 10px'>Size of Units: 3,702 to 3,903 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 52<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 35/14/455<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039H5f0n.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039H5f0n.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/152810903991pFc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/152810903991pFc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039HewKn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039HewKn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/15281090397AvdR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/15281090397AvdR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039OuMGJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039OuMGJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/15281090398kp4w.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/15281090398kp4w.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039yLCNL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039yLCNL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039ZWNpC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039ZWNpC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039Z6QwR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039Z6QwR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039ixm4e.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039ixm4e.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/15281090396dzwh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/15281090396dzwh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039542IR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039542IR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039OIOB7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039OIOB7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528109039qBeh7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528109039qBeh7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/15281090395vMwe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/15281090395vMwe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1528126166fBDqm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1528126166fBDqm.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Chisty's Yacht";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Rooftop Swimming Pool<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Children&rsquo;s Play Area<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Professionally Designed Landscaping, Lighting &amp; Water Features<br /> <br /> Landscaped Deck &amp; Seating at Rooftop<br /> <br /> Rooftop Party Space<br /> <br /> Management Office<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting and Smoke Detection System";
      var productDesc =
        "Plot 173/F (old), 60 (new), Road - 5/ADhanmondi R/A";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.742409,
          lng: 90.376169,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 15.81 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East- West<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Lakeside plot<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Size of Units: 3,266 sft - 3,544 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 40<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 184/15/217<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=ToVHDPIDMdE&t=5s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290711LpFuv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290711LpFuv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290711zQRj1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290711zQRj1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/16112907110BSri.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/16112907110BSri.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290711WQJZO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290711WQJZO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290711jGMmC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290711jGMmC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290786Eugfu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290786Eugfu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290786nWl8U.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290786nWl8U.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290786hJUfZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290786hJUfZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290786eRXrf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290786eRXrf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290786Lyahc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290786Lyahc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/16112908996t3Bb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/16112908996t3Bb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290899xLudh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290899xLudh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290899sjGfE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290899sjGfE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290899rWWfj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290899rWWfj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611290899TQ73N.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611290899TQ73N.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/16112910215EXrN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/16112910215EXrN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/1611291021MW80j.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/1611291021MW80j.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/chitra/16112910214eNz3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/chitra/16112910214eNz3.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Lakehouse";
      var features =
        "<p>South facing lakeside plot<br /> <br /> Elegant entrance and reception area<br /> <br /> Single unit apartments per floor<br /> <br /> Multi-purpose community hall<br /> <br /> Fully equipped fitness center<br /> <br /> Jacuzzi at rooftop<br /> <br /> Professionally designed green spaces and water features at ground floor</p>";
      var productDesc = "42, UN Road, Block-K, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80456389,
          lng: 90.41823056,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Mustafa Ameen<br></li><li style='margin-bottom: 10px'>Land Area: 8 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Facing: South-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Corner plot with the widest and cleanest part of the lake on the West<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 08<br></li><li style='margin-bottom: 10px'>Size of Units: 3,513 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 867/10/1037<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343SzX2i.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343SzX2i.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14966423435iXrH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14966423435iXrH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343mSJ2C.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343mSJ2C.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343dRIHn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343dRIHn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343zudju.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343zudju.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343Ac3ye.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343Ac3ye.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496642343mEwj5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496642343mEwj5.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Izar";
      var features =
        "<p>Elegant reception and waiting lounge<br /> <br /> Professionally Designed Landscaping &amp; Lighting</p> <p>Gym with state-of-the-art equipment</p> <p>Children&rsquo;s play area&nbsp;<br /> <br /> Management office<br /> <br /> Basement car parking</p>";
      var productDesc = " Plot  06, Road  04, Banani DOHS";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79425833,
          lng: 90.39811667,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 18.9 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 23<br></li><li style='margin-bottom: 10px'>Size of Units: 2,279 - 4,716 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 01<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 36<br></li><li style='margin-bottom: 10px'>Approval No.: DCB/Plot No. 6/DOHS/Banani/201<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545FjULg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545FjULg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545R8c8f.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545R8c8f.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545P8g82.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545P8g82.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545024j7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545024j7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545X89Wa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545X89Wa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545ul1Xv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545ul1Xv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545SDOMp.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545SDOMp.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/15565125455EyhN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/15565125455EyhN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545N6V3e.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545N6V3e.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545X4g1n.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545X4g1n.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-izar/1556512545oZvxV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-izar/1556512545oZvxV.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Joyonti";
      var features =
        "<p>Elegant reception and lobby&nbsp;<br /> <br /> Two high-speed world class elevators<br /> <br /> Designed to ensure cross and through ventilation<br /> <br /> State-of-the-art fire fighting system<br /> <br /> Wide open green areas and childrens&#39; play zone</p>";
      var productDesc = "Plot 50, Road 18, Sector 3,Uttara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.86605833,
          lng: 90.39414722,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 7.1 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Uttara Lake and Airport Runway in visible distance<br></li><li style='margin-bottom: 10px'>Front Road: 60 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 18<br></li><li style='margin-bottom: 10px'>Size of Units: 1,650 - 2,175 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 18<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 36/10/183<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583k0k9z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583k0k9z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583X1ys6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583X1ys6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583BqKcm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583BqKcm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583cNBJK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583cNBJK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/14980155834kvz6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/14980155834kvz6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583pGPfa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583pGPfa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/14980155836zbrI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/14980155836zbrI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/joyonti/1498015583KoKjR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/joyonti/1498015583KoKjR.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Angan";
      var features =
        "<p>Elegant reception and lobby&nbsp;<br /> <br /> Two high-speed elevators&nbsp;&nbsp; &nbsp;<br /> &nbsp;<br /> Designed to ensure cross and through ventilation&nbsp;&nbsp; &nbsp;<br /> &nbsp;&nbsp;<br /> Open green areas and childrens&#39; play zone<br /> <br /> State-of-the-art fire fighting system&nbsp;&nbsp; &nbsp;<br /> &nbsp;&nbsp;<br /> Professionally designed landscape at ground floor and rooftop</p>";
      var productDesc = "Plot 16/A, Road 35, Gulshan ";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79208611,
          lng: 90.41355,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 10 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 56 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 12<br></li><li style='margin-bottom: 10px'>Size of Units: 3,450 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 23<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 1022/10/908<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151e4Lpv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151e4Lpv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151B2qKo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151B2qKo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151jkhY1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151jkhY1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151HpEkB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151HpEkB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151aIfmW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151aIfmW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/14965751514fXlq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/14965751514fXlq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151JzuvY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151JzuvY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151Z60qR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151Z60qR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151pJbGI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151pJbGI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151do7RI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151do7RI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/1496575151o3Elo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/1496575151o3Elo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/angan/149657515145XzA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/angan/149657515145XzA.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Landing 141";
      var features =
        "<p>Situated at the widest and the cleanest part of Gulshan Lake<br /> <br /> Fully equipped state-of-the-art gym<br /> <br /> Elegantly furnished party room<br /> <br /> Elegant reception&nbsp;and waiting lounge<br /> <br /> Children&rsquo;s play area<br /> <br /> Management office<br /> <br /> Multi-layered basement parking with automated ventilation system<br /> <br /> Landscaped deck and seating at rooftop<br /> <br /> Landscaping with indoor and outdoor sitting arrangement<br /> <br /> Professionally designed landscaping, lighting and water features<br /> <br /> Water purification and geyser systems</p>";
      var productDesc = "Plot  04, Road  141, Gulshan ";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.77594167,
          lng: 90.41819444,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Landscaping Consultant: An Australian Consulting Firm<br></li><li style='margin-bottom: 10px'>Land Area: 20 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Lake facing & corner plot<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 28<br></li><li style='margin-bottom: 10px'>Size of Units: 2,885 - 3,741 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 56<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 488/10/973<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=7Cdu0zSb2LQ&t=6s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558UK1gU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558UK1gU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558E4nUS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558E4nUS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558omNqx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558omNqx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558XSLEn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558XSLEn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/14913975581Phly.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/14913975581Phly.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/14913975587y4kB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/14913975587y4kB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/14913975583iHJR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/14913975583iHJR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558cuuAx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558cuuAx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/14913975582kjwd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/14913975582kjwd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558eEQmF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558eEQmF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558FKiBZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558FKiBZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558XnvFF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558XnvFF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558rllCR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558rllCR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-landing-141/1491397558A41rc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-landing-141/1491397558A41rc.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Shanta Western Tower";
      var features =
        '<p><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Triple-height Entry</span><br /> <br /> <span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Centrally Air-conditioned</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">400 Car Parking Facility</span><br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;</span><br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Double Lane Circular Driveway All Around the Building</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Entry and Exit Lobbies</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Automatic Heat and Smoke Detector</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State-of-the-art Firefighting System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Electro-mechanical System Designed By Lincolne Scott, Australia</span></span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">7 High-speed Elevators</span></p>';
      var productDesc = "186, Bir Uttam Mir Shawkat Sarak";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.770125,
          lng: 90.40645,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Number of parking : 400 Nos.<br></li><li style='margin-bottom: 10px'>Architect: Mustapha Khalid<br></li><li style='margin-bottom: 10px'>Land Area: 60 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 60 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: Ground + 13 floors<br></li><li style='margin-bottom: 10px'>Total Built Area: 450,000 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 400<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973W1JDN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973W1JDN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973xusaK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973xusaK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973Q52ft.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973Q52ft.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973RS7DC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973RS7DC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973EY1IP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973EY1IP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973TRZnu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973TRZnu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973RMLPg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973RMLPg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973WYwLO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973WYwLO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973sEAeb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973sEAeb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973OsxD7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973OsxD7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973BBL9I.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973BBL9I.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973K3Z2O.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973K3Z2O.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973sfh9s.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973sfh9s.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14914649730FC1S.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14914649730FC1S.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973gurXK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973gurXK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491464973Gi99s.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491464973Gi99s.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149146497361qnA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149146497361qnA.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "14",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Chandrima";
      var features =
        "<p>Fair face and glass cladding exterior facade&nbsp;<br /> <br /> Elegant reception and waiting lounge<br /> <br /> Central geyser system<br /> <br /> Professionally designed landscape at ground floor</p>";
      var productDesc = "House 18, Road  20, Sector  4, Uttara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.86673,
          lng: 90.405258,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Number of floors:  Ground plus 7 floors<br></li><li style='margin-bottom: 10px'> Total built area :  32,000 sft<br></li><li style='margin-bottom: 10px'>Number of apartments: 14 nos. <br></li><li style='margin-bottom: 10px'>Size of apartments: 1,750-2,500 sft<br></li><li style='margin-bottom: 10px'>Number of car parkings: 14 nos. <br></li><li style='margin-bottom: 10px'>Architect: Ar. Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Orientation of Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: North<br></li><li style='margin-bottom: 10px'>Size of Units: 1767-1773 sft Duplex 3413-3458 sft<br></li><li style='margin-bottom: 10px'>Number of Basements: 01<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790Z94ju.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790Z94ju.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790pWgyM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790pWgyM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790GGEku.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790GGEku.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790pJF6L.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790pJF6L.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790iTJCh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790iTJCh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790A5jbR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790A5jbR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790oGXhm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790oGXhm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149146679044Yej.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149146679044Yej.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790uvHMG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790uvHMG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790ZZiDZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790ZZiDZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491466790QcNDr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491466790QcNDr.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Chandralok";
      var features =
        "<p>Custom made cladding for maintenance free exterior<br /> <br /> Elegant reception and waiting lounge<br /> <br /> Central geyser system<br /> <br /> Water purification system<br /> <br /> Professionally designed landscape at ground floor and rooftop</p>";
      var productDesc = "Plot 45, Road 23, Block B, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.795322,
          lng: 90.406108,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: <br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Number of Apartments: <br></li><li style='margin-bottom: 10px'>Size of Units: 2,200 - 2,350 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: <br></li><li style='margin-bottom: 10px'>Number of Car Parking: <br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: <br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363gQnZa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363gQnZa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14980203638hL9K.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14980203638hL9K.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363NfatT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363NfatT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363Ji1nh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363Ji1nh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149802036389vJb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149802036389vJb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363u0sUe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363u0sUe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363la5Ia.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363la5Ia.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363fRr00.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363fRr00.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1498020363cOfmh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1498020363cOfmh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/149802036395zat.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/149802036395zat.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Digonto";
      var features =
        '<p><span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception Lobby</span><br /> <br /> <span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">2,000 Feet Long Walkways</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">50 Feet Long Temperature Controlled Indoor Swimming Pool</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Ladies&#39; And Gents&rsquo; Gym</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">12 High-Speed Elevators</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Load Backup Generator Including AC</span></span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Central Geyser and Water Purification System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Landscaped Deck and Party Space at Rooftop</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Table Tennis Room, Snooker Room, Steam Bath and Sauna</span></p>';
      var productDesc = "3 & 3A Paribagh";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.74311389,
          lng: 90.39445833,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: DOMUS<br></li><li style='margin-bottom: 10px'>EME Consultant: Lincolne Scott (Australia)<br></li><li style='margin-bottom: 10px'>Land Area: 84 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: Ground + 14 floors<br></li><li style='margin-bottom: 10px'>Total Built Area: 619,000 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Apartments: 150<br></li><li style='margin-bottom: 10px'>Size of Units: 2,600 - 3,200 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 255<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 634/06/712<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14914707445I5C2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14914707445I5C2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744LWq2I.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744LWq2I.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744wlioM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744wlioM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744Zx9bt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744Zx9bt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744ZRIlm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744ZRIlm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744OQJRT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744OQJRT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744xddrf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744xddrf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744TFhXm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744TFhXm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744TM9I8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744TM9I8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744KLx7z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744KLx7z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744hV33G.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744hV33G.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744uEzpi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744uEzpi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14914707448XsXe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14914707448XsXe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744xhyab.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744xhyab.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744RGDdE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744RGDdE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744sRuDs.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744sRuDs.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744zlgLZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744zlgLZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744DwZPH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744DwZPH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491470744Reing.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491470744Reing.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Nilambori";
      var features =
        "<p>Elegant reception and waiting lounge<br /> <br /> Full-backup generator<br /> &nbsp;&nbsp;<br /> Professionally designed landscaping and water features at strategic locations</p>";
      var productDesc = " Plot 20, Road 3, DOHS-Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79346944,
          lng: 90.39814722,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: <br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Size of Units: 2,000 - 2,500 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: <br></li><li style='margin-bottom: 10px'>Number of Car Parking: 29<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: <br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167ns9fT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167ns9fT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167FTgAo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167FTgAo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167t2GuR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167t2GuR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167aRiwJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167aRiwJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167nFrlW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167nFrlW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167U55LU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167U55LU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167oyzZS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167oyzZS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167PAZtw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167PAZtw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167whFIA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167whFIA.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167Fp1vw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167Fp1vw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167bwvGY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167bwvGY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167NitdX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167NitdX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14916311677MTAE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14916311677MTAE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167TtN9H.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167TtN9H.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491631167V9jwJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491631167V9jwJ.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Prantor";
      var features =
        "<p>Elegant reception and waiting lounge<br /> <br /> Central geyser and water purification system<br /> <br /> International standard passenger elevators<br /> <br /> Children&#39;s play zone<br /> <br /> Professionally designed landscape at ground floor and rooftop</p>";
      var productDesc = "42/2 Indira Raod";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.75608889,
          lng: 90.38479167,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Ishtiaque Zahir<br></li><li style='margin-bottom: 10px'>Land Area: 17 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Corner plot<br></li><li style='margin-bottom: 10px'>Front Road: 30 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 27<br></li><li style='margin-bottom: 10px'>Size of Units: 1,850 - 2,250 sft (approx)<br></li><li style='margin-bottom: 10px'>Total Built Area: 60,500 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 01<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 27<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030GxAw6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030GxAw6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030m5mPu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030m5mPu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030AcEDH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030AcEDH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030ricXe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030ricXe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030pDMZa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030pDMZa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030SGUGr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030SGUGr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030h2wER.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030h2wER.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14966390300deRe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14966390300deRe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030asrO5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030asrO5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14966390308fold.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14966390308fold.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030CKQpJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030CKQpJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030Rd0oR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030Rd0oR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496639030Sp46g.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496639030Sp46g.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Shopnolok";
      var features =
        "<p>Elegant reception and waiting lounge<br /> <br /> Super spacious lobbies at ground floor<br /> <br /> Designed to ensure cross and through ventilation<br /> <br /> Rooftop garden<br /> <br /> Multi-acitvity center at roof top</p>";
      var productDesc = "Plot 18, Road 13, Sector 7, Uttara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.87,
          lng: 90.39600278,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Total built area: 35,000 sft<br></li><li style='margin-bottom: 10px'> Size of apartments: 1,850-2,250 sft<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525Unw5R.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525Unw5R.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525lm7cH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525lm7cH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14916355250uDKV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14916355250uDKV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525jom5a.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525jom5a.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525dRYah.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525dRYah.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14916355257xSlr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14916355257xSlr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525gpBH7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525gpBH7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525lMeyN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525lMeyN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14916355256Sylh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14916355256Sylh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525YA5wn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525YA5wn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525BCzr6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525BCzr6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/14916355252DY2V.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/14916355252DY2V.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525qmRna.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525qmRna.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525pzZzu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525pzZzu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1491635525CRSqY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1491635525CRSqY.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Garden";
      var features =
        "<p>Lavish reception lobby with&nbsp;security arrangement<br /> <br /> Separate fitness centers for ladies and gents<br /> <br /> Indoor children&#39;s play area<br /> <br /> Multi-purpose community hall<br /> <br /> Activity room with billiard table and table tennis&nbsp;<br /> <br /> Six European-standard elevators&nbsp;<br /> <br /> State-of-the-art fire fighting systems<br /> <br /> Thoughtfully planned-out lawns and water bodies between the towers<br /> <br /> Exclusive space for bank and departmental stores with separate entry</p>";
      var productDesc = "Plot  50/B, New Eskaton";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.74701944,
          lng: 90.39731389,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ehsan Khan<br></li><li style='margin-bottom: 10px'>Land Area: 43 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Ramna Park and Hatirjheel clearly visible from the project<br></li><li style='margin-bottom: 10px'>Front Road: 90 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 100<br></li><li style='margin-bottom: 10px'>Size of Units: 2,104 - 2,208 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 147<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 23/08/26<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611Ie021.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611Ie021.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611wKagF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611wKagF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611TUoVM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611TUoVM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611erBna.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611erBna.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611toXRV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611toXRV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611UcFan.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611UcFan.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611pTBpW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611pTBpW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611CWGNc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611CWGNc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611mG6LC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611mG6LC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1496638611TZ3um.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1496638611TZ3um.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Regal";
      var features =
        "<p>Artistic Reception Lobby &amp; Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Sophisticated, Fully Furnished Party Room with Kitchenette<br /> <br /> Stylish Billiard Room<br /> <br /> Swimming Pool &amp; Deck<br /> <br /> Steam and Sauna<br /> <br /> Landscaped Deck &amp; Seating at Roof<br /> <br /> Rooftop Lounge &amp; BBQ Zone&nbsp;<br /> <br /> Children&rsquo;s Play Area with Half Basketball Court<br /> <br /> VRF Air Conditioning Solution<br /> <br /> Double-Glazed Window System<br /> <br /> Professionally Designed Landscaping &amp; Lighting<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Central Water Treatment Plant<br /> <br /> Management Office<br /> <br /> Separate Fire Stairs<br /> <br /> Firefighting and Smoke Detection System</p>";
      var productDesc = "Plot 03, Road 84, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80032222,
          lng: 90.41643333,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 31.94 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13<br></li><li style='margin-bottom: 10px'>Number of Apartments: 24<br></li><li style='margin-bottom: 10px'>Size of Apartments: 6,100 - 6,800 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 102<br></li><li style='margin-bottom: 10px'>Front Road Width: 52 Feet<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 127/15/420<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=wJOaTgPJdPY&t=1s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864ZSPnD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864ZSPnD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864QEgNm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864QEgNm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864PH2EM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864PH2EM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864laNxi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864laNxi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864L87sN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864L87sN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864QsbeK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864QsbeK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864tEpgv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864tEpgv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864j5YKo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864j5YKo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864PmQxc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864PmQxc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864q3vMj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864q3vMj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864sAl77.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864sAl77.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864TgXEW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864TgXEW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864zT4ZY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864zT4ZY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864EXcLP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864EXcLP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16858578649iXef.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16858578649iXef.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16858578644q1qp.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16858578644q1qp.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864MrqMx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864MrqMx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864Mj4ks.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864Mj4ks.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864TYMZn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864TYMZn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685857864gYRO0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685857864gYRO0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16858589004bxCn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16858589004bxCn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685858900s3sBw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685858900s3sBw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685858900ge4cJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685858900ge4cJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685858900NkM61.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685858900NkM61.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1685858900M8hSq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1685858900M8hSq.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Glass House";
      var features =
        '<p><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Double-Height&nbsp;Entry</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception Area&nbsp;</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Three High-speed Passenger Elevators</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Insulated Double Glazing Low Emission Heat-resistant Glass</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Load Power Backup with Most Advanced Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Central&nbsp;Air-Conditioning System with Load Management</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">11.67 Feet Floor Clearance for Comfortable Interior Arrangement</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Provision for Executive Toilet with General Toilet Block</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Exclusive Accommodation for Board Members</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Three-layered Basement Parking with Mechanical Ventilation and Automated Parking Monitoring System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State-of-the-art Firefighting System with Detection</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Two Fire Stairs with Ventilation</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Facility for Communication Tower on Rooftop</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Drivers Waiting with Toilets</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Five Years of Building Facilities Management by Shanta Holdings Limited</span></span></span></span></p>';
      var productDesc = "Plot  2, Block  SE(B), Gulshan Avenue, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7791,
          lng: 90.417225,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ehsan Khan and Architects<br></li><li style='margin-bottom: 10px'>Land Area: 20.60 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 97 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: Ground + 13 floors<br></li><li style='margin-bottom: 10px'>Floor Area: 5,323 - 8,427 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 66<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 1022/10/908<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=qNK1tYFHonA' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920WP206.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920WP206.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920wYAuw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920wYAuw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920g2xnj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920g2xnj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920PIVvQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920PIVvQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920a2cxm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920a2cxm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920MaRzX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920MaRzX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920CwMFx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920CwMFx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1547059920ScvtG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1547059920ScvtG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15470599202KJA8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15470599202KJA8.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "14",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Aludra";
      var features =
        "Elegant reception and waiting lounge<br /> <br /> Children&rsquo;s play area<br /> <br /> Professional landscaping &amp; lighting<br /> <br /> Elegantly furnished party room<br /> <br /> Jacuzzi at rooftop<br /> <br /> Gym with state-of-the-art equipment<br /> <br /> Multi-level basement car parking with Ventilation System<br /> <br /> Fire fighting and smoke detection system";
      var productDesc = "38, UN Road, Block-K, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80403333,
          lng: 90.41831944,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 8.65 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: The widest and cleanest part of Baridhara lake is on the West<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 08<br></li><li style='margin-bottom: 10px'>Size of Units: 3,827 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 143/16/328<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989cJ8P1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989cJ8P1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989ZfQhZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989ZfQhZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989atCGZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989atCGZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989gZVZc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989gZVZc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989k8nqh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989k8nqh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15945299898D0ht.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15945299898D0ht.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15945299891k6JE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15945299891k6JE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989bJU20.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989bJU20.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989UcuxT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989UcuxT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15945299895JVs9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15945299895JVs9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594529989dBNdS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594529989dBNdS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594543632w2lPt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594543632w2lPt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594650970ncj19.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594650970ncj19.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594650970hx05Q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594650970hx05Q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1594650970VbqAT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1594650970VbqAT.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Spring";
      var features =
        "<p>Elegant entrance and reception area<br /> <br /> Multi-purpose community hall<br /> <br /> Fully equipped fitness center&nbsp;<br /> <br /> The building design oriented to maximize light and air flow<br /> <br /> Professionally designed green spaces and water bodies at ground floor<br /> <br /> Rooftop landscaping</p>";
      var productDesc = "Plot 08, Road 05, Dhanmondi";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.742975,
          lng: 90.38345278,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20.50 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 48<br></li><li style='margin-bottom: 10px'>Size of Units: 2,045 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 64<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 139/10/39<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=XVYT3zn9g_U&t=61s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584PIrgu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584PIrgu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584nPOTK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584nPOTK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/152943758490hjL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/152943758490hjL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584fRqrg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584fRqrg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584s0CfT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584s0CfT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584taOVq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584taOVq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584jjg8d.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584jjg8d.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584ZxtqY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584ZxtqY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584SDQ9Y.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584SDQ9Y.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584VD8Kz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584VD8Kz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529437584z3TPb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529437584z3TPb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15294375846Ptk7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15294375846Ptk7.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Alishaan";
      var features =
        "<p>Elegantly designed reception lobby<br /> <br /> Multi-purpose community hall<br /> <br /> Open-to-sky as well as covered children&#39;s play zone<br /> <br /> Multi-layered basement parking with automated ventilation system<br /> <br /> State-of-the-art firefighting system<br /> <br /> Landscape designed by foreign consultants</p>";
      var productDesc = "Plot 52, Road 10A, Dhanmondi";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.74630833,
          lng: 90.37198889,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Facing: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 32<br></li><li style='margin-bottom: 10px'>Size of Units: 2,600 - 4,700 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 64<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 316/11/200<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=-QC-GHi8SiI&t=73s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524WdAA9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524WdAA9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524Rc4ge.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524Rc4ge.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524cY9c7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524cY9c7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524PtNQ6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524PtNQ6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524YtmpM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524YtmpM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524Dbhr1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524Dbhr1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524nU2ha.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524nU2ha.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524DWmrc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524DWmrc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524sS7qi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524sS7qi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524EDUbY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524EDUbY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1528957524bnadE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1528957524bnadE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1529487531Xvw3B.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1529487531Xvw3B.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Vantage";
      var features =
        '<p><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="color: rgb(51, 51, 51);">Grand Double-height Entry<br /> <br /> Elegant&nbsp;Reception and Waiting Lounge<br /> <br /> Multiple Gaming Zones Including a Stylish Billiard Room<br /> <br /> Children&#39;s Play Area<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Gym with State-of-the-art Equipment</span></span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><o:p></o:p></span></p> <p style="font-variant-ligatures: normal;font-variant-caps: normal;orphans: 2; text-align:start;widows: 2;-webkit-text-stroke-width: 0px;text-decoration-thickness: initial; text-decoration-style: initial;text-decoration-color: initial;word-spacing: 0px"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 10pt; color: rgb(51, 51, 51);"><span style="font-size:14px;">Rooftop Party Space<br /> <br /> Prayer Room​<br /> <br /> Professionally Designed Landscaping, Lighting and Water Features<br /> <br /> Designated Cloth Drying Space<br /> <br /> Management Office<br /> <br /> Separate Fire Stairs<br /> <br /> Firefighting and Smoke Detection System</span></span></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#333333"><o:p></o:p></span></p>';
      var productDesc = "Plot  A, Main Road, Block  A, Banasree ";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7662,
          lng: 90.42564167,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ehsan Khan<br></li><li style='margin-bottom: 10px'>Land Area: 40 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Corner plot, roads on 3 sides<br></li><li style='margin-bottom: 10px'>Front Road: North (Main Road): 60 feet, East: 30 feet, West: 25 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 110<br></li><li style='margin-bottom: 10px'>Size of Units: 1,539 - 2,885 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 110<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 913/2012/427<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594xL4uD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594xL4uD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594WgzxX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594WgzxX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594YsUoA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594YsUoA.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594pGd8q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594pGd8q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594YhxmS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594YhxmS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594b1mIq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594b1mIq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594SgbWK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594SgbWK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594PT1pr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594PT1pr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594ZnUTM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594ZnUTM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594ujsHr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594ujsHr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594SGIp2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594SGIp2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594BB4Yk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594BB4Yk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594uQAGN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594uQAGN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1549892594lwGmV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1549892594lwGmV.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Debonair";
      var features =
        "<p>Double height entry<br /> <br /> Grand reception and waiting lounge<br /> <br /> Children&#39;s play area<br /> <br /> Multipurpose community space with kitchenette and wash facilities<br /> <br /> Community office with powder room<br /> <br /> Multi-layered basement parking with automated ventilation system<br /> <br /> Rooftop garden with sitting arrangement<br /> <br /> Landscaping and water features at strategic locations<br /> <br /> Designated cloth drying space</p>";
      var productDesc = "Plot  42, Road  18, Block  B, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79586944,
          lng: 90.40555833,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 11.68 Katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road: 48 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Size of Units: 2,881 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 23<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 990/13/413<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344165QBDND.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344165QBDND.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344165z4BV1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344165z4BV1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344165SJlwG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344165SJlwG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344165yRnl9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344165yRnl9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344428mg3Wi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344428mg3Wi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344428BMa51.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344428BMa51.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344428C182r.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344428C182r.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344428hBcr7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344428hBcr7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344529rqmkB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344529rqmkB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344529hLmBG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344529hLmBG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344529m9feL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344529m9feL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1542344529zBwTN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1542344529zBwTN.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Alnair";
      var features =
        "<p>Grand double height entry<br /> <br /> Elegant reception and waiting lounge<br /> <br /> Children&rsquo;s play area</p> Gym with state-of-the-art equipment <p>Elegantly furnished party room<br /> <br /> Elegantly designed landscaping, lighting &amp; water features<br /> <br /> Rooftop party space<br /> <br /> Designated cloth drying space<br /> <br /> Management office<br /> <br /> Fire fighting and smoke detection system&nbsp;</p>";
      var productDesc = "Plot 19, Road 8, Gulshan ";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.77828889,
          lng: 90.413975,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 13.8 Katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: South-West Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 16<br></li><li style='margin-bottom: 10px'>Size of Units: 3,311 - 6,474 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 32<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 81/13/663<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169Yf8Rk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169Yf8Rk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169f4dnQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169f4dnQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169DUk36.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169DUk36.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169IpD5o.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169IpD5o.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169WY1Pg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169WY1Pg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169f0pOU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169f0pOU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169zM9IE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169zM9IE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169uYIHm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169uYIHm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1521698169zlhTo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1521698169zlhTo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15674253885Vrtn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15674253885Vrtn.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Canopus";
      var features =
        "<p>Double height entry<br /> <br /> Grand reception and waiting lounge<br /> <br /> Management office with powder room<br /> <br /> Children&rsquo;s play area<br /> <br /> Multi-purpose community space<br /> <br /> Landscaping with indoor &amp; outdoor sitting arrangement<br /> <br /> Water features at strategic locations<br /> <br /> Designated cloth drying space<br /> <br /> Separate fire stair</p>";
      var productDesc = "Plot 67, Road 16, Block - A, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79797778,
          lng: 90.40565278,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 13.78 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 30 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 17<br></li><li style='margin-bottom: 10px'>Size of Units: 2,772 - 5,157 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 34<br></li><li style='margin-bottom: 10px'>RAJUK Approval No: 27/24/662<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582hZeDy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582hZeDy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15391025825spZk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15391025825spZk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582dV6S4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582dV6S4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15391025825V5nw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15391025825V5nw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582wQyBR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582wQyBR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582RIn5l.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582RIn5l.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582VbOla.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582VbOla.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15391025829y6fr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15391025829y6fr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582akmfH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582akmfH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582TMyso.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582TMyso.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582qExb5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582qExb5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1539102582V2Ni7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1539102582V2Ni7.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Altair";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Swimming Pool<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Management Office<br /> <br /> Professionally Designed Landscaping, Lighting &amp; Water Features&nbsp;<br /> <br /> Multi-level Basement Car Parking with Ventilation System&nbsp;<br /> <br /> Rooftop Party Room<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting &amp; Smoke Detection System";
      var productDesc = "Plot 20, Road 47, Gulshan ";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79235278,
          lng: 90.41100556,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Foyez Ullah<br></li><li style='margin-bottom: 10px'>Land Area: 20.50 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 24<br></li><li style='margin-bottom: 10px'>Size of Units: 3,929 - 3,958 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 48<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 36/14/495<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://youtu.be/tPfXcPnbclY' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15676835089tWNY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15676835089tWNY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508I9Aic.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508I9Aic.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508BQ9k6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508BQ9k6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508QkAQY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508QkAQY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508ySrW1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508ySrW1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508OGLLu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508OGLLu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508JtEjL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508JtEjL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508QUC0e.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508QUC0e.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567683508IQzjH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567683508IQzjH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/15676853199NI9q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/15676853199NI9q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567685319iMKbE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567685319iMKbE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1567685319MKdJx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1567685319MKdJx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1568018243WYooi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1568018243WYooi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1568694722M8i4X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1568694722M8i4X.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Forum";
      var features =
        "The First Twin Towers of The Country<br /> &nbsp;<br /> Sophisticated Double Height Reception Atrium<br /> &nbsp;<br /> 08 Smart Destination Elevators (Ensuring Optimized Energy Efficiency and Minimum Wait Time), plus 02 Service Elevators<br /> &nbsp;<br /> 12&rsquo; Clear Floor to Ceiling Height at Typical Floors<br /> &nbsp;<br /> Efficiently Designed Floor Space Providing Maximum Flexibility for Interior Design<br /> <br /> Professional Landscaping and Lighting Design<br /> &nbsp;<br /> 200&rsquo; Wide Landscaped Open Plaza on Ground Floor Creating an Unparalleled Entry Experience<br /> <br /> Insulated Double-glazed, 32 mm, Low-E, Heat Resistant Glass in A Fully Unitized Curtain Wall System for Energy Efficiency, Durability, Dust and Waterproofing<br /> &nbsp; &nbsp;<br /> State-of-the-Art Firefighting and Smoke Detection System<br /> &nbsp;<br /> Electro-Mechanical Engineering (EME) Design by EEC Lincolne Scott Co.<br /> <br /> Fa&ccedil;ade Design by Meinhardt Group<br /> <br /> Artsy Cafe On Premises&nbsp;<br /> <br /> Landscaped Rooftop<br /> &nbsp;<br /> iBMS (Integrated Building Management System) for Complete Monitoring of HVAC, Power, Lighting, Fire Detection and Security&nbsp;<br /> &nbsp;<br /> 350 Car Parking in Three Basement Levels with Sensor-Based Mechanical Ventilation System<br /> <br /> Fire Stairs with 2-hour UL Certified Fire-resistant Doors<br /> <br /> Central HVAC System with Water Cooled Centrifugal Chillers and Load Management<br /> &nbsp;<br /> Full Load Power Backup with the Most Advanced Generator<br /> &nbsp;<br /> Common Area Finishing with Exclusive Imported Materials &amp; Fittings<br /> <br /> Central Fire Command &amp; Control Room with 24/7 Professional Monitoring Team<br /> &nbsp;<br /> Management Office and Drivers&#39; Waiting Rooms with Washrooms<br /> &nbsp;<br /> Central CCTV Monitoring &amp; PA Systems<br /> <br /> 10 Years Building Facilities Management Services by Shanta Holdings";
      var productDesc = "187, 188/B, Bir Uttam Mir Shawkat Sarak, Tejgaon";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.77003333,
          lng: 90.40690556,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ehsan Khan<br></li><li style='margin-bottom: 10px'>Land Area: 90 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 80 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: Ground + 24 floors<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 350<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 541/17/63<br></li><li style='margin-bottom: 10px'>Floor Area: 5,500 sft - 14,950 sft approx. <br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://youtu.be/zGnTiwBacbo' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965teP4g.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965teP4g.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965I4zY1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965I4zY1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16708439651WZgm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16708439651WZgm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965sIMQI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965sIMQI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965fpe3V.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965fpe3V.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965JRHDh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965JRHDh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965EZ0FF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965EZ0FF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965jhDme.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965jhDme.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965cvGXB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965cvGXB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965uhkBg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965uhkBg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965QX5x9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965QX5x9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1670843965HecTf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1670843965HecTf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674454391UOGva.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674454391UOGva.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16746196171ZYAC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16746196171ZYAC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617o28s9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617o28s9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/16746196179bHLv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/16746196179bHLv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617aBWFT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617aBWFT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617vQm9d.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617vQm9d.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617nyMt1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617nyMt1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617J8Dp1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617J8Dp1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617CXTZs.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617CXTZs.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617Terid.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617Terid.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617GN3Lf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617GN3Lf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/asdads/1674619617sdKOV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/asdads/1674619617sdKOV.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "14",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Aura";
      var features =
        '<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Double-height Entry</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Fully Equipped state-of-the-art Gym</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professional Landscaping and Lighting</span></span></span></span><br /> <br /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Children&#39;s Play Area</span><br /> <br /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">​Double Glazed Window System</span><br /> <br /> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Infinity Heated Swimming Pool at Rooftop<br /> <br /> Hot Tub at Rooftop</span></span></span></span><br /> <br /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Rooftop Party Space</span><br /> <br /> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Steam Room</span></span></span></span><br /> <br /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Full Load Backup Generator&nbsp;</span><br /> <br /> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Fire Stairs</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Car Parking with Ventilation System</span></span></span></span>';
      var productDesc = "Plot 03, Road 83, North Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.796987,
          lng: 90.414144,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Land Area: 35 Kathas<br></li><li style='margin-bottom: 10px'>Architect : Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North - West, Park Facing <br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13<br></li><li style='margin-bottom: 10px'>Front Road: 52 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 45<br></li><li style='margin-bottom: 10px'>Size of the Units: 3,350 to 7,100 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 90<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=Syu6alB3Mfs&t=7s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891598N1DMY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891598N1DMY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/16108915989IW3U.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/16108915989IW3U.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891598LVjYe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891598LVjYe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891598n2dJE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891598n2dJE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891645x0FRi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891645x0FRi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/16108916459s3Sw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/16108916459s3Sw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891645oVVoe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891645oVVoe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891669rgDXM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891669rgDXM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891669c7GvY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891669c7GvY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/16108916691Tepe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/16108916691Tepe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/16108916690YP0w.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/16108916690YP0w.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/16108916697t4ay.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/16108916697t4ay.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891760SEMlO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891760SEMlO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891760VZpTV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891760VZpTV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891760rxFZ5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891760rxFZ5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891760SLxsB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891760SLxsB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891760VPrAe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891760VPrAe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891783SLeHE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891783SLeHE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1610891783dgmL0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1610891783dgmL0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1612420226UfERD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1612420226UfERD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1612420339hq6Ln.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1612420339hq6Ln.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan/1633327278Tqa4M.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan/1633327278Tqa4M.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Pinnacle";
      var features =
        '<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand 45 Feet High Atrium Entrance</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Designed Reception Lobby</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">07 High-Speed International Brand Passenger Elevators &amp; 01 Service/Fireman&rsquo;s Elevator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">11.5 Feet Floor to Floor Height</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Efficiently Designed Floor Space Providing Maximum Flexibility for Interior Design</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping and Building Lighting (Using Only Energy-efficient LED Lighting)</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Fully Equipped State-of-the-art Gym</span></span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Aesthetically Designed and Spacious Caf&eacute; at Ground Floor</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Exquisite Rooftop Restaurant with the Most Lucrative and Unparalleled Views of the City</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Business Center&nbsp;</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Common Area Finishing with Exclusive Materials &amp; Fittings</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Country&rsquo;s First Wind Tunnel Tested Building Designed By RWDI Singapore</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">State-of-the-art Firefighting and Detection System Designed by Meinhardt Singapore &amp; IDS Singapore</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Structural and Electromechanical Design by Meinhardt Singapore</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">BAS (Building Automation System) for Complete Monitoring, Safe and Efficient Facility Management&nbsp;</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Insulated Double-glazed, Low-E, Heat Resistant Glass in Fully Unitized Curtain Wall System for Energy Efficiency, Durability, Dust and Waterproofing</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Load Power Backup with Most Advanced Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Central Security Surveillance System with 24/7 Monitoring</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">05 Layer Basement Parking with Mechanical Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">02 Pressurized Fire Stairs with UL Certified 2 Hours Fire Resistant Doors</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">HVAC System with Chiller Manager and BTU Meter</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Central PA System for Announcements</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office, Fire Command Room &amp; Drivers Waiting Rooms with Washrooms</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">10 Years Building Facilities Management Services By Shanta Holdings Ltd</span></span></span>';
      var productDesc = "190/A, Bir Uttam Mir Shawkat Sarak, Tejgaon";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.77011389,
          lng: 90.40743056,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Ehsan Khan (EK Architects)<br></li><li style='margin-bottom: 10px'>Land Area: 45 katha<br></li><li style='margin-bottom: 10px'>Orientation of Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road : 60 feet wide<br></li><li style='margin-bottom: 10px'>Structural Consultant: Meinhardt (Singapore) Pte Ltd.<br></li><li style='margin-bottom: 10px'>MEP Consultant: Meinhardt (Singapore) Pte Ltd.<br></li><li style='margin-bottom: 10px'>Number of Stories: 40<br></li><li style='margin-bottom: 10px'>Floor Area: 4,050 - 14,560sft/ Floor (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 5<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 367<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=kjGLMECTd-A&t=5s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002XVu6Q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002XVu6Q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002DokQd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002DokQd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002yoXE0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002yoXE0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002tFyCR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002tFyCR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002Y60w0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002Y60w0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002BIHBv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002BIHBv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002NzqhF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002NzqhF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002hV3CL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002hV3CL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002hbafQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002hbafQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002aJvJl.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002aJvJl.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002mIsne.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002mIsne.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002sZW9A.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002sZW9A.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002sWaSe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002sWaSe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002Qa9TN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002Qa9TN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-tejgaon /1562041002VbY5r.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-tejgaon /1562041002VbY5r.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "10",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Bansari";
      var features =
        '<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Entry and Drop-Off Area</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rooftop Swimming Pool</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rooftop Party Space</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement Car Parking With Ventilation System</span></span></span></span>';
      var productDesc = "10 UN Road, Block-K, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80004722,
          lng: 90.41876388,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 9.90 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 09<br></li><li style='margin-bottom: 10px'>Size of Units: 3,946 - 7,667 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 18<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 34/2017/344<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/16592463336U3WZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/16592463336U3WZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333puEOj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333puEOj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333hjj3d.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333hjj3d.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333tvNQ7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333tvNQ7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333FEZeZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333FEZeZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333pf0Q9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333pf0Q9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/16592463333CPSN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/16592463333CPSN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333xS8C5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333xS8C5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333Cm3dO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333Cm3dO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659246333K0pM3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659246333K0pM3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659247051dyRAZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659247051dyRAZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/16592666445PKfX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/16592666445PKfX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659266714hCAbc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659266714hCAbc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1659441376IC0Mn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1659441376IC0Mn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/16640804708SBzb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/16640804708SBzb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/16640804707t8LK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/16640804707t8LK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara/1664080470BafSc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara/1664080470BafSc.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "La Bijou";
      var features =
        '<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Entry and Drop-Off Area</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping and Lighting</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rooftop Party Space with Indoor Sitting Arrangement</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Landscaped Deck at Rooftop</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement for Car Parking</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span></span></span>';
      var productDesc = "Plot # 1, Road # 1, Block-K, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.800478,
          lng: 90.421661,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Ishtiaque Zahir<br></li><li style='margin-bottom: 10px'>Land Area: 9.96 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 08<br></li><li style='margin-bottom: 10px'>Size of Units: 4,150 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 322/16/475<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/16400802338GMZD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/16400802338GMZD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233cB9fd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233cB9fd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233YagTJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233YagTJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233LfL79.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233LfL79.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233g7ktF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233g7ktF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233QC3jL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233QC3jL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233wEkoG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233wEkoG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233nu4xt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233nu4xt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/16400802334acKE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/16400802334acKE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233TMa0L.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233TMa0L.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233EFDVc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233EFDVc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233Dq6TE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233Dq6TE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233t8mUw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233t8mUw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233RNVfq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233RNVfq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-baridhara1/1640080233xI50l.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-baridhara1/1640080233xI50l.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Splendor";
      var features =
        '<div style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Calibri, Arial, Helvetica, sans-serif; vertical-align: baseline; color: rgb(0, 0, 0);"> <div style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 12pt; line-height: inherit; font-family: Calibri, Arial, Helvetica, sans-serif; vertical-align: baseline; color: inherit;"> <div style="margin-top: 0px; margin-bottom: 0px;"><span style="color:#FFFFFF;"><span style="font-family:arial,helvetica,sans-serif;">Grand Triple-height Reception Area and Waiting Lounge<br /> &nbsp;<br /> Professional Landscaping &amp; Lighting<br /> &nbsp;<br /> Lush Green Central Courtyard / Kid&#39;s Play Area (08&nbsp;kathas approx.)<br /> &nbsp;<br /> Gym with State-of-the-art Equipment<br /> &nbsp;<br /> Elegantly Furnished Party Room<br /> &nbsp;<br /> Rooftop Swimming Pool<br /> &nbsp;<br /> Management Office<br /> &nbsp;<br /> Landscaped Deck at Rooftop<br /> &nbsp;<br /> Fire Fighting and Smoke Detection System<br /> &nbsp;<br /> Multi-level Basement Car Parking</span></span></div> </div> </div>';
      var productDesc = "Plot  26, Road  47, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79258,
          lng: 90.413018,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 19.80 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 28<br></li><li style='margin-bottom: 10px'>Size of Units: 3,668 to 3,733 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 56<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 568/16/187<br></li>",
          features: features,
          images: "<a href='https://youtu.be/6qHopYX3q9Q' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958281SHClK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958281SHClK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/16129582818LjaV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/16129582818LjaV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958281JEs6O.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958281JEs6O.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958281hJP0P.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958281hJP0P.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958281Be3mD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958281Be3mD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958316dnsAZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958316dnsAZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/16129583161Knxk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/16129583161Knxk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958316Y0sm8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958316Y0sm8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958316lIDL4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958316lIDL4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958316OxoVI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958316OxoVI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958345ULo1n.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958345ULo1n.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958345EwXbS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958345EwXbS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958345d2JxF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958345d2JxF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958345LLz4w.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958345LLz4w.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958345wxcv3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958345wxcv3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958377sJv2c.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958377sJv2c.jpeg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/161295837729CNX.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/161295837729CNX.jpeg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/16129583772Titq.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/16129583772Titq.jpeg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958377fmLAQ.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958377fmLAQ.jpeg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/1612958377Hmkj9.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/1612958377Hmkj9.jpeg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-gulshan1/16129583913TSBV.jpeg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-gulshan1/16129583913TSBV.jpeg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Starville";
      var features =
        '<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Double-Height Entry</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception with Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping &amp; Lighting</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Outdoor Activity Zone</span></span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span></span></span><br /> <br /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">VRF Air Conditioning Solution</span><br /> <br /> <span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate&nbsp;Fire Stair</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Chauffeurs Waiting Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span></span>';
      var productDesc = "Plot 10/A, Road 48, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.793061,
          lng: 90.411915,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Md. Ishtiaque Zahir<br></li><li style='margin-bottom: 10px'>Land Area: 15.06 katha<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 19<br></li><li style='margin-bottom: 10px'>Size of Units: 3,950 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 38<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 250/18/628<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219bfFFT.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219bfFFT.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219SvrbP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219SvrbP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219LPEkL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219LPEkL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219AnpnB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219AnpnB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219n0i4W.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219n0i4W.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219dMiWR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219dMiWR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219y86eO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219y86eO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219Z6jqh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219Z6jqh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/15294432198c7Mw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/15294432198c7Mw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219SnUiK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219SnUiK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219vFKNK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219vFKNK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219H1xZY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219H1xZY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219oy6vM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219oy6vM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219VuTfV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219VuTfV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219ao7ia.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219ao7ia.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan/1529443219Eaxys.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan/1529443219Eaxys.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Zen";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Landscaped Deck &amp; Seating at Rooftop<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Rooftop Party Space<br /> <br /> Professionally Designed Landscaping, Lighting &amp; Water Features&nbsp;<br /> <br /> Management Office<br /> <br /> Separate Fire Stairs&nbsp;<br /> <br /> Fire Fighting and Smoke Detection System<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room";
      var productDesc = "Road 137, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.776244,
          lng: 90.417396,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20 kathas (approx.)<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 32<br></li><li style='margin-bottom: 10px'>Size of Units: 2,950-2,985 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 64<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431xmAJL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431xmAJL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431oI6gy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431oI6gy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431SCSXK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431SCSXK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431Myg8Z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431Myg8Z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/15418724317SC3o.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/15418724317SC3o.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431ToiSK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431ToiSK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431op6Z9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431op6Z9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431SoRZE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431SoRZE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431pRhhP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431pRhhP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/154187243124oic.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/154187243124oic.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431op50t.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431op50t.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431uTRNM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431uTRNM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431CcbJb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431CcbJb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan1/1541872431kBzbB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan1/1541872431kBzbB.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Lumiere";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Sophisticated, Fully Furnished Party Room with Kitchenette<br /> <br /> Stylish Billiard Room<br /> <br /> Landscaped Deck &amp; Seating at Roof<br /> <br /> Rooftop Party Space<br /> <br /> Children&#39;s Play Area<br /> <br /> Swimming Pool at Rooftop<br /> <br /> Steam Room<br /> <br /> Double Glazed Window System<br /> <br /> Professionally Designed Landscaping &amp; Lighting<br /> <br /> Management Office<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Central Water Treatment Plant<br /> <br /> Fire Fighting and Smoke Detection System<br /> <br /> Chauffeurs Waiting Room";
      var productDesc = "Plot: 4A, Road 55, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79805556,
          lng: 90.41114722,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20.25 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road: 55 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 16<br></li><li style='margin-bottom: 10px'>Size of Units: 3,970 - 8,612 sft<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 32<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629ajLGE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629ajLGE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629U66ml.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629U66ml.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629SU3Kz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629SU3Kz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629rYe8R.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629rYe8R.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629xlhqS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629xlhqS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629MmVVL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629MmVVL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629lAD3N.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629lAD3N.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/16843976299DZls.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/16843976299DZls.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629xTrLu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629xTrLu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629kbxSR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629kbxSR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/16843976295goG8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/16843976295goG8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629XZGHM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629XZGHM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629RCGFz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629RCGFz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629qOVkt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629qOVkt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629eW7Hn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629eW7Hn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/1684397629dddBL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/1684397629dddBL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed-Gulshan2/16858551040IBw3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed-Gulshan2/16858551040IBw3.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Nunita";
      var features =
        '<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Professionally Designed Landscaping &amp; Lighting<br /> <br /> Outdoor Activity Zone<br /> <br /> Heated Swimming Pool at Rooftop<br /> <br /> Double Glazed Window System</span></span><br /> <br /> <span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Rooftop Party Space<br /> <br /> VRF Air Conditioning Solution<br /> <br /> Full Power Backup Generator<br /> <br /> Management Office<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting and Smoke Detection System</span></span>';
      var productDesc = "Road 55/57, North Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.798384,
          lng: 90.409958,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 17.17 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East- West<br></li><li style='margin-bottom: 10px'>Front Road Width  : 52  feet <br></li><li style='margin-bottom: 10px'>Number of Floors: 14<br></li><li style='margin-bottom: 10px'>Number of Apartments: 22<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 3,800 sft- 3,920 sft  (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 44<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272FdWoo.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272FdWoo.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272sjI1b.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272sjI1b.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272692ww.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272692ww.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272wQVGF.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272wQVGF.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272aELmQ.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272aELmQ.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472272By1jz.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472272By1jz.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/15544724670FZAr.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/15544724670FZAr.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467UxJiT.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467UxJiT.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467tRa69.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467tRa69.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467TAOUw.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467TAOUw.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467vuNHw.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467vuNHw.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467s8RUU.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467s8RUU.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1554472467IVAHv.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1554472467IVAHv.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1624081296DbzAg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1624081296DbzAg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1624081655ziBHe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1624081655ziBHe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed1/1624081701idM2A.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed1/1624081701idM2A.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Luxe";
      var features =
        "Grand Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Children&rsquo;s Play Area&nbsp;<br /> <br /> Professional Landscaping &amp; Lighting<br /> <br /> Rooftop Swimming Pool<br /> <br /> Double Glazed Window System<br /> <br /> Steam Room<br /> <br /> Rooftop Party Space<br /> <br /> Full Power Backup Generator<br /> <br /> Management Office<br /> &nbsp;<br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting and Smoke Detection System";
      var productDesc = "Plot 08, Road 51, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.797397,
          lng: 90.411709,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 21.06 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 55 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 22<br></li><li style='margin-bottom: 10px'>Size of Units: 4,650 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 44<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 093/18/620<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190SLVa5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190SLVa5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190OjYNi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190OjYNi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190Z28Yx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190Z28Yx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190fHJIQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190fHJIQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190jQUm2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190jQUm2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190TTAzy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190TTAzy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190frkbC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190frkbC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190pZWoN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190pZWoN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190eoPmm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190eoPmm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190mC36l.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190mC36l.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190UpcOM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190UpcOM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540556190eHGPh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540556190eHGPh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/15409568681qZpn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/15409568681qZpn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540956868zS9eq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540956868zS9eq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed2/1540956868zJTg8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed2/1540956868zJTg8.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Sanctum";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Professional Landscaping &amp; Lighting<br /> <br /> Double Glazed Window System<br /> <br /> Outdoor Activity Zone<br /> <br /> Rooftop Heated Swimming Pool<br /> <br /> Rooftop Deck &amp; BBQ Zone<br /> <br /> VRF Air Conditioning Solution<br /> <br /> Full Power Backup Generator<br /> <br /> Management Office<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Fire Fighting and Smoke Detection System<br /> <br /> Chauffeurs Waiting Room";
      var productDesc = "Plot 4, Road 81, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.801789,
          lng: 90.413923,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20 kathas <br></li><li style='margin-bottom: 10px'>Orientation of the Land: North - South<br></li><li style='margin-bottom: 10px'>Front Road: 25 feet<br></li><li style='margin-bottom: 10px'>Number of Floors: 13<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Size of Units: 3,950 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 40<br></li>",
          features: features,
          images: "<a href='https://youtu.be/HRNSJsirdxg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313qBv3y.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313qBv3y.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313TiBAS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313TiBAS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/15442673131sXXa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/15442673131sXXa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313ptXCj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313ptXCj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313ewydm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313ewydm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313TGsVG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313TGsVG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313KXVIz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313KXVIz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313tFQVB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313tFQVB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313x4XPI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313x4XPI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1544267313nFCYd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1544267313nFCYd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1625758431VsfDR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1625758431VsfDR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1625758467N0oHt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1625758467N0oHt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/16257585091nOZf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/16257585091nOZf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1625758541NAGoz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1625758541NAGoz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed3/1625758566LnrNY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed3/1625758566LnrNY.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Utopia";
      var features =
        "Large Swimming Pool with Separate Ladies&rsquo; and Gents&rsquo; Changing Rooms<br /> <br /> Kid&rsquo;s Pool<br /> <br /> Steam and Sauna&nbsp;<br /> <br /> Two Fully Equipped State-of-the-art Gym (separate for ladies and gents)<br /> ​<br /> Two Elegantly Furnished Party Rooms (70 &amp; 50 person capacity approx.)<br /> <br /> Jogging Trail Circulating the Project at Ground Level <div><br /> Children&rsquo;s Play Ground <div><br /> Multipurpose Hard Court (for Badminton/Cricket/Football/Basketball)</div> <div><br /> Community Prayer Hall with Ablution Space (100 Person Capacity Approximately)</div> <div><br /> Stylish Billiard Room</div> <div><br /> Furnished Reading Lounge</div> <div><br /> Elegant Reception &amp; Waiting Lounge</div> <div><br /> Professional Landscaping, Lighting &amp; Water Features<br /> <br /> Lush Green Lawn</div> <div><br /> Security Control Room with 24/7 CCTV Monitoring System</div> <div>&nbsp;</div> <div>Drivers&rsquo; Waiting Rooms with Toilet Facilities</div> <div><br /> Management Office</div> <div><br /> Designated Cloth Drying Space at Rooftop</div> <div><br /> Surface and Underground Parking with Ventilation System</div> <div><br /> Dedicated Building for Bank, Supershop, Cafe, Laundry and Salon to Serve the Community</div> <div><br /> Designated Multipurpose Areas (Usable for Indoor Games, Seniors&rsquo; Lounge)<br /> <br /> Professional Facility Management Service by Shanta Holdings Ltd.</div> </div>";
      var productDesc = "Mirpur DOHS Road";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.836613,
          lng: 90.376017,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Ehsan Khan (EK Architects)<br></li><li style='margin-bottom: 10px'>Land Area: 12.55 Bighas (approx.)<br></li><li style='margin-bottom: 10px'>Orientation of Land: East Facing<br></li><li style='margin-bottom: 10px'>Front Road : 150 feet wide<br></li><li style='margin-bottom: 10px'>Number of Towers: 07<br></li><li style='margin-bottom: 10px'>Number of Apartments: 416<br></li><li style='margin-bottom: 10px'>Size of Units: 2,050 – 2,300 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basement: 01<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 500 (approx.)<br></li><li style='margin-bottom: 10px'>Address: Mirpur DOHS Road<br></li>",
          features: features,
          images: "<a href='https://youtu.be/OsgpSE_B9sA' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596038525qby3y.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596038525qby3y.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596038606HJxtS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596038606HJxtS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039036L3gsO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039036L3gsO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15960390799QYVP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15960390799QYVP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039121H1SSQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039121H1SSQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039152exKpF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039152exKpF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039282ymRuJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039282ymRuJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039340Nd5uJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039340Nd5uJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039371t8R9U.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039371t8R9U.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15960394457rOGI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15960394457rOGI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039479dAfcu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039479dAfcu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039520v9Gsi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039520v9Gsi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039561CL3Ah.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039561CL3Ah.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039592bySCa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039592bySCa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039645J085e.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039645J085e.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039673JEnsS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039673JEnsS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15960397208n9tv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15960397208n9tv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039772zMMe4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039772zMMe4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039811nkf8v.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039811nkf8v.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039867S4Fcj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039867S4Fcj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15960398985uGSu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15960398985uGSu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15960399289OqG8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15960399289OqG8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039963qT7T9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039963qT7T9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596039994QL155.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596039994QL155.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1596040079k1dYP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1596040079k1dYP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/1599471896RfZfP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/1599471896RfZfP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed4/15994719262s93k.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed4/15994719262s93k.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "The Eltanin ";
      var features =
        "Grand entry<br /> <br /> Elegant reception with waiting lounge<br /> <br /> Professionally designed landscaping, lighting and water features<br /> <br /> Children play area<br /> <br /> Gym with state-of-the-art equipment<br /> <br /> Rooftop swimming pool<br /> <br /> Multi-layered basement for car parking with ventilation&nbsp;<br /> <br /> Fire fighting and smoke detection system";
      var productDesc = "34, UN Road, Block-K, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80363889,
          lng: 90.41852778,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 8.36 katha<br></li><li style='margin-bottom: 10px'>Land Orientation: East-West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Lake Facing Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road: 50 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 07<br></li><li style='margin-bottom: 10px'>Size of Units: 3,995 - 7,920 sft (Approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: <br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708bLvo2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708bLvo2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708Y2l2t.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708Y2l2t.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708QgHLJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708QgHLJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708Nm2bN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708Nm2bN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708kbleY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708kbleY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/15216927084hpup.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/15216927084hpup.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708ZGbu4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708ZGbu4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692708dt7zv.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692708dt7zv.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/1521692774PABLz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/1521692774PABLz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/the-eltanin-/15577453997hF1q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/the-eltanin-/15577453997hF1q.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "13",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Nawratan ";
      var features =
        '<span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Reception and Waiting Lounge</span><br /> <br /> <span style="font-size: 10pt; line-height: 107%; font-family: Arial, sans-serif;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rooftop Party Space</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-Level Basement Car Parking With Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span>';
      var productDesc = "3, Nawratan Colony, Baily Road";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.74106667,
          lng: 90.40956667,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 27.68 katha<br></li><li style='margin-bottom: 10px'>Land Orientation: East-West<br></li><li style='margin-bottom: 10px'>Front Road: 22 feet wide internal road<br></li><li style='margin-bottom: 10px'>Number of Apartments: 40<br></li><li style='margin-bottom: 10px'>Size of Units: 2,355 - 2,623 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 57<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 25.39.0000.122.33.759.16-50 stha<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1498283736wvlkj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1498283736wvlkj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1498283736Ofotr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1498283736Ofotr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/14982837369pHOH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/14982837369pHOH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1498283736Vmmiw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1498283736Vmmiw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/15294443834Jxoz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/15294443834Jxoz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/15294444573EMUe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/15294444573EMUe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1529444497pxfMk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1529444497pxfMk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1529444547u8MWn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1529444547u8MWn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1529444547mSNA0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1529444547mSNA0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1529444547TmVRw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1529444547TmVRw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/nawratan-/1529444547YVgvk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/nawratan-/1529444547YVgvk.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Shwapnoneer";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Outdoor Activity Zone<br /> <br /> Rooftop Swimming Pool<br /> <br /> Professionally Designed Landscaping &amp; Lighting<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Children&rsquo;s Play Area<br /> <br /> Fire Fighting and Smoke Detection System<br /> <br /> Prayer Room<br /> <br /> Management Office<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> 04 Passenger Lifts";
      var productDesc = "Bashundhara R/A";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.812954,
          lng: 90.432282,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 28.66 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North -South<br></li><li style='margin-bottom: 10px'>Road Width  : 52  feet wide road in front<br></li><li style='margin-bottom: 10px'>Number of Floors: 14<br></li><li style='margin-bottom: 10px'>Size of Units: 2,663 sft- 3,664 sft<br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 96<br></li><li style='margin-bottom: 10px'>Number of Apartments: 48<br></li>",
          features: features,
          images: "<a href='https://www.youtube.com/watch?v=dgRUtFLVLY4&t=106s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494L4NTw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494L4NTw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494oXo6g.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494oXo6g.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494hMEhI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494hMEhI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494sRFW1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494sRFW1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494yurxf.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494yurxf.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494drmwe.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494drmwe.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494Fhjtb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494Fhjtb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494QR8fX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494QR8fX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494owJ2N.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494owJ2N.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494svF7s.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494svF7s.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494GFX8d.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494GFX8d.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126494clEzS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126494clEzS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/15521266341bfSZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/15521266341bfSZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/1552126634MGlFL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/1552126634MGlFL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed/15521266346tL5n.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed/15521266346tL5n.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Maaya";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Parking Free Ground Floor<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Professional Landscaping &amp; Lighting<br /> <br /> Outdoor Activity Zone<br /> <br /> Lush Green Lawn<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Management Office<br /> <br /> Firefighting and Smoke Detection System";
      var productDesc = "Road 7 & 13, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.779153,
          lng: 90.4137,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Rafiq Azam<br></li><li style='margin-bottom: 10px'>Land Area: 20 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: South - East<br></li><li style='margin-bottom: 10px'>Front Road Width  : 52  feet <br></li><li style='margin-bottom: 10px'>Number of Floors: 14<br></li><li style='margin-bottom: 10px'>Number of Apartments: 35<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 2,425 - 2,780 sft<br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car parking: 67<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054zdNLs.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054zdNLs.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054jLqCx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054jLqCx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054KYG2v.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054KYG2v.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054wuALw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054wuALw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054QXWxC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054QXWxC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054cb9VL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054cb9VL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054AvZnh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054AvZnh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054sH2Sk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054sH2Sk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054ACigF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054ACigF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054NN9oz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054NN9oz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054GfwCM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054GfwCM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/15651760549PYiK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/15651760549PYiK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054KSgJg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054KSgJg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054xbXz4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054xbXz4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/1565176054iaHAq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/1565176054iaHAq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed5/15651763933Kn8I.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed5/15651763933Kn8I.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Atelier";
      var features =
        '<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Entry</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping, Lighting &amp; Water Features</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Lush Green Lawn</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Heated Infinity Pool at Rooftop<br /> <br /> Double Glazed Window System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Single Unit per Floor, Private Foyer</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Rooftop Party Space<br /> <br /> VRF Air Conditioning Solution</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Power Backup Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Fire Stairs</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-Level Basement Car Parking with Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Fire Fighting and Smoke Detection System</span></span></span></span>';
      var productDesc = "Road 56 & 61, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.800135,
          lng: 90.411322,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 15 Kathas<br></li><li style='margin-bottom: 10px'>Facing of the Land: South-West, Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road Width  : 55  feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13<br></li><li style='margin-bottom: 10px'>Number of Apartments: 12<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 5,800 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 36<br></li><li style='margin-bottom: 10px'>RAJUK Approval Number: 25.39.0000.106.34.246.19<br></li>",
          features: features,
          images: "<a href='https://youtu.be/umXpRKZoTdk' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499165bmxgz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499165bmxgz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499165BscHm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499165BscHm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499165xsyhq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499165xsyhq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499165knakk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499165knakk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622YRP0s.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622YRP0s.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622dpZRU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622dpZRU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622qixpB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622qixpB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622C7C3S.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622C7C3S.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622kWNWZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622kWNWZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622OdL1q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622OdL1q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622v0ik0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622v0ik0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622KxpKp.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622KxpKp.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622jaHRz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622jaHRz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622jtHVw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622jtHVw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1588499622Agtnc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1588499622Agtnc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1592983079D3HIC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1592983079D3HIC.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Aronno";
      var features =
        "<p>Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge&nbsp;<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Professionally Designed Landscaping, Lighting and Water Feature<br /> <br /> Landscaped Deck &amp; Seating at Rooftop<br /> <br /> VRF Air Conditioning Solution</p> <p>Full Power Backup Generator<br /> <br /> Rooftop Party Space<br /> <br /> Management Office<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Firefighting and Smoke Detection System</p>";
      var productDesc = "Road 6, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.803691,
          lng: 90.420281,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Mamnoon Morshed Chowdhury<br></li><li style='margin-bottom: 10px'>Land Area: 9 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Front Road Width  : 40’-0” Feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 8<br></li><li style='margin-bottom: 10px'>Number of Apartments: 8<br></li><li style='margin-bottom: 10px'>Size of the Apartments:  3,877 sft (approx.) <br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car parking: 16<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642aslJb.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642aslJb.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642Qfe7d.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642Qfe7d.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642VfizD.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642VfizD.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642iuGu5.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642iuGu5.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642YSw2I.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642YSw2I.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1584853642mOaP7.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1584853642mOaP7.gif' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Magnolia";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Outdoor Activity Zone<br /> <br /> Parking Free Ground Floor<br /> <br /> Management Office<br /> <br /> Professionally Designed Landscaping &amp; Lighting<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Firefighting and Smoke Detection System";
      var productDesc = "Plot 33, Road 123,Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.785262,
          lng: 90.419314,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 9.97 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North -South<br></li><li style='margin-bottom: 10px'>Front Road Width  : 40 feet <br></li><li style='margin-bottom: 10px'>Number of Floors: G + 11<br></li><li style='margin-bottom: 10px'>Number of Apartments: 9<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 3,655 sft <br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 18<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363MnGuf.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363MnGuf.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363rIF48.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363rIF48.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363h6FtE.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363h6FtE.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363LcLuS.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363LcLuS.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/15544823630FXD2.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/15544823630FXD2.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363aS5Z5.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363aS5Z5.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363ALthf.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363ALthf.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363JIXoN.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363JIXoN.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/15544823636FUL9.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/15544823636FUL9.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531Hwy4X.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531Hwy4X.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531pjjho.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531pjjho.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531zic1s.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531zic1s.gif' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Dhaka Tower";
      var features = "";
      var productDesc = "Tejgaon";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363MnGuf.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363MnGuf.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363rIF48.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363rIF48.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363h6FtE.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363h6FtE.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363LcLuS.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363LcLuS.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/15544823630FXD2.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/15544823630FXD2.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363aS5Z5.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363aS5Z5.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363ALthf.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363ALthf.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482363JIXoN.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482363JIXoN.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/15544823636FUL9.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/15544823636FUL9.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531Hwy4X.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531Hwy4X.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531pjjho.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531pjjho.gif' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed9/1554482531zic1s.gif' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed9/1554482531zic1s.gif' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "12",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Olympus";
      var features =
        '<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:14px;"><span style="line-height: 107%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Grand Double-Height Entry</span><br /> <br /> <span style="line-height: 107%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping, Lighting &amp; Water Features</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Infinity Heated Swimming Pool at Rooftop<br /> <br /> Double Glazed Window System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Parking Free Ground Floor</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Single Unit per Floor, Private Foyer<br /> <br /> VRF Air Conditioning Solution</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Power Backup Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Fire Stairs</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement Car Parking with Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span></span></span>';
      var productDesc = "Plot 04, Road 62, North Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.800552,
          lng: 90.40913,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20 Kathas<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Park facing<br></li><li style='margin-bottom: 10px'>Orientation of the Land: South<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13<br></li><li style='margin-bottom: 10px'>Front Road: 56  feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 12 Units<br></li><li style='margin-bottom: 10px'>Size of Units: 5,500 - 8,500 sft (approx)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 36<br></li><li style='margin-bottom: 10px'>RAJUK Approval No: 106/34/308/19<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162eUFCt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162eUFCt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162U8t9z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162U8t9z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162nhhee.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162nhhee.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162ztiyM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162ztiyM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/157181816264qTm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/157181816264qTm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/157181816298hPL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/157181816298hPL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162LTkCN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162LTkCN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162UxVoG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162UxVoG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162uLXM0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162uLXM0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162cltuU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162cltuU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818162gBYGu.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818162gBYGu.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818982xGzpp.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818982xGzpp.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818982d9BL5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818982d9BL5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/15718189827Iyzx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/15718189827Iyzx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818982XedGI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818982XedGI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1571818982cpRiV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1571818982cpRiV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1597587377B7Ktb.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1597587377B7Ktb.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/159758737717CoW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/159758737717CoW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1597587377Z8aUw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1597587377Z8aUw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1597587377dhlE4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1597587377dhlE4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/olympus/1597587377xcwP1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/olympus/1597587377xcwP1.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Eyrie";
      var features =
        "Elegant Reception and Waiting Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Rooftop Party Space<br /> <br /> Lush Green Lawn<br /> <br /> Landscaped Deck &amp; Seating at Rooftop<br /> <br /> Professionally Designed Landscaping&nbsp; &amp; Lighting<br /> <br /> ​Double Glazed Window System<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> VRF Air Conditioning Solution<br /> <br /> Management Office<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Firefighting and Smoke Detection System";
      var productDesc = "Plot No. 3A, Road No. 50Gulshan, Dhaka";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.797653,
          lng: 90.410672,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 9.2 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: South Facing Plot<br></li><li style='margin-bottom: 10px'>Front Road: 30 feet wide<br></li><li style='margin-bottom: 10px'>Number of Apartments: 8<br></li><li style='margin-bottom: 10px'>Size of Units: 4,550 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 2<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370Eo7V0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370Eo7V0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370okJP3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370okJP3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370LvNyB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370LvNyB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370k770A.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370k770A.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370pxuFR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370pxuFR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/15406323700AJCL.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/15406323700AJCL.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370LhaTd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370LhaTd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370ahyU7.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370ahyU7.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370BFDod.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370BFDod.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370eIlmJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370eIlmJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370VLgpr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370VLgpr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/15406323708q1S2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/15406323708q1S2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/eyrie/1540632370MEjXx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/eyrie/1540632370MEjXx.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Virtue";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Two High-speed Elevators<br /> <br /> Professional Lighting<br /> <br /> Three-layer Basement Parking with Ventilation System<br /> <br /> Full load Power Backup with Internationally Reputed Brand Generator<br /> <br /> Central Security Surveillance System<br /> <br /> State-of-the-art Firefighting System with Addressable Detection System<br /> <br /> Pressurized Fire Stairs<br /> <br /> Central Public Address (PA) system<br /> <br /> Management Office<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Building Automation System<br /> <br /> Five Years of Building Facilities Management Service by Shanta Holdings Ltd.";
      var productDesc = "Sector 4, Uttara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.865105,
          lng: 90.400442,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Mamnoon Morshed Chowdhury<br></li><li style='margin-bottom: 10px'>Land Area: 7.55 kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: East-West, Corner Plot<br></li><li style='margin-bottom: 10px'>Road Width  : Front Road 150 Feet and Side Road 20.5 Feet<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13 floors<br></li><li style='margin-bottom: 10px'>Floor Area: 1,100-3,272 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 03<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 18<br></li><li style='margin-bottom: 10px'>.: N/A<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/1548226336GOisV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/1548226336GOisV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/15482263363nGYH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/15482263363nGYH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/15482263364sLG2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/15482263364sLG2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/1548226336Untlq.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/1548226336Untlq.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/1548226336gAdFa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/1548226336gAdFa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/shanta-virtue/1548226336w2NEB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/shanta-virtue/1548226336w2NEB.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "10",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Pristine";
      var features =
        '<span style="font-family: arial, helvetica, sans-serif; font-size: 14px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 14.98px;">Grand Entrance</span><br style="font-family: arial, helvetica, sans-serif; font-size: 14px;" /> <br style="font-family: arial, helvetica, sans-serif; font-size: 14px;" /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 14.98px;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping and Lighting</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Infinity Heated Swimming Pool at Rooftop</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Single Unit Per Floor, Private Foyer<br /> <br /> VRF Air Conditioning Solution</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Power Backup Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Fire Stairs</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement Car Parking with Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span>';
      var productDesc = "Plot 02, Road 10, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.806451,
          lng: 90.420433,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 9.47 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: North-South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Park Facing<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 8<br></li><li style='margin-bottom: 10px'>Number of Apartments: 8<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 5,000 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Front Road Width: 40 Feet<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/16317757168IMry.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/16317757168IMry.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/16317757625fXWx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/16317757625fXWx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631775836wYL8q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631775836wYL8q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631775922reXso.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631775922reXso.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631775985lLoYR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631775985lLoYR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776027MzU7Y.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776027MzU7Y.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776086FQF8c.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776086FQF8c.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776206c8W6J.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776206c8W6J.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776206Wel6e.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776206Wel6e.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776206JPAJF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776206JPAJF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776206VL6nX.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776206VL6nX.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321RURCF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321RURCF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321FjCyc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321FjCyc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321AYn6W.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321AYn6W.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321OM2tB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321OM2tB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321fp1XD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321fp1XD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1631776321iqs94.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1631776321iqs94.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Zephyr";
      var features =
        "Grand Double-height Entry<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Fully Equipped state-of-the-art Gym<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Lush Green Lawn<br /> <br /> Professional Landscaping and Lighting<br /> <br /> 40 Feet Long Infinity Pool<br /> <br /> Hot Tub at Rooftop<br /> <br /> Steam Room<br /> <br /> Rooftop BBQ Zone<br /> <br /> Full Load Backup Generator&nbsp;<br /> <br /> Children&#39;s Play Area<br /> <br /> Management Office<br /> <br /> Firefighting and Smoke Detection System<br /> <br /> Separate Fire Stairs<br /> <br /> Multi-level Car Parking with Ventilation System";
      var productDesc = "Road 100 & 103, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79241392845305,
          lng: 90.41752388203024,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 20 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: South<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Park Facing Corner Plot<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 16<br></li><li style='margin-bottom: 10px'>Number of Apartments: 28<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 3,500 to 8,300 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 56<br></li><li style='margin-bottom: 10px'>Front Road Width: 55 feet<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 106.34.903.20<br></li><li style='margin-bottom: 10px'>dadasd: N/A<br></li>",
          features: features,
          images: "<a href='https://youtu.be/MZB3C6SF0Hw' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318619O6de.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318619O6de.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/163533186155emN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/163533186155emN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Atlantis";
      var features = "";
      var productDesc = "N/A";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318619O6de.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318619O6de.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/163533186155emN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/163533186155emN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Shalmolee";
      var features = "";
      var productDesc = "N/A";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318619O6de.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318619O6de.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/163533186155emN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/163533186155emN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "N/A";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861mJwT9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861osfgh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ua0YW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861C3lFC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610XdOm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861nXmBP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861VWtnk.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861Qd8Xh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318619O6de.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318619O6de.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861v94f9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861fZkLZ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318616AXPg.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16353318610bDB0.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/163533186155emN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/163533186155emN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861XokXo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861ClgMB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861B25Vr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861O21lC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jEBgK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1635331861jPgUN.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "12",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Celestial";
      var features =
        "Grand Double-height Entrance<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Fully Equipped State-of-the-art Gym<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Children&#39;s Play Area<br /> <br /> Professional Landscaping and Lighting<br /> <br /> Rooftop Party Space<br /> <br /> Management Office<br /> <br /> Multi-level Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting and Smoke Detection System&nbsp;";
      var productDesc = "Road 18, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79763453423944,
          lng: 90.40587901372608,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Ar. Nahas Ahmed Khalil<br></li><li style='margin-bottom: 10px'>Land Area: 13.63 Kathas<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 11<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Apartment Size: 2,635 sft to 3,272 sft (approx.)<br></li><li style='margin-bottom: 10px'>Front Road Width: 40 Feet<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 40<br></li><li style='margin-bottom: 10px'>RAJUK Approval Number: 25.390000.106.34.955.20<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388qzeGS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388qzeGS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388kwnbw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388kwnbw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388Ujc30.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388Ujc30.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388KCjyJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388KCjyJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388EokW2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388EokW2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388HWhrt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388HWhrt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388ldzRy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388ldzRy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388WClYQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388WClYQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16401743882Ys0G.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16401743882Ys0G.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388V9aM4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388V9aM4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/164017438880cOW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/164017438880cOW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388cKqXE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388cKqXE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16401743886uZ76.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16401743886uZ76.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388AZDWm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388AZDWm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174524Tq01z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174524Tq01z.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "15",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Eden Residences";
      var features = "";
      var productDesc = "Road 86, North Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388qzeGS.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388qzeGS.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388kwnbw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388kwnbw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388Ujc30.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388Ujc30.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388KCjyJ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388KCjyJ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388EokW2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388EokW2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388HWhrt.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388HWhrt.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388ldzRy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388ldzRy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388WClYQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388WClYQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16401743882Ys0G.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16401743882Ys0G.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388V9aM4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388V9aM4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/164017438880cOW.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/164017438880cOW.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388cKqXE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388cKqXE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16401743886uZ76.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16401743886uZ76.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174388AZDWm.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174388AZDWm.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1640174524Tq01z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1640174524Tq01z.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Affinity";
      var features =
        '<span style="font-family: arial, helvetica, sans-serif; font-size: 14px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 14.98px;">Grand Double-height Entrance</span><br style="font-family: arial, helvetica, sans-serif; font-size: 14px;" /> <br style="font-family: arial, helvetica, sans-serif; font-size: 14px;" /> <span style="font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 14.98px;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegant Reception and Waiting Lounge</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Professionally Designed Landscaping and Lighting</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Gym with State-Of-The-Art Equipment</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Elegantly Furnished Party Room</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Single Unit Per Floor, Private Foyer</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Full Power Backup Generator</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Children&#39;s Play Area</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Management Office</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Separate Fire Stairs</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Multi-level Basement Car Parking with Ventilation System</span><br /> <br /> <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Firefighting and Smoke Detection System</span></span>';
      var productDesc = "Plot 29, Road 11, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.806183041205745,
          lng: 90.41767085139197,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: DWm4 Architects<br></li><li style='margin-bottom: 10px'>Land Area: 8.14 Kathas<br></li><li style='margin-bottom: 10px'>Facing of the Land: North<br></li><li style='margin-bottom: 10px'>Number of Apartments: 08<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 9<br></li><li style='margin-bottom: 10px'>Size of Units: 4,000 sft (approx.)<br></li><li style='margin-bottom: 10px'>Font Road Width: 40 Feet<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 16<br></li><li style='margin-bottom: 10px'>RAJUK Approval Number: 25.39.0000.106.34.1511.21<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421wWZNA.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421wWZNA.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/16728274212In50.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/16728274212In50.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421JNSUF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421JNSUF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421ej23D.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421ej23D.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421ZNO3H.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421ZNO3H.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421q4GCs.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421q4GCs.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/16728274211Ay82.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/16728274211Ay82.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421IdcL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421IdcL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421zIg4Q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421zIg4Q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421nfYGz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421nfYGz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421C48uP.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421C48uP.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421qJ2wV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421qJ2wV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421qvxGd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421qvxGd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/16728274215ACPw.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/16728274215ACPw.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421LPhg3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421LPhg3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed7/1672827421Linxy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed7/1672827421Linxy.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Orchard";
      var features =
        "Grand Double Height Entry<br /> <br /> Elegant Reception Lounge<br /> <br /> Gym with State-of-the-art Equipment<br /> <br /> Rooftop Swimming Pool<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Children&rsquo;s Play Area<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Professionally Designed Landscaping, Lighting &amp; Water Features<br /> <br /> Landscaped Deck &amp; Seating at Rooftop<br /> <br /> Rooftop Party Space<br /> <br /> Management Office<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Fire Fighting and Smoke Detection System";
      var productDesc = "Plot 17, Road 4, Dhanmondi";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.74118950441383,
          lng: 90.38119450240505,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Shatotto (Arc. Md. Rafiq Azam)<br></li><li style='margin-bottom: 10px'>Land Area: 20 Khatas<br></li><li style='margin-bottom: 10px'>Facing of the Land: North<br></li><li style='margin-bottom: 10px'>Front Road Width: 55 Feet<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 13<br></li><li style='margin-bottom: 10px'>Number of Apartments: 33<br></li><li style='margin-bottom: 10px'>Size of Apartments: 2,570 - 2,970 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 43<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652kyJu1.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652kyJu1.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652xyk4m.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652xyk4m.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652Af0FD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652Af0FD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652s243n.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652s243n.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652wScJO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652wScJO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652qUb9q.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652qUb9q.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652HwfmQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652HwfmQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652craJB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652craJB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843956529lbxd.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843956529lbxd.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652HqjXK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652HqjXK.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652IDfL4.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652IDfL4.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652E5Ima.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652E5Ima.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652AnbuQ.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652AnbuQ.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652VjrNY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652VjrNY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652LBCoz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652LBCoz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684395652axRek.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684395652axRek.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Avira";
      var features =
        "Grand Double-height Entrance<br /> <br /> Elegant Reception and Waiting Lounge<br /> <br /> Fully Equipped State-of-the-art Gym<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Lush Green Lawn<br /> <br /> Children&#39;s Play Area<br /> <br /> Professional Landscaping and Lighting<br /> <br /> Rooftop BBQ Zone<br /> <br /> Management Office<br /> <br /> Multi-level Car Parking with Ventilation System<br /> <br /> Chauffeurs Waiting Room<br /> <br /> Central Water Treatment Plant<br /> <br /> Fire Fighting and Smoke Detection System&nbsp;";
      var productDesc = "Road 21, Banani";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.79483851925763,
          lng: 90.40572025508096,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: DWm4 Architects<br></li><li style='margin-bottom: 10px'>Land Area: 14.86 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: South-East Facing<br></li><li style='margin-bottom: 10px'>Specialty of the Plot: Park Side Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road Width: 40 Feet and 35 Feet<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 11<br></li><li style='margin-bottom: 10px'>Number of Apartments: 20<br></li><li style='margin-bottom: 10px'>Size of Units: 3,560 - 3,735 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 40<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 25.39.0000.106.34.1457.22<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955vqEnR.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955vqEnR.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955hgSon.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955hgSon.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16799789552UADF.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16799789552UADF.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955jgSKO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955jgSKO.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955ZXnDi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955ZXnDi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955NTnlN.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955NTnlN.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955j3JSj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955j3JSj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955munFE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955munFE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955SqFHx.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955SqFHx.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955WLsYB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955WLsYB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955atypU.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955atypU.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955QieOo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955QieOo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16799789550jVUo.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16799789550jVUo.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955MKyh5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955MKyh5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1679978955EjDzO.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1679978955EjDzO.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Adore";
      var features =
        "Grand Triple-height Entrance<br /> <br /> Elegant Reception Lounge<br /> <br /> 6,000 sft (approx.) open to sky lush green courtyard<br /> <br /> Professionally Designed Landscaping and Lighting<br /> <br /> Gym with State-Of-The-Art Equipment<br /> <br /> Yoga Space<br /> <br /> Rooftop Swimming Pool<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Rooftop BBQ zone<br /> <br /> Children&#39;s Play Area<br /> <br /> Full Power Backup Generator<br /> <br /> Management Office<br /> <br /> Separate Fire Stairs<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Firefighting and Smoke Detection System";
      var productDesc = "Plot  33, Road  43, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.791899,
          lng: 90.412798,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: Vitti Sthapati Brindo Ltd.<br></li><li style='margin-bottom: 10px'>Land Area: 20 Kathas<br></li><li style='margin-bottom: 10px'>Orientation of the Land: South<br></li><li style='margin-bottom: 10px'>Front Road: 40 feet wide<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 16<br></li><li style='margin-bottom: 10px'>Number of Apartments: 27<br></li><li style='margin-bottom: 10px'>Size of the Apartments: 3,380 – 3,550 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 56<br></li><li style='margin-bottom: 10px'>Specialty of the Land: 6000 sft Lush Green Lawn<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 25.39.0000.106.34.1036.21<br></li>",
          features: features,
          images: "<a href='https://youtu.be/JJ45zRNA_1s' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662676K56z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662676K56z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Plot 02, Gulshan Road 90";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662676K56z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662676K56z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Liberty";
      var features = "";
      var productDesc = "Plot 16, Dutabash Road, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Owjzc.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267xDTVj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267h0iNz.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267KGGz6.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267wtjZG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267rLCJG.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267aUCtB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267t9Vin.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Ikhqy.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267WoBAV.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267XZjy9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267bPrLD.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662676K56z.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662676K56z.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267gJETM.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16680662679TBxC.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267YTfwj.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267PcAyh.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267Mwz5L.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267nlX79.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668066267jbzeH.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668067244Uy1ud.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1668068006byrvn.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Divine";
      var features =
        "Grand Double-height Entrance<br /> <br /> Elegant Reception Lounge<br /> <br /> Professionally Designed Landscaping and Lighting<br /> <br /> Gym with State-Of-The-Art Equipment<br /> <br /> Yoga Space<br /> <br /> Infinity Heated Pool at Rooftop<br /> <br /> Elegantly Furnished Party Room<br /> <br /> Rooftop BBQ Zone<br /> <br /> Single Unit Per Floor, Private Foyer<br /> <br /> Children&#39;s Play Area<br /> <br /> Management Office<br /> <br /> VRF Air Conditioning Solution<br /> <br /> Full Power Backup Generator<br /> <br /> Separate Fire Stairs<br /> <br /> Multi-level Basement Car Parking with Ventilation System<br /> <br /> Firefighting and Smoke Detection System";
      var productDesc = "56, UN Road, Baridhara";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.80630795056089,
          lng: 90.41701036514335,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "<li style='margin-bottom: 10px'>Architect: TKNRK and Associates<br></li><li style='margin-bottom: 10px'>Land Area: 9.48 Kathas (approx.)<br></li><li style='margin-bottom: 10px'>Facing of the Land: South - West<br></li><li style='margin-bottom: 10px'>Specialty of the Land: Lake Facing Corner Plot<br></li><li style='margin-bottom: 10px'>Front Road Width: 45 Feet<br></li><li style='margin-bottom: 10px'>Number of Floors: G + 11<br></li><li style='margin-bottom: 10px'>Number of Apartments: 10<br></li><li style='margin-bottom: 10px'>Size of Units: 3,988 - 4,116 sft (approx.)<br></li><li style='margin-bottom: 10px'>Number of Basements: 02<br></li><li style='margin-bottom: 10px'>Number of Car Parking: 20<br></li><li style='margin-bottom: 10px'>RAJUK Approval No.: 25.39.0000.106.34.432.21<br></li>",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Evermore";
      var features = "";
      var productDesc = "Plot 4A,Gulshan 75 & 80";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 83, North Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 51 & 54, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 69, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 5/A, Dhanmondi";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 1, Banani DOHS";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 58, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Bashundhara R/A";
      var features = "";
      var productDesc = "H and I blocks";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 67, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Tejgaon";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 26, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
      var productTitle = "Unnamed";
      var features = "";
      var productDesc = "Road 51, Gulshan";
      projects.push(productTitle + " - " + productDesc);
      var thisParams = {
        coords: {
          lat: 23.7702,
          lng: 90.4063,
        },
        iconImage: iconPath,
        content: {
          title: productTitle,
          short_desc: productDesc,
          specification: "",
          features: features,
          images: "<a href='' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/themes/real_estate/assets/img/video-thumbnail.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581Otsm3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581jQAnY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581beEt9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kgEPE.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581QV50X.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581GN6bi.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581H6wm5.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105819KjtY.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581N4Q5u.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581rswV9.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581a7eu3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/16843105815rrLa.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ECXV8.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581aaXL2.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581tWRD3.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581kYuLr.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581ILcrn.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581NXrcI.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581EWkUB.jpg' width='200px' height='200px'>                </a><a href='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' data-toggle='lightbox' data-gallery='mixedgallery'>                    <img src='/admin/uploads/product/unnamed6/1684310581vuspK.jpg' width='200px' height='200px'>                </a>",
          categoryId: "",
          subCategoryId: "11",
        },
      };
  
      /** category wise filtering */
      var selectedCatId = $("#productCategory option:selected").val();
      projectCatId = thisParams.content.categoryId;
  
      selectedSubCat = $("#subCategory option:selected").val();
      projectSubCat = thisParams.content.subCategoryId;
  
      commercialIds = [10, 12, 14];
      residentialIds = [11, 13, 15];
  
      if (selectedCatId == "") {
        if (
          residentialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "residential"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (
          commercialIds.includes(Number(projectSubCat)) &&
          selectedSubCat == "commercial"
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      } else if (projectCatId == selectedCatId) {
        if (
          selectedSubCat != null &&
          projectSubCat == selectedSubCat &&
          projectCatId == selectedCatId
        ) {
          projectParams.push(addMarker(thisParams));
        } else if (selectedSubCat == "") {
          projectParams.push(addMarker(thisParams));
        }
      }
  
      /*infoWindow.open(map.map, marker);*/
      google.maps.event.addListenerOnce(map, "idle", function() {
        function hideMapLink(el) {
          el = jQuery(el).length ? jQuery(el) : jQuery("#map");
          if (el.length) {
            var mapLinks = el.find("a");
            if (mapLinks.length) {
              mapLinks.hide(0);
              mapLinks.each(function() {
                if (jQuery(this).next("span").length) {
                  jQuery(this).next("span").hide(0);
                }
              });
            }
          }
        }
  
        hideMapLink();
      });
    }
  
    function autocomplete(inp, arr) {
      /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
      var currentFocus;
      /*execute a function when someone writes in the text field:*/
      inp.addEventListener("input", function(e) {
        var a,
          b,
          i,
          val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) {
          return false;
        }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          let projectStr = arr[i].toLowerCase();
          /*check if the item starts with the same letters as the text field value:*/
          if (projectStr.indexOf(val.toLowerCase()) > -1) {
            /*create a DIV element for each matching element:*/
            let replaceVal = val.replace(/(?:^|\s)\w/g, function(match) {
              return match.toUpperCase();
            });
  
            /*make the matching letters bold:*/
            let str = arr[i].replace(
              replaceVal,
              `<strong>${replaceVal}</strong>`
            );
            b = document.createElement("DIV");
            b.innerHTML = str;
  
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += `<input type='hidden' value="${str}">`;
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /* remove html tags */
              inp.value = inp.value.replace(/(<([^>]+)>)/gi, "");
              google.maps.event.trigger(
                projectParams[projects.indexOf(inp.value)],
                "click"
              );
              /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
              closeAllLists();
            });
            a.appendChild(b);
          }
        }
      });
      /*execute a function presses a key on the keyboard:*/
      inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) {
          //up
          /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
      });
  
      function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = x.length - 1;
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
      }
  
      function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
          x[i].classList.remove("autocomplete-active");
        }
      }
  
      function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
          if (elmnt != x[i] && elmnt != inp) {
            x[i].parentNode.removeChild(x[i]);
          }
        }
      }
  
      /*execute a function when someone clicks in the document:*/
      document.addEventListener("click", function(e) {
        closeAllLists(e.target);
      });
    }
  
    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("search-bar"), projects);
  
    get_halff = $(window).height() / 1.2;
    if ($("#map").length > 0) {
      $(window).scroll(function() {
        var w_scroll = $(window).scrollTop();
        if (w_scroll > $("#map").offset().top - get_halff) {}
      });
  
      $("#loadMap").click(function() {
        $.getScript(
          "https://maps.googleapis.com/maps/api/js?key=AIzaSyDCuwXtAIgV8jsWpwyG4MrmlTrTQTn5Hao&callback=initMap"
        );
        $("#map").addClass("hideafterclick");
      });
    }
  </script>
  
  <section class="section-gap pb-50 bg-light-grey">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 mb-30">
          <h2 class="mb-30">
            <span><img class="social-icon" src="assets/img/youtube.svg" alt="Youtube" />Youtube</span>
          </h2>
  
          <div class="youtube-wrapper">
            <!--                    <iframe width="100%" height="98%" loading="lazy" src="https://youtu.be/zGnTiwBacbo" frameborder="0"-->
            <!--                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->
            <!--                            allowfullscreen="" style="-->
            <!--    position: absolute;-->
            <!--    left: 0;-->
            <!--    top: 7px;-->
            <!--"></iframe>-->
  
            <div class="yt-lazyload" data-id="zGnTiwBacbo" data-thumb="https://shantaholdings.com/admin/uploads/page/home//1676268177fgbpf.jpg" data-logo="2"></div>
          </div>
        </div>
        <div class="col-sm-6 mb-30">
          <h2 class="mb-30">
            <span><img class="social-icon" src="assets/img/so-ins-black.svg" alt="Instagram" />Instagram</span>
          </h2>
          <div id="instagram-gallery" class="social-feed social-feed-instagram row no-margin">
            <a href="https://www.instagram.com/shantaholdings/?hl=en" target="_blank">
              <img src="assets/img/insta-shant.jpg" width="100%" height="auto" />
            </a>
          </div>
        </div>
      </div>
  
      <div class="premierProjectWrapper carousel-wrapper">
        <div class="premierProject premierInit">
          <div class="premierProject__single">
            <h2 class="mb-30">
              <span></span>
            </h2>
            <a class="tvc-btn" target="_blank" href="https://www.shantapinnacle.com">
              <img src="/admin/uploads/page/primary-project/1280x155/16254107042bZjP.jpg" style="width: 100%" alt="" />
            </a>
          </div>
        </div>
        <div class="carousel-nav">
          <img class="prev slick-prev" src="/themes/real_estate/assets/img/icons/arrow_Dark_left.svg" data-src="/themes/real_estate/assets/img/icons/arrow_colored_left.svg" alt="Arrow left" />
          <img class="next slick-next" src="/themes/real_estate/assets/img/icons/arrow_Dark_right.svg" data-src="/themes/real_estate/assets/img/icons/arrow_colored_right.svg" alt="Arrow right" />
        </div>
      </div>
    </div>
  </section>
  
  <div class="msg_cont_wrap msg_closed">
    <div class="contact-form custom-select msg_form">
      <img src="/themes/real_estate/assets/img/icons/global-menu-close-black.svg" class="close_btn" />
      <h3 class="title mb-30 text-color-11">Send us a message</h3>
  
      <form id="question-general" class="dynamic_form form-primary" action="/site/dynamic_form" method="post" data-pjax="false">
        <input type="hidden" name="_csrf-frontend" value="yg1oTrIsJyptoErWULFmL_n944ZjoLszG1TbKI_oUneyY1oE6mgeUADnA5ATwQdsysmJ3xfp8GdTIpFjwq4HLQ==" />
        <!-- form full -->
        <input type="hidden" id="question-general" class="form-control" name="form_id" value="question-general" />
  
        <div class="form-message-container success_wrapper hide success_wrapper_question-general">
          <div class="form-message-body">
            <div class="cross-popup" data-msg-close>X</div>
            <span class="success_container_question-general"></span>
            <div>
              <div data-msg-close class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                Ok
              </div>
            </div>
          </div>
        </div>
        <div class="form-message-container error_wrapper hide error_wrapper_question-general">
          <div class="form-message-body">
            <div class="cross-popup" data-msg-close>X</div>
            <span class="error_container_question-general"></span>
            <div>
              <div data-msg-close class="close-btn button button-outline button-outline-blackish mt-30 popup-ok-btn">
                Ok
              </div>
            </div>
          </div>
        </div>
  
        <input type="text" name="Dynamicform[spam_protector]" style="display: none" />
  
        <div class="form-group field-contact-name has-child-pad field-contact-name required">
          <input type="text" id="name" class="form-control" name="Dynamicform[name]" placeholder="Enter your name here" />
          <p class="help-block help-block-error"></p>
        </div>
  
        <div class="form-group field-contact-name has-child-pad field-contact-name required">
          <input type="text" id="email" class="form-control" name="Dynamicform[email]" placeholder="Enter your email here" />
          <p class="help-block help-block-error"></p>
        </div>
        <div class="form-group field-contact-message required">
          <textarea id="Message" class="form-control" name="Dynamicform[Message]" placeholder="Enter your feedback here"></textarea>
          <p class="help-block help-block-error"></p>
        </div>
  
        <div class="mt-20">
          <button type="submit" class="btn text-bold no-bg no-radius no-border dynamic_submit_btn">
            Submit
          </button>
        </div>
  
        <!-- end of form full -->
      </form>
    </div>
  
    <div class="msg_cont"></div>
    <img src="assets/img/icons/envelope-line-icon.png" class="msg_icon" />
  </div>
  
  <style>
    .youtube-wrapper {
      width: 100%;
      position: relative;
      padding-bottom: 51%;
    }
  </style>
  
  <footer class="site-main-footer">
    <!-- Landing footer -->
  
    <div class="footer-top parallax-container" data-stellar-background-ratio="0.1" style="background-image: url(assets/img/footer.jpg)">
      <div class="container-fluid">
        <div class="box-parent three-items">
          <div class="box">
            <a href="contact/landowners">
              <div class="inner">
                <h3 class="title">Landowners</h3>
                <p>Meet the professionals</p>
              </div>
            </a>
          </div>
          <div class="box">
            <a href="contact/buyers">
              <div class="inner">
                <h3 class="title">Buyers</h3>
                <p>Explore the options</p>
              </div>
            </a>
          </div>
          <div class="box">
            <a href="contact/customers">
              <div class="inner">
                <h3 class="title">Customers</h3>
                <p>Share your feedback</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
@endsection