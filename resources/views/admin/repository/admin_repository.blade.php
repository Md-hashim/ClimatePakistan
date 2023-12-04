@extends('layouts.admin_master')
@section('title', 'Courses')

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
{{--                            <h2>Repository</h2>--}}
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
                                <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Repository" />
                            </div>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add_repository_item">Add New
                            </button>
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
                                        <th>File</th>

                                        <th class="min-w-50px text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($repositoryData as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->repositoryCategory->name}}</td>
                                            <td>
                                                <a href="{{ asset( $data->file) }}" download="{{ $data->file }}">
                                                    <span class="badge badge-success">Download
                                                    <span class="svg-icon-white  svg-icon-sm-1 ml-4 ms-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"/>
<path opacity="0.3" d="M13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H13Z" fill="currentColor"/>
<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM13 14.4V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V14.4H8L11.3 17.7C11.7 18.1 12.3 18.1 12.7 17.7L16 14.4H13Z" fill="currentColor"/>
</svg></span>
                                                    </span>
                                                </a>


                                            </td>

                                            <td class="min-w-50px text-end">
                                                <a
                                                    onclick="editRepository('{{$data->id}}')"
                                                    class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                    data-bs-toggle="tooltip" title="Edit" >
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
                                                <button id="delete_repository_category_{{$data->id}}"
                                                        onclick="deleteRepository('{{$data->id}}')"
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
    <div class="modal fade" tabindex="-1" id="add_repository_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Course Item</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_repository_item_form" name="add_repository_item_form" method="post"
                      class="form"
                      action="{{route('add_admin_repository_data')}}" enctype="multipart/form-data">
                    @csrf
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
                                        <option value="{{$category->id}}" >{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">File</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="file">
                            </div>



                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="add_repository_item_submit" type="submit"
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
    <div class="modal fade" tabindex="-1" id="edit_repository_item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Course Item</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="edit_repository_item_form" name="edit_repository_item_form" method="post"
                      class="form"
                      action="{{route('update_admin_repository_data')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">
                            <input type="hidden" name="id" id="id" value="">
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Title</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="title" id="title">
                            </div>
                            <div class="fv-row mb-3">
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Course Category</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select class="form-select form-control form-control-solid"
                                        name="edit_cat_id" id="edit_cat_id" data-control="select2"
                                        data-placeholder="Select">

                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">File</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="file">
                            </div>



                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="edit_repository_item_submit" type="submit"
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
    {{--    Edit Modal--end --}}
@endsection

@section('extra_scripts')
    <script src="{{asset("static/js/custom/admin/admin_repository.js")}}"></script>
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






@endsection
