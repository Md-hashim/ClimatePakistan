@extends('layouts.admin_master',$user)
@section('title', 'Settings')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <!--Begin::Form-->
            <form id="re_add_client_form" name="re_add_client_form" class="form d-flex flex-column flex-lg-row"
                  method="post" enctype="multipart/form-data" action="">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Website Settings</h2>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped gy-7 gs-7">
                                <thead class="bg-dark">
                                <tr class="fw-bold fs-6 text-white border-bottom border-gray-200">
                                    <th>Tag line</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Meta Title</th>
                                    <th>Meta Desc</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Twitter</th>
                                    <th>LinkedIn</th>
                                    <th>Primary Color</th>
                                    <th>Secondary Color</th>
                                    <th>Text Color</th>
                                    <th>Logo Large</th>
                                    <th>Logo Small</th>
                                    <th>Fav Icon</th>
                                    <th>Banner Image</th>
                                    <th>Video Url</th>
                                    <th>Landing Page Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>

                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::General options-->



                </div>

            </form>
            <!--end::Form-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('extra_scripts')
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>


@endsection
