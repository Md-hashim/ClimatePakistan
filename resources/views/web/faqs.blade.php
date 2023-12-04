<!DOCTYPE html>
<html lang="en">
<head>
    <title>FAQs- WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<section id="main-banner-page"
         class="position-relative page-header about-header parallax section-nav-smooth subpage-banner"
         style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        FAQs
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="ourfaq" class="bglight position-relative padding mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">
                    Frequently Asked <span class="font-normal">Questions</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="heading_space">Find answers to common questions and valuable insights on our Frequently Asked Questions (FAQs) page.</p>
                </div>
            </div>
            <h2 class="d-none">Tabs</h2>
            <div class="col-md-12 col-sm-12">
                <div id="accordion">
                    @foreach($faqs as $faq)
                        <div class="card">
                            <div class="card-header">
                                <a class="@if($loop->first) @else collapsed @endif card-link darkcolor" data-bs-toggle="collapse" href="#collapse{{ $faq->id }}">
                                    {{ $faq->question }}
                                </a>
                            </div>
                            <div id="collapse{{ $faq->id }}" class="collapse @if($loop->first) show @else @endif" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        {!! $faq->answer !!}
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
