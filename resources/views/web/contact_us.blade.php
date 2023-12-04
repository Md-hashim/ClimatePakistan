<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - WETDAP</title>
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
                        Contact
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="pt-5 pb-5">
    <div class="container pt-md-5 pb-5">
        <div class="row pt-5 pb-5">
            <div class="col-md-12">
                <h2 class="darkcolor pb-3 font-normal head-h2">
                    Get in <span class="defaultcolor"> Touch</span>
                </h2>


                {!! $contact->content !!}



                <h2 class="darkcolor font-normal bottom30 head-h2 pt-5 mt-md-5 pb-1">
                    Find Us on <span class="defaultcolor"> Map</span>
                </h2>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.1580634164543!2d67.04967247515141!3d24.858450545338346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f076cd1a04f%3A0x2b5ad311fdff3bbe!2sFinance%20%26%20Trade%20Center!5e0!3m2!1sen!2s!4v1698655818804!5m2!1sen!2s"  height="400" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!--  -->



                <!--  -->


                <!--  -->
                <!--  -->

                <!--  -->
                <!--  -->



            </div>
        </div>
    </div>
</section>
@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
