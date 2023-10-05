<body class="bodyclass">


    <script>
        var site_url_info = {
            // baseUrl: "https://shantaholdings.com",
            // themeUrl: "https://shantaholdings.com/themes/real_estate",
        };
    </script>




    <style>
        .header-top {
            background-color: #f0e9e9 !important;
        }

        .open-search-menu {
            display: none !important;
        }
    </style>

    <div class="site-main-wrapper">
        <div class="animsition open-menu-position">
            <!-- Header -->
            <!-- ============================================= -->
            <div class="menu-fixed-light menu-dark-mobiles">
                <!-- Notice the menu-fixed-light class -->
                <header class="header-wrapper header-transparent header-top header-transparent-light">
                    <div class="main-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="menu-wrapper">
                                            <div class="logo-wrapper">
                                                <a href="{{ url('/') }}" class="logo">
                                                    <img src="{{ asset('assets/img/logo.png') }}"
                                                        class="logo-img logo-dark" alt="Company Logo" />
                                                </a>
                                            </div>

                                            <a href="#menu" class="btn btn-dark btn-lg mobile-menu-bar">
                                                <i class="fa-solid fa-bars"></i>
                                            </a>

                                            <nav class="navbar-right">
                                                <ul class="menu">
                                                    <li style="">
                                                        <a class="active" href="{{ url('/') }}">
                                                            <span>Home</span>
                                                        </a>
                                                    </li>
                                                    <li style="">
                                                        <a class="" href="#">
                                                            <span>About us</span>
                                                        </a>
                                                        <ul class="submenu" style="display: none">
                                                            <li><a href="{{ url('/our_story') }}">Our Story</a></li>
                                                            <li>
                                                                <a href="{{ url('/vision_mission') }}">Vision, Mission &
                                                                    Values</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/bod') }}">Board of
                                                                    Directors</a>
                                                            </li>
                                                            <li><a href="{{ url('/management_team') }}">Management
                                                                    Team</a></li>
                                                            {{-- <li><a href="{{ url('/companies') }}">Companies</a></li> --}}
                                                            <li><a href="{{ url('/our_clients') }}">Our Clients</a></li>
                                                            <li><a href="{{ url('/csr') }}">CSR</a></li>
                                                        </ul>
                                                    </li>
                                                    <li style="">
                                                        <a class="" href="#">
                                                            <span>Projects</span>
                                                        </a>
                                                        <ul class="submenu" style="display: none">
                                                            <li><a href="{{ url('/ongoing') }}">Ongoing</a></li>
                                                            <li><a href="{{ url('/upcoming') }}">Upcoming</a></li>
                                                            <li><a href="{{ url('/completed') }}">Completed</a></li>
                                                        </ul>
                                                    </li>
                                                    {{-- <li style="">
                                                        <a class="" href="{{ url('/news') }}">
                                                            <span>News &amp; Events</span>
                                                        </a>
                                                    </li> --}}
                                                    <li style="">
                                                        <a class="" href="{{ url('/career') }}">
                                                            <span>Career</span>
                                                        </a>
                                                    </li>
                                                    <li style="">
                                                        <a class="" href="{{ url('/contact_us') }}">
                                                            <span>Contact</span>
                                                        </a>
                                                        {{-- <ul class="submenu" style="display: none">
                                                            <li><a href="{{ url('/landowners') }}">Landowners</a></li>
                                                            <li><a href="{{ url('/buyers') }}">Buyers</a></li>
                                                            <li><a href="{{ url('/customers') }}">Customers</a></li>
                                                            <li><a href="{{ url('/contact_us') }}">Contact Us</a></li>
                                                        </ul> --}}
                                                    </li>
                                                    <li style="">
                                                        <a class="open-search-menu" href="#search">
                                                            <span>
                                                                <img src="{{ asset('assets/img/logo.png') }}"
                                                                    alt="" />
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Main-Header -->
                </header>
            </div>

            <!-- Mobile Menu -->
            <nav id="menu" class="mmenu-mobile" style="display: none">
                <ul class="listview-icons">
                    <li>
                        <a href="{{ url('/') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>About Us</span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/our_story') }}">Our Story</a></li>
                            <li>
                                <a href="{{ url('/vision_mission') }}">Vision, Mission & Values</a>
                            </li>
                            <li>
                                <a href="{{ url('/bod') }}">Board of Directors</a>
                            </li>
                            <li><a href="{{ url('/management_team') }}">Management Team</a></li>
                            {{-- <li><a href="companies.php">Companies</a></li> --}}
                            <li><a href="{{ url('/our_clients') }}">Our Clients</a></li>
                            <li><a href="{{ url('/csr') }}">CSR</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span>Projects</span>
                        </a>
                        <ul>
                            <li><a href="{{ url('/ongoing') }}">Ongoing</a></li>
                            <li><a href="{{ url('/upcoming') }}">Upcoming</a></li>
                            <li><a href="{{ url('/completed') }}">Completed</a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="{{ url('/news') }}"><span>News & Events</span></a>
                    </li> --}}
                    <li>
                        <a href="{{ url('/career') }}"><span>Career</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/contact_us') }}">
                            <span>Contact</span>
                        </a>
                        {{-- <ul>
                            <li><a href="landowners.php">Landowners</a></li>
                            <li><a href="buyers.php">Buyers</a></li>
                            <li><a href="customers.php">Customers</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a class="open-search-menu" href="#search">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="-265 377 40 40" style="enable-background: new -265 377 40 40"
                                xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill: #010101;
                                        fill-opacity: 0;
                                    }

                                    .st1 {
                                        fill: rgba(0, 0, 0, 0.5);
                                    }
                                </style>
                                <g id="XMLID_86_">
                                    <rect id="XMLID_90_" x="-265" y="377" class="st0" width="40"
                                        height="40"></rect>
                                    <g id="search">
                                        <g id="XMLID_117_">
                                            <path id="XMLID_456_" class="st1"
                                                d="M-232.3,408.4l-6.3-6.3c1.6-1.9,2.6-4.4,2.6-7.1c0-6.1-4.9-11-11-11s-11,4.9-11,11
                                        s4.9,11,11,11c2.7,0,5.2-1,7.1-2.6l6.3,6.3c0.4,0.4,1,0.4,1.3,0C-231.9,409.3-231.9,408.7-232.3,408.4z M-247,404c-5,0-9-4-9-9
                                        s4-9,9-9s9,4,9,9S-242,404-247,404z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            Search
                        </a>
                    </li>
                    <li class="social-links">
                        <a href="#" target="_blank" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" target="_blank" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" target="_blank" class="linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" target="_blank" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- End of Mobile Menu -->

        </div>

        <header class="site-main-header">
            <div class="menu-overlay search-result-menu" ng-app="shanta" ng-controller="searchCtrl">
                <div class="pull-right hamburger hamburger-close">
                    <a href="#">
                        <img src="/themes/real_estate/assets/img/icons/Close.svg" alt="close icon" />
                    </a>
                </div>
                <div class="menu-column column-left has-inner-scroller"
                    style="
              background-image: url(/themes/real_estate/assets/img/images/menu-1.jpg);
            ">
                    <div class="menu-column-gap">
                        <div class="column-title-container"></div>
                    </div>
                    <div class="menu-column-gap inner-scroller mcustom-scrollar">
                        <h1 class="heading-secondary text-white mb-50">
                            search projects
                        </h1>
                        <div class="text-white">
                            <p>
                                We understand that no two projects are ever the same, so when
                                it comes to appointing a contractor to deliver the services
                                you need confidence is key.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="menu-column column-middle has-inner-scroller">
                    <div class="menu-column-gap inner-scroller mcustom-scrollar">
                        <form class="form-primary text-white custom-select">
                            <div class="form-group">
                                <div>
                                    <label for="">By Project</label>
                                    <input type="text" placeholder="Type the project name"
                                        ng-model="search.name" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="">By Location</label>
                                    <select name="search.address" id="search.address" ng-model="search.address">
                                        <option value="">Any Location</option>
                                        <option value="Gulshan">Gulshan</option>
                                        <option value="Mohammadpur">Mohammadpur</option>
                                        <option value="Dhanmondi">Dhanmondi</option>
                                        <option value="Banani">Banani</option>
                                        <option value="Dhaka Cantonment">Dhaka Cantonment</option>
                                        <option value="Baridhara">Baridhara</option>
                                        <option value="Banani DOHS">Banani DOHS</option>
                                        <option value="Uttara">Uttara</option>
                                        <option value="Tejgaon">Tejgaon</option>
                                        <option value="Paribagh">Paribagh</option>
                                        <option value="Indira Road">Indira Road</option>
                                        <option value="New Eskaton">New Eskaton</option>
                                        <option value="New Baily Road">New Baily Road</option>
                                        <option value="Banasree">Banasree</option>
                                        <option value="Mirpur DOHS">Mirpur DOHS</option>
                                        <option value="Baily Road">Baily Road</option>
                                        <option value="Bashundhara R/A">Bashundhara R/A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <label for="search.size">By Size (Sft) </label>
                                    <select name="search.size" id="search.size" ng-model="size">
                                        <option value="">All Size</option>
                                        <option value="600-1000">BELOW 1000</option>
                                        <option value="1001-1500">1000 - 1500</option>
                                        <option value="1501-2000">1500 - 2000</option>
                                        <option value="2001-2500">2000 - 2500</option>
                                        <option value="2601-3000">2500 - 3000</option>
                                        <option value="3001-15000">ABOVE 3000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label for="search.type">By Type</label>
                                    <select name="search.type" id="search.type" ng-model="search.type">
                                        <option value="">All Type</option>
                                        <option value="residential">Residential</option>
                                        <option value="commercial">Commercial</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="menu-column column-right text-white has-inner-scroller">
                    <div class="menu-column-gap">
                        <div class="column-title-container">
                            <div class="heading-third">
                                <span
                                    ng-bind="(filteredResults.length > 1 ? (filteredResults.length + ' Projects') : (filteredResults.length + ' Project')) + ' Matched'"></span>
                            </div>
                            <div class="" ng-show="filteredResults.length == 0">
                                Sorry no result found !
                            </div>
                        </div>
                    </div>
                    <div class="menu-column-gap inner-scroller mcustom-scrollar">
                        <div class="full-height-desktop">
                            <ul class="search-result-list">
                                <li
                                    ng-repeat="result in filteredResults = (results | filter:search | filter:searchSize ) | orderBy:name">
                                    <a ng-href="..">
                                        <div class="search-thumb-wrapper">
                                            <div class="search-thumb" ng-style="{'background-image':'url()'}"></div>
                                        </div>
                                        <div class="search-meta">
                                            <h3 class="search-item-title">

                                            </h3>
                                            <div class="search-item-subtitle">

                                            </div>
                                            < </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
</body>
