<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - WETDAP</title>
    @include("partials.web_styles")
    @yield('extra_styles')
</head>
<!--end::Head-->
<body id="body">
<header class="site-header">
    <nav class="navbar navbar-expand-lg padding-nav static-nav">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset("static/web/images/logo.png")}}" alt="logo">
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
                            <a class="dropdown-item" href="{{ route("about_tdap") }}">About TDAP</a>
                            <a class="dropdown-item" href="{{ route("about_wetdap") }}">About Climate Pakistan</a>
                            <a class="dropdown-item" href="{{ route("our_team") }}">Meet our team</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            WE Academy
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route("start_your_business") }}">Start your business</a>
                            <a class="dropdown-item" href="{{ route("financing_and_funding") }}">Financing & Funding</a>
                            <a class="dropdown-item" href="{{ route("legal_and_taxation") }}">Legal and taxation</a>
                            <a class="dropdown-item" href="{{ route("chamber_registration") }}">Registration with
                                chambers</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("community") }}"> WE Community </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("faqs") }}">Faqs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("contact_us") }}"> Contact Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gradient-btn-3" href="{{ route("entrepreneurship_registration") }}">Register</a>
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
                            WE Academy <i class="fas fa-chevron-down"></i>
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

@yield('main_content')


<!-- Contact US -->
<section id="stayconnect" class=" position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <!--<div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">

                    </div>
                </div>-->
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-5">
                                <h3 class="darkcolor pt-2">
                                    Subscribe for <span class="defaultcolor">NewsLetter</span>
                                </h3>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" required id="email"
                                           name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
<!--Site Footer Here-->
<footer id="site-footer" class="bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class=" col-md-4">
                <div class="footer_panel padding_bottom_half bottom20">

                    <h3 class="whitecolor bottom25">About Us</h3>
                    <p class="whitecolor bottom25">
                        Empowering women is at the core of our mission. We've already transformed the lives of hundreds
                        of women through our training programs.

                    </p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0 ft-lk-mail">
                            +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                        </p>
                    </div>


                    <h4 class="whitecolor bottom25 pt-2">Business hours</h4>

                    <ul class="hours_links whitecolor">
                        <li><span>Mon-Fri:</span> <span>9.00-5.00</span></li>
                        <li><span>Sat-Sun:</span> <span>Off</span></li>

                    </ul>

                    <ul class="social-icons white wow fadeInUp mt-3" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-tiktok"></i> </a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i> </a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a></li>
                    </ul>


                </div>
            </div>

            <div class="col-md-4">
                <div class="footer_panel padding_bottom_half bottom20 ps-0 ps-lg-5">
                    <h3 class="whitecolor bottom25">Quick Links</h3>
                    <ul class="links">
                        <li><a href="{{ route("index") }}">Home</a></li>
                        <li><a href="{{ route("about_tdap") }}">About TDAP</a></li>
                        <li><a href="{{ route("about_wetdap") }}">About Climate Pakistan</a></li>
                        <li><a href="{{ route("our_team") }}">Meet our team</a></li>
                        <li><a href="{{ route("community") }}">WE Community</a></li>

                        <li><a href="{{ route("entrepreneurship_registration") }}">Register</a></li>
                        <li><a href="{{ route("faqs") }}">Faq's</a></li>
                        <li><a href="{{ route("contact_us") }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Address</h3>
                    <h4 class="whitecolor pb-2">Head Quarters</h4>
                    <p class="whitecolor bottom25">
                        Trade Development Authority of Pakistan 5th Floor, Block A, Finance & Trade Centre P.O. Box No.
                        1293, Shahrah-e-Faisal, Karachi 75200 Pakistan
                    </p>

                    <h4 class="whitecolor pt-2 pb-2">Regional Offices</h4>
                    <p class="whitecolor">
                        Islamabad: Lower Ground, State Life Building No. 5, Sector F, Nazim-ud-din Rd, F 6/4 Blue Area,
                        Islamabad, Islamabad Capital Territory

                    </p>
                    <p class="whitecolor">
                        Lahore: 62, Garden Block Garden Town, Lahore, Punjab 54000

                    </p>
                    <p class="whitecolor">
                        Gilgit-Baltistan: Banglow No. 344, Rose Villa-2, Riaz Road, Khomer, Gilgit, Gilgit-Baltistan
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bg-dark text-center p-3">
    <p class="text-white text-center m-0">
        Copyright 2023. All rights reserved
    </p>
</div>

<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset("static/web/js/jquery-3.6.0.min.js" )}}"></script>
<!--Bootstrap Core-->
<script src="{{ asset("static/web/js/propper.min.js" )}}"></script>
<script src="{{ asset("static/web/js/bootstrap.min.js" )}}"></script>
<!--to view items on reach-->
<script src="{{ asset("static/web/js/jquery.appear.js" )}}"></script>
<!--Owl Slider-->
<script src="{{ asset("static/web/js/owl.carousel.min.js" )}}"></script>
<!--number counters-->
<script src="{{ asset("static/web/js/jquery-countTo.js" )}}"></script>
<!-- Parallax Background-->
<script src="{{ asset("static/web/js/parallaxie.js" )}}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset("static/web/js/jquery.cubeportfolio.min.js" )}}"></script>
<!--Fancybox js-->
<script src="{{ asset("static/web/js/jquery.fancybox.min.js" )}}"></script>
<!--tooltip js-->
<script src="{{ asset("static/web/js/tooltipster.min.js" )}}"></script>
<!--wow js-->
<script src="{{ asset("static/web/js/wow.js" )}}"></script>
<!--Revolution SLider-->
<script src="{{ asset("static/web/js/revolution/jquery.themepunch.tools.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/jquery.themepunch.revolution.min.js" )}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.actions.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.carousel.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.kenburn.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.layeranimation.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.migration.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.navigation.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.parallax.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.slideanims.min.js" )}}"></script>
<script src="{{ asset("static/web/js/revolution/extensions/revolution.extension.video.min.js" )}}"></script>
<!--custom functions and script-->
<script src="{{ asset("static/web/js/functions.js" )}}"></script>
</body>
</html>
