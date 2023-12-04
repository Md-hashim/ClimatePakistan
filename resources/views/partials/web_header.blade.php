<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $settings->logo_large }}" alt="logo">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("index") }}">Home</a>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="{{ route("about_tdap") }}">About TDAP</a> -->
                            <a class="dropdown-item" href="{{ route("about_wetdap") }}">About Climate Pakistan</a>
                            <a class="dropdown-item" href="{{ route("our_team") }}">Meet our team</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Climate Academy
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route("start_your_business") }}">Understanding Climate Change</a>
                            <a class="dropdown-item" href="{{ route("financing_and_funding") }}">Pakistan and Climate</a>
                            <a class="dropdown-item" href="{{ route("legal_and_taxation") }}">Climate Across Globe </a>
                            <!-- <a class="dropdown-item" href="{{ route("chamber_registration") }}">Registration with
                                chambers</a> -->
                            <a class="dropdown-item" href="{{ route("community") }}"> Climate & the Fields </a>
                        </div>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        --}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("view_framework") }}"> Climate Solutions </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("faqs") }}">Faqs</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route("contact_us") }}"> Contact Us </a>--}}
{{--                    </li>--}}

                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Contact Us
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route("contact_us") }}">Contact Us</a>
                            <a class="dropdown-item" href="{{ route("view_offices") }}">Share your Opinion</a>
                        </div>
                    </li>
<!-- 
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/designer/Business Card"> Designer </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view_designer_page')}}"> Designer </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link gradient-btn-3" href="{{ route("entrepreneurship_registration") }}">Join Us!</a>
                    </li>

                </ul>
            </div>

        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span class="gradient-bg"></span> <span class="gradient-bg"></span> <span class="gradient-bg"></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("index") }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-bs-toggle="collapse" href="#sideNavPages2">
                            About <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages2" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("about_tdap") }}">About TDAP</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("about_wetdap") }}">About Climate Pakistan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("our_team") }}">Meet our team</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link collapsePagesSideMenu" data-bs-toggle="collapse" href="#sideNavPages3">
                            Climate Academy <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="sideNavPages3" class="collapse sideNavPages">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("start_your_business") }}">Start your business</a>


                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("financing_and_funding") }}">Financing & Funding</a>

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("legal_and_taxation") }}">Legal and taxation</a>


                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("chamber_registration") }}">Registration with
                                        chambers</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("community") }}"> WE Community </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("faqs") }}">Faqs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("contact_us") }}">Contact Us</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link gradient-btn-3 small-sc-btn" href="{{ route("entrepreneurship_registration") }}">Register</a>
                    </li>


                </ul>
            </nav>

        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
