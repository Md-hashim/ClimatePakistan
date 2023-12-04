@extends('layouts.admin_master')
@section('title', 'Events')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="add_event_form" name="add_event_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('submit_event')}}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Event</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="title" id="title"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Date</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="datetime-local" class="form-control form-control-solid"
                                               name="date" id="date"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>

                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Start Time</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="datetime-local" class="form-control form-control-solid"
                                               name="start_time" id="start_time"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">End Time</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="datetime-local" class="form-control form-control-solid"
                                               name="end_time" id="end_time"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Images</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="image" id="image"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Type</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select form-control form-control-solid"
                                                name="type" id="type" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="Stories" >Stories</option>
                                            <option value="Educational" >Educational</option>
                                            <option value="Scientific" >Scientific</option>
                                        </select>

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-12 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" id="description"
                                                  name="description" placeholder="" rows="3"></textarea>
                                        <!--end::Input-->
                                    </div>
                                </div>

                            </div>

                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route("view_events")}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="add_event_submit" class="btn btn-primary">
                            <span class="indicator-label">Save</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>

            </form>
            <!--end::Form-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('extra_scripts')
    <script src="{{asset("static/js/custom/admin/event.js")}}"></script>
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>

@endsection
