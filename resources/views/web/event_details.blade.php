<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $event->title }}- WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                       Event Details
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
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30 head-h2">{{ $event->title }}</h2>
                </div>
                <h4>
                    <i class="fas fa-calendar-alt"></i>   Date:-   {{ \Carbon\Carbon::parse($event->date)->day }} {{ \Carbon\Carbon::parse($event->date)->monthName }}
                </h4>
                <h4 class="pt-3">
                    <i class="fa fa-clock"></i> @php
                        $startDateTime = \Carbon\Carbon::parse($event->start_time);
                    @endphp

                    {{ $startDateTime->format('h:i A') }}
                    - @php
                        $endDateTime = \Carbon\Carbon::parse($event->end_time);
                    @endphp
                    {{ $endDateTime->format('h:i A') }}
                </h4>
                <p class="bottom35 pt-4">
                    {{ $event->description }}

                </p>

            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
                <div class="image"><img alt="SEO" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $event->image }}"></div>
            </div>
        </div>
    </div>
</section>
@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
