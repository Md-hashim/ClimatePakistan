<!DOCTYPE html>
<html lang="en">
<head>
    <title>WETDAP</title>
    @include("partials.web_styles")

    <style>
        .modal-header {
            border-bottom: none;
        }

        .modal-body {
            background-color: #f8f9fa; /* Light background for modal body */
        }

        .close {
            opacity: 1; /* Make sure close button is visible */
        }
    </style>
</head>
<body>
@include("partials.web_header")

<div class="d-md-none d-block banner-small-div">
    <h2 class="text-white font-light">
        Breathe Easy <br /><span class="f600">  Breathe Green  </span>
    </h2>
    <p class="text-white pt-3">
    Nurturing a Sustainable Tomorrow: Uniting for Climate Resilience in Pakistan.

    </p>

    <a href="{{ route("about_wetdap") }}" class="button gradient-btn mt-1">
        Learn More
    </a>

</div>

<section id="home" class="p-0 single-slide light-slider">
    <h2 class="d-none">hidden</h2>
    <div id="rev_single_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="trax_slider_01">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_single" class="rev_slider fullwidthabanner custom-banner-section" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                    data-thumb="{{ asset("static/web/images/slide-img2.jpg")}}" data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("static/web/images/g8-1.jpg")}}" alt="" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                         data-no-retina>
                    <!-- LAYERS -->
                    <!-- Overlay -->
                    <div class="bg-black bg-overlay opacity-7 z-index-1"></div>
                    <div class="rs-background-video-layer"
                         data-forcerewind="on"
                         data-volume="mute"
                         data-videowidth="100%"
                         data-videoheight="100vh"
                         data-videomp4="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $settings->video_url }}"
                         data-videopreload="auto"
                         data-videoloop="loopandnoslidestop"
                         data-forcecover="1"
                         data-aspectratio="16:9"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"></div>

                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','0','0','0']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']" data-fontsize="['24','24','18','16']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="900" data-splitin="none" data-splitout="none">
                        <h2 class="font-light d-md-block d-none"> {!! $settings->tag_line !!}
                        </h2>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['50','75','75','75']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']" data-fontsize="['24','24','18','16']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                         data-start="1600" data-splitin="none" data-splitout="none">
                        <p class="font-light text-capitalize pt-5 d-md-block d-none">
                        Nurturing a Sustainable Tomorrow: Uniting for Climate Resilience in Pakistan.

                        </p>

                    </div>

                    <div class="tp-caption tp-resizeme  d-md-block d-none"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['140','160','160','160']"
                         data-width="['500','500','500','500']" data-textalign="['center','center','center','center']"
                         data-type="text"
                         data-whitespace="nowrap" data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                         data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800"
                         data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <a class="button gradient-btn transition-3 button-padding mt-2"
                           style="font-size:15px !important; padding: 0.9rem 2.25rem !important"
                           href="{{ route("about_wetdap") }}">Learn More</a>
                    </div>

                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!--scroll down-->
    <!--<a href="#our-feature" class="scroll-down pagescroll whitecolor hover-default">Scroll Down <i class="fas fa-long-arrow-alt-down"></i></a>-->
</section>

<!-- 
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex icons-list-container justify-content-center w-100">
                    <a class="icons-list text-center flex-fill" href="{{ route("community") }}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-entrepreneur.png")}}" alt="img">
                        </div>
                        <h5>Skills</h5>
                    </a>

                    <a class="icons-list text-center flex-fill" href="{{ route("all_stories") }}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-story.png")}}" alt="img">
                        </div>
                        <h5>Stories </h5>
                    </a>
                    <a class="icons-list text-center flex-fill" href="{{ route("all_trainings") }}">
                        <div class=" icon-contain">
                            <img src="{{ asset("static/web/images/st-training.png")}}" alt="img">
                        </div>
                        <h5>Training</h5>
                    </a>


                    <a class="icons-list text-center flex-fill" href="{{route('view_framework')}}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-framework.png")}}" alt="img">
                        </div>
                        <h5>Climate Solutions</h5>
                    </a>

                    <a class="icons-list text-center flex-fill" href="{{ route("all_events") }}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-events.png")}}" alt="img">
                        </div>
                        <h5>Events</h5>
                    </a>

                    <a class="icons-list text-center flex-fill" href="{{ route("mous") }}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-mous.png")}}" alt="img">
                        </div>
                        <h5>MOUs</h5>
                    </a>


                    <a class="icons-list text-center flex-fill" href="{{ route("collaborations") }}">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-collaborate.png")}}" alt="img">
                        </div>
                        <h5>Collaboration</h5>
                    </a>

                    <a class="icons-list text-center flex-fill" href="#stayconnect">
                        <div class="icon-contain">
                            <img src="{{ asset("static/web/images/st-newsletter.png")}}" alt="img">
                        </div>
                        <h5>Newsletter</h5>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section> -->

<div class="container n-service-box-main">
    <div class="row">
        <div class="col-md-12">
            <div class="d-md-flex">

                <a class="n-service-box cn1 w-100 d-block" href="{{ route("view_framework") }}">
                    <span class="bottom25"><i class="far fa-user"></i></span>
                    <h4 class="bottom10 text-nowrap"><span>Climate Solutions</span></h4>
                    <p> Addressing the complex challenges of climate change requires a multifaceted approach that encompasses various solutions across different sectors.</p>
                </a>
                <a class="n-service-box active-box d-block w-100" href="{{ route("annual_business_plan") }}">
                    <span class="bottom25"><i class="far fa-address-card"></i></span>
                    <h4 class="bottom10 text-nowrap"><span>Be Our Partner!</span></h4>
                    <p>At Climate Pakistan, we understand the pivotal role that corporate responsibility, donor engagement, and educational initiatives play in addressing the challenges of climate change. Our platform is tailored to cater to the unique needs of corporate companies, donors, and educators, offering a wealth of resources and services to empower your climate action journey.</p>
                </a>
                <a class="n-service-box cn3  d-block w-100" href="{{ route("view_offices") }}">
                  
                    <span class="bottom25"><i class="far fa-file"></i></span>
                    <h4 class="bottom10 text-nowrap"><span>Share Your Opinion</span></h4>
                    <p>Your Voice Matters: Share Your Opinion on Climate Change - Visit Here</p>
                </a>


            </div>
        </div>
    </div>
</div>

<!--Some Feature -->
<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-lg-5  col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ asset("static/web/images/climate_change1.jpg")}}"></div>
            </div>

            <div class="col-lg-6 pt-md-0 pt-5 col-md-7 col-sm-7 offset-lg-1 text-sm-start text-center wow fadeInRight"
                 data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-light bottom30">Understanding Climate  <span class="defaultcolor">What Is Climate Change?</span>
                        </h2>
                </div>
                <p class="bottom35">
Climate change refers to the extended alteration of temperature and typical weather patterns. The unpredictability resulting from climate change complicates agricultural practices, as traditional expectations for temperature and rainfall become unreliable. Additionally, climate change is linked to an increase in severe weather events such as hurricanes, floods, heavy rainfall, and winter storms.
In polar regions, global warming intensifies due to climate change, accelerating the melting of ice sheets and glaciers. This contributes to rising sea levels, affecting coastlines worldwide. The combination of melting ice and expanding ocean waters results in increased flooding and erosion, posing threats to coastal communities.

</p>
                <!-- <a href="#our-team" class="button btnsecondary btn-normal pagescroll mb-sm-0 mb-4">Learn More</a> -->
            </div>

        </div>
    </div>
</section>
<!-- 
<section id="our-feature" class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">

            <div class="col-lg-5  col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ asset("static/web/images/cl2.jpg")}}"></div>
            </div>

            <div class="col-lg-6 pt-md-0 pt-5 col-md-7 col-sm-7 offset-lg-1 text-sm-start text-center wow fadeInRight"
                 data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-light bottom30">Climate Across  <span class="defaultcolor">The Globe</span>
                        to Next Level</h2>
                </div>
                <p class="bottom35">Climate change, a defining challenge of the 21st century, is fundamentally altering the Earth's climate system on a global scale. Human activities, particularly the burning of fossil fuels and deforestation, release greenhouse gases, intensifying the natural greenhouse effect and leading to a warming planet. This warming manifests in rising average temperatures, widespread shifts in weather patterns, and an increase in the frequency and severity of extreme events.
Glaring indicators of climate change include the melting of polar ice caps and glaciers, contributing to rising sea levels that threaten coastal communities. Oceans are absorbing excess heat, leading to coral bleaching and disruptions in marine ecosystems. More intense and prolonged droughts, storms, and heatwaves impact agriculture, water resources, and human health. The interconnectedness of these changes amplifies their global repercussions, disproportionately affecting vulnerable communities and exacerbating social and economic inequalities.
Addressing climate change requires a concerted effort on a global scale, emphasizing the transition to sustainable practices, the reduction of carbon emissions, and the development of adaptive strategies. International agreements, scientific advancements, and collective action are essential components of a comprehensive response to mitigate the impacts and build resilience in the face of this urgent and complex challenge.
</p>
                <a href="#our-team" class="button btnsecondary btn-normal pagescroll mb-sm-0 mb-4">Learn More</a>
            </div>

        </div>
    </div>
</section>
 -->

<section class="pt-5  bg-01 pb-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7  text-sm-start text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="text-white font-normal bottom30 font-light pt-2">

                        Need For  <span class="bf400">International Colaboration</span> 

                    </h2>
                </div>
                <p class="bottom35 text-white">
                International collaboration is crucial for Pakistan. The global community's support in technology transfer, 
                capacity building, and financial assistance can enhance the country's resilience to climate change, 
                fostering sustainable development. As climate change poses a serious threat to Pakistan's socio-economic fabric, 
                both national and international efforts are imperative for a sustainable and climate-resilient future.

                </p>

                <!--<a href="#our-team" class="button btnsecondary gradient-btn pagescroll  mb-4">Learn More</a>-->
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 pt-md-0 pt-4 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ asset("static/web/images/g8-1.jpg")}}"></div>
            </div>
        </div>
    </div>
</section>

<!--  -->

<section id="bg-counters" class="pb-md-5 pt-5 bg-light">
    <div class="container pt-md-5 pb-md-5">
        <div class="row wow fadeIn" data-wow-delay="300ms"
             style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
            <div class="col-md-6">
                <div class="row">
                    <div class="counter-new-box w-100 text-center c-round-all  n-banner-cs n-banner-cs2"
                         style="background:url('{{ asset("static/web/images/g1.png")}}')">
                        <div class="row">
                            <div class="col-6 bottom10 pb-4">

                                <img src="{{ asset("static/web/images/women-empowered2.png")}}" alt="img" width="40"/>

                                <div class="counters whitecolor  top10">
                                    <span class="count_nums font-light" data-to="{{ $settings->women_empowered }}"
                                          data-speed="2500"> </span>
                                </div>
                                <h3 class="font-light whitecolor"> Cities Under Afforested</h3>
                            </div>
                            <div class="col-6 bottom10 pb-4">
                                <img src="{{ asset("static/web/images/followers.png")}}" alt="img" width="40"/>
                                <div class="counters whitecolor  top10">
                                    <span class="count_nums font-light" data-to="{{ $settings->our_followers }}"
                                          data-speed="2500"> </span>
                                </div>
                                <h3 class="font-light whitecolor">Our Followers</h3>
                            </div>
                            <div class="col-6 bottom10 pb-4">
                                <img src="{{ asset("static/web/images/reigistered chambers.png")}}" alt="img"
                                     width="40"/>
                                <div class="counters whitecolor top10">
                                    <span class="count_nums font-light" data-to="{{ $settings->registered_chambers }}"
                                          data-speed="1500"> </span>
                                </div>
                                <h3 class="font-light whitecolor">Renewable Energy Installations</h3>
                            </div>

                            <div class="col-6 bottom10 pb-4">
                                <img src="{{ asset("static/web/images/ictraining.png")}}" alt="img" width="40"/>
                                <div class="counters whitecolor top10">
                                    <span class="count_nums font-light" data-to="{{ $settings->trainings }}"
                                          data-speed="1200"> </span>
                                </div>
                                <h3 class="font-light whitecolor">Awarenes Activities Conducted</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ps-xl-5 pt-5">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-light bottom30">We have to <span
                                class="defaultcolor">Make Climate</span> Better </h2>
                    </div>
                    <p class="bottom35">By prioritizing conservation, embracing eco-friendly lifestyles, and investing in 
                        innovative solutions, we can collectively strive towards a more resilient and balanced climate for 
                        the benefit of current and future generations.
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>


<section id="gallery" class=" position-relative padding_top pb-5">
    <div class="container pb-5 pt-2">
        <div class="row  wow fadeInLeft" data-wow-delay="300ms">

            <div class="col-lg-12 pb-3">
                <div id="mosaic-filter" class="cbp-l-filters bottom30  text-center">
                    <div data-filter="*" class="cbp-filter-item">
                        <span>All</span>
                    </div>
                    @foreach($categories as $category)
                        @if($category->name != "Videos")
                            <div data-filter=".{{ $category->id }}" class="cbp-filter-item">
                                <span>{{ $category->name }}</span>
                            </div>
                        @endif
                    @endforeach
                    <div data-filter=".9a887aec-cca1-4a02-8a68-8477aa7e39c3" class="cbp-filter-item">
                        <span>Videos</span>
                    </div>


                </div>
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">


                    @foreach($galleries  as $cat_id => $images)

                        @foreach($images as $gallery)
                            @if($gallery->type == "image")
                                <!--Item 1-->
                                <div class="cbp-item  {{ $gallery->cat_id }}">
                                    <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $gallery->image }}"
                                         alt="img" class="gallery-image">
                                </div>
                            @endif
                        @endforeach
                    @endforeach


                    @foreach($galleryVideos  as  $gallery)
                            <!--Item 1-->
                            <div class="cbp-item  9a887aec-cca1-4a02-8a68-8477aa7e39c3">
                                <video style="width:100%;height:100%" controls>
                                    <source
                                        src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $gallery->video }}"
                                        type="video/mp4">

                                </video>
                            </div>
                    @endforeach


                </div>
                <div class="col-md-12 text-center pt-4">
                    <a href="{{ route("galleries") }}" class="button gradient-btn">
                        View More
                    </a>
                </div>
                <!--<div class="col-lg-12">

                    <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button ">
                        <a href="load-more.html" class="cbp-l-loadMore-link button py-1 button gradient-btn whitecolor transition-3" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">13</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">LOADING <i class="fas fa-spinner fa-spin"></i></span>
                            <span class="cbp-l-loadMore-noMoreLoading d-none">NO MORE WORKS</span>
                        </a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>
<!-- Gallery ends -->


<section class="pt-5 pb-5 bglight">
    <div class="container pt-5 pb-5">
        <div class="row d-flex">

            <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms"
                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 darkcolor font-light">
                   Climate Stories!
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-n3">Stories of resilience, innovation, and collective determination that inspire optimism for a sustainable future, and sometimes of vulnerability, loss, and resilience, portraying the human faces behind the statistics and illustrating the devastating impact of a changing climate on individuals, communities, and ecosystems.</p>
                </div>
            </div>

            @foreach($stories as $story)
                <div class="col-lg-6 pb-4 wow fadeIn" data-wow-delay="300ms"
                     style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <div class="bx-inner-div">
                        <div class="row">
                            <div class="col-md-6 background-image1 shadow corner1"
                                 style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $story->images }}')"></div>

                            <div class="col-md-6 bg-white shadow corner2">
                                <div class="p-4">
                                    <h3 class="bottom10 darkcolor font-normal">
                                        <a href="story.html">
                                            {{ $story->name }}
                                        </a>
                                    </h3>
                                    <p class="bottom15">
                                        {{ $story->story }}
                                    </p>

                                    <a href="{{ route("story_details", ["id"=>$story->id]) }}"
                                       class="link-read defaultcolor">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

            <div class="col-md-12 text-center pt-4">
                <a href="{{ route("all_stories") }}" class="button gradient-btn">
                    View All Stories
                </a>
            </div>


        </div>
    </div>
</section>

<!-- Counters ends-->
<!-- Our Team-->
<section class=" parallax n-banner-cs n-banner-cs2" style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="container pt-5 pb-4">
        <div class="row pt-5 wow fadeIn" data-wow-delay="300ms"
             style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">


            <div class="col-md-7">
                <div class="d-flex">

                    <h2 class=" bottom30 darkcolor font-light text-white"> Trainings </h2>

                </div>
            </div>
            <div class="col-md-5 text-md-end mt-md-1">

                <a href="{{route("all_trainings")}}" class="button gradient-btn">
                    View All
                </a>
            </div>


        </div>
        <div class="row pb-5 pt-md-0 pt-4 wow fadeIn" data-wow-delay="300ms"
             style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
            <div class="col-md-12">


                <div id="n-trainings-slider" class="owl-carousel">

                    @foreach($trainings as $key => $training)

                        <div class="item">

                            <div class="n-trainings-box">
                                <div class="n-trainings-header @if($key % 2 == 0) color2 @else color3 @endif"></div>
                                <div class="n-trainings-details">
                                    <span>
                                        <img src="{{ asset("static/web/images/training 1.png")}}" alt="img"/>
                                    </span>
                                    <a href="{{ route("training_details", ["title"=>$training->title, "id"=>$training->id]) }}">
                                        <h3 class="pt-4 pb-2">{{ $training->title }}</h3></a>
                                    <p>
                                        {{ $training->short_description }}
                                    </p>
                                </div>
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->


<section class="pt-5 pb-5 bglight">
    <div class="container pt-5 pb-5">
        <div class="row heading_space wow fadeIn" data-wow-delay="300ms"
             style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

            <div class="col-md-7">
                <div class="d-flex">

                    <h2 class=" bottom30 darkcolor font-light"> Social Media Feed </h2>

                </div>
            </div>
            <div class="col-md-5 text-end">
                <ul class="social-icons mt-2 mb-4 wow fadeInUp" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-tiktok"></i> </a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i> </a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a></li>
                    <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a></li>

                </ul>
            </div>


            <div class="col-md-12 pt-4 mt-3">
                <ul class="nav nav-tabs nav-tabs-custom" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">
                            All Posts
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                            Twitter
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">
                            Facebook
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                         tabindex="0">

                        <div class="row">
                            <div class="col-md-4 d-md-flex mt-4 pt-2">
                                <div class="post-box w-100 bg-white">
                                    <div class="d-flex pb-4">
                                            <span class="img-span">
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                                                <img src="{{ asset("static/web/images/feed.png")}}" width="33"
                                                     class="img-style"/>
                                            </span>
                                        <h4 class="head4 darkcolor ps-3 pt-1"> Climate <br/> <small>3 months ago</small>
                                        </h4>
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
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                         tabindex="0">...
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                         tabindex="0">...
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>


<section class=" pt-5 pb-5 parallax div-full-cover n-banner-cs n-banner-cs2"
         style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12  heading_space wow fadeIn" data-wow-delay="300ms"
                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

                <h2 class="heading bottom30 darkcolor font-light text-white">

                    Upcoming Events

                </h2>


                <a href="{{ route("all_events") }}" class="button gradient-btn">
                    All Upcomings
                </a>

            </div>

        </div>


        <div class="row justify-content-center align-items-center  wow fadeIn" data-wow-delay="300ms"
             style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
            @foreach($events as $key=>$event)
                <div class="col-md-12 d-flex mt-4">
                    <div
                        class="text-white @if($key % 2==0) bg-dark6 @else bg-pink @endif col-md-3 col-4 col-lg-2 shadow align-items-center justify-content-center d-flex round-lft">
                        <h2 class="text-center date-events">
                            {{ \Carbon\Carbon::parse($event->date)->day }} <br>
                            <small> {{ \Carbon\Carbon::parse($event->date)->monthName }}</small>
                        </h2>
                    </div>
                    <div class="col-md-9 col-lg-10 col-8">
                        <div class="p-4 shadow bg-white round-right">
                            <h4 class="head-h4 font-normal title-events">
                                <a href="{{ route("event_details", ["title"=>$event->title, "id"=>$event->id]) }}">{{ $event->title }} </a>
                            </h4>
                            <p class="pt-2 clock-event">
                                <i class="fas fa-clock"></i> @php
                                    $startDateTime = \Carbon\Carbon::parse($event->start_time);
                                @endphp

                                {{ $startDateTime->format('h:i A') }}
                                - @php
                                    $endDateTime = \Carbon\Carbon::parse($event->end_time);
                                @endphp

                                {{ $endDateTime->format('h:i A') }}

                            </p>
                            <p>
                                {{ $event->description }}
                            </p>
                            <a href="{{ route("event_details", ["title"=>$event->title, "id"=>$event->id]) }}"
                               class="btn gradient-btn">View Event Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!--<div class="row  wow fadeInLeft" data-wow-delay="300ms">

            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/ev1.png")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/ev2.png")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/IMG_9328.jpg")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/IMG_9342.jpg")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/ev5.png")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="" class="events-bg" style="background:url('{{ asset("static/web/images/ev6.png")}}')">
                    </a>
                    <div class="card-body">

                        <div class="d-flex">
                            <span class="events-date d-flex justify-content-center align-items-center">
                                June <br />
                                30
                            </span>
                            <h4 class="ps-3 darkcolor">
                                <a href="">
                                    Women Empowerment is leading
                                    <br />
                                    <small>6:30 pm    - 9:30 pm</small>
                                </a>
                            </h4>
                        </div>


                    </div>
                </div>
            </div>

        </div>-->

    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12  heading_space wow fadeIn" data-wow-delay="300ms"
                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 darkcolor font-light">

                    Latest News

                </h2>
                <a href="{{ route("all_news") }}" class="button gradient-btn">
                    All News
                </a>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="bglight p-4">
                    <div class="row">

                        @foreach($news as $new)
                            <div class="col-md-4 mb-4 d-md-flex wow fadeInLeft" data-wow-delay="300ms">
                                <div class="card w-100 border-0 overflow">

                                    <a href="{{ route("news_details", ["slug"=>$new->slug]) }}" class="events-bg"
                                       style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $new->banner_image }}')">
                                    </a>
                                    <div class="card-body new-card-body">

                                    <span class="circle-date"> {{ \Carbon\Carbon::parse($new->created_at)->day }} <br>
                           {{ \Carbon\Carbon::parse($new->created_at)->shortMonthName }}</span>

                                        <h4 class="darkcolor pb-3 head4-xl">
                                            <a href="{{ route("news_details", ["slug"=>$new->slug]) }}" class="link7">
                                                {{ \Illuminate\Support\Str::limit($new->title, 20, $end='...') }}
                                            </a>
                                        </h4>
                                        <p class="darkcolor">
                                            {!! \Illuminate\Support\Str::limit(strip_tags($new->content), 75, $end='...') !!}
                                        </p>
                                        <a href="{{ route("news_details", ["slug"=>$new->slug]) }}"
                                           class="link-read defaultcolor">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- Modal Structure -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body" style="background-color: #f8f9fa;">
                <img id="modalImage" src="" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade text-center" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModal" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; z-index: 100;" onclick="closePopup()">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body" style="padding: 0">
                <a href="{{$settings->announcement_url}}" target="_blank">
                <img src="" id="announcementImage" style="width: 100%; height: 100%; object-fit: cover;"/>
                </a>
            </div>

        </div>
    </div>
</div>

@include("partials.web_footer")
@include("partials.web_scripts")

@if($settings->announcement_status)
<script>

    window.addEventListener('DOMContentLoaded', function () {
        var popupImage = document.getElementById('announcementImage');

        // Check if the user is browsing from a mobile device
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // Set the image source based on the user's device
        if (isMobile) {
            popupImage.src = "{{ $settings->announcement_image }}";


        } else {
            popupImage.src = "{{ $settings->announcement_image }}";
        }

        $("#announcementModal").modal("show");
    });

    function closePopup() {
        $("#announcementModal").modal("hide");
    }
</script>
@endif

<script>
    $(document).ready(function(){
        console.log("hey")
        $('.gallery-image').click(function(){
            var src = $(this).attr('src');
            $('#modalImage').attr('src', src);
            $('#imageModal').modal('show');
        });
    });
</script>

</body>
</html>
