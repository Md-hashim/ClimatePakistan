<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ $about->page_title }} - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")


<section id="main-banner-page"
         class="position-relative page-header about-header parallax section-nav-smooth subpage-banner"
         style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $about->banner_image }}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        {{ $about->page_title }}
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


<!--Some Feature -->
<section class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7  wow fadeInLeft" data-wow-delay="300ms">
{{--                <div class="heading-title mb-4">--}}
{{--                    <h2 class="darkcolor font-normal bottom30 head-h2">About <span class="defaultcolor">TDAP</span></h2>--}}
{{--                </div>--}}

                    {!! $about->section_1_content !!}


            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $about->section_1_image }}"></div>
            </div>
        </div>
    </div>
</section>
<!--Some Feature ends-->
<!-- Counters ends-->
<!-- Our Team-->
<section class=" parallax n-banner-cs n-banner-cs2"
         style="background:url('{{ asset("static/web/images/WhatsApp-Image-2022-08-27-at-8.08.06-PM-1-1.jpeg") }}')">
    <div class="container pt-5 pb-4">
        <div class="row pt-5">
            <div class="col-md-12  pb-3 wow fadeIn" data-wow-delay="300ms"
                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 darkcolor font-light text-white head-h2">
                    {{ $about->section_2_title }}
                </h2>

            </div>

        </div>
        <div class="row pb-5">
            <div class="col-md-12 wow fadeIn" data-wow-delay="300ms"
                 style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                {!! $about->section_2_content !!}

            </div>
        </div>
    </div>
</section>
<!-- Our Team ends-->

<section class="single-feature padding bglight">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $about->section_3_image }}"></div>
            </div>
            <div class="col-lg-6 col-md-7 offset-lg-1 col-sm-7 pt-md-0 pt-5 wow fadeInRight" data-wow-delay="300ms">

                 {!! $about->section_3_content !!}
            </div>

        </div>
    </div>
</section>

<section class="single-feature padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7  wow fadeInLeft" data-wow-delay="300ms">
                    {!! $about->section_4_content !!}

            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $about->section_4_image }}"></div>
            </div>
        </div>
    </div>
</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>

