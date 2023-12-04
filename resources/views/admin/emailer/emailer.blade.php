@extends('layouts.admin_master')
@section('title', 'Newsletter')


@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Inbox App - Compose -->
            <div class="d-flex flex-column flex-lg-row">

                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                    <!--begin::Card-->
                    <div class="card">
                        <div class="card-header align-items-center">
                            <div class="card-title">
                                <h2>Compose Message</h2>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <!--begin::Form-->
                            <form id="kt_inbox_compose_form" method="post" action="{{ route("send_email") }}">
                                @csrf
                                <!--begin::Body-->
                                <div class="d-block">

                                    <!--begin::Type-->
                                    <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                        <!--begin::Label-->
                                        <div class="text-dark fw-bolder w-75px">Receivers:</div>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-control form-control-transparent border-0"
                                                name="type" id="type" data-control="select2"
                                                data-placeholder="Select">
                                            <option></option>
                                            <option value="Entrepreneurs">Entrepreneurs</option>
                                            <option value="Chamber Registrations">Chamber Registrations</option>
                                            <option value="Chamber Registrations Internal">Chamber Registrations(Internal)</option>
                                            <option value="Chamber Registrations External">Chamber Registrations(External)</option>
                                            <option value="Newsletter Registrations">Newsletter Registrations</option>
                                        </select>
                                        <!--end::Input-->

                                    </div>
                                    <!--end::Type-->

                                    <!--begin::To-->
                                    <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                        <!--begin::Label-->
                                        <div class="text-dark fw-bolder w-75px">To:</div>
                                        <!--end::Label-->
                                        <select class="form-select form-control-transparent border-0"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" multiple="multiple" id="emails" name="emails[]">
                                            <option></option>


                                        </select>

                                    </div>
                                    <!--end::To-->
                                    <!--begin::Subject-->

                                    <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                        <!--begin::Label-->
                                        <div class="text-dark fw-bolder w-75px">Subject:</div>
                                        <!--end::Label-->
                                        <input class="form-control form-control-transparent border-0 px-8 min-h-45px"
                                               name="subject" placeholder="Subject"/>

                                    </div>
                                    <!--end::Subject-->
                                    <!--begin::Message-->
                                    <textarea id="content" name="content" class="tox-target form-control"></textarea>
                                    <!--end::Message-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center me-3">

                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center">

                                        <!--begin::Send-->
                                        <div class="btn-group me-4">
                                            <!--begin::Submit-->
                                            <button type="submit" class="btn btn-primary fs-bold px-6">
                                                Send Email
                                            </button>
                                            <!--end::Submit-->
                                        </div>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Inbox App - Compose -->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('extra_scripts')
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>
    {{--    <script src="{{ asset('static/js/custom/apps/inbox/compose.js')}}"></script>--}}



    <script src="{{ asset('static/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        var options = {selector: "#content"};

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>

    <script>

        $("#type").change(function () {
            const selectElement = document.getElementById('type');
            const selectedValue = selectElement.value;

            $.ajax({
                url: '/adb/get-emails/' + selectedValue, // Replace with your actual endpoint
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    const data = response.data;
                    console.log(data)
                    var options = '<option value="all">All</option>';
                    for (var i = 0; i < data.length; i++) {
                        console.log(data[i])
                        options += '<option value="' + data[i] + '">' + data[i] + '</option>';
                    }
                    $("#emails").html(options);

                },
                error: function (error) {
                    console.error('Error fetching emails:', error);
                }
            });
        });

    </script>
@endsection
