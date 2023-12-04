<!DOCTYPE html>
<html lang="en">
<head>
    <title> Galleries - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")


<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        Galleries
                    </h2>
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
                                         alt="img">
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

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>

