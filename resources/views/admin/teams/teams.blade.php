@extends('layouts.admin_master')
@section('title', 'Teams')

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
                            <h2>Teams</h2>
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                            <a href="{{ route("add_new_team") }}" class="btn btn-primary" >Add New
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row mb-7 justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7">
                                    <thead class="bg-dark">
                                    <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                        <th>Name</th>
                                        <th>Designation</th>

                                        <th class="min-w-50px text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($teams as $team)
                                        <tr>
                                            <td>{{$team->name}}</td>
                                            <td>

                                                {{$team->designation}}
                                            </td>

                                            <td class="min-w-50px text-end">

                                                <!--begin::Delete-->
                                                <a href="{{ route("edit_team", ["id"=>$team->id]) }}"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                        data-bs-toggle="tooltip" title="Delete">
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

            </form>
            <!--end::Form-->

        </div>
        <!--end::Container-->
    </div>

    {{--    Add Modal--start --}}
    <div class="modal fade" tabindex="-1" id="add_affiliates">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Affiliates</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="add_affiliates_form" name="add_affiliates_form" method="post"
                      class="form"
                      action="{{route('add_affiliates')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class="row mb-3 justify-content-center">

                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Title</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="title" id="title">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="required">Icon</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="icon" id="icon">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Description</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="description" id="description">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="add_affiliates_submit" type="submit"
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
    <div class="modal fade" tabindex="-1" id="edit_affiliate_data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Affiliates</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-3x"><i class="bi bi-x"></i> </span>
                    </div>
                    <!--end::Close-->
                </div>
                <form id="edit_affiliates_form" name="edit_affiliates_form" method="post"
                      class="form"
                      action="{{route('update_affiliates')}}" enctype="multipart/form-data">
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
                                <input type="text" class="form-control form-control-solid" name="edit_title" id="edit_title">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Icon</span>
                                </label>
                                <!--end::Label-->
                                <input type="file" class="form-control form-control-solid" name="edit_icon" id="edit_icon">
                            </div>
                            <div class="fv-row mb-3">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold form-label">
                                    <span class="">Description</span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" name="edit_description" id="edit_description">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <!--begin::Actions-->
                        <button id="edit_affiliates_submit" type="submit"
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
    <script src="{{asset("static/js/custom/admin/affiliates.js")}}"></script>
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
            $('#edit_affiliate_data').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Get the anchor tag that triggered the modal
                var modal = $(this);



                // Retrieve the course data from the data attributes
                var id = button.data('affiliate-id');

                var title = button.data('affiliate-title');
                var description = button.data('affiliate-description');

                console.log(title);
                // Populate the modal fields with the course data
                modal.find('#id').val(id);
                modal.find('#edit_title').val(title);
                modal.find('#edit_description').val(description);
            });
        });
    </script>


@endsection
