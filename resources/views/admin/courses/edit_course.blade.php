@extends('layouts.admin_master')
@section('title', 'Edit Training')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="edit_course_form" name="edit_course_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_admin_course')}}">
                @csrf
                <input type="hidden" name="id" value="{{$course->id}}" id="id"/>
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Edit Training</h2>
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
                                               name="title" id="title" value="{{$course->title}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Short Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="short_description" id="short_description" value="{{ $course->short_description }}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>


                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Thumbnail</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="image" id="image"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Course Category</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-control form-control-solid"
                                                name="cat_id" id="cat_id" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($course->cat_id==$category->id) selected @endif>{{$category->name}}</option>

                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Course Status</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-control form-control-solid"
                                                name="status" id="status" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="Publish" @if($course->is_active==1) selected @endif>Publish</option>
                                            <option value="Pending" @if($course->is_active==0) selected @endif >Pending</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-7 ">

                                <div class="col-lg-12 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea id="description" name="description" class="tox-target">{{ $course->description }}</textarea>
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
                        <a href="{{url()->previous()}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="edit_course_submit" class="btn btn-primary">
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
    <script src="{{asset("static/js/custom/admin/course.js")}}"></script>
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    <script src="{{ asset('static/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        var options = {
            selector: "#description",plugins: [
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
    </script>
@endsection
