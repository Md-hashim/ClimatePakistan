<!DOCTYPE html>
<html lang="en">
<head>
    <title>MOUs - WETDAP</title>
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
                        MOUs
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
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            Implementation phase
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            Negotiation phase
                        </button>
                    </li>


                </ul>


                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                                <div class="row pt-5">
                                    <div class="col-md-12">
                                        <h3 class="font-light head-h3 darkcolor pb-3">
                                            Implementation phase:

                                        </h3>



                                        <a href="https://we.tdap.gov.pk/mous/" target="_blank" class="pink">
                                            <u>First Women Bank</u>
                                        </a>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <div class="row pt-5">
                                    <div class="col-md-12">


                                        <h3 class="font-light head-h3 darkcolor pb-3">
                                            Negotiation phase


                                        </h3>
                                        <p>
                                            Women Business Network
                                        </p>
                                        <p>
                                            Pahel Pakistan
                                        </p>
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
                                    <a href="tel:923009247514" class=""><img src="{{ asset("static/web/images/whatsapp.png") }}" alt="img" width="40"></a>
                                    <div class="text">
                                        <span>Phone</span>
                                        <a href="#">
                                            92 300 9247514
                                        </a>

                                    </div>
                                </div>

                                <div class="single_post d-flex mt-4">
                                    <a href="mailto:abc@website.com" class=""><img src="{{ asset("static/web/images/whatsapp.png") }}" alt="img" width="40"></a>
                                    <div class="text">
                                        <span>Email</span>
                                        <a href="#">
                                            abc@website.com
                                        </a>

                                    </div>
                                </div>


                            </div>

                            <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                                <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Send a Message</h4>
                                <form class="getin_form">
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




                            <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                                <h4 class="text-capitalize darkcolor bottom20">Resources</h4>
                                <ul class="webcats">
                                    <li><a href="#.">web design <span>(20)</span></a></li>
                                    <li><a href="#.">network <span>(05)</span></a></li>
                                    <li><a href="#.">marketing <span>(11)</span></a></li>
                                    <li><a href="#.">event (<span>(20)</span></a></li>
                                    <li><a href="#.">website <span>(07)</span></a></li>
                                    <li><a href="#.">About Us</a></li>
                                </ul>
                            </div>

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
