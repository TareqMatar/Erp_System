@extends('layouts.layout')

@section('content')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label"
                                         style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">الاسم</a>
                                    <div class="text-muted">المسمى الوظيفي</div>

                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">البريد الإلكتروني:</span>
                                    <a href="#" class="text-muted text-hover-primary">matt@fifestudios.com</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">رقم الجوال:</span>
                                    <span class="text-muted">44(76)34254578</span>
                                </div>

                            </div>
                            <!--end::Contact-->
                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">

                                <div class="navi-item mb-2">
                                    <a href="#"
                                       class="navi-link py-4 active">
															<span class="navi-icon mr-2">
																<span class="svg-icon">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  opacity="0.3"/>
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                                  fill="#000000" fill-rule="nonzero"/>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                        <span class="navi-text font-size-lg">البيانات الشخصية</span>
                                    </a>
                                </div>



                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">البيانات الشخصيـة</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">عرض  البيانات  الشخصية ل (اسم الموظف )</span>
                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6" style="    left: 159px;
">
                                        <h5 class="font-weight-bold mb-6">البيانات ..</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-xl-6" style="
    right: 377px;
">
                                        <div class="image-input image-input-outline" id="kt_profile_avatar"
                                             style="background-image: url(assets/media/users/blank.png)">
                                            <div class="image-input-wrapper"
                                                 style="background-image: url(assets/media/users/300_21.jpg)"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                   data-action="change" data-toggle="tooltip" title=""
                                                   data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="profile_avatar_remove"/>
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                  data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                  data-action="remove" data-toggle="tooltip" title="Remove avatar">
																	<i class="ki ki-bold-close icon-xs text-muted"></i>
																</span>
                                        </div>
                                        <span class="form-text text-muted">يسمح بالملفات التي من نوع: png, jpg, jpeg.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">الاسم الأول:</label>
                                    <div class="col-lg-3 col-xl-4">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value="" disabled="disabled"/>
                                    </div>

                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">الاسم الأخير :</label>
                                    <div class="col-lg-3 col-xl-4">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value=" " disabled="disabled"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">المسمى الوظيفي:</label>
                                    <div class="col-lg-3 col-xl-4">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value="مبرمج" disabled="disabled"/>
                                    </div>

                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">الدرجة العلمية</label>
                                    <div class="col-lg-3 col-xl-4">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value="ماجستير " disabled="disabled"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">اسم الشركــة:</label>
                                    <div class="col-lg-9 col-xl-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value="شركة بوصلة" disabled="disabled"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-2 col-lg-3 col-form-label text-right">مجال العمل :</label>
                                    <div class="col-lg-9 col-xl-10">
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                               value="برمجة" disabled="disabled"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6" style="    left: 159px;
">
                                        <h5 class="font-weight-bold mt-10 mb-6">معلومات الاتصال:</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">رقم الهاتف:</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-phone"></i>
																	</span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   value="+35278953712" placeholder="Phone" disabled="disabled"/>
                                        </div>
                                        <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">البريد الإلكتروني</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
																	<span class="input-group-text">
																		<i class="la la-at"></i>
																	</span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   value="nick.bold@loop.com" placeholder="Email" disabled="disabled"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-right">موقع الشركة:</label>
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                   placeholder="Username" value="loop" disabled="disabled"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Personal Information-->
        </div>
        <!--end::Container-->
    </div>



@endsection