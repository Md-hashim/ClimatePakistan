@extends('layouts.admin_master')
@section('title', 'Offices')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Offices</h2>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add_office_detail">Add New
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row mb-7 justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7">
                                    <thead class="bg-dark">
                                    <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                        <th>City</th>
                                        <th>location</th>
                                        <th>Detail</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        <th>Image</th>

                                        <th class="min-w-50px text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($offices as $office)
                                        <tr>
                                            <td>{{$office->city}}</td>
                                            <td>{{$office->location}}</td>
                                            <td>{{$office->detail}}</td>
                                            <td>{{$office->contact_number}}</td>
                                            <td>{{$office->email}}</td>
                                            <td>{{$office->image}}</td>
                                            <td class="min-w-50px text-end">
                                                <!--begin::Edit-->
                                                <a href="" data-bs-toggle="modal" data-bs-target="#edit_office"
                                                   class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                   data-id="{{$office->id}}"
                                                   data-city="{{$office->city}}"
                                                   data-location="{{$office->location}}"
                                                   data-detail="{{$office->detail}}"
                                                   data-email="{{$office->email}}"
                                                   data-contact="{{$office->contact_number}}"
                                                >
                                                    <i data-bs-toggle="tooltip" title="Edit">
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
                                                    </i>
                                                </a>
                                                <!--end::Edit-->
                                                <!--begin::Delete-->
                                                <button id="delete_course_item_{{$office->id}}"
                                                        onclick="deleteOfficeItem('{{$office->id}}')"
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
                    </div>
                </div>
                <!--end::General options-->



            </div>
        </div>
        <!--end::Container-->
    </div>

    {{--    Add Modal--start --}}
    <div class="modal fade" tabindex="-1" id="add_office_detail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_office_form" name="add_office_form" method="post"
                      class="form"
                      action="{{route('add_office_detail')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">City</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="city" id="city"/>
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">location</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="location" id="location"/>
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Detail</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="detail" id="detail">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Contact Number</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="contact_number" id="contact_number">
                            </div>

                            <div class="fv-row mb-3" >
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Email</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="email">
                            </div>
                            <div class="fv-row mb-3" >
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Image</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="image">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="add_office_form_submit" type="submit"
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

    <div class="modal fade" tabindex="-1" id="edit_office">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Office</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="update_office_form" name="update_office_form" method="post"
                      class="form"
                      action="{{route('update_office_detail')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id"/>
                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">City</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="city" id="city"/>
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">location</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="location" id="location"/>
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Detail</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="detail" id="detail">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Contact Number</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="contact_number" id="contact_number">
                            </div>

                            <div class="fv-row mb-3" >
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Email</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="email" id="email">
                            </div>

                            <div class="fv-row mb-3" >
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Image</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="update_office_form_submit" type="submit"
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
@endsection

@section('extra_scripts')
        <script src="{{asset("static/js/custom/admin/office.js")}}"></script>
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    <!-- Bootstrap JS (this bundle includes Popper.js) -->

    <script>
        document.addEventListener("DOMContentLoaded", function(){
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            // Triggered when the modal is about to be shown
            $('#edit_office').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Get the anchor tag that triggered the modal
                var modal = $(this);
                // Retrieve the course data from the data attributes
                var id = button.data('id');
                var city = button.data('city');
                var location = button.data('location');
                var detail = button.data('detail');
                var email = button.data('email');
                var contact = button.data('contact');
                // Populate the modal fields with the course data
                modal.find('#id').val(id);
                modal.find('#city').val(city);
                modal.find('#location').val(location);
                modal.find('#email').val(email);
                modal.find('#detail').val(detail);
                modal.find('#contact_number').val(contact);
            });
        });
    </script>




@endsection
