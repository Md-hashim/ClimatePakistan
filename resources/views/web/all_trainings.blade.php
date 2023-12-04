<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trainings- WETDAP</title>
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
                       Trainings
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>



<section class="events-div  pt-5 pb-5">
    <div class="container pb-5 pt-md-5 pt-4">


        <div class="row">
            <div class="col-md-12  pb-3 wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">
                <h2 class=" bottom30 font-normal head-h2">
                    View All <span class="defaultcolor"> Trainings </span>

                </h2>
                <p>
                Climate Pakistan has been at the forefront of environmental education and advocacy, organizing impactful seminars and training sessions to address pressing climate issues. These events serve as critical platforms for disseminating knowledge about sustainable practices, renewable energy, and climate change mitigation strategies. By engaging experts, scientists, and community leaders, Climate Pakistan fosters a comprehensive understanding of environmental challenges and encourages active participation in adopting eco-friendly measures. Through these seminars and training programs, the organization empowers individuals, businesses, and communities to make informed choices that contribute to a more resilient and sustainable future for Pakistan.
                </p>
            </div>
        </div>


        <div class="row   wow fadeIn" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeIn;">

            @foreach($trainings as $training)
            <div class="col-md-4 mt-4 d-md-flex pt-2">
                <div class="card w-100 overflow">
                    <a href="{{ route("training_details", ["title"=>$training->title, "id"=>$training->id]) }}" class="events-bg" style="background:url('{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ $training->image }}')">
                    </a>
                    <div class="card-body bglight">

                        <h4 class="pb-3 font-normal head-h4">{{ $training->title }}</h4>
                        <p>
                            {{ $training->short_description }}
                        </p>
                        <a href="{{ route("training_details", ["title"=>$training->title, "id"=>$training->id]) }}" class="btn gradient-btn mt-1">
                            Read More
                        </a>

                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="row pt-5">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center custom-pagination">

                        {{-- Pagination Links --}}
                        @for ($i = 1; $i <= $trainings->lastPage(); $i++)
                            <li class="page-item {{ $i === $trainings->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $trainings->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>


<section class="pb-5">
    <div class="container pt-4">
        <div class="row heading_space">

            <div class="col-md-12">

                <div class=" bg-light heading_space border-11 p-md-5 p-4">
                    <h4 class="text-capitalize  bottom20 pt-md-0 pt-3 head-h3"> Training Form</h4>
                    <form class="reg-form-div">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Company name</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input class="form-control fm2" type="email">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Focal person </label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Company address</label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Product </label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Exporter/Not exporter </label>
                                    <input class="form-control fm2" type="text">
                                </div>
                            </div>


                            <div class="col-md-12 col-sm-12 mt-3">
                                <button type="submit"  class="button gradient-btn">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</section>

@include("partials.web_footer")
@include("partials.web_scripts")
</body>
</html>
