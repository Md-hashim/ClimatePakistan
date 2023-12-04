<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chamber Registration - WETDAP</title>
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
                        Registration With Chambers
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

                    @foreach($tabs as $tab)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($loop->first) active @endif" id="{{ $tab->id }}" data-bs-toggle="tab" data-bs-target="#tab{{ $tab->id }}" type="button" role="tab" aria-controls="{{ $tab->id }}" aria-selected="@if($loop->first) true @else false @endif">
                                {{ $tab->tab_name }}

                            </button>
                        </li>
                    @endforeach

{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">--}}
{{--                            Benefits of Registration--}}
{{--                        </button>--}}
{{--                    </li>--}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            How to Register
                        </button>
                    </li>


                </ul>


                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content" id="myTabContent">

                            @foreach($tabs as $tab)
                                <div class="tab-pane fade @if($loop->first) show active @else @endif" id="tab{{ $tab->id }}" role="tabpanel" aria-labelledby="{{ $tab->id }}" tabindex="0">

                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            {!! $tab->content !!}
                                        </div>
                                    </div>

                                </div>
                            @endforeach
{{--                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">--}}

{{--                                <div class="row pt-5">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <div>--}}
{{--                                            <h3 class="font-light head-h3 darkcolor pb-3 ">--}}
{{--                                                Mandate Of Chambers Of Commerce--}}


{{--                                            </h3>--}}
{{--                                            <p>--}}
{{--                                                Chambers of Commerce and Industries thrive to achieve following goals:--}}

{{--                                            </p>--}}

{{--                                            <ul class="list-inline icons-flex-list">--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Creating a conducive environment for business--}}



{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Promoting local business as well as international recognition--}}




{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Provide access to valuable resources--}}



{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Establishing B2B and B2C connections--}}

{{--                                                </li>--}}
{{--                                            </ul>--}}

{{--                                            <h3 class="font-light head-h3 darkcolor pb-4 pt-5 mt-3">--}}
{{--                                                Benefits Of Registration Chamber--}}


{{--                                            </h3>--}}



{{--                                            <div class="custom-timeline-1">--}}

{{--                                                <!-- timeline item 1 -->--}}
{{--                                                <div class="row">--}}
{{--                                                    <!-- timeline item 1 left dot -->--}}
{{--                                                    <div class="col-auto text-center flex-column  d-flex">--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                        <h5 class="m-2">--}}
{{--                                                            <span class="badge rounded-pill bg-light border">&nbsp;</span>--}}
{{--                                                        </h5>--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end order">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <!-- timeline item 1 event content -->--}}
{{--                                                    <div class="col py-2">--}}
{{--                                                        <div class="card">--}}
{{--                                                            <div class="card-body">--}}

{{--                                                                <p class="card-text">--}}
{{--                                                                    B2B & B2C networking with other business personnel--}}

{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}
{{--                                                <!-- timeline item 2 -->--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-auto text-center flex-column d-flex">--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                        <h5 class="m-2">--}}
{{--                                                            <span class="badge rounded-pill bg-pink">&nbsp;</span>--}}
{{--                                                        </h5>--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col py-2">--}}
{{--                                                        <div class="card border-pink shadow">--}}
{{--                                                            <div class="card-body">--}}

{{--                                                                <p class="card-text">--}}
{{--                                                                    Relevant information via newsletters--}}

{{--                                                                </p>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}
{{--                                                <!-- timeline item 3 -->--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-auto text-center flex-column  d-flex">--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                        <h5 class="m-2">--}}
{{--                                                            <span class="badge rounded-pill bg-light border">&nbsp;</span>--}}
{{--                                                        </h5>--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col py-2">--}}
{{--                                                        <div class="card">--}}
{{--                                                            <div class="card-body">--}}

{{--                                                                <p class="card-text">--}}
{{--                                                                    Acquire customer referrals for business generation--}}

{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}
{{--                                                <!-- timeline item 4 -->--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-auto text-center flex-column  d-flex">--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                        <h5 class="m-2">--}}
{{--                                                            <span class="badge rounded-pill bg-pink">&nbsp;</span>--}}
{{--                                                        </h5>--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col py-2">--}}
{{--                                                        <div class="card border-pink shadow">--}}
{{--                                                            <div class="card-body">--}}

{{--                                                                <p class="card-text">--}}
{{--                                                                    Bring credibility & authenticity to your company--}}


{{--                                                                </p>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-auto text-center flex-column  d-flex">--}}
{{--                                                        <div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>--}}
{{--                                                        <h5 class="m-2">--}}
{{--                                                            <span class="badge rounded-pill bg-light border">&nbsp;</span>--}}
{{--                                                        </h5>--}}
{{--                                                        <!--<div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col py-2">--}}
{{--                                                        <div class="card">--}}
{{--                                                            <div class="card-body">--}}

{{--                                                                <p class="card-text">--}}
{{--                                                                    Gain a voice in policy formulation--}}


{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!--container-->--}}



{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="row pt-5">
                                    <div class="col-md-12">


                                        <h3 class="font-light head-h3 darkcolor pb-4">
                                            Chamber Registration Form
                                        </h3>

                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @elseif(session("error"))
                                            <div class="alert alert-error">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        <form class="getin_form" method="post" action="{{ route("chamber_registration") }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12" id="result1"></div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <p for="name1">Name of Chamber</p>
                                                        <input class="form-control" id="name1" type="text"  required="" name="chamber_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 pt-2">
                                                    <div class="form-group">
                                                        <p for="email1">Email address</p>
                                                        <input class="form-control" type="email" id="email1" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 pt-2">
                                                    <div class="form-group">
                                                        <p for="number">Chamber Registration Number</p>
                                                        <input class="form-control" id="number" type="text" required="" name="registration_number">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 pt-2">
                                                    <div class="form-group">
                                                        <p for="message1">Business Address:</p>
                                                        <textarea class="form-control min-height-form" rows="6" id="message1" required="" name="business_address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 pt-2">
                                                    <button type="submit" id="submit_btn1" class="button gradient-btn">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


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
