<!DOCTYPE html>
<html lang="en">
<head>
    <title> Business Cards- WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<!--team members-->
<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading_space animated wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Business Card <span class="font-normal">Templates</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-0">Select a template below to create your business card</p>
                </div>
            </div>
        </div>
        <div class="row equal-shadow-team">
            <!--item 1-->

            <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-4">
                        <div class="team-box wow fadeIn" data-wow-delay="300ms">
                            <div class="image">
                                <a href="{{ route('view_designer_cards', ['type' => 'Business Card']) }}">
                                    <img src="{{"media/cardDesigns/business.png"}}" alt="" height="160" width="380">
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-4">
                    <div class="team-box wow fadeIn" data-wow-delay="300ms">
                        <div class="image">
                            <a href="{{ route('view_designer_cards', ['type' => 'Brochure Card']) }}">
                                <img src="{{"media/cardDesigns/brochure.png"}}" alt="" height="160" width="380">
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!--team members end-->

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
