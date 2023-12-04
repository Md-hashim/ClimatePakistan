<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $news->title }}- WETDAP</title>
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
                        {{ $news->title }}
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="pt-5 pb-5">
    <div class="container pt-md-5 pb-5 pt-4">
        <div class="row heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">



            <div class="col-md-8">
                <div class="news_item shadow">
                    <div class="">
                        <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $news->banner_image }}" alt="Latest News" class="img-fluid">
                    </div>
                    <div class="news_desc">

                        <h4 class="text-capitalize font-normal darkcolor head-h3 pb-1">
                            {{ $news->title }}
                        </h4>

                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($news->created_at)->shortMonthName }}  {{ \Carbon\Carbon::parse($news->created_at)->day }}</a></li>

                        </ul>
                    {!! $news->content !!}


                    </div>
                </div>
            </div>
            <div class="col-md-4 pt-md-0 pt-5">
                <aside class="sidebar whitebox mt-5 mt-md-0 ps-xl-4">

                    <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeIn;">
                        <h4 class="text-capitalize darkcolor bottom20">Recent Posts</h4>
                        @foreach($latestNews as $latest)
                        <div class="single_post d-table bottom15">
                            <a href="{{ route("news_details", ["slug"=>$latest->slug]) }}" class="post"><img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $latest->banner_image }}" alt="post image"></a>
                            <div class="text">
                                <a href="{{ route("news_details", ["slug"=>$latest->slug]) }}">About Invesment Management</a>
                                <span>  {{ \Carbon\Carbon::parse($latest->created_at)->monthName }} {{ \Carbon\Carbon::parse($latest->created_at)->day }}, {{ \Carbon\Carbon::parse($latest->created_at)->year }} <br>
                          </span>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </aside>
            </div>





        </div>
    </div>
</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
