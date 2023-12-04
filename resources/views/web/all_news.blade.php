<!DOCTYPE html>
<html lang="en">
<head>
    <title>News- WETDAP</title>
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
                        News
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="events-div  pt-5 pb-5">
    <div class="container mb-md-4 pb-5 pt-md-5 pt-4">


        <div class="row">
            <div class="col-md-12  pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 font-normal head-h2">
                    View All <span class="defaultcolor"> News </span>

                </h2>
                <p>
                Welcome to the Climate News Section!
In our dedicated Climate News section, we bring you the latest and most relevant updates on climate-related matters from around the globe. Stay informed about the rapidly evolving landscape of climate change, environmental policies, and scientific advancements by exploring our curated collection of articles, reports, and analyses.
Our team is committed to delivering accurate, timely, and comprehensive coverage to keep you abreast of the critical issues shaping our planet. Whether you're passionate about sustainability, curious about emerging technologies, or concerned about the impact of climate events, our Climate News Section is your go-to source for staying connected to the ever-changing world of climate action.
Join us on the front lines of environmental awareness and be a part of the global conversation on climate change. Browse through our latest articles below and empower yourself with the knowledge needed to contribute to a sustainable future.


                </p>
            </div>
        </div>


        <div class="row pt-4  wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

            @foreach($news as $new)
            <div class="col-md-4 mb-4 d-md-flex">
                <div class="card w-100 border-0 overflow">
                    <a href="{{ route("news_details", ["slug"=>$new->slug]) }}" class="events-bg" style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $new->banner_image }}')">
                    </a>
                    <div class="card-body new-card-body bglight">
                        <span class="circle-date">    {{ \Carbon\Carbon::parse($new->created_at)->day }} <br>
                           {{ \Carbon\Carbon::parse($new->created_at)->shortMonthName }}</span>
                        <h4 class="darkcolor pb-3 head4-xl">
                            <a href="{{ route("news_details", ["slug"=>$new->slug]) }}" class="link7">
                                {{ \Illuminate\Support\Str::limit($new->title, 20, $end='...') }}
                            </a>
                        </h4>
                        <p class="darkcolor">
                            {!! \Illuminate\Support\Str::limit(strip_tags($new->content), 75, $end='...') !!}

                        </p>
                        <a href="{{ route("news_details", ["slug"=>$new->slug]) }}" class="link-read defaultcolor">Read More</a>
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
                        @for ($i = 1; $i <= $news->lastPage(); $i++)
                            <li class="page-item {{ $i === $news->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
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
