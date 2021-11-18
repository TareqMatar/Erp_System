@extends('layouts.layoutEmployee')

@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
											<span class="card-icon">
												<i class="flaticon2-chart text-primary"></i>
											</span>
                        <h4 class="card-label">المرتبــات</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center text-center my-0 my-md-25">
                        <!-- begin: Pricing-->
                        <div class="col-md-4 col-xxl-3 bg-white rounded-left shadow-sm">
                            <div class="pt-25 pb-25 pb-md-10 px-4">
                                <h4 class="mb-15">الزيادات</h4>
                                <span class="px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15">قيمة الزيادة</span>
                                <br/>
                                <p class="mb-10 d-flex flex-column text-dark-50">
                                    <span>تم إضافة ما قيمته</span>
                                    <span>20% </span>
                                    <span>من قيمة الراتب المستحق</span>
                                </p>
                                <button type="button"
                                        class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"
                                        data-toggle="modal"
                                        data-target="#salaryIncrease">تفاضيل!
                                </button>
                            </div>
                        </div>
                        <!-- end: Pricing-->
                        <!-- begin: Pricing-->
                        <div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
                            <div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
                                <h4 class="text-white mb-15">الراتب</h4>
                                <span class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
														400$
													</span>
                                <br/>
                                <p class="text-white mb-10 d-flex flex-column">
                                    <span>قيمة الراتب الذي تحول الى رصيدك.</span>

                                </p>
                                <button type="button" class="btn btn-white text-uppercase font-weight-bolder px-15 py-3"
                                        data-toggle="modal"
                                        data-target="#salary">التفاصيل!
                                </button>
                            </div>
                        </div>
                        <!-- end: Pricing-->
                        <!-- begin: Pricing-->
                        <div class="col-md-4 col-xxl-3 bg-white rounded-right shadow-sm">
                            <div class="pt-25 pb-25 pb-md-10 px-4">
                                <h4 class="mb-15">الخصومات</h4>
                                <span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10">
														<span class="pr-2 opacity-70">قيم الخصم</span>

													</span>
                                <br/>
                                <p class="mb-10 d-flex flex-column text-dark-50">
                                    <span>تم خصم ما قيمته</span>
                                    <span>10%</span>
                                    <span>من قية الراتب الأساسي.</span>
                                </p>
                                <button type="button"
                                        class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"
                                        data-toggle="modal"
                                        data-target="#salaryDecrease">!التفاصيل
                                </button>
                            </div>
                        </div>
                        <!-- end: Pricing-->
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    {{--start Salary increas modal --}}
    <div class="modal fade" id="salaryIncrease" tabindex="-1" role="dialog" aria-labelledby="salaryIncrease"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تفاصيل زيادة الراتب:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-custom card-custom gutter-t">

                        <div class="card-header py-3">
                            <div class="card-title">
                                <h3 class="card-label">الرواتــب </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline mr-2">
                                    <button type="button"
                                            class="btn btn-light-primary font-weight-bolder dropdown-toggle"
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
                            <table class="table table-bordered  table-hover table-checkable" id="kt_datatable2">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">#</th>
                                    <th scope="col">قيمة الزيادة</th>
                                    <th>السبب</th>
                                    <th>التاريخ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>20%</td>
                                    <td>عمل اضافي</td>
                                    <td>22/1/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td>20%</td>
                                    <td>عمل اضافي</td>
                                    <td>22/1/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>3</td>
                                    <td>20%</td>
                                    <td>عمل اضافي</td>
                                    <td>22/1/2021</td>
                                </tr>

                                </tbody>

                            </table>
                            <!--end: Datatable-->
                        </div>


                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7"
                                 style="
                                                     right: 292px;
">

                                <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--End salary increase modal--}}

    {{--start Salary  modal --}}
    <div class="modal fade" id="salary" tabindex="-1" role="dialog" aria-labelledby="salary"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تفاصيل  الراتب:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-custom card-custom gutter-t">

                        <div class="card-header py-3">
                            <div class="card-title">
                                <h3 class="card-label">الرواتــب </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline mr-2">
                                    <button type="button"
                                            class="btn btn-light-primary font-weight-bolder dropdown-toggle"
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
                                    <th>قيمة الراتب</th>
                                    <th scope="col">قيمة الزيادة</th>
                                    <th>قيمة الخصم</th>
                                    <th>تاريخ الاستحقاق</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>400$</td>
                                    <td>20%</td>
                                    <td>10%</td>
                                    <td>22/2/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td>400$</td>
                                    <td>20%</td>
                                    <td>10%</td>
                                    <td>22/2/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>3</td>
                                    <td>400$</td>
                                    <td>20%</td>
                                    <td>10%</td>
                                    <td>22/2/2021</td>
                                </tr>
                                </tbody>

                            </table>
                            <!--end: Datatable-->
                        </div>


                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7"
                                 style="
                                                     right: 292px;
">

                                <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--End salary  modal--}}

    {{--start Salary Decrease modal --}}
    <div class="modal fade" id="salaryDecrease" tabindex="-1" role="dialog" aria-labelledby="salaryDecrease"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تفاصيل خصم الراتب:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-custom card-custom gutter-t">

                        <div class="card-header py-3">
                            <div class="card-title">
                                <h3 class="card-label">الرواتــب </h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline mr-2">
                                    <button type="button"
                                            class="btn btn-light-primary font-weight-bolder dropdown-toggle"
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
                            <table class="table table-bordered  table-hover table-checkable" id="kt_datatable3">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">#</th>
                                    <th scope="col">قيمة الخصم</th>
                                    <th>السبب</th>
                                    <th>التاريخ</th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>10%</td>
                                    <td> غياب متكرر</td>
                                    <td>22/1/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2</td>
                                    <td>20%</td>
                                    <td>تأخر دائم</td>
                                    <td>22/1/2021</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>3</td>
                                    <td>5%</td>
                                    <td> تسليم متأخر</td>
                                    <td>22/1/2021</td>
                                </tr>

                                </tbody>

                            </table>
                            <!--end: Datatable-->
                        </div>


                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7"
                                 style="
                                                     right: 292px;
">

                                <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--End salary Decrease modal--}}
@endsection