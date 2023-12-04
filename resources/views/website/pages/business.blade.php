@extends('layouts.wetdp_master')
@section('title', 'Business')

@section('main_content')
    <section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{asset('static/media/website-images/bg-1.jpg')}}')">
        <div class="overlay overlay-dark opacity-7"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="page-titles whitecolor text-center padding_top padding_bottom">
                        <h2 class="font-light">
                            Start Your Business
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
                                Idea Generation
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Competitor Analysis
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                Business Plan
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact2-tab" data-bs-toggle="tab" data-bs-target="#contact2-tab-pane" type="button" role="tab" aria-controls="contact2-tab-pane" aria-selected="false">
                                Product Development
                            </button>
                        </li>

                    </ul>


                    <div class="row">
                        <div class="col-md-8">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 ">
                                                    Idea Generation

                                                </h3>
                                                <p>
                                                    Idea generation is the first step in product development. At this stage, look for feasible product options and possible ways to execute your idea.The idea should be:
                                                </p>

                                                <ul class="list-inline icons-flex-list">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Unique from competitors

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Profitable



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Demand driven


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Feasible for execution

                                                    </li>
                                                </ul>

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                    Stages of  Idea Generation

                                                </h3>

                                                <div class="d-flex list-ul1  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        Ideation

                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Shortlisting business/product ideas

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Framing possible pathways for execution

                                                            </li>
                                                        </ul>
                                                    </span>

                                                </div>


                                                <div class="d-flex list-ul1  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        Validation


                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Comparison with existing business/products



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Analyzing market demand


                                                            </li>

                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Reviewing feasibility of the idea

                                                            </li>
                                                        </ul>
                                                    </span>




                                                </div>


                                                <div class="d-flex list-ul1  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        Activation



                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Approaching institutions for expert opinion



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Adopting a suitable technique for execution of idea

                                                            </li>

                                                        </ul>
                                                    </span>




                                                </div>


                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-4">
                                                    Idea Cycle

                                                </h3>

                                                <img src="{{asset('static/media/website-images/graph.png')}}" class="img-fluid" alt="img">

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                    Scramper Technique

                                                </h3>

                                                <ul class="list-inline icons-flex-list">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It is a technique to come up with the fresh ideas



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It helps you to start an idea with the help of existing products


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        You can launch a new product by modifying the existing ones


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Feedback on existing products can help you modify that product and launch a better version


                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 ">
                                                    Know Your Competitor

                                                </h3>

                                                <p class="f600">
                                                    Companies offering:

                                                </p>

                                                <ul class="list-inline icons-flex-list ps-3">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Same product/service; now


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Similar product/service; now


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Same/similar product/service; future
                                                    </li>

                                                </ul>

                                                <p class="pt-4 f600">
                                                    OR
                                                </p>

                                                <ul class="list-inline icons-flex-list ps-3">

                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Companies that may eliminate the need of your product/service

                                                    </li>


                                                </ul>



                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5">
                                                    Monitor Your Competitor

                                                </h3>

                                                <ul class="list-inline icons-flex-list ps-3">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Determine the market developments an potential threats by monitoring your competitors


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Look for the feedback on similar products

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        How to modify the existing products?


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Exploit the shortcomings of your competitors by improving your product/service
                                                    </li>
                                                </ul>

                                                <h3 class="font-light head-h3 darkcolor pb-4 pt-5 mt-3">
                                                    Stages in Monitoring

                                                </h3>

                                                <img src="{{asset('static/media/website-images/stage.jpg')}}" class="img-fluid" alt="img" />

                                                <h3 class="font-light head-h3 darkcolor pb-4 pt-5 mt-3">
                                                    Components of Competitor Analysis

                                                </h3>
                                                <img src="{{asset('static/media/website-images/components.jpg')}}" class="img-fluid mx-auto d-block" alt="img" />

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                    Important Aspect

                                                </h3>

                                                <div class="row">
                                                    <div class="col-md-4 d-md-flex mt-4">
                                                        <div class="w-100 aspects-div">
                                                            <h4 class="pb-1">
                                                                PRODUCTS
                                                            </h4>
                                                            <div class="p-line">

                                                            </div>

                                                            <ul class="list-inline icons-flex-list pt-3">
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>

                                                                    Similar products offered



                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Future developments


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Reverse engineering


                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 d-md-flex mt-4">
                                                        <div class="w-100 aspects-div grd2 aspects-div-dark">
                                                            <h4 class="pb-1">
                                                                FINANCES

                                                            </h4>
                                                            <div class="p-line2">

                                                            </div>

                                                            <ul class="list-inline icons-flex-list pt-3">
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor pe-1"></i>


                                                                    Cash flows; liquidity



                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor pe-1"></i>
                                                                    Profit margin


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor  pe-1"></i>
                                                                    Salary rates

                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>


                                                    <div class="col-md-4 d-md-flex mt-4">
                                                        <div class="w-100 aspects-div">
                                                            <h4 class="pb-1">
                                                                MARKEITNG
                                                            </h4>
                                                            <div class="p-line">

                                                            </div>

                                                            <ul class="list-inline icons-flex-list pt-3">
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>





                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Customer feedback


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Advertisement platforms


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Discounts/ offers


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Distribution channels

                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-md-flex mt-4">
                                                        <div class="w-100 aspects-div grd2 aspects-div-dark">
                                                            <h4 class="pb-1">
                                                                PERSONNEL

                                                            </h4>
                                                            <div class="p-line2">

                                                            </div>

                                                            <ul class="list-inline icons-flex-list pt-3">
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor pe-1"></i>


                                                                    No. of Employees

                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor pe-1"></i>
                                                                    Management style
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check defaultcolor  pe-1"></i>
                                                                    Offers, Benefits

                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>


                                                    <div class="col-md-4 d-md-flex mt-4">
                                                        <div class="w-100 aspects-div grd5">
                                                            <h4 class="pb-1">
                                                                FACILITIES
                                                            </h4>
                                                            <div class="p-line">

                                                            </div>

                                                            <ul class="list-inline icons-flex-list pt-3">
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>


                                                                    Production capacity


                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Logistics



                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-check text-white pe-1"></i>
                                                                    Product mix

                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                </div>

                                                <h3 class="font-light head-h3 darkcolor pb-4 pt-5 mt-4 text-center">
                                                    <span class="defaultcolor"> MCkinsey</span> 7 S Model:

                                                </h3>
                                                <img src="{{asset('static/media/website-images/structure.png')}}" class="img-fluid mx-auto d-block" alt="img" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 ">
                                                    Business Plan

                                                </h3>
                                                <p>
                                                    A business plan is a formal written document that furnishes:

                                                </p>

                                                <ul class="list-inline icons-flex-list ps-3">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Company’s vision, mission and goals



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Marketing & Advertisement


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Operation & Working

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Financial Projections

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Time-frame to achieve the goals
                                                    </li>
                                                </ul>

                                                <p class="pt-4 mt-1">
                                                    <b> Important Point: </b> While it's a good idea to give as much detail as possible, it's also important that a plan be concise to keep a reader's attention to the end.

                                                </p>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                            Goals of a business plan:

                                                        </h3>
                                                        <p>
                                                            A Business plan has following goals:

                                                        </p>

                                                        <ul class="list-inline icons-flex-list ps-3">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                To evaluate feasibility of an idea



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                To develop a strategy

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                To assist in obtaining approvals

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                To allocate resources wisely

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                To establish credibility
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 text-center text-md-start mt-md-5">
                                                        <img src="{{asset('static/media/website-images/target.png')}}" class="img-fluid pt-5 xs-image-small" alt="img" />
                                                    </div>
                                                </div>


                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-4 text-center">
                                                    <span class="defaultcolor">  Components</span> of a    Business Plan

                                                </h3>
                                                <p class="text-center">
                                                    A Business plan is composed of 10 essential elements:

                                                </p>
                                                <div class="text-center">
                                                    <img src="{{asset('static/media/website-images/plan.png')}}" class="img-fluid pt-4" alt="img" />
                                                </div>




                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-4">
                                                    Who Reads the Business Plan — And What Are They Looking For?

                                                </h3>
                                                <p class="pb-2">
                                                    There are two primary audiences for a firm’s business plan

                                                </p>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped darkcolor-table">
                                                        <tr class="head-table text-white">
                                                            <th>
                                                                Audience
                                                            </th>
                                                            <th>
                                                                What They are Looking For

                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                A Firm’s Employees

                                                            </td>
                                                            <td>
                                                                A clearly written business plan helps the employees of a firm operate in sync and move forward in a consistent and purposeful manner.

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Investors and other external stakeholders

                                                            </td>
                                                            <td>
                                                                A firm’s business plan must make the case that the firm is a good use of an investor’s funds or the attention of others.

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>


                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-4">
                                                    Types of Business Plans

                                                </h3>

                                                <div class="text-center d-md-block d-none">
                                                    <img src="{{asset('static/media/website-images/mob.png')}}" class="img-fluid pt-4" alt="img" />
                                                </div>
                                                <div class="text-center d-md-none d-block">
                                                    <img src="{{asset('static/media/website-images/plan2.png')}}" class="img-fluid pt-4" alt="img" />
                                                </div>

                                                <div class="row pt-3">
                                                    <div class="col-md-8">
                                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                            Why do Business Plans fail?

                                                        </h3>
                                                        <p>
                                                            A business plan is likely to fail if:

                                                        </p>
                                                        <ul class="list-inline icons-flex-list ps-3">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                You do not stick to the plan




                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Leadership is not strong


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Miscalculate the financial projections


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Ignore market fluctuations


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Unable to pivot a new course as per your needs
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 text-center mt-md-4">
                                                        <img src="{{asset('static/media/website-images/fail.png')}}" class="img-fluid pt-5 xs-image-small" alt="img">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="contact2-tab-pane" role="tabpanel" aria-labelledby="contact2-tab" tabindex="0">
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 ">
                                                    Product Development

                                                </h3>
                                                <p>
                                                    “Product” is anything can be offered to satisfy the needs/demands of the market

                                                </p>
                                                <p>
                                                    Product development may include:

                                                </p>


                                                <ul class="list-inline icons-flex-list ps-3">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Renewing an old product



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Introducing an existing product to new market

                                                    </li>

                                                </ul>


                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-4">
                                                    What is a “new product”?


                                                </h3>
                                                <p>
                                                    Any product would be categorized as a new product if it has any of the following attributes:

                                                </p>
                                                <img src="{{asset('static/media/website-images/product3.png')}}" class="img-fluid pt-4" alt="img" />

                                                <div class="pt-3"></div>

                                                <h3 class="font-light head-h3 darkcolor pb-2 pt-5 text-center mt-4">
                                                    Product Development Process:



                                                </h3>

                                                <img src="{{asset('static/media/website-images/process.png')}}" class="img-fluid pt-4 mx-auto d-block" alt="img" />


                                                <h3 class="font-light head-h3 darkcolor pb-4 pt-5 mt-4">
                                                    Translation Of Idea Into Definite Product:



                                                </h3>
                                                <!--<img src="images/idea3.png" class="img-fluid pt-4 mx-auto d-block" alt="img" />-->


                                                <div class="custom-timeline-1">

                                                    <!-- timeline item 1 -->
                                                    <div class="row">
                                                        <!-- timeline item 1 left dot -->
                                                        <div class="col-auto text-center flex-column  d-flex">
                                                            <div class="row h-50">
                                                                <div class="col">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                            <h5 class="m-2">
                                                                <span class="badge rounded-pill bg-light border">&nbsp;</span>
                                                            </h5>
                                                            <div class="row h-50">
                                                                <div class="col border-end order">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <!-- timeline item 1 event content -->
                                                        <div class="col py-2">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Produce A Physical Prototype Based On Your Idea


                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 2 -->
                                                    <div class="row">
                                                        <div class="col-auto text-center flex-column d-flex">
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                            <h5 class="m-2">
                                                                <span class="badge rounded-pill bg-pink">&nbsp;</span>
                                                            </h5>
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <div class="col py-2">
                                                            <div class="card border-pink shadow">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Test The Prototype Product Under Internal/ External Parameters

                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 3 -->
                                                    <div class="row">
                                                        <div class="col-auto text-center flex-column  d-flex">
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                            <h5 class="m-2">
                                                                <span class="badge rounded-pill bg-light border">&nbsp;</span>
                                                            </h5>
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <div class="col py-2">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Target Focus Group Customers For Feedback

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 4 -->
                                                    <div class="row">
                                                        <div class="col-auto text-center flex-column  d-flex">
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                            <h5 class="m-2">
                                                                <span class="badge rounded-pill bg-pink">&nbsp;</span>
                                                            </h5>
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <div class="col py-2">
                                                            <div class="card border-pink shadow">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Make Adjustments According To The Feedback/Response



                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <div class="row">
                                                        <div class="col-auto text-center flex-column  d-flex">
                                                            <div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>
                                                            <h5 class="m-2">
                                                                <span class="badge rounded-pill bg-light border">&nbsp;</span>
                                                            </h5>
                                                            <!--<div class="row h-50">
                                                                <div class="col border-end">&nbsp;</div>
                                                                <div class="col">&nbsp;</div>
                                                            </div>-->
                                                        </div>
                                                        <div class="col py-2">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Launch The Modified Product



                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-5  mt-4">
                                                    Why Do You Need Product Modifications:


                                                </h3>
                                                <ul class="list-inline icons-flex-list ps-3">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        The product must be modified based on changing market demands.



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Any product that fails to offer latest technologies/services declines after a certain period of time,
                                                        or

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Simply gets replaced by a better product.


                                                    </li>


                                                </ul>


                                                <img src="{{asset('static/media/website-images/charts2.png')}}" class="img-fluid pt-4 mt-3 mx-auto d-block" alt="img" />



                                                <h3 class="font-light head-h3 darkcolor pb-2 pt-5  mt-4">
                                                    Advantages Of New Product Developments:


                                                </h3>
                                                <img src="{{asset('static/media/website-images/chart3.png')}}" class="img-fluid pt-4 mx-auto d-block" alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 pt-5">
                            <aside class="sidebar whitebox mt-5 mt-md-0 ps-xl-4">

                                <div class="mb-5">
                                    <video class="myvideo" controls loop>
                                        <source src="{{asset('static/media/website-images/video/video2.mp4')}}" type="video/mp4">


                                    </video>
                                </div>


                                <div class="widget heading_space shadow wow fadeIn" data-wow-delay="350ms">
                                    <h4 class="text-capitalize darkcolor bottom20 text-center text-md-start">Contact Us</h4>
                                    <div class="single_post d-flex bottom15">
                                        <a href="tel:923009247514" class=""><img src="{{asset('static/media/website-images/whatsapp.png')}}" alt="img" width="40"></a>
                                        <div class="text">
                                            <span>Phone</span>
                                            <a href="#">
                                                92 300 9247514
                                            </a>

                                        </div>
                                    </div>

                                    <div class="single_post d-flex mt-4">
                                        <a href="mailto:abc@website.com" class=""><img src="{{asset('static/media/website-images/email.png')}}" alt="img" width="40"></a>
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



    <!-- Contact US -->
    <section id="stayconnect" class=" position-relative">
        <div class="container">
            <div class="contactus-wrapp">
                <div class="row">
                    <!--<div class="col-md-12 col-sm-12">
                        <div class="heading-title wow fadeInUp text-center text-md-start" data-wow-delay="300ms">

                        </div>
                    </div>-->
                    <div class="col-md-12 col-sm-12">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;" method="post" action="{{route("submit_newsletter")}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-5">
                                    <h3 class="darkcolor pt-2">
                                        Subscribe for  <span class="defaultcolor">NewsLetter</span>
                                    </h3>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="d-none"></label>
                                        <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <button type="submit" class="button gradient-btn w-100" id="submit_btn">subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact US ends -->
@endsection

@section('extra_scripts')
@endsection
