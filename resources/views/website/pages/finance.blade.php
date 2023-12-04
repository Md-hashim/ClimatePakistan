@extends('layouts.wetdp_master')
@section('title', 'Home')

@section('main_content')
    <section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{asset('static/media/website-images/bg-1.jpg')}}')">
        <div class="overlay overlay-dark opacity-7"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="page-titles whitecolor text-center padding_top padding_bottom">
                        <h2 class="font-light">
                            Financing & Funding
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
                                Alternative Funding
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                Cash Flow Management
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                Loans & Grants
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
                                                    What is  Alternative Funding?


                                                </h3>
                                                <p>
                                                    Alternative funding can be defined as:

                                                </p>
                                                <p>
                                                    “Non-traditional form of funding that allows small business owners to get cash flow without traditional banking assistance”

                                                </p>

                                                <p>
                                                    It includes:

                                                </p>

                                                <ul class="list-inline icons-flex-list">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Loans/Grants


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Non-Banking Finance Companies



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Venture Investments


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Competitive Platforms
                                                    </li>
                                                </ul>

                                                <h3 class="font-light head-h3 darkcolor pb-4 mt-3 pt-5">
                                                    Reasons To Pursue Alternative Sources


                                                </h3>




                                                <div class="custom-timeline-1">

                                                    <!-- timeline item 1 -->
                                                    <div class="row no-gutters">
                                                        <div class="col-sm"> <!--spacer--> </div>
                                                        <!-- timeline item 1 center dot -->
                                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                                            <div class="row h-50">
                                                                <div class="col">&nbsp;</div>
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
                                                        <!-- timeline item 1 event content -->
                                                        <div class="col-sm py-2">
                                                            <div class="card shadow">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        Lack of assets to offer as collateral for loans


                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 2 -->
                                                    <div class="row no-gutters">
                                                        <div class="col-sm py-2">
                                                            <div class="card border-pink shadow">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        Less credit history
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
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
                                                        <div class="col-sm"> <!--spacer--> </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 3 -->
                                                    <div class="row no-gutters">
                                                        <div class="col-sm"> <!--spacer--> </div>
                                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
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
                                                        <div class="col-sm py-2">
                                                            <div class="card shadow">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        High interest rates on traditional sources

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                    <!-- timeline item 4 -->

                                                    <div class="row no-gutters">
                                                        <div class="col-sm py-2">
                                                            <div class="card border-pink shadow">
                                                                <div class="card-body">
                                                                    <p class="card-text">
                                                                        Comparatively less time consuming process

                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
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
                                                        <div class="col-sm"> <!--spacer--> </div>
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <div class="col-sm"> <!--spacer--> </div>
                                                        <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
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
                                                        <div class="col-sm py-2">
                                                            <div class="card shadow">
                                                                <div class="card-body">

                                                                    <p class="card-text">
                                                                        Comparatively less documentation required


                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/row-->
                                                </div>

                                                <h3 class="font-light head-h3 darkcolor pb-3 mt-3 pt-5">
                                                    Alternative Funding Options:


                                                </h3>

                                                <div class="d-flex list-ul1 list-ul1-small  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        BUSINESS GRANTS


                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                ISSUED BY STATE/GOVERNMENT WITHOUT ANY OBLIGATIONS OF REPAYMENT


                                                            </li>

                                                        </ul>
                                                    </span>


                                                </div>
                                                <div class="d-flex list-ul1  list-ul1-small align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        VENTURE CAPITALISTS



                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                COMPANIES/INDIVIDUALS THAT INVEST IN SMALL BUSINESS IN RETURN OF SOME SHARE/PROFIT


                                                            </li>

                                                        </ul>
                                                    </span>


                                                </div>
                                                <div class="d-flex list-ul1 list-ul1-small  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        CROWD FUNDING



                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                Gaining small amounts of capital from large number of individuals

                                                            </li>

                                                        </ul>
                                                    </span>


                                                </div>
                                                <div class="d-flex list-ul1 list-ul1-small align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        PITCH COMPETITIONS


                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                BUSINESS PLANS ARE PROPOSED TO THE INVESTORS TO GAIN PITCH


                                                            </li>

                                                        </ul>
                                                    </span>


                                                </div>

                                                <div class="d-flex list-ul1 list-ul1-small  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        ONLINE LENDING


                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                MANY COMPANIES/INDIVIDUALS LEND CAPITAL THROUGH ONLINE PLATFORMS


                                                            </li>

                                                        </ul>
                                                    </span>


                                                </div>




                                                <h3 class="font-light head-h3 darkcolor pb-3 mt-3 pt-5">
                                                    Benefits Of Alternative Funding

                                                </h3>

                                                <ul class="list-inline icons-flex-list">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Low Interest Rates


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Flexible Terms & Conditions


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Longer Repayment Duration


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Fast Approval

                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Transparent Pricing


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
                                                <h3 class="font-light head-h3 darkcolor pb-4">
                                                    What Is Cash Flow?

                                                </h3>

                                                <p class="f600">
                                                    Cash flow is defined as:


                                                </p>
                                                <p>
                                                    “The amount of money entering and leaving your business over a given period of time”

                                                </p>
                                                <p class="f600">
                                                    Cash flow management is defined as:

                                                </p>
                                                <p>
                                                    “Monitoring/ management of the money entering and leaving your business over a given period of time”

                                                </p>

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-4 mt-4">
                                                    Why Is It Important?


                                                </h3>

                                                <ul class="list-inline icons-flex-list">
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It gives a picture of cost vs revenue



                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        Keeps a check of paying bills whilst making profit


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It balances the timing and amount of cost and revenue

                                                    </li>

                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It helps to forecast potential risks in cash flow


                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                        It helps in drafting future plans for the company
                                                    </li>

                                                </ul>


                                                <h3 class="font-light head-h3 darkcolor pb-2 pt-5 mt-1">
                                                    Objective Of Cash Flow Management

                                                </h3>


                                                <div class="d-flex list-ul1 list-ul1-small  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        MAXIMIZE VALUE OF FUNDS


                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                INVEST IN LONG TERM PROJECTS



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                DIVERSIFY MARKET & CUSTOMERS



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                MONITOR COST PER UNIT


                                                            </li>
                                                        </ul>
                                                    </span>

                                                </div>
                                                <div class="d-flex list-ul1 list-ul1-small  align-items-center w-100 mt-4">
                                                    <span class="u1">
                                                        MINIMIZE COST OF FUNDS



                                                    </span>
                                                    <span class="u2 w-100 bglight">
                                                        <ul class="list-inline icons-flex-list text-lowercase">
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                ENHANCE PRODUCTIVITY




                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                USE COST EFFECTIVE METHODS



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check defaultcolor me-2 xs-size"></i>
                                                                INVEST IN TECHNOLOGY
                                                            </li>
                                                        </ul>
                                                    </span>

                                                </div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-4 mt-4">
                                                    Cash Inflow Vs Outflow:


                                                </h3>

                                                <div class="row">
                                                    <div class="col-lg-6">


                                                        <h4 class="pb-2 pt-2">

                                                            Cash Inflow


                                                        </h4>

                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Payment From Customers

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Bank loans

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Interest On Savings/Investments


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Shareholder Investments
                                                            </li>



                                                        </ul>
                                                    </div>


                                                    <div class="col-lg-6 pt-lg-0 pt-4">


                                                        <h4 class="pb-2 pt-2">

                                                            Cash Outflow


                                                        </h4>

                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Purchase Of Raw Materials


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Salaries Of Employees


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Purchase Of Fixed Assets



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Loan Payments

                                                            </li>

                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Taxes
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>


                                                <div class="row pt-3">
                                                    <div class="col-md-8">
                                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">
                                                            How To Improve Cash Flow?

                                                        </h3>
                                                        <p>
                                                            Following are some of the ways to manage your cash flows effectively:


                                                        </p>
                                                        <ul class="list-inline icons-flex-list ps-3">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Receive payments from customers on time


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Negotiate a right deal for investments


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Pay off debts timely to avoid debt cycle



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Timely order stock to avoid burden



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Check the market fluctuations while purchasing raw material

                                                            </li>

                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Use marketing tools to make profit
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 text-center mt-md-5">
                                                        <img src="{{asset('static/media/website-images/cash.png')}}" class="img-fluid pt-5 xs-image-small" alt="img">
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                    <div class="row pt-5">
                                        <div class="col-md-12">
                                            <div>
                                                <h3 class="font-light head-h3 darkcolor pb-3 ">
                                                    Loans & Grants


                                                </h3>

                                                <p>
                                                    <b> Loans </b> are borrowed from financial institutes or individuals, with an intent of repayment with interest.
                                                </p>
                                                <p>
                                                    <b> Grants </b> are financial awards, given to a company/individual to achieve his goal, with no intention of repayment
                                                </p>

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-4 mt-4">
                                                    Why Loan ?


                                                </h3>

                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <h4 class="pb-2 pt-2">

                                                            Advantages


                                                        </h4>
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Frequently available through various <span class="d-xl-block"></span> platforms




                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Less competition while applying for loan



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                More credit limit



                                                            </li>

                                                        </ul>

                                                    </div>

                                                    <div class="col-lg-6 pt-lg-0 pt-4">

                                                        <h4 class="pb-2 pt-2 ps-xl-4">
                                                            Disadvantages



                                                        </h4>
                                                        <ul class="list-inline icons-flex-list ps-xl-4">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Less flexible terms of conditions



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Interest rates applied


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Must be repaid


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Shareholder Investments
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>

                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-4 mt-4">
                                                    Why Grant?



                                                </h3>

                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <h4 class="pb-2 pt-2">

                                                            Advantages


                                                        </h4>
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                No obligation to repay



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                No interest rates applied



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Credibility due to competitive nature


                                                            </li>

                                                        </ul>

                                                    </div>

                                                    <div class="col-lg-6 pt-lg-0 pt-4">

                                                        <h4 class="pb-2 pt-2 ps-xl-4">
                                                            Disadvantages



                                                        </h4>
                                                        <ul class="list-inline icons-flex-list ps-xl-4">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Limited opportunities





                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                Limited credit available

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                More expectations for outcome

                                                            </li>


                                                        </ul>

                                                    </div>
                                                </div>


                                                <h3 class="font-light head-h3 darkcolor pb-3 pt-4 mt-4">
                                                    Options Available

                                                </h3>

                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <h4 class="pb-2 pt-2">

                                                            Loan


                                                        </h4>
                                                        <ul class="list-inline icons-flex-list">
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Banks



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Non-Banking Financial Companies


                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle text-success pe-1"></i>
                                                                Individuals/Entities

                                                            </li>

                                                        </ul>

                                                    </div>

                                                    <div class="col-lg-6 pt-lg-0 pt-4">

                                                        <h4 class="pb-2 pt-2 ps-xl-4">
                                                            Grants



                                                        </h4>
                                                        <ul class="list-inline icons-flex-list ps-xl-4">
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                HEC



                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                USAID

                                                            </li>
                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                SMEDA

                                                            </li>

                                                            <li>
                                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>
                                                                STATE BANK
                                                            </li>
                                                        </ul>

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
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return true;" method="post" action="{{route("submit_newsletter")}}">
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
