<!DOCTYPE html>
<html lang="en">
<head>
    <title> {{ $training->title }}- WETDAP</title>
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
                       {{ $training->title }}
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>


<!--Some Feature -->
<section class="single-feature padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news_item shadow">
                    <div class="">
                        <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $training->image }}" alt="Latest News" class="img-fluid">
                    </div>
                    <div class="news_desc">
                        <h4 class="text-capitalize font-normal darkcolor head-h3 pb-4 pt-4">

                            {{ $training->title }}
                        </h4>

                       {!! $training->description !!}
                    </div>
                </div>

            </div>
            <!-- <div class="row pt-5">
                <div class="col-md-12">

                    <h3 class="font-light head-h3 darkcolor pb-5">
                        Training Material
                    </h3>

                    <div class="row">
                        @foreach($trainingItems as $item)
                        <div class="col-md-6">
                            <h4 class="head-h7 font-normal pt-1 pb-3">
                               {{$item->title}}
                            </h4>
                            @if($item->type=="image")

                                <a href="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $item->image }}" class="btn gradient-btn" target="_blank">
                                    View
                                </a>

                            @elseif($item->type=="video")
                                <a href="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $item->video }}" class="btn gradient-btn" target="_blank">
                                    View
                                </a>
                            @elseif($item->type=="document")
                                <a href="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $item->document }}" class="btn gradient-btn" target="_blank">
                                    View
                                </a>
                            @endif

                            <hr class="mt-4" />
                        </div>

                        @endforeach
                    </div>


                    <div>





                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
