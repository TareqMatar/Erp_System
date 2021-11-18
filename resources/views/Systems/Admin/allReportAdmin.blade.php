@extends('layouts.layout')

@section('content')
    <!--begin::Card-->

    <div class="card card-custom col-10">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير مالي
                    <small></small>
                </h4>
                <div style="
    margin-right: 600px;
">
                    <a href="#" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showFinancialReportInformation"
                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>
    </div>
    <!--end::Card-->
    <div class="card card-custom col-10" style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير بيانات الشركات
                    <small></small>
                </h4>
                <div style="
    margin-right: 542px;
">
                    <a href="#view" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showReportCompanyInformation"

                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>

    </div>
    <div class="card card-custom col-10" style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير بيانات الموظفين
                    <small></small>
                </h4>
                <div style="
    margin-right: 541px;
">
                    <a href="#" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showReportemployeeInformation"
                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>
    </div>
    <div class="card card-custom col-10" style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير الحضور والانصراف
                    <small></small>
                </h4>
                <div style="
    margin-right: 513px;
">
                    <a href="#" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showAttendanceDepartureReport"
                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>
    </div>
    <div class="card card-custom col-10" style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير خدمات
                    <small></small>
                </h4>
                <div style="
    margin-right: 588px;
">
                    <a href="#" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showReportservicesInformation"
                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>
    </div>
    <div class="card card-custom col-10" style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h4 class="card-label">تقرير العقود
                    <small></small>
                </h4>
                <div style="
    margin-right: 590px;
">
                    <a href="#" class="btn btn-light-primary font-weight-bold" data-toggle="modal"
                       data-target="#showReportContract"
                       style="margin-left: 20px;">معاينة</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold" style="margin-left: 20px;">طباعة </a>
                    <div class="dropdown dropdown-inline mr-2" style="">
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
        </div>
    </div>
    {{--Start :report Contract work--}}
    <div class="modal fade" id="showReportContract" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة العقود </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div>
                                <strong> اسم الشركة:</strong>
                                " شركة بوصلة لتكنولوجيا المعلومات"
                                <br> <br>

                                <strong>نوع الاشتراك : </strong>
                                "شركة بموظفين"
                                <br><br>
                                <strong>عدد العقود:</strong>
                                " 7"
                                <br> <br>

                            </div>
                            <div>
                                <strong> اسم الشركة:</strong>
                                " شركة بوصلة لتكنولوجيا المعلومات"
                                <br> <br>

                                <strong>نوع الاشتراك : </strong>
                                "شركة بموظفين"
                                <br><br>
                                <strong>عدد العقود:</strong>
                                " 7"
                                <br> <br>

                            </div>

                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable1">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الموظف</th>
                                        <th>اسم الشركة</th>
                                        <th scope="col"> نوع العقد</th>
                                        <th scope="col">حالة العقد</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>عائشة ابراهيم دادر</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td>عقد سنوي</td>
                                        <td>قيد العمل</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>عائشة ابراهيم دادر</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td>عقد شهري</td>
                                        <td> منتهي</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>عائشة ابراهيم دادر</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td>عقد مشروع</td>
                                        <td> متوقف</td>
                                    </tr>

                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : report contract work--}}

    {{--Start :report Company information--}}
    <div class="modal fade" id="showReportCompanyInformation" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة بيانات الشركات </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div>
                                <strong> عدد الشركات افعالة:</strong>
                                " 10"
                                <br> <br>

                                <strong>عدد الشركات المنهية : </strong>
                                " 5"
                                <br><br>

                            </div>


                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable2">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الشركة</th>
                                        <th>نوع الاشتراك</th>
                                        <th scope="col"> تاريخ الاشتراك</th>
                                        <th scope="col">تكلفة الاشتراك</th>
                                        <th>المدفوع</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> شركة بدون موظفين</td>
                                        <td> 1/1/2022</td>
                                        <td>100$</td>
                                        <td>50$</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> شركة بموظفين</td>
                                        <td> 1/1/2022</td>
                                        <td>200$</td>
                                        <td>150$</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> شركة مشروع</td>
                                        <td> 1/1/2022</td>
                                        <td>150$</td>
                                        <td>100$</td>
                                    </tr>

                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : report Company information--}}

    {{--Start :report employee information--}}
    <div class="modal fade" id="showReportemployeeInformation" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة بيانات الموظفين </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div>
                                <strong> اسم الشركة:</strong>
                                " شركة بوصلة لتكنولوجيا المعلومات "
                                <br> <br>

                                <strong>عدد الموظفين : </strong>
                                " 5"
                                <br><br>

                            </div>
                            <div>
                                <strong> اسم الشركة:</strong>
                                " شركة بوصلة لتكنولوجيا المعلومات "
                                <br> <br>

                                <strong>عدد الموظفين : </strong>
                                " 5"
                                <br><br>

                            </div>


                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الشركة</th>
                                        <th> اسم الموظف</th>
                                        <th>البريد الالكتروني</th>
                                        <th>المسمى الوظيفي</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> عائشة ابراهيم دادر</td>
                                        <td>da@gmail.com</td>
                                        <td>مطور ويب لارفيل</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> عائشة ابراهيم دادر</td>
                                        <td>da@gmail.com</td>
                                        <td>مطور ويب لارفيل</td>
                                    </tr>
                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : report employee information--}}


    {{--Start :report services information--}}
    <div class="modal fade" id="showReportservicesInformation" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة الخدمات </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div>
                                <strong> عدد الخدمات المتاحة:</strong>
                                " 4 "
                                <br> <br>

                                <strong>عدد الخدمات الغير المتاحة : </strong>
                                " 2"
                                <br><br>

                            </div>
                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الخدمة</th>
                                        <th>التكلفة</th>
                                        <th> الحالة</th>
                                        <th> عدد مرات الطلب</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>اعلانات توظيف وتوظيف</td>
                                        <td> 30$</td>
                                        <td>متاحة</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>الحضور والانصراف</td>
                                        <td> 320$</td>
                                        <td>غير متاحة</td>
                                        <td>2</td>
                                    </tr>
                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : report services information--}}

    {{--Start :Financial report information--}}
    <div class="modal fade" id="showFinancialReportInformation" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة الحسابات المالية </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div>
                                <strong> الواردات:</strong>
                                " 600$ "
                                <br> <br>

                                <strong>المتبقي : </strong>
                                "200$"
                                <br><br>

                            </div>
                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الشركة</th>
                                        <th> الشهر</th>
                                        <th>الخدمة</th>
                                        <th> المبلغ المدفوع</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> يناير</td>
                                        <td>اعلانات توظيف وتوظيف</td>
                                        <td>20$</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> فبراير</td>
                                        <td>اعلانات توظيف وتوظيف</td>
                                        <td>30$</td>
                                    </tr>
                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : Financial report information--}}

    {{--Start :Attendance and departure report--}}
    <div class="modal fade" id="showAttendanceDepartureReport" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">معاينة جداول الحضور والانصراف </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">

                            <div class="separator separator-dashed my-10"></div>

                            <div class="card-body">

                                <!--begin: Datatable-->

                                <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col">#</th>
                                        <th> اسم الشركة</th>
                                        <th> اسم الموظف</th>
                                        <th>ساعة الحضور</th>
                                        <th>ساعة الانصراف</th>
                                        <th>التأخير</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>شركة بوصلة لتكنولوجيا المعلومات</td>
                                        <td> عائشة ابراهيم دادر</td>
                                        <td>9:00 am</td>
                                        <td>3:00 am</td>
                                        <td>30 m</td>
                                    </tr>
                                    </tbody>

                                </table>
                                <!--end: Datatable-->
                            </div>

                            <div class="separator separator-dashed my-10"></div>


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7"
                                     style="
                                                     right: 292px;
">
                                    <button type="submit" class="btn btn-secondary">طباعة</button>

                                    <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{--End : Attendance and departure report--}}

@endsection