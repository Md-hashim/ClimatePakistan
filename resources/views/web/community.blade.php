<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skills - WETDAP</title>
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
                        Climate and the Different Fields
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>




<section class="pt-5 pb-5">
    <div class="container pt-md-5 pb-5">
        <div class="row heading_space wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">


            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-custom nav-tabs-custom-full" id="myTab" role="tablist">
                    @foreach($community as $tab)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link @if($loop->first) active @endif" id="{{ $tab->id }}" data-bs-toggle="tab" data-bs-target="#tab{{ $tab->id }}" type="button" role="tab" aria-controls="{{ $tab->id }}" aria-selected="@if($loop->first) true @else false @endif">
                         {{ $tab->tab_name }}

                        </button>
                    </li>
                    @endforeach
                </ul>


                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content" id="myTabContent">
                            @foreach($community as $tab)
                            <div class="tab-pane fade @if($loop->first) show active @else @endif" id="tab{{ $tab->id }}" role="tabpanel" aria-labelledby="{{ $tab->id }}" tabindex="0">

                                <div class="row pt-5">
                                    <div class="col-md-12">
                                        <div>
                                          {!! $tab->content !!}
                                            <div class="mt-5 d-md-block">
                                                <video class="myvideo" controls loop>
                                                    <source src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $tab->video }}" type="video/mp4">

                                                </video>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-4 pt-5">
                        <aside class="sidebar whitebox mt-5 mt-md-0 ps-xl-4">

                            <div class="mb-5">
                                <video class="myvideo" controls loop>
                                    <source src="{{ asset("static/web/video/video2.mp4") }}" type="video/mp4">

                                </video>
                            </div>


                            <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                                <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Contact Us</h4>
                                <div class="single_post d-flex bottom15">
                                    <a href="tel:923009247514" class=""><img src="{{ asset("static/web/images/whatsapp.png")}}" alt="img" width="40"></a>
                                    <div class="text">
                                        <span>Phone</span>
                                        <a href="#">
                                            {{$settings->phone_number}}
                                        </a>

                                    </div>
                                </div>

                                <div class="single_post d-flex mt-4">
                                    <a href="mailto:abc@website.com" class=""><img src="{{ asset("static/web/images/email.png")}}" alt="img" width="40"></a>
                                    <div class="text">
                                        <span>Email</span>
                                        <a href="#">
                                            {{$settings->email_address}}
                                        </a>

                                    </div>
                                </div>


                            </div>

                            <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                                <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Send a Message</h4>
                                <form class="getin_form" method="post" action="{{route('submit_message_form')}}">
                                    @csrf
                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12" id="result1"></div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="name1" class="d-none"></label>
                                                <input class="form-control" id="name1" type="text" placeholder="Name:" required="" name="userName">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="email1" class="d-none"></label>
                                                <input class="form-control" type="email" id="email1" placeholder="Email:" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="message1" class="d-none"></label>
                                                <textarea class="form-control min-height-form" rows="6" id="message1" placeholder="Message:" required="" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit_btn1" class="button gradient-btn w-100">Send</button>
                                        </div>
                                    </div>
                                </form>


                            </div>




{{--                            <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">--}}
{{--                                <h4 class="text-capitalize darkcolor bottom20">Resources</h4>--}}
{{--                                <ul class="webcats">--}}
{{--                                    <li><a href="#.">web design <span>(20)</span></a></li>--}}
{{--                                    <li><a href="#.">network <span>(05)</span></a></li>--}}
{{--                                    <li><a href="#.">marketing <span>(11)</span></a></li>--}}
{{--                                    <li><a href="#.">event (<span>(20)</span></a></li>--}}
{{--                                    <li><a href="#.">website <span>(07)</span></a></li>--}}
{{--                                    <li><a href="#.">About Us</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                        </aside>
                    </div>
                </div>



            </div>


        </div>
    </div>
</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
