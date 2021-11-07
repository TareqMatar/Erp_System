@extends('layouts.layout')

@section('content')


    <div class="example mb-10">
        <h3> آلية التوظيف (اعلان - مقابلة - توظيف)</h3>
        <div class="example-preview">
            <ul class="nav nav-pills" id="myTab1" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-1" data-toggle="tab" href="#home-1">
																	<span class="nav-icon">
																		<i class="flaticon2-checking"></i>
																	</span>
                        <span class="nav-text">طلبات التوظيف</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="timer-tab-1" data-toggle="tab" href="#timer" aria-controls="profile">
																	<span class="nav-icon">
																		<i class="flaticon2-calendar-1"></i>
																	</span>
                        <span class="nav-text">مواعيد المقابلات</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="employee-tab-1" data-toggle="tab" href="#employee" aria-controls="employee">
																	<span class="nav-icon">
																		<i class="flaticon2-accept"></i>
																	</span>
                        <span class="nav-text">توظيف</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="myTabContent1">

                <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">

                    <div class="card-title">
                        <h3 class="card-label">الطلبــــــــــات</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2" style="

    right: 1082px;
    bottom: 36px;
">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path
                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                        fill="#000000" opacity="0.3"/>
                                <path
                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                        fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>تصدير
                            </button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                        Export
                                        Tools
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_print">
                                <span class="navi-icon">
                                    <i class="la la-print"></i>
                                </span>
                                            <span class="navi-text">طباعة</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_copy">
                                <span class="navi-icon">
                                    <i class="la la-copy"></i>
                                </span>
                                            <span class="navi-text">نسخ</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_excel">
                                <span class="navi-icon">
                                    <i class="la la-file-excel-o"></i>
                                </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_csv">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_pdf">
                                <span class="navi-icon">
                                    <i class="la la-file-pdf-o"></i>
                                </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                    </div>

                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered  table-hover table-checkable" id="kt_datatable2">
                            <thead>
                            <tr>
                                <th></th>
                                <th scope="col">#</th>
                                <th scope="col">اسم المتقدم</th>
                                <th scope="col">البريد الإلكتروني</th>
                                <th scope="col">تاريخ تقديم الطلب</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>22/3/2022</td>

                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-warning"
                    style="color:#101010;">
                                        متقدم</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>
                                    <a href="#clender" data-toggle="modal"
                                       class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2"
                                       title="تحديد موعد المقابلة">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-calendar-1 icon-primary">
                                        </i>

                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>22/3/2022</td>

                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-success"
                    style="color:#101010;">
                                        تم</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>

                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>22/3/2022</td>

                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-warning"
                    style="color:#101010;">
                                        متقدم</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>
                                    <a href="#clender" data-toggle="modal"
                                       class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2"
                                       {{--class="btn btn-sm btn-icon btn-light btn-hover-danger"--}}
                                       title="تحديد موعد المقابلة">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-calendar-1 icon-primary">
                                        </i>

                                    </a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>

                <div class="tab-pane fade" id="timer" role="tabpanel" aria-labelledby="timer-tab-1">
                    <div class="card-header py-3">
                        <div class="card-title">
                            <h3 class="card-label">مواعيد المقابلات</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path
                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                        fill="#000000" opacity="0.3"/>
                                <path
                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                        fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>تصدير
                                </button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                            Export
                                            Tools
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_print">
                                <span class="navi-icon">
                                    <i class="la la-print"></i>
                                </span>
                                                <span class="navi-text">طباعة</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_copy">
                                <span class="navi-icon">
                                    <i class="la la-copy"></i>
                                </span>
                                                <span class="navi-text">نسخ</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_excel">
                                <span class="navi-icon">
                                    <i class="la la-file-excel-o"></i>
                                </span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_csv">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link" id="export_pdf">
                                <span class="navi-icon">
                                    <i class="la la-file-pdf-o"></i>
                                </span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered  table-hover table-checkable" id="kt_datatable1">
                            <thead>
                            <tr>
                                <th></th>
                                <th scope="col">#</th>
                                <th scope="col">اسم المتقدم</th>
                                <th scope="col">اليوم</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الوقت</th>
                                <th>الحالة</th>
                                <th scope="col">الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>الأحد</td>
                                <td>22/3/2022</td>
                                <td>9:00 am</td>

                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-dark"
                    style="color:#101010;">
                                        مرفوض</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                       title="حذف الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-delete icon-primary">
                                        </i>

                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>الأحد</td>
                                <td>22/3/2022</td>
                                <td>9:00 am</td>
                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-success"
                    style="color:#101010;">
                                        مقبول</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                       title="إنشاء عقد">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-contract icon-primary">
                                        </i>

                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>الأحد</td>
                                <td>22/3/2022</td>
                                <td>9:00 am</td>

                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-warning"
                    style="color:#101010;">
                                        تحديد موعد آخر</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="تفاصيل الطلب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                                       title="تحديد موعد المقابلة">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-calendar-1 icon-primary">
                                        </i>

                                    </a>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>

                </div>

                <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="employee-tab-1">
                    <div class="card-title">
                        <h3 class="card-label">إنشاء عقود التوظيف</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2" style="

    right: 1082px;
    bottom: 36px;
">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path
                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                        fill="#000000" opacity="0.3"/>
                                <path
                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                        fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>تصدير
                            </button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                        Export
                                        Tools
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_print">
                                <span class="navi-icon">
                                    <i class="la la-print"></i>
                                </span>
                                            <span class="navi-text">طباعة</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_copy">
                                <span class="navi-icon">
                                    <i class="la la-copy"></i>
                                </span>
                                            <span class="navi-text">نسخ</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_excel">
                                <span class="navi-icon">
                                    <i class="la la-file-excel-o"></i>
                                </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_csv">
                                <span class="navi-icon">
                                    <i class="la la-file-text-o"></i>
                                </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" id="export_pdf">
                                <span class="navi-icon">
                                    <i class="la la-file-pdf-o"></i>
                                </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                    </div>

                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                            <thead>
                            <tr>
                                <th></th>
                                <th scope="col">#</th>
                                <th scope="col">اسم المتقدم</th>
                                <th scope="col">البريد الإلكتروني</th>
                                <th>اسم الشركة</th>
                                <th scope="col">نوع العقد</th>
                                <th scope="col">رد المتقدم</th>
                                <th scope="col">الإجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>شركة بوصلة</td>
                                <td>عقد ستوي</td>
                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-warning"
                    style="color:#101010;">
                                        بانتظار الرد</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#send" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"
                                       title="إرسال نموذج العقد">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>

                                    <a href="#delet" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="إلغاء">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-delete icon-primary">
                                        </i>
                                    </a>

                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>2</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>شركة بوصلة</td>
                                <td>عقد شهري</td>
                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-success"
                    style="color:#101010;">
                                        موافق</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#send" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"
                                       title="إرسال نموذج العقد">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>

                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>3</td>
                                <td> عائشة إبراهيم دادر</td>
                                <td>da715097@gmail.com</td>
                                <td>شركة بوصلة</td>
                                <td>عقد يومي</td>
                                <td>
            <span
                    class="label label-lg label-inline mr-2 label-rounded label-light-danger"
                    style="color:#101010;">
                                        غير موافق</span>
                                </td>

                                <td nowrap="nowrap">
                                    <a href="#send" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2"
                                       title="إرسال نموذج العقد">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-document icon-primary">
                                        </i>
                                    </a>

                                    <a href="#view" data-toggle="modal" data-target="#showCompanyModal_"
                                       class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="السبب">
                                        <i class="icon-x1 text-primary text-primary-40 flaticon2-warning icon-primary">
                                        </i>
                                    </a>

                                </td>

                            </tr>
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="clender" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحديد موعد المقابلة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="card-body">

                                <div class="form-group row mt-3">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">اسم الشركة:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="اسم الشركة"/>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم امتقدم:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم امتقدم"/>
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">البريد الالكتروني:</label>
                                    <div class="col-lg-4">
                                        <input type="email" class="form-control" placeholder="البريد"/>
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <div class="col-lg-8">

                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>الأوقات المتاحة:</label>
                                                <div class="radio-list">
                                                    <label class="radio radio-solid">

                                                        <input type="radio" name="example_2" checked="checked"
                                                               value="2"/> الاربعاء -
                                                        22/1/2021
                                                        - 9:00-10:00
                                                        <span></span>
                                                    </label>
                                                    <label class="radio radio-solid">

                                                        <input type="radio" name="example_2" value="2"/> الاربعاء -
                                                        22/1/2021
                                                        - 9:00-10:00
                                                        <span></span>
                                                    </label>

                                                    <label class="radio radio-solid">

                                                        <input type="radio" name="example_2" value="2"/> الاربعاء -
                                                        22/1/2021
                                                        - 9:00-10:00
                                                        <span></span>
                                                    </label>

                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7"
                                             style="
                                                     right: 292px;
">
                                            <button type="reset" class="btn btn-primary mr-2">حفظ</button>
                                            <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>


    </div>

@endsection