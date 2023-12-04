@extends('layouts.admin_master')
@section('title', 'Trainings')

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
                                <div class="d-flex align-items-center position-relative my-1 me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="currentColor"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor"/>
													</svg>
												</span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Training" />
                                </div>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a class="btn btn-primary" href="{{route('add_admin_courses')}}">Add New
                                </a>
                            </div>

                        </div>
                        <div class="card-body pt-0">
                            <div class="row mb-7 justify-content-center">
                    <div class="table-responsive">
                        <table class="table table-striped gy-7 gs-7" id="dataTable">
                            <thead class="bg-dark">
                            <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                <th>Title</th>
                                <th>Category</th>

                                <th>Image</th>
                                <th>Status</th>

                                <th class="min-w-50px text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->category->name}}</td>


                                <td class="h-50px">
                                    <a href="{{asset($course->image)}}" target="_blank" class="btn btn-icon btn-active-white "
                                       data-bs-toggle="tooltip" title="Image">
                                        <img src="{{asset("$course->image")}}" style="width: 100%;height: 100%;object-fit: cover;"/></a>
                                </td>
                                <td>@if($course->is_active==1)
                                        Published
                                    @else
                                        Pending
                                    @endif</td>
                                <td class="min-w-50px text-end">
                                    <!--begin::Edit-->
                                    <a href="" data-bs-toggle="modal" data-bs-target="#add_course_item"
                                       class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="{{ $course->id }}"
                                       >
                                        <i data-bs-toggle="tooltip" title="Add Course Item">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
</svg></span>
                                    <!--end::Svg Icon-->
                                        </i>
                                    </a>

                                    <a href="{{route('view_admin_course_item',['id'=>$course->id])}}"
                                       class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                       data-bs-toggle="tooltip" title="View Course Item">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
</svg></span>
                                        <!--end::Svg Icon-->
                                    </a>



                                    <a href="{{route('edit_admin_course',['id'=>$course->id])}}"
                                       class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                       data-bs-toggle="tooltip" title="Edit">
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
                                    <button id="delete_course_{{$course->id}}"
                                            onclick="deleteCourse('{{$course->id}}')"
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


            <!--end::Form-->

        </div>
        <!--end::Container-->
    </div>

    {{--    Add Modal--start --}}
    <div class="modal fade" tabindex="-1" id="add_course_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Training Item</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_course_item_form" name="add_course_item_form" method="post"
                      class="form"
                      action="{{route('submit_admin_course_item')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="" name="id" id="id"/>
                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Title</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="title">
                            </div>

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Type</span>
                                </label>
                                <!--begin::Select2-->
                                <select class="form-select form-control form-control-solid"
                                        name="item_type" id="item_type" data-control="select2"
                                        data-placeholder="Select">
                                    <option></option>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                    <option value="document">Document</option>
                                </select>
                                <!--begin::Select2-->
                            </div>

                            <div class="fv-row mb-3 d-none" id="item_image">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Image</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="image[]" multiple accept="image/*">
                            </div>
                            <div class="fv-row mb-3 d-none" id="item_document">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Document</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="document[]" multiple accept="document/*">
                            </div>
                            <div class="fv-row mb-3 d-none" id="item_video">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Video</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="video" accept="video/*">
                            </div>
                            <div class="fv-row mb-3 d-none" id="item_video_url">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Video Url</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="video_url">
                            </div>


                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="add_course_item_submit" type="submit"
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
{{--    <script src="{{asset("static/js/custom/admin/course.js")}}"></script>--}}
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    <!-- Bootstrap JS (this bundle includes Popper.js) -->
    <script>
        "use strict";
        // Class definition
        var KTDatatablesButtons = function () {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function () {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format(); // select date from 4th column in table
                    dateRow[3].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10,
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Public methods
            return {
                init: function () {
                    table = document.querySelector('#dataTable');

                    if ( !table ) {
                        return;
                    }

                    initDatatable();
                    handleSearchDatatable();
                }
            };
        }();
        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTDatatablesButtons.init();
        });
    </script>
    <script>
        $(document).ready(function () {
            // Triggered when the modal is about to be shown
            $('#add_course_item').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Get the anchor tag that triggered the modal
                var courseId = button.data('id'); // Get the 'data-id' value from the anchor tag

                // Update the form field with the courseId
                $('#id').val(courseId);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#item_type').on('change', function() {
                let selectedValue = $(this).val();

                if (selectedValue === 'image') {
                    $('#item_image').removeClass('d-none');
                    $('#item_document').addClass('d-none');
                    $('#item_video').addClass('d-none');
                    $('#item_video_url').addClass('d-none');
                } else if (selectedValue === 'video') {
                    $('#item_image').addClass('d-none');
                    $('#item_document').addClass('d-none');
                    $('#item_video').removeClass('d-none');
                    $('#item_video_url').removeClass('d-none');
                } else if (selectedValue === 'document')
                {
                    $('#item_image').addClass('d-none');
                    $('#item_document').removeClass('d-none');
                    $('#item_video').addClass('d-none');
                    $('#item_video_url').addClass('d-none');
                }
            });
        });
    </script>


@endsection
