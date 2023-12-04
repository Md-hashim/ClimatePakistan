<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Events - WETDAP</title>
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
                       Events
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="events-div mb-md-4 pt-5 pb-5">
    <div class="container pb-5 pt-md-5 pt-4">


        <div class="row">
            <div class="col-md-12  pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 font-normal head-h2">
                    View All <span class="defaultcolor"> Events </span>

                </h2>
                <p>
                    Discover a world of opportunities and knowledge through our diverse range of events. From workshops and webinars to networking sessions and conferences, we curate events that empower, educate, and connect women entrepreneurs. Stay updated on upcoming events, gain valuable insights, and be a part of a community that supports your journey to success

                </p>
            </div>
        </div>


        <div class="row justify-content-center align-items-center  wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
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
                                <a href="event-details.html">{{ $event->title }} </a>
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
                            <a href="{{ route("event_details", ["title"=>$event->title, "id"=>$event->id]) }}" class="btn gradient-btn">View Event Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="row pt-5">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center custom-pagination">

                        {{-- Pagination Links --}}
                        @for ($i = 1; $i <= $events->lastPage(); $i++)
                            <li class="page-item {{ $i === $events->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $events->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>


    </div>
</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
