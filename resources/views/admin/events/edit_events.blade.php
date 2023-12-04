@extends('layouts.admin_master')
@section('title', 'Edit Events')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="edit_event_form" name="edit_event_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_event')}}">
                @csrf

                <input type="hidden" name="id" id="id" value="{{$event->id}}"/>
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
                                               name="title" id="title" value="{{$event->title}}"/>
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
                                               name="date" id="date" value="{{$event->date}}"
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
                                               name="start_time" id="start_time" value="{{$event->start_time}}"/>
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
                                               name="end_time" id="end_time" value="{{$event->end_time}}"
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
                                            <span class="">Type</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select form-control form-control-solid"
                                                name="type" id="type" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="Stories" @if($event->type=="stories") selected @endif >Stories</option>
                                            <option value="Educational" @if($event->type=="Educational") selected @endif >Educational</option>
                                            <option value="Scientific" @if($event->type=="Scientific") selected @endif >Scientific</option>
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
                                                  name="description" placeholder="" rows="3">{{$event->description}}</textarea>
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
                        <button type="submit" id="edit_event_submit" class="btn btn-primary">
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
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    <script src="{{asset("static/js/custom/admin/event.js")}}"></script>
@endsection
