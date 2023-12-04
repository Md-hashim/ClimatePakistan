
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | WETDAP  </title>
    <link href="{{asset('static/media/website-images/favicon.ico')}}" rel="icon">

    @include('partials.wetdp_styles')
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="75" class="offset-nav">
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="cssload-loader"></div>
    </div>
</div>
<!--PreLoader Ends-->
<!-- header -->
@section('header')
    <header class="site-header" id="header">
        <nav class="navbar navbar-expand-lg transparent-bg static-nav">
            <div class="container">
                <a class="navbar-brand" href="#index.html">
                    <img src="{{asset('static/media/website-images/logo-transparent.png')}}" alt="logo" class="logo-default">
                    <img src="{{asset('static/media/website-images/logo.png')}}" alt="logo" class="logo-scrolled">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item position-relative">
                            <a class="nav-link active pagescroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-process">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-apps">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#designer">Designer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>
        <!-- side menu -->
        <div class="side-menu opacity-0 gradient-bg">
            <div class="overlay"></div>
            <div class="inner-wrapper">
                <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item position-relative">
                            <a class="nav-link active pagescroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-process">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-apps">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-testimonial">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="side-footer w-100">
                    <ul class="social-icons-simple white top40">
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                    <p class="whitecolor">&copy; <span id="year"></span> Trax. Made With Love by ThemesIndustry</p>
                </div>
            </div>
        </div>
        <div id="close_side_menu" class="tooltip"></div>
        <!-- End side menu -->
    </header>
@show
<!-- header -->
<!--Main Content-->
@yield('main_content')
<!-- Main Content ends -->
<!--Site Footer Here-->
@section('footer')
    <footer id="site-footer" class=" bgdark padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <a href="index.html" class="footer_logo bottom25"><img src="{{asset('static/media/website-images/logo-transparent.png')}}" alt="MegaOne"></a>
                        <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                        <div class="d-table w-100 address-item whitecolor bottom25">
                            <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                            <p class="d-table-cell align-middle bottom0">
                                +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                            </p>
                        </div>
                        <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25">Latest News</h3>
                        <ul class="latest_news whitecolor">
                            <li> <a href="#.">Aenean tristique justo et... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                            <li> <a href="#.">Phasellus dapibus dictum augue... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                            <li> <a href="#.">Mauris blandit vitae. Praesent non... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                        <h3 class="whitecolor bottom25">Our Services</h3>
                        <ul class="links">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="blog-1.html">Latest News</a></li>
                            <li><a href="pricing.html">Business Planning</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="faq.html">Faq's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25">Business hours</h3>
                        <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                        <ul class="hours_links whitecolor">
                            <li><span>Monday-Saturday:</span> <span>8.00-18.00</span></li>
                            <li><span>Friday:</span> <span>09:00-21:00</span></li>
                            <li><span>Sunday:</span> <span>09:00-20:00</span></li>
                            <li><span>Calendar Events:</span> <span>24-Hour Shift</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@show
<!--Footer ends-->

@include('partials.wetdp_scripts')

@yield('extra_scripts')
</body>
</html>
