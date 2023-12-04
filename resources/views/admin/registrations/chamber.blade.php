@extends('layouts.admin_master')
@section('title', 'Chamber')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">


            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 ">

                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Chambers</h2>
                        </div>

                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add_chamber">Add New
                            </button>
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="row mb-7 justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                                    <thead class="bg-dark">
                                    <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                        <th>Chamber Name</th>
                                        <th>Email</th>
                                        <th>Registration #</th>
                                        <th>Business Address</th>
                                        <th>Type</th>
                                        <th class="min-w-50px text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($chambers as $data)
                                    <tr id="row_{{ $data->id }}">
                                        <td>{{$data->chamber_name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->registration_number}}</td>
                                        <td>{{$data->business_address}}</td>
                                        <td>{{$data->type }}</td>
                                        <td class=" text-end">
                                            <!--begin::Edit-->
                                            <a href="#"
                                               class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                              title="Edit"
                                               data-bs-toggle="modal"
                                               data-bs-target="#edit_chamber_modal"
                                               data-chamber-id="{{ $data->id }}"
                                               data-chamber-name="{{ $data->chamber_name }}"
                                               data-registration-number="{{ $data->registration_number }}"
                                               data-email-address="{{ $data->email }}"
                                               data-business-address="{{ $data->business_address }}"
                                               data-type="{{ $data->type }}"
                                            >
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                     <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                           d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                           fill="currentColor"/>
                                                     <path
                                                         d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                         fill="currentColor"/>
                                                     <path
                                                         d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                         fill="currentColor"/>
                                                </svg>
                                            </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                            <!--end::Edit-->
                                            <!--begin::Delete-->
                                            <button id="delete_data_{{$data->id}}"
                                                    onclick="deleteChamber('{{$data->id}}')"
                                                    class="btn btn-icon btn-active-light-danger w-30px h-30px"
                                                    data-bs-toggle="tooltip" title="Delete">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
<path
    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
    fill="currentColor"/>
<path opacity="0.5"
      d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
      fill="currentColor"/>
<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
</svg>
															</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                            <!--end::Delete-->

                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <!--begin::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
            </div>

        </div>
        <!--end::Container-->
    </div>


    {{--    Add Modal--start --}}
    <div class="modal fade" tabindex="-1" id="add_chamber">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Chamber Registration</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_chamber_form" name="add_chamber_form" method="post"
                      class="form"
                      action="{{route('chamber_registrations_internal')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Chamber Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="chamber_name">
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Registration Number</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                       name="registration_number">
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Email Address</span>
                                </label>
                                <!--end::Label-->
                                <input type="email" class="form-control form-control-solid" name="email" >
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Business Address</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                       name="business_address" >
                            </div>

                        </div>
                    </div>




                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="add_category_submit" type="submit"
                                class="btn btn-primary float-end">
                                             <span class="indicator-label">
                                                    Save Changes
                                                </span>
                            <span class="indicator-progress">
                                                Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                        </button>
                        <!--end::Actions-->
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    {{--    Add Modal--end --}}

    {{--    Edit Modal--start --}}
    <div class="modal fade" tabindex="-1" id="edit_chamber_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Chamber</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="edit_category_form" name="edit_category_form" method="post"
                      class="form"
                      action="{{route('chamber_registrations_update')}}" enctype="multipart/form-data">
                    @csrf


                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Chamber Name</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="chamber_name" id="chamber_name">
                                <input type="hidden" name="id" value="" id="id"/>
                                <input type="hidden" name="type" value="" id="type"/>
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Registration Number</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                       name="registration_number" id="registration_number">
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Email Address</span>
                                </label>
                                <!--end::Label-->
                                <input type="email" class="form-control form-control-solid" name="email" id="email">
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Business Address</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                       name="business_address" id="business_address">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="edit_category_submit" type="submit"
                                class="btn btn-primary float-end">
                                             <span class="indicator-label">
                                                    Save Changes
                                                </span>
                            <span class="indicator-progress">
                                                Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                        </button>
                        <!--end::Actions-->
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    {{--    Add Modal--end --}}
@endsection

@section('extra_scripts')
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>

    <script>
        function deleteChamber(id) {
            Swal.fire({
                html: `Are you sure you want to delete this record?`,
                icon: "question",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "Yes!",
                cancelButtonText: 'Nope, cancel it',
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: 'btn btn-primary'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace("/adb/delete-chamber/" + id);
                }
            });
        }

    </script>
    <script>
        $(document).ready(function () {
            // Triggered when the modal is about to be shown
            $('#edit_chamber_modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Get the anchor tag that triggered the modal
                var modal = $(this);


                // Retrieve the chamber data from the data attributes
                var id = button.data('chamber-id');
                var chamberName = button.data('chamber-name');
                var registrationNumber = button.data('registration-number');
                var emailAddress = button.data('email-address');
                var businessAddress = button.data('business-address');
                var type = button.data('type');

                // Populate the modal fields with the course data
                modal.find('#id').val(id);
                modal.find('#chamber_name').val(chamberName);
                modal.find('#registration_number').val(registrationNumber);
                modal.find('#email').val(emailAddress);
                modal.find('#business_address').val(businessAddress);
                modal.find('#type').val(type);
            });
        });
    </script>


@endsection
