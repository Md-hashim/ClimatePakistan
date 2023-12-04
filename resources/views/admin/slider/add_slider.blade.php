@extends('layouts.admin_master')
@section('title', 'Slider')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="add_slider_form" name="add_slider_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('submit_slider_data')}}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Slider</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="image" id="image"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="title" id="title"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Category</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select form-control form-control-solid"
                                                name="category" id="category" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option>Partner</option>
                                            <option>Main Slider</option>


                                        </select>

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-12 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <textarea class="form-control form-control-solid" id="description"
                                                  name="description" placeholder="" rows="3"></textarea>

                                        <!--begin::Select2-->
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
                        <a href="{{route("view_admin_slider")}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="add_slider_submit" class="btn btn-primary">
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

    <script src="{{asset("static/js/custom/admin/slider.js")}}"></script>

@endsection
