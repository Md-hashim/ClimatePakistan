@extends('layouts.admin_master')
@section('title', 'Gallery')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="edit_gallery_form" name="edit_gallery_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_admin_gallery')}}">
                @csrf
<input type="hidden" name="id" id="id" value="{{$gallery->id}}">
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Gallery</h2>
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
                                            <span class="required">Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="title" id="title" value="{{$gallery->title}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="description" id="description" value="{{$gallery->description}}"
                                        />
                                        <!--begin::Select2-->
                                    </div>

                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Type</span>
                                        </label>
                                        <select class="form-select form-control form-control-solid"
                                                name="gallery_type" id="gallery_type" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="image" @if($gallery->type=="image") selected @endif>Image</option>
                                            <option value="video" @if($gallery->type=="video") selected @endif>Video</option>
                                        </select>
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-6 mb-3" id="image">
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
                                    <a href="{{asset($gallery->image)}}" target="_blank" style="margin-top: 30px;color: blue">View Image</a>
                                </div>

                                <div class="col-lg-6 mb-3" id="video">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Video</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="video" id="video" required
                                        />
                                        <!--end::Input-->
                                    </div>
                                    <a href="{{asset($gallery->video)}}" target="_blank" style="margin-top: 30px;color: blue">View Video</a>
                                </div>


                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Gallery Category</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-control form-control-solid"
                                                name="cat_id" id="cat_id" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if ($gallery->cat_id === $category->id) selected @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>
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
                        <button type="submit" id="edit_gallery_submit" class="btn btn-primary">
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

    <script>
        $(document).ready(function() {

            function toggleType(selectedValue) {
                if (selectedValue === 'image') {
                    $('#image').show();
                    $('#video').hide();
                } else if (selectedValue === 'video') {
                    $('#video').show();
                    $('#image').hide();
                }
            }

            // Call on page load
            toggleType("{{ $gallery->type }}");

            // Bind to the change event of the dropdown
            $('#gallery_type').on('change', function() {
                toggleType($(this).val());
            });
        });

    </script>

    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    <script src="{{asset("static/js/custom/admin/gallery.js")}}"></script>


@endsection
