@extends('layouts.admin_master')
@section('title', 'Success Stories-')

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
                                <h2>Success Stories</h2>
                            </div>
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a class="btn btn-primary" href="{{route('add_admin_success_stories')}}">Add New
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                        <div class="row mb-7 justify-content-center">
                        <div class="table-responsive">
                            <table class="table table-striped gy-7 gs-7">
                                <thead class="bg-dark">
                                <tr class="fw-bold fs-6 text-white border-bottom border-gray-200 text-start" >
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>City</th>
                                    <th>Images</th>
                                    <th>Video Url</th>
                                    <th>Status</th>
                                    <th class="min-w-50px text-end">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($success_stories as $stories)
                                <tr>
                                    <td>{{$stories->name}}</td>
                                    <td>{{$stories->email}}</td>
                                    <td>{{$stories->phone_number}}</td>
                                    <td>{{$stories->city}}</td>
                                    <td class="h-50px"><a href="{{asset($stories->images)}}" target="_blank" class="btn btn-icon btn-active-white"
                                           data-bs-toggle="tooltip" title="Image">
                                            <img src="{{asset("$stories->images")}}" style="width: 100%;height: 100%;object-fit: cover;"/></a></td>
{{--                                    <td>{{$stories->images}}</td>--}}
                                    <td><a href="{{$stories->video_url}}" target="_blank"  class="btn btn-icon btn-active-white w-30px h-30px"
                                           data-bs-toggle="tooltip" title="Video">
                                            <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr028.svg-->
                                            <span class="svg-icon svg-icon-muted svg-icon-2 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path opacity="0.3" d="M12.9 10.7L3 5V19L12.9 13.3C13.9 12.7 13.9 11.3 12.9 10.7Z" fill="currentColor"/>
<path d="M21 10.7L11.1 5V19L21 13.3C22 12.7 22 11.3 21 10.7Z" fill="currentColor"/>
</svg></span>
                                            <!--end::Svg Icon-->
                                        </a></td>
                                    <td>@if($stories->is_active==1)
                                            Published
                                        @else
                                            Pending
                                    @endif</td>
                                    <td class="min-w-50px text-end">
                                        <!--begin::Edit-->
                                        <a href="{{route('edit_admin_success_stories',["id"=>$stories->id])}}"
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
                                        <button id="delete_success_story_{{$stories->id}}"
                                                onclick="deleteSuccessStory('{{$stories->id}}')"
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
    <script src="{{asset("static/js/custom/admin/success_story.js")}}"></script>
    <script src="{{ asset('static/js/widgets.bundle.js')}}"></script>
    <script src="{{ asset('static/js/custom/widgets.js')}}"></script>


@endsection