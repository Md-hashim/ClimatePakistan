@extends('layouts.admin_master')
@section('title', 'Course Item')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="add_courses_form" name="add_courses_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_wediv_settings')}}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General Settings</h2>
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
                                            <span class="required">Page Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="page_title" id="page_title" value="{{ $weDiv->page_title }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Banner Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="banner_image" id="banner_image"
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
                                            <span class="required">Meta Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_title" id="meta_title" value="{{ $weDiv->meta_title }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Meta Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_description" id="meta_description"
                                               value="{{ $weDiv->meta_description }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                            </div>


                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->

                    <!--begin::Section 1 options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Vision Settings</h2>
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
                                            <span class="required">Section Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="section_1_title" id="section_1_title"
                                               value="{{ $weDiv->section_1_title }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Section Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="section_1_image" id="section_1_image"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">
<textarea id="section_1_content" name="section_1_content" class="tox-target">

    {{ $weDiv->section_1_content }}
</textarea>

                            </div>


                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Section 1 options-->

                    <!--begin::Section 2 options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Mission Settings</h2>
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
                                            <span class="required">Section Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="section_2_title" id="section_2_title"
                                               value=" {{ $weDiv->section_2_title }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Section Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="section_2_image" id="section_2_image"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">
<textarea id="section_2_content" name="section_2_content" class="tox-target">
 {{ $weDiv->section_2_content }}
</textarea>

                            </div>


                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Section 2 options-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{url()->previous()}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="add_courses_submit" class="btn btn-primary">
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
    <script src="{{ asset('static/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        var options = {
            selector: "#section_1_content",plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount '

            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | link image' ,
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        };
        var options2 = {
            selector: "#section_2_content",plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount '

            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | link image' ,
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        };
        var options3 = {
            selector: "#section_3_content",plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount '

            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | link image' ,
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        };
        var options4 = {
            selector: "#section_4_content",plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount '

            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | link image' ,
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            },
        };

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
        tinymce.init(options2);
        tinymce.init(options3);
        tinymce.init(options4);
    </script>
@endsection
