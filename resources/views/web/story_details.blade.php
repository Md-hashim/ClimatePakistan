<!DOCTYPE html>
<html lang="en">
<head>
    <title> Climate Story- Climate Pakistan</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<!-- Testimonials -->
<section id="our-testimonial" class="bglight padding_bottom">
    <div class="parallax page-header testimonial-bg n-banner-cs2 story-page" style="background:url('{{ asset("static/web/images/climate.jpg") }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-md-12 text-center text-lg-end">
                    <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                        <h2 class="whitecolor font-normal">Climate Story</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="owl-carousel story-page-div" id="testimonial-slider">
            <!--item 1-->
            <div class="item testi-box">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="testimonial-round d-inline-block">
                            <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $story->images }}" alt="" style="height: 180px;width: 180px">
                        </div>
                        <h4 class="defaultcolor font-light top15"><a href="#.">{{ $story->name }}</a></h4>
                        <p>Climate Story</p>
                    </div>
                    <div class="col-lg-6 offset-lg-2 col-md-10 offset-md-1 text-lg-start text-center">
                        <p class="bottom15 my-story-text">
                          {{ $story->story }}

                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--Testimonials Ends-->
@if($story->video_url != null)
<!--video part section-->
<section class="bglight">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid bg-white">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 p-0 col-video">
                <div class="row mx-0">
                    <div class="col-md-10 offset-md-1 offset-sm-0 col-sm-12">
                        <div class="video-content-setting center-block text-center text-sm-start">
                            <h2 class="darkcolor font-normal text-capitalize mb-3">{{ $story->video_title }}</h2>
                            <p class="darkcolor">
                                {{ $story->video_description }}
                            </p>
                        </div>
                    </div>
                </div>
                <a data-fancybox="video" href="{{ $story->video_url }}" class="video-play-button position-absolute">
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <div class="col-md-6 col-sm-12 p-0 col-video video-bg">
                <div class="image">
                    <img alt="stats" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $story->images }}" class="video-img-setting ">
                </div>
            </div>
        </div>
    </div>
</section>

@endif

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
