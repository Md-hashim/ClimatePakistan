<!DOCTYPE html>
<html lang="en">
<head>
    <title>Meet Our Team - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")


<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{ asset("static/web/images/climate.jpg") }}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        Team
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


@foreach($teams as $key => $team)
    @if($key % 2 == 0)
        <section class="single-feature padding bg-light hi-hidden">
            <div class="container pt-md-0 pt-5">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5 col-md-5  wow fadeInLeft" data-wow-delay="300ms">
                        <div class="custom-team-div-image">
                            <div class="ci-team"></div>
                            <div class="image"><img alt="img" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $team->image }}"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7 offset-lg-1  wow fadeInRight" data-wow-delay="300ms">
                        <div class="custom-team-div">
                            {!! $team->content !!}
                            <h4>
                                {{ $team->name }}
                            </h4>
                            <h5 class="pt-1">{{ $team->designation }}</h5>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @else
        <section class=" parallax n-banner-cs hi-hidden n-banner-cs2 pt-5 pb-5">
            <div class="container pt-5 pb-4">
                <div class="row d-flex align-items-center pt-md-0 pt-5">

                    <div class="col-lg-6 col-md-7 order-md-1 order-2 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="custom-team-div custom-team-div2">
                            {!! $team->content !!}
                            <h4>
                                {{ $team->name }}
                            </h4>
                            <h5 class="pt-1">{{ $team->designation }}</h5>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 offset-lg-1 order-md-2 order-1  wow fadeInRight" data-wow-delay="300ms">
                        <div class="custom-team-div-image">
                            <div class="ci-team ci-team2"></div>
                            <div class="image"><img alt="img" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $team->image }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
@endforeach


@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
