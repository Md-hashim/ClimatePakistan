<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <title>@yield('title') Women Empowerment </title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <link rel="canonical" href=""/>
    <link rel="shortcut icon" href="{{ asset('static/media/logos/favicon.ico') }}"/>
    @include('partials.styles')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
      style="--kt-toolbar-height:2px;--kt-toolbar-height-tablet-and-mobile:55px">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
             data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
             data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
             data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="#">

                    <img alt="Logo" src="{{ asset('static/media/website-images/logo.png') }}" class="h-60px logo"/>
                </a>
                <!--end::Logo-->
                <!--begin::Aside toggler-->
                <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                     data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                     data-kt-toggle-name="aside-minimize">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg') }}-->
                    <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<path opacity="0.5"
                                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                          fill="currentColor"/>
									<path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="currentColor"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside toggler-->
            </div>
            <!--end::Brand-->
            @section('sidebar_menu')
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
                         data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
                         data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                         data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div
                            class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">


                            <div class="menu-item ">
                                <div class="pt-8 ">
                                    <a class="menu-link {{ Route::is('admin_dashboard') ? 'active' : '' }}" href="{{route('admin_dashboard')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="currentColor"/>
<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="currentColor"/>
<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="currentColor"/>
<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="currentColor"/>
</svg></span>
										</span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>
                            </div>





                            {{--Success Stories--start--}}
                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_admin_success_stories') ? 'active' : '' }}" href="{{route('view_admin_success_stories')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2 svg-icon-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor"/>
<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Success Stories</span>
                                </a>
                            </div>
                            {{--Success Stories--end--}}


                            {{--Slider--start--}}

                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_admin_slider') ? 'active' : '' }}" href="{{route('view_admin_slider')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
<rect y="6" width="16" height="3" rx="1.5" fill="currentColor"/>
<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor"/>
<rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Slider</span>
                                </a>
                            </div>

                            {{--Slider--end--}}

                            {{--Events--Start--}}
                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_events') ? 'active' : '' }}" href="{{route('view_events')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z" fill="currentColor"/>
<path opacity="0.3" d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Events</span>
                                </a>
                            </div>

                            {{--Event--End--}}


{{--                            --}}{{--Affiliates--Start--}}
{{--                            <div class="menu-item">--}}
{{--                                <a class="menu-link {{ Route::is('admin_dashboard') ? 'active' : '' }}" href="{{route('view_affiliates')}}">--}}
{{--										<span class="menu-icon">--}}
{{--<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen022.svg-->--}}
{{--<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor"/>--}}
{{--<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor"/>--}}
{{--<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor"/>--}}
{{--<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor"/>--}}
{{--</svg></span>--}}
{{--                                            <!--end::Svg Icon-->--}}
{{--										</span>--}}
{{--                                    <span class="menu-title">Affiliates</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            --}}{{--Affiliates--End--}}

                            {{--Affiliates--Start--}}


                            {{--HTML--Start--}}
                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_emailer') ? 'active' : '' }}" href="{{route('view_emailer')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com010.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"/>
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Emailer</span>
                                </a>
                            </div>

                            {{--HTMl--End--}}


                            {{--Gallery--start--}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(Route::is('view_entrepreneurs_registrations') or Route::is('view_chamber_registrations') or Route::is('view_newsletter')) hover show @endif ">
									<span class="menu-link @if(Route::is('view_entrepreneurs_registrations') or Route::is('view_chamber_registrations') or Route::is('view_newsletter')) active @endif ">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Registrations</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg @if(Route::is('view_entrepreneurs_registrations') or Route::is('view_chamber_registrations') or Route::is('view_newsletter')) show @endif "
                                    style="@if(Route::is('view_entrepreneurs_registrations') or Route::is('view_chamber_registrations') or Route::is('view_newsletter')) @else display: none; overflow: hidden; @endif  " >

                                    {{--Entrepreneurs--Start--}}
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_entrepreneurs_registrations') ? 'active' : '' }}" href="{{route('view_entrepreneurs_registrations')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-title">Entrepreneurs</span>
                                        </a>
                                    </div>

                                    {{--Entrepreneurs--End--}}
                                    {{--Chamber--Start--}}
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_chamber_registrations') ? 'active' : '' }}" href="{{route('view_chamber_registrations')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com013.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"/>
<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-title">Chamber</span>
                                        </a>
                                    </div>

                                    {{--Chamber--End--}}

                                    {{--newsletter--Start--}}
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_newsletter') ? 'active' : '' }}" href="{{route('view_newsletter')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com010.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"/>
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                            <span class="menu-title">Newsletter</span>
                                        </a>
                                    </div>

                                    {{--newsletter--End--}}



                                </div>
                            </div>
                            {{--Gallery--end--}}


                            {{--messages--Start--}}
                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_messages') ? 'active' : '' }}" href="{{route('view_messages')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com010.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"/>
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Messages</span>
                                </a>
                            </div>


                            {{--messages--End--}}

                            {{--office--Start--}}
                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('view_all_offices') ? 'active' : '' }}" href="{{route('view_all_offices')}}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com010.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"/>
<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Offices</span>
                                </a>
                            </div>


                            {{--office--End--}}

                            {{--Gallery--start--}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(Route::is('view_admin_gallery') or Route::is('view_gallery_category')) hover show @endif">
									<span class="menu-link {{ Route::is('view_admin_gallery') ? 'active' : '' }}">
										<span class="menu-icon">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen006.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor"/>
                                                        <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor"/>
                                                        </svg></span>
                                                                                                    <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Gallery</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg @if(Route::is('view_admin_gallery') or Route::is('view_gallery_category')) show @endif "
                                     style="@if(Route::is('view_admin_gallery') or Route::is('view_gallery_category')) @else  display: none; overflow: hidden; @endif" >

                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_admin_gallery') ? 'active' : '' }}" href="{{route('view_admin_gallery')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">View Gallery </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_gallery_category') ? 'active' : '' }}" href="{{route('view_gallery_category')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Gallery Category</span>
                                        </a>
                                    </div>




                                </div>
                            </div>
                            {{--Gallery--end--}}

                            {{--Gallery--start--}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(Route::is('view_all_community_tabs') or Route::is('view_all_frameworks')

or Route::is('view_all_academy_tabs')
or Route::is('about_settings')
or Route::is('wediv_settings')
or Route::is('contact_settings')
or Route::is('view_all_teams')
or Route::is('view_all_news')
or Route::is('view_all_faqs')

) hover show @endif">
									<span class="menu-link ">
										<span class="menu-icon">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen006.svg-->
                                                        <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="currentColor"/>
                                                        <path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="currentColor"/>
                                                        </svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Pages</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg @if(Route::is('view_all_community_tabs') or Route::is('view_all_frameworks')

or Route::is('view_all_academy_tabs')
or Route::is('about_settings')
or Route::is('wediv_settings')
or Route::is('contact_settings')
or Route::is('view_all_teams')
or Route::is('view_all_news')
or Route::is('view_all_faqs')

)  show @endif"
                                     style="  @if(Route::is('view_all_community_tabs') or Route::is('view_all_frameworks')

or Route::is('view_all_academy_tabs')
or Route::is('about_settings')
or Route::is('wediv_settings')
or Route::is('contact_settings')
or Route::is('view_all_teams')
or Route::is('view_all_news')
or Route::is('view_all_faqs')

)  @else display: none; overflow: hidden; @endif ">

                                    <div class="menu-item">

                                        <a class="menu-link {{ Route::is('view_all_community_tabs') ? 'active' : '' }}" href="{{route('view_all_community_tabs')}}">
                                            <span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Climate and Different Fields</span>
                                        </a>
                                    </div>




                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_all_academy_tabs') ? 'active' : '' }}" href="{{route('view_all_academy_tabs')}}">
                                            <span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Climate Academy</span>
                                        </a>
                                    </div>




                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('about_settings') ? 'active' : '' }}" href="{{route('about_settings')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">About TDAP </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('wediv_settings') ? 'active' : '' }}" href="{{route('wediv_settings')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">About Climate Pakistan</span>
                                        </a>
                                    </div>

                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('contact_settings') ? 'active' : '' }}" href="{{route('contact_settings')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                    </div>


                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_all_teams') ? 'active' : '' }}" href="{{route('view_all_teams')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Team</span>
                                        </a>
                                    </div>



                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_all_news') ? 'active' : '' }}" href="{{route('view_all_news')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">News</span>
                                        </a>
                                    </div>


                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_all_faqs') ? 'active' : '' }}" href="{{route('view_all_faqs')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">FAQs</span>
                                        </a>
                                    </div>

                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_all_frameworks') ? 'active' : '' }}" href="{{route('view_all_frameworks')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Climate Solutions</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            {{--Gallery--end--}}
                            {{--Courses--start--}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(Route::is('view_admin_courses') or Route::is('view_course_category')) hover show @endif">
									<span class="menu-link {{ Route::is('view_admin_courses') ? 'active' : '' }}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil005.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor"/>
<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor"/>
<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor"/>
<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Trainings</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg @if(Route::is('view_admin_courses') or Route::is('view_course_category'))  show @endif"
                                     style="@if(Route::is('view_admin_courses') or Route::is('view_course_category')) @else display: none; overflow: hidden; @endif ">




                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_admin_courses') ? 'active' : '' }}" href="{{route('view_admin_courses')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">View Trainings</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_course_category') ? 'active' : '' }}" href="{{route('view_course_category')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Training Category</span>
                                        </a>
                                    </div>



                                </div>
                            </div>
                            {{--Courses--end--}}

                            {{--Repository--start--}}
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion @if(Route::is('view_admin_repository') or Route::is('view_repository_category')) hover show @endif">
									<span class="menu-link {{ Route::is('view_admin_repository') ? 'active' : '' }}">
										<span class="menu-icon">
<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen024.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
     <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"/>
        <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
        <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
        <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
    </g>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Repository</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg @if(Route::is('view_admin_repository') or Route::is('view_repository_category'))  show @endif"
                                     style="@if(Route::is('view_admin_repository') or Route::is('view_repository_category')) @else display: none; overflow: hidden; @endif ">




                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_admin_repository') ? 'active' : '' }}" href="{{route('view_admin_repository')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">View Repository</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link {{ Route::is('view_repository_category') ? 'active' : '' }}" href="{{route('view_repository_category')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Repository Category</span>
                                        </a>
                                    </div>



                                </div>
                            </div>
                            {{--Repository--end--}}



                            {{--Website settings--start--}}


                            <div class="menu-item">
                                <a class="menu-link {{ Route::is('add_admin_site_settings') ? 'active' : '' }}" href="{{route('add_admin_site_settings')}}">
										<span class="menu-icon">

                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod009.svg-->
<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M22.0318 8.59998C22.0318 10.4 21.4318 12.2 20.0318 13.5C18.4318 15.1 16.3318 15.7 14.2318 15.4C13.3318 15.3 12.3318 15.6 11.7318 16.3L6.93177 21.1C5.73177 22.3 3.83179 22.2 2.73179 21C1.63179 19.8 1.83177 18 2.93177 16.9L7.53178 12.3C8.23178 11.6 8.53177 10.7 8.43177 9.80005C8.13177 7.80005 8.73176 5.6 10.3318 4C11.7318 2.6 13.5318 2 15.2318 2C16.1318 2 16.6318 3.20005 15.9318 3.80005L13.0318 6.70007C12.5318 7.20007 12.4318 7.9 12.7318 8.5C13.3318 9.7 14.2318 10.6001 15.4318 11.2001C16.0318 11.5001 16.7318 11.3 17.2318 10.9L20.1318 8C20.8318 7.2 22.0318 7.59998 22.0318 8.59998Z" fill="currentColor"/>
<path d="M4.23179 19.7C3.83179 19.3 3.83179 18.7 4.23179 18.3L9.73179 12.8C10.1318 12.4 10.7318 12.4 11.1318 12.8C11.5318 13.2 11.5318 13.8 11.1318 14.2L5.63179 19.7C5.23179 20.1 4.53179 20.1 4.23179 19.7Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
										</span>
                                    <span class="menu-title">Website Settings</span>
                                </a>
                            </div>

                            {{--Website settings--end--}}
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
            @show
            @section('sidebar_footer')
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
                    <a href="https://phplaravel-1026751-3892291.cloudwaysapps.com" class="btn btn-custom btn-warning w-100"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                       title="Visit Website" >
                        <span class="btn-label">Visit Website</span>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg') }}-->
                        <span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<path opacity="0.3"
                                          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                          fill="currentColor"/>
									<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"/>
									<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"/>
									<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"/>
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </a>
                </div>
                <!--end::Footer-->
            @show
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Aside mobile toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                             id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg') }}-->
                            <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
											<path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="currentColor"/>
											<path opacity="0.3"
                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                  fill="currentColor"/>
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside mobile toggle-->
                    <!--begin::Mobile logo-->
                    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        <a href="#" class="d-lg-none">
                            <img alt="Logo" src="{{ asset('static/media/logos/logo-2.svg') }}" class="h-30px"/>
                        </a>

                            <h2 style="color: #181C32;font-size: 18px;margin-left: 10px" class="">WE TDAP Admin</h2>

                    </div>

                    <!--end::Mobile logo-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Navbar-->
                        <div class="d-flex align-items-stretch" id="kt_header_nav">

                        </div>
                        <!--end::Navbar-->
                        <!--begin::Toolbar wrapper-->
                        <div class="d-flex align-items-stretch flex-shrink-0">
                            <!--begin::User menu-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                     data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                     data-kt-menu-placement="bottom-end">
                                    <img src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ Session::get('user')->profile_image }}" alt="user"/>
                                </div>

                                <!--begin::User account menu-->
                                <div
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ \Illuminate\Support\Facades\URL::to("/") }}/{{ Session::get('user')->profile_image }}"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ Session::get('user')->name }}</span>
                                                </div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7"></a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="{{route("view_admin_account_settings")}}" class="menu-link {{ Route::is('admin_dashboard') ? 'active' : '' }} px-5">Account
                                            Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{route('admin_logout')}}"
                                           class="menu-link {{ Route::is('admin_dashboard') ? 'active' : '' }} px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::Toolbar wrapper-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                @yield('main_content')

            </div>
            <!--end::Content-->
            @section('footer')
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2023 ©</span>
                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Women Entrepreneurship</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="#" target="_blank" class="menu-link {{ Route::is('admin_dashboard') ? 'active' : '' }} px-2">Support</a>
                            </li>

                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            @show
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

@include('partials.scripts')

@yield('extra_scripts')
</body>
<!--end::Body-->
</html>
