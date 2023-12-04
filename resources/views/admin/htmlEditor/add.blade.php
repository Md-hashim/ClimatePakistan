@extends('layouts.admin_master')
@section('title', 'HTMl-Editor')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="page_builder_form" name="page_builder_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('submit_html_editor')}}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Page Builder</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
{{--                            <div class="row mb-7 justify-content-center">--}}

{{--                                <div class="col-lg-6 mb-3">--}}
{{--                                    <div class="fv-row">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="fs-6 fw-bold form-label">--}}
{{--                                            <span class="required">Page Title</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input type="text" class="form-control form-control-solid"--}}
{{--                                               name="page_title" id="page_title"/>--}}
{{--                                        <!--end::Input-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-lg-6 mb-3">--}}
{{--                                    <div class="fv-row">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="fs-6 fw-bold form-label">--}}
{{--                                            <span  class="required">Slug</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Select2-->--}}
{{--                                        <input type="text" class="form-control form-control-solid"--}}
{{--                                               name="slug" id="slug"--}}
{{--                                        />--}}

{{--                                        <!--begin::Select2-->--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}

                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Page Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="page_title" id="page_title"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Meta Tag</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_tag" id="meta_tag"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Meta Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_description" id="meta_description"
                                        />

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
                                            <span class="required">HTML</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" id="html"
                                                  name="html" placeholder="" rows="12"></textarea>
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
                        <a href="#"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="add_page_builder_submit" class="btn btn-primary">
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
    <script src="{{asset("static/js/custom/admin/page_builder.js")}}"></script>
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>

@endsection
