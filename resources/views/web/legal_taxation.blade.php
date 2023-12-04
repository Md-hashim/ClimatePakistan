<!DOCTYPE html>
<html lang="en">
<head>
    <title>Legal and Taxation - WETDAP</title>
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
Climate Across the Globe                    </h2>
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
{{--                            FBR Registration--}}
{{--                        </button>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">--}}
{{--                            SECP Registration--}}
{{--                        </button>--}}
{{--                    </li>--}}


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
{{--                                                Why To Register With FBR?--}}



{{--                                            </h3>--}}


{{--                                            <ul class="list-inline icons-flex-list">--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    After registration, Federal Board of Revenue (FBR) put you on the list of Active Taxpayers List.--}}


{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    After getting your name included in ATL, you will get the privilege of paying lower taxes than the non-filers on financial transactions including different types of bank transactions, sale/purchase of property and vehicle, etc.--}}



{{--                                                </li>--}}

{{--                                            </ul>--}}

{{--                                            <h3 class="font-light head-h3 darkcolor pb-3 pt-5">--}}
{{--                                                Is It Required For Business?--}}


{{--                                            </h3>--}}

{{--                                            <ul class="list-inline icons-flex-list">--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Yes, FBR registration is mandatory for registration of business/company.--}}


{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    It is also mandatory for TDAP collaborated trade exhibitions/fairs.--}}


{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    FBR registration legitimates your business and enhances credibility--}}


{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    You can avail multiple FBR schemes for duty drawback if you are registered--}}


{{--                                                </li>--}}

{{--                                            </ul>--}}

{{--                                            <h3 class="font-light head-h3 darkcolor pb-3 pt-5">--}}
{{--                                                What Should We Register ?--}}



{{--                                            </h3>--}}
{{--                                            <p>--}}
{{--                                                Register your company with Federal Board of Revenue (FBR)  FOR:--}}

{{--                                            </p>--}}
{{--                                            <ul class="list-inline icons-flex-list">--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    National Tax Number (NTN)--}}


{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                    Sales Tax Registration Number (STRN)--}}

{{--                                                </li>--}}

{{--                                            </ul>--}}


{{--                                            <div class="custom-timeline-1 pt-4 ms-4">--}}

{{--                                                <!-- timeline item 1 -->--}}
{{--                                                <!--/row-->--}}
{{--                                                <!-- timeline item 2 -->--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-auto text-center flex-column d-flex">--}}
{{--                                                        <!--<div class="row h-50">--}}
{{--                                                            <div class="col border-end">&nbsp;</div>--}}
{{--                                                            <div class="col">&nbsp;</div>--}}
{{--                                                        </div>-->--}}
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
{{--                                                                    Commercial exporters are not required to register for STRN. But if you pay the sale tax on the goods from local market, it will be better for you to get yourself registered with sales tax department. So that, you may claim your input tax deducted on your purchases.--}}

{{--                                                                </p>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}
{{--                                                <!-- timeline item 3 -->--}}
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
{{--                                                                    Once registered in sales tax department, you will be obligated to file the monthly sales tax return whether you have been involved in any sales tax activity or not--}}

{{--                                                                </p>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!--/row-->--}}

{{--                                            </div>--}}
{{--                                            <!--container-->--}}

{{--                                            <div class="row pt-3">--}}
{{--                                                <div class="col-md-8">--}}
{{--                                                    <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-3">--}}
{{--                                                        How To Register?--}}


{{--                                                    </h3>--}}
{{--                                                    <p>--}}
{{--                                                        Apply for a National Tax Number (NTN) and Sales Tax Registration Number (STRN)  at the nearby Regional Tax Office (RTO) of FBR.--}}


{{--                                                    </p>--}}
{{--                                                    <p>--}}
{{--                                                        Documents required to apply for NTN are:--}}

{{--                                                    </p>--}}
{{--                                                    <ul class="list-inline icons-flex-list ps-3">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            NTN form.--}}



{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            Registration Proof.--}}


{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            Memorandum and Articles of Association.--}}



{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            Bank account number.--}}

{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            Copies of National Identity Cards of companies’ Directors.--}}


{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                            Evidence of business address.--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-4 text-center mt-md-5">--}}

{{--                                                    <img src="{{ asset("static/web/images/phone.png")}}" class="img-fluid pt-5 ps-md-5 xs-image-small" alt="img">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <h3 class="font-light head-h3 darkcolor pb-3 pt-5">--}}
{{--                                                Integration with SECP:--}}



{{--                                            </h3>--}}
{{--                                            <p>--}}
{{--                                                SECP data is integrated with FBR for registration of NTN. Information provided by applicant during filling incorporation process is forwarded to FBR for registration of NTN. NTN is issued by FBR if complete/accurate information has been provided by the applicant.--}}

{{--                                            </p>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">--}}
{{--                                <div class="row pt-5">--}}
{{--                                    <div class="col-md-12">--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-8">--}}

{{--                                                <h3 class="font-light head-h3 darkcolor pb-3 ">--}}
{{--                                                    Why To Register With SECP?--}}

{{--                                                </h3>--}}

{{--                                                <p>--}}
{{--                                                    Securities Exchange Commission of Pakistan (SECP) is a financial regulatory body with a mandate of:--}}

{{--                                                </p>--}}


{{--                                                <ul class="list-inline icons-flex-list pt-2">--}}
{{--                                                    <li>--}}
{{--                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                        To regulate corporate sector & capital market--}}


{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                        Regulation of insurance companies & non-banking finance companies--}}

{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                        Over signht of external service providers--}}


{{--                                                    </li>--}}

{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4 text-center">--}}
{{--                                                <img src="{{ asset("static/web/images/regi.png")}}" class="img-fluid pt-md-4 pt-5 ps-lg-4 xs-image-small" alt="img">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-md-0 mt-3">--}}
{{--                                            Is it required for business?--}}


{{--                                        </h3>--}}




{{--                                        <ul class="list-inline icons-flex-list">--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                Yes, SECP registration is mandatory for registration of business/company.--}}


{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                It is also mandatory for TDAP collaborated trade exhibitions/fairs.--}}

{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                SECP registration legitimates your business and enhances credibility--}}


{{--                                            </li>--}}

{{--                                        </ul>--}}

{{--                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-md-0 mt-3">--}}
{{--                                            What Are The Pre-Requisites ?--}}



{{--                                        </h3>--}}
{{--                                        <p>--}}
{{--                                            To register your company keep these points in mind:--}}

{{--                                        </p>--}}
{{--                                        <ul class="list-inline icons-flex-list ps-3">--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                It can be Sole Proprietorship or a Partnership firm or a Company.--}}


{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                Name and logo to be decided.--}}

{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                A company account with an authorized bank.--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}

{{--                                        <p class="pt-4">--}}
{{--                                            Open an office with all required facilities:--}}

{{--                                        </p>--}}
{{--                                        <ul class="list-inline icons-flex-list ps-3">--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                Valid postal address--}}


{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                Landline telephone connection and fax number--}}


{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                Office furniture and equipment.--}}
{{--                                            </li>--}}

{{--                                        </ul>--}}


{{--                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-md-0 mt-3">--}}
{{--                                            How To Register?--}}


{{--                                        </h3>--}}

{{--                                        <div id="ourfaq" class=" position-relative pt-3">--}}
{{--                                            <div id="accordion">--}}

{{--                                                <div class="card">--}}
{{--                                                    <div class="card-header">--}}
{{--                                                        <a style="font-size:16px" class="collapsed card-link darkcolor" data-bs-toggle="collapse" href="#collapseSix">--}}
{{--                                                            Registration Process--}}

{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div id="collapseSix" class="collapse" data-parent="#accordion">--}}
{{--                                                        <div class="card-body pt-4 pb-5">--}}
{{--                                                            <p>--}}
{{--                                                                Online registration process on SECP e-services web page:--}}

{{--                                                            </p>--}}
{{--                                                            <ul class="list-inline icons-flex-list ps-3">--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Check the availability of name on SECP website.--}}


{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Upon availability, create an account and reserve the name.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Avoid using prohibited names for your company. Check it from SECP website’s prohibited words list.--}}

{{--                                                                </li>--}}

{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    You will need a valid CNIC in case of Pakistani National and a valid passport if you are a foreigner.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Select ‘fast track registration services’ (FTRS) for same-day registration.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Fill out the online form and submit user registration.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Validate security codes received via SMS or email to generate PIN.--}}


{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Pay the user registration fee online through your credit/debit card, or through challan in any of the selected branches of MCB or UBL.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    You will receive a confirmation email from SECP within a day.--}}

{{--                                                                </li>--}}

{{--                                                            </ul>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="card">--}}
{{--                                                    <div class="card-header">--}}
{{--                                                        <a style="font-size:16px" class="collapsed card-link darkcolor" data-bs-toggle="collapse" href="#collapseSeven">--}}
{{--                                                            Documents Required--}}

{{--                                                        </a>--}}
{{--                                                    </div>--}}
{{--                                                    <div id="collapseSeven" class="collapse" data-parent="#accordion">--}}
{{--                                                        <div class="card-body pt-4 pb-5">--}}
{{--                                                            <p>--}}
{{--                                                                Documents required to register a company in Pakistan:--}}


{{--                                                            </p>--}}
{{--                                                            <ul class="list-inline icons-flex-list ps-3">--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Memorandum of Association and Articles of Association--}}


{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    CNIC Copies of Directors, CEO, and Nominee (for the single-member company) or copies of passport in case of a foreigner.--}}


{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    NOC or letter of intent/ license from concerned authorities if you want to register some specialized business.--}}

{{--                                                                </li>--}}

{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    In the case of foreign company incorporation, details such as List and details of Directors and their nationality, company profile, Company charter’s certified copy, Memorandum of Association and Articles of Association.--}}

{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                                    Authorization of Subscribers for filing of documents. • Registration/ Filing fee.--}}

{{--                                                                </li>--}}


{{--                                                            </ul>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--                                        <h3 class="font-light head-h3 darkcolor pb-3 pt-5 mt-md-0 mt-3">--}}
{{--                                            Confirmation of registration:--}}


{{--                                        </h3>--}}
{{--                                        <p>--}}
{{--                                            After submission of documents:--}}

{{--                                        </p>--}}
{{--                                        <ul class="list-inline icons-flex-list">--}}
{{--                                            <li class="pb-1">--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                SECP will evaluate and validate all the submitted documents. National Institutional Facilitation Centre (NIFC) – SECP will then grant a digital signature or company seal.--}}

{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <i class="fa fa-check-circle defaultcolor pe-1"></i>--}}
{{--                                                All company directors’ signatures are needed to receive this company seal. You will get a certificate of incorporation from SECP if all your documents are valid. It will be issued to you in the physical form or electronically, you can now start your business.--}}


{{--                                            </li>--}}


{{--                                        </ul>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


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
