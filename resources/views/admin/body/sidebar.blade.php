<div class="sidebar-wrapper" data-simplebar="true">

    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminbackend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>


    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{ route('admin.dashobard') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>


        <li class="menu-label">Home</li>

        <li>
            <a href="{{ route('all.slider') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
        </li>


        <li>
            <a href="{{ route('all.ourStoryImage') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Background Images</div>
            </a>
        </li>



        <li class="menu-label">About Us</li>

        <li>
            <a href="{{ route('all.ourStory') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Our Story</div>
            </a>
        </li>

        <li>
            <a href="{{ route('all.missionVisionValues') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Vision, Mission &#38; Values</div>
            </a>
        </li>

        <li>
            <a href="{{ route('all.BOD') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Board of Directors</div>
            </a>
        </li>

        <li>
            <a href="{{ route('all.managementTeam') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Management Team</div>
            </a>
        </li>


        <li>
            <a href="{{ route('all.landing.company') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Clients</div>
            </a>
        </li>

        <li>
            <a href="{{ route('all.CSR') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">CSR</div>
            </a>
        </li>

        <li>
            <a href="{{ route('all.CSRGallery') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">CSR Gallery</div>
            </a>
        </li>


        {{-- <li class="menu-label">News & Events</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">News & Events</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.blog.category') }}"><i class="bx bx-right-arrow-alt"></i>All Blog
                        Categroy</a>
                </li>

                <li> <a href="{{ route('admin.blog.post') }}"><i class="bx bx-right-arrow-alt"></i>All News &
                        Events</a>
                </li>


            </ul>
        </li> --}}


        <li class="menu-label">Projects</li>

        <li>
            <a href="{{ route('all.product') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Project Manage</div>
            </a>
        </li>


        <li class="menu-label">Career</li>

        <li>
            <a href="{{ route('all.career') }}">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Career</div>
            </a>
        </li>


        <li class="menu-label">Admin</li>

        @if (Auth::user()->can('admin.user.menu'))
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-line-chart"></i>
                    </div>
                    <div class="menu-title">Admin Manage </div>
                </a>
                <ul>
                    <li> <a href="{{ route('all.admin') }}"><i class="bx bx-right-arrow-alt"></i>All Admin</a>
                    </li>
                    <li> <a href="{{ route('add.admin') }}"><i class="bx bx-right-arrow-alt"></i>Add Admin</a>
                    </li>


                </ul>
            </li>
        @endif



    </ul>
    <!--end navigation-->
</div>
