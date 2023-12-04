@extends('layouts.admin_master')
@section('title', 'Message')

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
                               Messages
                            </div>
                        </div>

                    </div>
                    <div class="card-body pt-0">
                        <div class="row mb-7 justify-content-center">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7" id="dataTable">
                                    <thead class="bg-dark">
                                    <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                        <th class="min-w-100px">Name</th>
                                        <th class="min-w-100px">Email</th>
                                        <th class="min-w-100px">Message</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$message->name}}</td>
                                            <td>{{$message->email}}</td>
                                            <td>{{$message->description}}</td>
                                            <td class="min-w-50px text-end">

                                                <!--end::Edit-->
                                                <!--begin::Delete-->
                                                <button id="delete_faq_{{$message->id}}"
                                                        onclick="deleteFAQs('{{$message->id}}')"
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

@endsection

@section('extra_scripts')
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>

    <script>
        function deleteFAQs(id) {
            Swal.fire({
                html: `Are you sure you want to delete this FAQ?`,
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
                    window.location.replace("/adb/message/delete/" + id);
                }
            });
        }
    </script>




@endsection
