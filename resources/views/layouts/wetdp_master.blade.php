
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
     <header class="site-header">
         <nav class="navbar navbar-expand-lg padding-nav static-nav">
             <div class="container">
                 <a class="navbar-brand" href="index.html">
                     <img src="{{asset('static/media/website-images/logo.png')}}" alt="logo">
                 </a>
                 <div class="collapse navbar-collapse">
                     <ul class="navbar-nav ms-auto">

                         <li class="nav-item">
                             <a class="nav-link" href="{{route('view_home_page')}}">Home</a>
                         </li>
                         <li class="nav-item dropdown position-relative">
                             <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 About
                             </a>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="{{route('view_about_tdap')}}">About TDAP</a>
                                 <a class="dropdown-item" href="{{route('view_about_wedp')}}">About Climate Pakistan</a>

                             </div>
                         </li>
                         <li class="nav-item dropdown position-relative">
                             <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 WE Academy
                             </a>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="{{route('view_start_business')}}">Start your business</a>
                                 <a class="dropdown-item" href="{{route('view_financing_funding')}}">Financing & Funding</a>
                                 <a class="dropdown-item" href="#">Legal and taxation</a>
                                 <a class="dropdown-item" href="{{route('view_registration_chambers')}}">Registration with chambers</a>
                             </div>
                         </li>


                         <li class="nav-item">
                             <a class="nav-link" href="{{route('view_contact_us')}}">Contact Us </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('view_designer_cards', ['type' => 'Business Card']) }}">Designer </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link gradient-btn-3" href="">Register</a>
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
                             <a class="nav-link" href="{{route('view_home_page')}}">Home</a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link collapsePagesSideMenu" data-bs-toggle="collapse" href="#sideNavPages2">
                                 About <i class="fas fa-chevron-down"></i>
                             </a>
                             <div id="sideNavPages2" class="collapse sideNavPages">
                                 <ul class="navbar-nav">
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{route('view_about_tdap')}}">About TDAP</a>

                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{route('view_about_wedp')}}">About Climate Pakistan</a>
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
                                         <a class="nav-link" href="{{route('view_start_business')}}">Start your business</a>


                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{route('view_financing_funding')}}">Financing & Funding</a>

                                     </li>

                                     <li class="nav-item">
                                         <a class="nav-link" href="">Legal and taxation</a>


                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{route('view_registration_chambers')}}">Registration with chambers</a>
                                     </li>

                                 </ul>
                             </div>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{route('view_contact_us')}}">Contact</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('view_designer_cards', ['type' => 'Business Card']) }}">Designer</a>
                         </li>
                     </ul>
                 </nav>

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
                 <div class=" col-md-4">
                     <div class="footer_panel padding_bottom_half bottom20">
                         <!--<a href="index.html" class="footer_logo bottom25"><img src="images/logo.png" alt="MegaOne"></a>-->
                         <h3 class="whitecolor bottom25">About Us</h3>
                         <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                         <div class="d-table w-100 address-item whitecolor bottom25">
                             <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                             <p class="d-table-cell align-middle bottom0">
                                 +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                             </p>
                         </div>


                         <div class="d-table w-100 address-item whitecolor bottom25">
                             <span class="d-table-cell align-middle"><i class="fas fa-map-marker-alt"></i></span>
                             <p class="d-table-cell align-middle bottom0">
                                 Adyla Tower Rawalpindi
                             </p>
                         </div>

                     </div>
                 </div>

                 <div class="col-md-4">
                     <div class="footer_panel padding_bottom_half bottom20 ps-0 ps-lg-5">
                         <h3 class="whitecolor bottom25">Our Services</h3>
                         <ul class="links">
                             <li><a href="#">Home</a></li>
                             <li><a href="#">About Us</a></li>
                             <li><a href="#">Latest News</a></li>
                             <li><a href="#">Business Planning</a></li>
                             <li><a href="#">Contact Us</a></li>
                             <li><a href="#">Faq's</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="footer_panel padding_bottom_half bottom20">
                         <h3 class="whitecolor bottom25">Business hours</h3>
                         <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                         <ul class="hours_links whitecolor">
                             <li><span>Monday-Saturday:</span> <span>8.00-18.00</span></li>
                             <li><span>Friday:</span> <span>09:00-21:00</span></li>

                         </ul>

                         <ul class="social-icons white wow fadeInUp mt-3" data-wow-delay="300ms">
                             <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                             <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                             <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                             <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                         </ul>

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
@show
<!--Footer ends-->

@include('partials.wetdp_scripts')

@yield('extra_scripts')
</body>
</html>
