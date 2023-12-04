@extends('layouts.wetdp_master')
@section('title', 'Home')

@section('main_content')
    <section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{asset('static/media/website-images/thumb2.jpg')}}')">
        <div class="overlay overlay-dark opacity-7"></div>
        <div class="container">
            <div class="row  pt-md-4 pb-md-2">
                <div class="col-lg-8 offset-lg-2">
                    <div class="page-titles whitecolor text-center padding_top padding_bottom">
                        <h2 class="font-light">
                            Breathe Easy <br /><span class="f600">  Breathe Green  </span>
                        </h2>
                        <p class="pt-3 banner-p font-light pb-1">
                        Nurturing a Sustainable Tomorrow: Uniting for Climate Resilience in Pakistan.

                        </p>
                        <a href="#our-team" class="button btnsecondary gradient-btn pagescroll  mb-4">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex icons-list-container justify-content-center w-100">
                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/icon1.png')}}" alt="img">
                            </div>
                            <h5>Enterpenure</h5>
                        </div>

                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/carreer 1.png')}}" alt="img">
                            </div>
                            <h5>Stories </h5>
                        </div>
                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/training 1.png')}}" alt="img">
                            </div>
                            <h5>Training</h5>
                        </div>



                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/play 1.png')}}" alt="img">

                            </div>
                            <h5>Launchpad</h5>
                        </div>

                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/Vector.png')}}" alt="img">
                            </div>
                            <h5>Events</h5>
                        </div>

                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/about.png')}}" alt="img">
                            </div>
                            <h5>Enterpenure</h5>
                        </div>


                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/bar-chart.png')}}" alt="img">

                            </div>
                            <h5>Enterpenure</h5>
                        </div>

                        <div class="icons-list text-center flex-fill">
                            <div class="icon-contain">
                                <img src="{{asset('static/media/website-images/add-friend.png')}}" alt="img">

                            </div>
                            <h5>Enterpenure</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container n-service-box-main">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex">

                    <div class="n-service-box">
                        <span class="bottom25"><i class="far fa-user"></i></span>
                        <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Enterpenures Registration</a></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                    </div>
                    <div class="n-service-box active-box">
                        <span class="bottom25"><i class="far fa-address-card"></i></span>
                        <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Chamber Registration</a></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                    </div>
                    <div class="n-service-box">
                        <span class="bottom25"><i class="far fa-file"></i></span>
                        <h4 class="bottom10 text-nowrap"><a href="javascript:void(0)">Pakistan Trade Portal</a></h4>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet</p>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!--Some Feature -->
    <section id="our-feature" class="single-feature padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-7 col-sm-7 text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-light bottom30">Lets take your <span class="defaultcolor">Business</span> to Next Level</h2>
                    </div>
                    <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>
                    <a href="#our-team" class="button btnsecondary btn-normal pagescroll mb-sm-0 mb-4">Learn More</a>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image"><img src="{{asset('static/media/website-images/ev4.png')}}" alt="img"></div>
                </div>
            </div>
        </div>
    </section>


    <!--  -->

    <section id="bg-counters" class="pb-md-5 pt-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="counter-new-box w-100 text-center   n-banner-cs n-banner-cs2" style="background:url('images/ev1.png')">
                            <div class="row">
                                <div class="col-6 bottom10 pb-4">

                                    <i class="far fa-user"></i>

                                    <div class="counters whitecolor  top10">
                                        <span class="count_nums font-light" data-to="2500" data-speed="2500"> </span>
                                    </div>
                                    <h3 class="font-light whitecolor"> Women Empowered</h3>
                                </div>
                                <div class="col-6 bottom10 pb-4">
                                    <i class="far fa-user"></i>
                                    <div class="counters whitecolor  top10">
                                        <span class="count_nums font-light" data-to="4500" data-speed="2500"> </span>
                                    </div>
                                    <h3 class="font-light whitecolor">Our Followers</h3>
                                </div>
                                <div class="col-6 bottom10 pb-4">
                                    <i class="far fa-user"></i>
                                    <div class="counters whitecolor top10">
                                        <span class="count_nums font-light" data-to="895" data-speed="1500"> </span>
                                    </div>
                                    <h3 class="font-light whitecolor">Registered Chambers</h3>
                                </div>

                                <div class="col-6 bottom10 pb-4">
                                    <i class="far fa-user"></i>
                                    <div class="counters whitecolor top10">
                                        <span class="count_nums font-light" data-to="915" data-speed="1200"> </span>
                                    </div>
                                    <h3 class="font-light whitecolor">Trainings</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-xl-5 pt-5">
                        <div class="heading-title mb-4">
                            <h2 class="darkcolor font-light bottom30">Lets take your <span class="defaultcolor">Business</span>  Level</h2>
                        </div>
                        <p class="bottom35">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mauris arcu, lobortis id interdum vitae, interdum eget elit. Curabitur quis urna nulla. Suspendisse potenti. Duis suscipit ultrices maximus. </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--  -->

    <!--Some Feature ends-->
    <!-- Counters -->
    <!--<section id="bg-counters" class="padding bg-counters parallax n-banner-cs" style="background:url('images/bg-1.jpg')">
        <div class="container n-counter">
            <div class="row align-items-center text-center">
                <div class="col-lg-3 col-md-6 bottom10">



                    <div class="counters whitecolor  top10 bottom10">
                        <span class="count_nums font-light" data-to="2500" data-speed="2500"> </span>
                    </div>
                    <h3 class="font-light whitecolor"> Women Empowered</h3>
                </div>

                <div class="col-lg-3 col-md-6 bottom10">

                    <div class="counters whitecolor  top10 bottom10">
                        <span class="count_nums font-light" data-to="4500" data-speed="2500"> </span>
                    </div>
                    <h3 class="font-light whitecolor">Our Followers</h3>
                </div>

                <div class="col-lg-3 col-md-6 bottom10">

                    <div class="counters whitecolor top10 bottom10">
                        <span class="count_nums font-light" data-to="895" data-speed="1500"> </span>
                    </div>
                    <h3 class="font-light whitecolor">Registered Chambers</h3>
                </div>

                <div class="col-lg-3 col-md-6 bottom10">

                    <div class="counters whitecolor top10 bottom10">
                        <span class="count_nums font-light" data-to="895" data-speed="1200"> </span>
                    </div>
                    <h3 class="font-light whitecolor">Trainings</h3>
                </div>
            </div>
        </div>
    </section>-->


    <section class="pt-5  bg-01">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-7  text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="text-white font-normal bottom30 font-light">

                            Become a <span class=" f600">Successful</span>  Entrepreneur

                        </h2>
                    </div>
                    <p class="bottom35 text-white">
                        Our mission is to provide state of the art knowledge and skill set to the women entrepreneurs,through high-quality training and professional development opportunities. We aim to deliverdemand-driven trainings by means of intensive series of training modules and workshops. Weintent to create a  collaborative environment for women entrepreneurs by providing financial and technical support to develop their business projects.

                    </p>

                    <a href="#our-team" class="button btnsecondary gradient-btn pagescroll  mb-4">Learn More</a>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-5 pt-md-0 pt-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="image"><img src="{{asset('static/media/website-images/lady.png')}}" alt="SEO"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class=" position-relative padding_top pb-5">
        <div class="container pb-5 pt-2">
            <div class="row">
                <!--<div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
                    <h2 class="heading bottom45 darkcolor font-light2">
                        Our <span class="font-normal">Gallery</span>
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom40">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>-->
                <div class="col-lg-12 pb-3">
                    <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                        <div data-filter="*" class="cbp-filter-item">
                            <span>All</span>
                        </div>
                        @foreach($gallery_categories as $category)
                        <div data-filter=".{{ Str::slug($category->name) }}" class="cbp-filter-item">
                            <span>{{$category->name}}</span>
                        </div>
                        @endforeach
{{--                        <div data-filter=".design" class="cbp-filter-item">--}}
{{--                            <span>Design</span>--}}
{{--                        </div>--}}
{{--                        <div data-filter=".brand" class="cbp-filter-item">--}}
{{--                            <span>Brand</span>--}}
{{--                        </div>--}}
{{--                        <div data-filter=".graphics" class="cbp-filter-item">--}}
{{--                            <span>Graphics</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                        <!--Item 1-->
                        @foreach($gallery_data as $data)
                            @if(empty($data->image))
                                <div class="cbp-item   {{ Str::slug($data->category->name) }}">
                                    <video class="myvideo" controls loop style="height: auto">
                                        <source src="{{asset('static/media/website-images/video/video2.mp4')}}" type="video/mp4">

                                    </video>
                                </div>

                            @else
                                <div class="cbp-item   {{ Str::slug($data->category->name) }}">
                                    <img src="{{ asset($data->image) }}" alt="img">
                                </div>
                                @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery ends -->


    <section class="pt-5 pb-5 bglight">
        <div class="container pt-5 pb-5">
            <div class="row">

                <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <h2 class=" bottom30 darkcolor font-light">
                        Success Stories
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2">
                        <p class="mb-n3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>

                @foreach($success_stories as $stories )
                <div class="col-md-4 mb-4  wow fadeInLeft" data-wow-delay="300ms">
                    <div class="services-main">
                        <div class="image bottom10">
                            <div class="image"><img alt="SEO" src="{{asset($stories->images)}}"></div>
                            <div class="overlay">
                                <a href="services-detail.html" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="services-content brand text-center text-md-start">
                            <h3 class="bottom10 darkcolor">
                                <a href="">
                                    {{$stories->name}}
                                </a>
                            </h3>
                            <p class="bottom15">
                                {{$stories->story}}

                            </p>
                            <a href="" class="link-read defaultcolor f600">View Details</a>
                        </div>
                    </div>
                </div>

                @endforeach




            </div>
        </div>
    </section>

    <!-- Counters ends-->
    <!-- Our Team-->
    <section class=" parallax n-banner-cs n-banner-cs2" style="background:url('{{asset('static/media/website-images/bg-1.jpg')}}')">
        <div class="container pt-5 pb-4">
            <div class="row pt-5">
                <div class="col-md-12 text-center pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <h2 class=" bottom30 darkcolor font-light">
                        <span class="font-weight-light text-white">
                            Trainings
                            <!--<span class="divider-center"></span>-->
                    </h2>
                    <div class="col-md-8 offset-md-2 text-white">
                        <p class="mb-n3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p>
                    </div>
                </div>

            </div>
            <div class="row pb-5">
                <div class="col-md-12">


                    <div id="n-trainings-slider" class="owl-carousel">
                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header color1"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{asset('static/media/website-images/training 1.png')}}"  alt="img" />
                                    </span>
                                    <h3 class="pt-4 pb-2">
                                        Business Idea Startup
                                    </h3>
                                    <p>
                                        Embark on the entrepreneurial journey
                                        with 'Business Idea and Startup
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header color2"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{asset('static/media/website-images/training 1.png')}}" alt="img" />
                                    </span>
                                    <h3 class="pt-4 pb-2">
                                        Product Develpment


                                    </h3>
                                    <p>
                                        Embark on the entrepreneurial journey
                                        with 'Business Idea and Startup
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header color3"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{asset('static/media/website-images/training 1.png')}}" alt="img" />
                                    </span>
                                    <h3 class="pt-4 pb-2">
                                        Quality Assurance
                                    </h3>
                                    <p>
                                        Embark on the entrepreneurial journey
                                        with 'Business Idea and Startup
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header color2"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{asset('static/media/website-images/training 1.png')}}" alt="img"/>
                                    </span>
                                    <h3 class="pt-4 pb-2">
                                        Product Develpment


                                    </h3>
                                    <p>
                                        Embark on the entrepreneurial journey
                                        with 'Business Idea and Startup
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header color3"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{asset('static/media/website-images/training 1.png')}}" alt="img"/>
                                    </span>
                                    <h3 class="pt-4 pb-2">
                                        Quality Assurance
                                    </h3>
                                    <p>
                                        Embark on the entrepreneurial journey
                                        with 'Business Idea and Startup
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Our Team ends-->


    <section class="pt-5 pb-5 bglight">
        <div class="container pt-5 pb-5">
            <div class="row heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

                <div class="col-md-7">
                    <div class="d-flex">

                        <h2 class=" bottom30 darkcolor font-light"> Social Media Feed </h2>

                    </div>
                </div>
                <div class="col-md-5 text-end">
                    <button type="submit" class="button gradient-btn" id="submit_btn">Follow Us</button>
                </div>


                <div class="col-md-12 pt-4 mt-3">
                    <ul class="nav nav-tabs nav-tabs-custom" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                All Posts
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Twitter
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                Facebook
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                            <div class="row">
                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>

                                <div class="col-md-4 d-md-flex mt-4 pt-2">
                                    <div class="post-box w-100 bg-white">
                                        <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{asset('static/media/website-images/feed.png')}}" width="33" class="img-style" />
                                            </span>
                                            <h4 class="head4 darkcolor ps-3 pt-1"> WDP <br /> <small>3 months ago</small> </h4>
                                            <span class="social-news">
                                                <a href="">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </span>
                                        </div>


                                        <p>
                                            Creative insights and illuminations
                                            may be explained in five stages
                                            . The first stage is preparation or
                                            preparatory work on a problem that
                                            focuses the individual's mind on the
                                            problem and explores the problem's
                                            dimensions.
                                        </p>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="events-div bg-dark-gradient pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12  heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

                    <h2 class="heading bottom30 darkcolor font-light text-white">

                        Upcoming Events

                    </h2>


                    <a href="" class="button gradient-btn">
                        All Upcomings
                    </a>

                </div>

            </div>

            <div class="row  wow fadeInLeft" data-wow-delay="300ms">

                @foreach($events as $event)
                <div class="col-md-4 mt-4 d-md-flex pt-2">
                    <div class="card w-100 overflow">
                        <a href="" class="events-bg" style="background:url('{{ asset($event->image) }}')">
                        </a>
                        <div class="card-body">

                            <div class="d-flex">
                                <span class="events-date d-flex justify-content-center align-items-center">
                    {{ \Carbon\Carbon::parse($event->start_time)->format('M') }} <br />
                    {{ \Carbon\Carbon::parse($event->start_time)->format('d') }}
                                </span>
                                <h4 class="ps-3 darkcolor">
                                    <a href="">
                                      {{$event->title}}
                                        <br />
                                        <small>{{ \Carbon\Carbon::parse($event->end_time)->format('h:i a') }}-{{ \Carbon\Carbon::parse($event->start_time)->format('h:i a') }} </small>
                                    </a>
                                </h4>
                            </div>


                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section>


    <section class="pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12  heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <h2 class=" bottom30 darkcolor font-light">

                        Latest News

                    </h2>
                    <a href="" class="button gradient-btn">
                        All News
                    </a>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="bglight p-4">
                        <div class="row">
                            <div class="col-md-4 mb-4 d-md-flex wow fadeInLeft" data-wow-delay="300ms">
                                <div class="card w-100 border-0">
                                    <a href="" class="events-bg" style="background:url('{{ asset('static/media/website-images/news1.png') }}')">
                                    </a>
                                    <div class="card-body new-card-body bglight">

                                        <span class="circle-date">  18 <br /> Jan</span>

                                        <h4 class="darkcolor pb-3 head4-xl">
                                            <a href="" class="link7">
                                                News for upcoming  enterpenure
                                            </a>
                                        </h4>
                                        <p class="darkcolor">
                                            The purpose of lorem ipsum is to create a natural
                                            looking block of text (sentence, paragraph.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4 d-md-flex wow fadeInLeft" data-wow-delay="300ms">
                                <div class="card w-100 border-0">
                                    <a href="" class="events-bg" style="background:url('{{ asset('static/media/website-images/news2.png') }}')">
                                    </a>
                                    <div class="card-body new-card-body bglight">

                                        <span class="circle-date">  18 <br /> Jan</span>

                                        <h4 class="darkcolor pb-3 head4-xl">
                                            <a href="" class="link7">
                                                News for upcoming  enterpenure
                                            </a>
                                        </h4>
                                        <p class="darkcolor">
                                            The purpose of lorem ipsum is to create a natural
                                            looking block of text (sentence, paragraph.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4 d-md-flex wow fadeInLeft" data-wow-delay="300ms">
                                <div class="card w-100 border-0">
                                    <a href="" class="events-bg" style="background:url('{{ asset('static/media/website-images/news3.png') }}')">
                                    </a>
                                    <div class="card-body new-card-body bglight">

                                        <span class="circle-date">  18 <br /> Jan</span>

                                        <h4 class="darkcolor pb-3 head4-xl">
                                            <a href="" class="link7">
                                                News for upcoming  enterpenure
                                            </a>
                                        </h4>
                                        <p class="darkcolor">
                                            The purpose of lorem ipsum is to create a natural
                                            looking block of text (sentence, paragraph.
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

    <div class="pt-5"></div>
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
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return true;" method="post" action="{{route("submit_newsletter")}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-5">
                                    <h3 class="darkcolor pt-2">
                                        Subscribe for  <span class="defaultcolor">NewsLetter</span>
                                    </h3>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="d-none"></label>
                                        <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US ends -->
@endsection

@section('extra_scripts')
@endsection
