<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ $weDiv->page_title }} - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")


<section id="main-banner-page" class="position-relative page-header n-banner-cs2 about-header parallax section-nav-smooth subpage-banner"   style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $weDiv->banner_image }}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                      {{ $weDiv->page_title }}
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
    
</div>
</section>

<!-- <section class="pt-5 pb-5">
    <div class="container pt-5 pb-5">
        <div class="row pt-5 pb-5">
            <div class="col-md-12">
                <div class="contact-chart-main">

                    <div class="contact-chart-div text-center active-team firstn">
                        <img src="{{ asset("static/web/images/op4.jpg")}}" class="chart-team" alt="img" />
                        <h4>
                            Director General

                        </h4>
                        <p>
                            Ms. Fauzia Parveen, DG, Lahore

                        </p>
                    </div>

{{--                    <div class="contact-chart-div text-center contact-chart-div-right active-team">--}}
{{--                        <img src="{{ asset("static/web/images/op4.jpg")}}" class="chart-team" alt="img" />--}}
{{--                        <h4>--}}
{{--                            SO to DG/AD Coordination--}}



{{--                        </h4>--}}
{{--                        <p>--}}
{{--                            Dr. Arfa Shahid, AD, <span class="d-lg-block"></span> Islamabad--}}

{{--                        </p>--}}
{{--                    </div>--}}

                    <div class="contact-chart-div text-center ch-item ch-line1 active-team2">
                        <img src="{{ asset("static/web/images/op5.jpg")}}" class="chart-team" alt="img" />
                        <h4>
                            Focal Person



                        </h4>
                        <p>
                            Dr. Shumaila Sikandar, DD, Karachi

                        </p>
                    </div>

                    <div class="row pt-5">
                        <div class="col-md-12">
                            <div class="ch-line-full"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact-chart-div text-center ch-item ch-line2 lastn">
                                <img src="{{ asset("static/web/images/op5.jpg")}}" class="chart-team" alt="img" />
                                <h4>
                                    Punjab Region



                                </h4>
                                <p>
                                    1. Ms. Mariam Alvi, DD, Lahore
                                    <br />
                                    2. Ms. Mahina Ghalib, AD, Lahore

                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-chart-div text-center ch-item ch-line2 lastn">
                                <img src="{{ asset("static/web/images/op4.jpg")}}" class="chart-team" alt="img" />
                                <h4>
                                    AJK, Islamabad, Rawalpindi & KP Region


                                </h4>
                                <p>
                                    Dr. Arfa Shahid, AD, Islamabad
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-chart-div text-center ch-item ch-line2 lastn">
                                <img src="{{ asset("static/web/images/op2.jpg")}}" class="chart-team" alt="img" />
                                <h4>
                                    Gilgit Baltistan Region



                                </h4>
                                <p>
                                    Mr. Nazir Ali, AD, GB

                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact-chart-div text-center ch-item ch-line2 lastn">
                                <img src="{{ asset("static/web/images/op4.jpg")}}" class="chart-team" alt="img" />
                                <h4>
                                    Baluchistan & Sindh Region



                                </h4>
                                <p>
                                    AD/AM, Karachi

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> -->

    
<section class="single-feature padding bglight">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                        <h2 class="darkcolor font-normal bottom30 head-h2">
                            Learn About Why  <span class="defaultcolor"> Climate Pakistan was Created? </span>
                        </h2>
                    </div>
                    <p class="bottom35">
                        We have seen the need that there is no moot point for Public Sector, Private, Donors, Academics, Activist in Pakistan to gather at one place
                        Climate Pakistan serves as an information nerve centre for all things climate
                                                
                    </p>
                </div>
                <div class="col-lg-6 col-md-7 offset-lg-1 col-sm-7 pt-md-0 pt-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="static/web/images/g8-1.jpg"></div>
                    
                </div>

            </div>
        </div>
    </section>


<section class="single-feature padding bglight">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $weDiv->section_1_image }}"></div>
            </div>
            <div class="col-lg-6 col-md-7 offset-lg-1 col-sm-7 pt-md-0 pt-5 wow fadeInRight" data-wow-delay="300ms">
              {!! $weDiv->section_1_content !!}
            </div>

        </div>
    </div>
</section>



<section class=" parallax n-banner-cs n-banner-cs2" style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $weDiv->section_2_image }}')">
    <div class="container pt-5 pb-5">
        <div class="row pt-5 pb-5">
            <div class="col-md-12 text-center pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

                <div class="col-md-8 offset-md-2 text-white">
                   {!! $weDiv->section_2_content !!}
                    <a href="{{ route("contact_us") }}" class="button btnsecondary btn-normal   mt-4">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="single-feature padding bglight">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="image"><img alt="SEO" src="static/web/images/g8-1.jpg"></div>
                </div>
                <div class="col-lg-6 col-md-7 offset-lg-1 col-sm-7 pt-md-0 pt-5 wow fadeInRight" data-wow-delay="300ms">
                    <div class="heading-title mb-4">
                        <h2 class="darkcolor font-normal bottom30 head-h2">
                            Why  <span class="defaultcolor"> Pakistan </span>
                        </h2>
                    </div>
                    <p class="bottom35">
                    
The decision to focus our efforts on Pakistan is driven by a recognition of the country's vulnerability to the adverse effects of climate change. Rising temperatures, changing precipitation patterns, and extreme weather events pose significant threats to agriculture, water resources, and overall livelihoods. Through our platform, we aim to empower individuals, communities, and policymakers with the knowledge and tools needed to build resilience and enact meaningful change.

</p>

                </div>

            </div>
        </div>
    </section>


    <section class=" parallax n-banner-cs n-banner-cs2" style="background:url('static/web/images/Climate.jpg')">
        <div class="container pt-5 pb-5">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 text-center pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                    <h2 class=" bottom30 darkcolor font-light pt-md-2">
                        <span class="font-weight-light text-white">
                          What Sets Us Apart!
                            <!--<span class="divider-center"></span>-->
                        </span>
                    </h2>
                    <div class="col-md-8 offset-md-2 text-white">
                        <p>
                        Climate Pakistan distinguishes itself as a beacon of reliable, up-to-date, and relevant information. Our team comprises experts in climate science, sustainable development, and environmental policy, ensuring that the content we provide is both accurate and actionable. We are committed to bridging the gap between scientific knowledge and practical, community-focused solutions.
<h3>Our Offerings:</h3><br><br><br>
<h4>Comprehensive Information Hub:</h4> Access the latest research, reports, and analyses on climate change tailored to Pakistan's context.<br>
<br><br><h4>Community Engagement:</h4> Join forums, webinars, and events that facilitate discussions, networking, and collaboration among individuals and organizations dedicated to climate action in Pakistan.<br>
<br><br><h4>Resources:</h4> Explore educational materials, lesson plans, and awareness campaigns designed to inform and inspire individuals of all ages.<br>
<br><br><h4>Advocacy and Policy Initiatives:</h4> Stay informed about climate policies, participate in advocacy efforts, and contribute to shaping a sustainable future for Pakistan.<br>
<br><br><h4>Join Us in Making a Difference:</h4> Climate Pakistan invites you to be part of a collective effort to address the pressing issues of climate change in Pakistan. By fostering awareness, encouraging dialogue, and promoting sustainable practices, we believe in creating a ripple effect that can contribute to a more resilient and sustainable future for the country and the planet at large. Together, let's navigate the challenges of climate change with knowledge, unity, and purpose.<br>

                        </p>
                        <a href="{{ route("contact_us") }}" class="button btnsecondary btn-normal   mt-4">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section>



<!-- 
<section class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30 head-h2">Core  <span class="defaultcolor">Pillars</span></h2>
                </div>

            </div>

        </div>




        <div class="row core-values-div wow fadeInLeft" data-wow-delay="300ms">
            <div class="col-md-12 mt-4 d-flex">
                <div class="card w-100">
                    <div class="card-block block-1 core-values d-flex align-items-center">
                        <i class="fa-solid fa-computer"></i>
                        <div>
                            <h4 class="card-title pt-2">Product Development </h4>
                            <p class="card-text">
                                Specialized programs led by industry experts to refine product concepts, streamline production processes, packaging, and ensure quality and innovation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 d-flex">
                <div class="card w-100">
                    <div class="card-block block-1 core-values d-flex align-items-center">
                        <i class="fa fa-cogs"></i>
                        <div>
                            <h4 class="card-title pt-2">Strategic Marketing Insights</h4>
                            <p class="card-text">
                                Access to market data and tools to identify opportunities and position products effectively in competitive landscapes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex">
                <div class="card w-100">
                    <div class="card-block block-1 core-values d-flex align-items-center">
                        <i class="fa fa-calendar"></i>
                        <div>
                            <h4 class="card-title pt-2">Global Export Readiness </h4>
                            <p class="card-text">
                                Tailored strategies and introductions to international markets, including trade missions, partnerships, and export facilitation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 mt-4 d-flex">
                <div class="card w-100">
                    <div class="card-block block-1 core-values d-flex align-items-center">
                        <i class="fa fa-database"></i>
                        <div>
                            <h4 class="card-title pt-2">Financial Inclusion and Sustainability</h4>
                            <p class="card-text">
                                Connections to a diverse range of financial institutes, with a focus on supporting women-owned enterprises.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex">
                <div class="card w-100">
                    <div class="card-block block-1 core-values d-flex align-items-center">
                        <i class="fa-solid fa-house-flag"></i>
                        <div>
                            <h4 class="card-title pt-2">	Capacity Building Programs</h4>
                            <p class="card-text">
                                Training sessions covering a range of demand driven skills including trade fair participation, trade deal negotiations, digitalization etc
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>
</section> -->
@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
