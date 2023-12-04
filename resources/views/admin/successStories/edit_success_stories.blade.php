@extends('layouts.admin_master')
@section('title', 'Edit Success Story-')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="edit_success_story" name="edit_success_story" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="{{route('update_admin_success_story')}}">
                @csrf

<input type="hidden" value="{{$success_story->id}}" name="id">
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Success Story</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">

                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="name" id="name" value="{{$success_story->name}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Email</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="email" id="email" value="{{$success_story->email}}"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>

                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Phone Number</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="phone_number" id="phone_number" value="{{$success_story->phone_number}}"       />

                                        <!--begin::Select2-->
                                    </div>

                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">City</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="city" id="city" value="{{$success_story->city}}"
                                        />

                                        <!--begin::Select2-->
                                    </div>

                                </div>


                            </div>
                            <!--begin::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-7 justify-content-center">



                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Image</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="file" class="form-control form-control-solid"
                                               name="story_image" id="story_image"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>


                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="">Video Url</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="video_url" id="video_url" value="{{$success_story->video_url}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Video Title</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid"
                                               name="video_title" id="video_title" value="{{$success_story->video_title}}"
                                        />
                                        <!--end::Input-->
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Status</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-control form-control-solid"
                                                name="status" id="status" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="Publish" @if($success_story->is_active==1) selected @endif>Publish</option>
                                            <option value="Pending" @if($success_story->is_active==0) selected @endif >Pending</option>
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
                                            <span class="required">Video Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" id="video_story"
                                                  name="video_description" placeholder="" rows="3">{{$success_story->video_description}}</textarea>

                                        <!--end::Input-->
                                        <!--end::Input-->
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-7 justify-content-center">


                                <div class="col-lg-12 mb-3">
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label">
                                            <span class="required">Story</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <textarea class="form-control form-control-solid" id="story"
                                                  name="story" placeholder="" rows="3">{{$success_story->story}}"</textarea>

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
                        <a href="{{route("view_admin_success_stories")}}"
                           id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="edit_success_story_submit" class="btn btn-primary">
                            <span class="indicator-label">Update</span>
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
{{--    <script src="{{asset("static/js/custom/admin/success_story.js")}}"></script>--}}
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>

    <script>
        // Define form element
        const editSuccessStoryForm = document.getElementById('edit_success_story');

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        var editSuccessStoryValidator = FormValidation.formValidation(
            editSuccessStoryForm,
            {
                fields: {
                    'name': {
                        validators: {
                            notEmpty: {
                                message: 'Name is required'
                            }
                        }
                    },

                    'city': {
                        validators: {
                            notEmpty:{
                                message: 'City is required'
                            }
                        }
                    },
                    'story': {
                        validators: {
                            notEmpty:{
                                message: 'Story is required'
                            }
                        }
                    },
                    //
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );



        // Submit button handler
        const SuccessStoryEditSubmitButton = document.getElementById('edit_success_story_submit');
        SuccessStoryEditSubmitButton.addEventListener('click', function (e) {
            // Prevent default button action
            e.preventDefault();

            // Validate form before submit
            if (editSuccessStoryValidator) {
                editSuccessStoryValidator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        // Show loading indication
                        SuccessStoryEditSubmitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        SuccessStoryEditSubmitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            SuccessStoryEditSubmitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            SuccessStoryEditSubmitButton.disabled = false;

                            // Show popup confirmation
                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });

                            editSuccessStoryForm.submit(); // Submit form
                        }, 1500);
                    }
                });
            }
        });
    </script>
@endsection
