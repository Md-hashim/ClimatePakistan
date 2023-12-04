
<!-- Contact US -->
<section id="stayconnect" class=" position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <!--<div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">

                    </div>
                </div>-->
                <div class="col-md-12 col-sm-12" >
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms"  method="post" action="{{ route("newsletter_registration") }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-5">
                                <h3 class="darkcolor pt-2">
                                    Subscribe for <span class="defaultcolor">NewsLetter</span>
                                </h3>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" required id="email" name="email" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->

<!--Site Footer Here-->
<footer id="site-footer" class=" bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class=" col-md-4">
                <div class="footer_panel padding_bottom_half bottom20">

                    {!! $settings->footer_section_1 !!}

                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0 ft-lk-mail">
                            {{ $settings->phone_number }} <a class="d-block" href="mailto:{{ $settings->email_address }}">{{ $settings->email_address }}</a>
                        </p>
                    </div>


                    <ul class="social-icons white wow fadeInUp mt-3" data-wow-delay="300ms">
                        <li><a href="//{{ $settings->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="//{{ $settings->instagram }}" target="_blank"><i class="fab fa-instagram"></i> </a></li>
                        <li><a href="//{{ $settings->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i> </a></li>
                        <li><a href="//{{ $settings->youtube }}" target="_blank"><i class="fab fa-youtube"></i> </a></li>
                        <li><a href="//{{ $settings->twitter }}" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                        <li><a href="//{{ $settings->linkedIn }}" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>

                    </ul>


                </div>
            </div>

            <div class="col-md-4">
                <div class="footer_panel padding_bottom_half bottom20 ps-0 ps-lg-5">
                    <h3 class="whitecolor bottom25">Quick Links</h3>
                    <ul class="links">
                        <li><a href="{{ route("index") }}">Home</a></li>
                        <!-- <li><a href="{{ route("about_tdap") }}">About TDAP</a></li> -->
                        <li><a href="{{ route("about_wetdap") }}">About Climate Pakistan</a></li>
                        <!-- <li><a href="{{ route("our_team") }}">Meet our team</a></li> -->
                        <li><a href="{{ route("community") }}">Climate Academy</a></li>

                        <!-- <li><a href="{{ route("entrepreneurship_registration") }}">Register</a></li> -->
                        <li><a href="{{ route("faqs") }}">Faq's</a></li>
                        <li><a href="{{ route("contact_us") }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_panel padding_bottom_half bottom20">
                   {!! $settings->footer_section_2 !!}
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="bg-dark text-center p-3">
    <p class="text-white text-center m-0">
        Copyright <script>document.write(new Date().getFullYear())</script>. All rights reserved
    </p>
</div>

<!--Footer ends-->
