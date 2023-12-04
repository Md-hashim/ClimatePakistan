@extends('layouts.admin_master',$user)
@section('title', 'Account Setting')

@section('main_content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                           href="#kt_personal_information">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z"
                                                          fill="currentColor"/>
													<path opacity="0.3"
                                                          d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z"
                                                          fill="currentColor"/>
													<path opacity="0.3"
                                                          d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z"
                                                          fill="currentColor"/>
													<path opacity="0.3"
                                                          d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z"
                                                          fill="currentColor"/>
													<path opacity="0.3" d="M14 4H10V10H14V4Z" fill="currentColor"/>
													<path opacity="0.3" d="M17 4H20L22 10H18L17 4Z"
                                                          fill="currentColor"/>
													<path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="currentColor"/>
													<path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z"
                                                          fill="currentColor"/>
												</svg>
											</span>
                            <!--end::Svg Icon-->Personal Information</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 " data-bs-toggle="tab"
                           href="#kt_ecommerce_settings_account">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
												<i class="fa fa-user-shield fs-3"></i>
											</span>
                            <!--end::Svg Icon-->Account</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_personal_information" role="tabpanel">
                        <!--begin::form card-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>Personal Information</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="" class="form" method="post" action="{{route('save_admin_account_settings')}}" enctype="multipart/form-data">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Full Name</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                   data-bs-toggle="tooltip" title="Your full name"></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                   name="full_name" value="{{ Auth::user()->name }}" required/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Profile Image</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                   data-bs-toggle="tooltip" title="Your Profile Picture"></i>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="file" class="form-control form-control-solid"
                                                   name="profile_image"  required/>
                                            <!--end::Input-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <div class="col-md-3 text-md-end">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email Address</span>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <div class="col-md-9">
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid"
                                                   name="email_address" value="{{ Auth::user()->email }}" required disabled style="cursor:not-allowed;"/>
                                            <!--end::Input-->
                                        </div>

                                    </div>
                                    <!--end::Input group-->


                                    <!--begin::Action buttons-->
                                    <div class="row">
                                        <div class="col-md-9 offset-md-3">
                                            <!--begin::Separator-->
                                            <div class="separator mb-6"></div>
                                            <!--end::Separator-->
                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="reset"
                                                        class="btn btn-light me-3">Cancel
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">Save</span>
                                                    <span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::form card-->
                    </div>
                    <!--end:::Tab pane-->
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade  " id="kt_ecommerce_settings_account" role="tabpanel">
                        <!--begin::form card-->
                        <div class="card card-flush">
                            <!--begin::Card header-->
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <!--begin::Title-->
                                    <h2>Account</h2>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Form-->
                                <form id="" method="post" class="form" action="{{route("save_admin_account_password")}}">
                                    @csrf
                                    <div class="row">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @elseif (session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <!--begin::Col-->
                                        <div class="col-md-6 pb-10 pb-lg-0">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Old Password</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7"
                                                   data-bs-toggle="tooltip"
                                                   title="Enter your current password"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" class="form-control form-control-solid"
                                                   name="old_password" value="" required/>
                                            <!--end::Input-->

                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 pb-10 pb-lg-0">
                                            <!--begin::Input group-->

                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">New Password</span>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="password" class="form-control form-control-solid"
                                                   name="new_password" value="" required/>
                                            <!--end::Input-->

                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <!--begin::Action buttons-->
                                    <div class="row mt-4">
                                        <!--begin::Separator-->
                                        <div class="separator mb-6"></div>
                                        <!--end::Separator-->
                                        <div class="col-md-9 offset-md-3">

                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <button type="reset" data-kt-ecommerce-settings-type="cancel"
                                                        class="btn btn-light me-3">Cancel
                                                </button>
                                                <!--end::Button-->
                                                <!--begin::Button-->
                                                <button type="submit" data-kt-ecommerce-settings-type="submit"
                                                        class="btn btn-primary">
                                                    <span class="indicator-label">Save</span>
                                                    <span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Action buttons-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::form card-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Container-->
    </div>

@endsection

@section('extra_scripts')
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>



@endsection
