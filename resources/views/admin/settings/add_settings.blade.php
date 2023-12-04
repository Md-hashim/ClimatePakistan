@extends('layouts.admin_master',$user)
@section('title', 'Site Settings')

@section('main_content')
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--Begin::Form-->
            <form id="re_add_client_form" name="re_add_client_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_admin_site_settings')}}">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <input type="hidden" value="{{$setting->id}}" name="id" id="id"/>
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
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
                                            <span class="">Tag Line</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="tag_line" id="tag_line" value="{{$setting->tag_line}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                                                <div class="col-lg-4 mb-3">
                                                                    <div class="fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-bold form-label">
                                                                            <span class="">Phone Number</span>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-solid"
                                                                               name="phone_number" id="phone_number" value="{{$setting->phone_number}}"
                                                                        />
                                                                        <!--end::Input-->
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-4 mb-3">
                                                                    <div class="fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="fs-6 fw-bold form-label">
                                                                            <span class="">Email Address</span>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <input type="text" name="email_address" id="email_address"
                                                                               class="form-control form-control-solid" value="{{$setting->email_address}}">
                                                                    </div>
                                                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-start">


                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Meta Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_title" id="meta_title" value="{{$setting->meta_title}}"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Meta Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="meta_description" id="meta_description" value="{{$setting->meta_description}}"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                            </div>
                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Social Links</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row mb-7 justify-content-center">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">FaceBook</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="facebook" id="facebook" value="{{$setting->facebook}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Instagram</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="instagram" id="instagram" value="{{$setting->instagram}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Twitter</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="twitter" id="twitter" value="{{$setting->twitter}}"/>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-7 justify-content-start">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">LinkedIn</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="linkedIn" id="linkedIn" value="{{$setting->linkedIn}}"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">TikTok</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="tiktok_link" id="tiktok_link" placeholder="Tiktok link" value="{{$setting->tiktok}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Youtube</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="youtube" id="youtube" placeholder="Youtube link" value="{{$setting->youtube}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Numbers</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row mb-7 justify-content-center">
                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Women Empowered</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-solid"
                                               name="women_empowered" id="women_empowered" value="{{$setting->women_empowered}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Our Followers</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-solid"
                                               name="our_followers" id="our_followers" value="{{$setting->our_followers}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Registered Chambers</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-solid"
                                               name="registered_chambers" id="registered_chambers" value="{{$setting->registered_chambers}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Trainings</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" class="form-control form-control-solid"
                                               name="trainings" id="trainings" value="{{$setting->trainings}}"/>
                                        <!--end::Input-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

{{--                    <div class="card card-flush py-4">--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <div class="card-header">--}}
{{--                            <div class="card-title">--}}
{{--                                <h2>Website Colors</h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="card-body pt-0">--}}
{{--                            <div class="row mb-7 justify-content-center">--}}
{{--                                <div class="col-lg-4 mb-3">--}}
{{--                                    <div class="fv-row">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="fs-6 fw-bold form-label">--}}
{{--                                            <span class="">Primary Color</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input type="color" class="form-control form-control-solid"--}}
{{--                                               name="primary_color" id="primary_color" value="{{$setting->primary_color}}"/>--}}
{{--                                        <!--end::Input-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 mb-3">--}}
{{--                                    <div class="fv-row">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="fs-6 fw-bold form-label">--}}
{{--                                            <span class="">Secondary Color</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <input type="color" class="form-control form-control-solid"--}}
{{--                                               name="secondary_color" id="secondary_color" value="{{$setting->secondary_color}}"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-4 mb-3">--}}
{{--                                    <div class="fv-row">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="fs-6 fw-bold form-label">--}}
{{--                                            <span class="">Text Color</span>--}}
{{--                                        </label>--}}
{{--                                        <!--end::Label-->--}}
{{--                                        <input type="color" class="form-control form-control-solid"--}}
{{--                                               name="text_color" id="text_color" value="{{$setting->text_color}}"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Website Media</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row mb-7 justify-content-center">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Logo Large</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="logo_large" id="logo_large"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">logo Small</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="logo_small" id="logo_small"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Fav Icon</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="fav_icon" id="fav_icon"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-7 justify-content-start">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Banner Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="banner_image" id="banner_image"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Video</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="video" id="video"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Landing Page Type</span>
                                        </label>
                                        <!--end::Label-->
                                        <select class="form-select form-control form-control-solid"
                                                name="landing_page_type" id="landing_page_type" data-control="select2"
                                                data-placeholder="Select an option">
                                            <option></option>
                                            <option value="Banner" @if ($setting->landing_page_type)==="Banner" selected @endif>Banner</option>
                                            <option value="Slider" @if ($setting->landing_page_type)==="Slider" selected @endif>Slider</option>
                                            <option value="Video"@if ($setting->landing_page_type)==="Video" selected @endif>Video</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Announcement</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row mb-7">
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Announcement Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="announcement_image" id="announcement_image" accept="image/*"/>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Announcement Url</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="announcement_url" id="announcement_url" value="{{$setting->announcement_url}}" />
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Status</span>
                                        </label>
                                        <!--end::Label-->
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="true" id="announcementSwitch" name="announcementSwitch"
                                            @if($setting->announcement_status==1) checked="checked" @endif/>
                                            <label class="form-check-label" for="announcementSwitch">
                                                Show Announcement
                                            </label>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>

                    <!--begin::Section 1 options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Footer Settings</h2>
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
                                            <span class="required">Section 1</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea id="section_1_content" name="section_1_content" class="tox-target">
    {{ $setting->footer_section_1 }}
</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Section 2</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea id="section_2_content" name="section_2_content" class="tox-target">
 {{ $setting->footer_section_2 }}
</textarea>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Section 1 options-->

                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{url()->previous()}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="re_add_client_submit" class="btn btn-primary">
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
    <!--end::Post-->
    <!--end::Post-->
@endsection

@section('extra_scripts')

    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
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


            if (KTApp.isDarkMode()) {
                options["skin"] = "oxide-dark";
                options["content_css"] = "dark";
            }

            tinymce.init(options);
            tinymce.init(options2);
        </script>
@endsection
