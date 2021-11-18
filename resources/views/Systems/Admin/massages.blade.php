@extends('layouts.layout')

@section('content')
    <div class="card card-custom card-custom gutter-t">

        <div class="card-header py-3">
            <div class="card-title">
                <h3 class="card-label"> مراسلات</h3>
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

                <button type="button" class="btn btn-light-primary font-weight-bolder "
                        aria-haspopup="true" aria-expanded="false" data-toggle="modal"
                        data-target="#SendMassage">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <!--end::Svg Icon-->
                    </span>إرسال رسالة
                </button>
            </div>
        </div>


        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered  table-hover table-checkable" id="kt_datatable2">
                <thead>
                <tr>
                    <th></th>
                    <th>#</th>
                    <th>اسم الشركة</th>
                    <th>اسم الموظف</th>
                    <th>البريد الالكتروني</th>
                    <th>الحالة</th>
                    <th>الإجراءات</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم عوض دادر</td>
                    <td>da715097@gmail.com</td>
                    <td nowrap="nowrap"><span
                                class="label label-lg label-inline mr-2 label-rounded label-success"
                                style="color:#fff;">
                        تم الرد
                        </span>
                    </td>
                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal" data-target="#showMassageModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض المحادثة">
                            <i class="icon-x1 text-primary text-primary-40 flaticon2-send-1 icon-primary">
                            </i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="حذف المحادثة">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path
                                                d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم عوض دادر</td>
                    <td>da715097@gmail.com</td>
                    <td nowrap="nowrap"><span
                                class="label label-lg label-inline mr-2 label-rounded label-warning"
                                style="color:#fff;">
                            بانتظار الرد
                        </span>
                    </td>
                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal" data-target="#showMassageModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض المحادثة">
                            <i class="icon-x1 text-primary text-primary-40 flaticon2-send-1 icon-primary">
                            </i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="حذف المحادثة">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path
                                                d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم عوض دادر</td>
                    <td>da715097@gmail.com</td>
                    <td nowrap="nowrap"><span
                                class="label label-lg label-inline mr-2 label-rounded label-success"
                                style="color:#fff;">
                            تم الرد
                        </span>
                    </td>
                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal" data-target="#showMassageModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض المحادثة">
                            <i class="icon-x1 text-primary text-primary-40 flaticon2-send-1 icon-primary">
                            </i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="حذف المحادثة">
                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path
                                                d="M12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 Z M12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 Z M19.0710678,4.92893219 L19.0710678,4.92893219 C19.4615921,5.31945648 19.4615921,5.95262146 19.0710678,6.34314575 L6.34314575,19.0710678 C5.95262146,19.4615921 5.31945648,19.4615921 4.92893219,19.0710678 L4.92893219,19.0710678 C4.5384079,18.6805435 4.5384079,18.0473785 4.92893219,17.6568542 L17.6568542,4.92893219 C18.0473785,4.5384079 18.6805435,4.5384079 19.0710678,4.92893219 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </td>

                </tr>

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>

    {{--view $$ reply modal --}}
    <div class="modal fade" id="showMassageModal_" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="
    width: 852px;
    left: 207px;">
                <div class="card-body">
                    <form class="form" method="get">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>اسم المرسل</label>
                                    <input type="text" class="form-control" value="عائشة ابراهيم دادر"
                                           disabled="disabled"/>
                                </div>

                                <div class="col-lg-8">
                                    <label>البريد الإلكتروني</label>
                                    <input type="email" class="form-control" value="da7150@gmail.com"
                                           disabled="disabled"/>
                                </div>

                            </div>


                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نص الرسالة</label>

                                    <textarea name="Message" id="" cols="30" rows="5" class="form-control"
                                              disabled="disabled">مرحبا</textarea>
                                </div>

                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">


                                <div class="form-group">
                                                 <textarea class="form-control" name="replyText" id="" cols="30"
                                                           rows="5"
                                                           placeholder="الـــــــــــــرد"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary ml-3">ارسل ردك الآن
                                        <i class="flaticon-paper-plane-1 text-light"></i>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--end : view && reply modal--}}

    {{--start : sending modal--}}
    <div class="modal fade" id="SendMassage" tabindex="-1" role="dialog"
         aria-labelledby="SendMassage"
         aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content" style="
    width: 852px;
    left: 207px;">
                <div class="card-body">
                    <form class="form" method="get">
                        <div class="card-body">
                            <div class="form-group row">

                                <div class="col-lg-8">
                                    <label>اسم المرسل</label>
                                    <input type="text" class="form-control" value="إدارة موقع بوصلة"
                                           disabled="disabled"/>
                                </div>

                                <div class="col-lg-10">
                                    <label>المرسل إليه:</label>
                                    <div class="col-lg-auto col-md-9 col-sm-12" style="width: 333px">
                                        <select class="form-control select1" id="kt_select2_1" name="param">
                                            <option value="">aa@gmail.com</option>
                                            <option value="">bb@gmail.com</option>
                                            <option value="">cc@gmail.com</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="separator separator-dashed my-5"></div>

                            <div class="form-group row">
                                <div class="col-lg-8">
                                    <label>نص الرسالة</label>

                                    <textarea name="Message" id="" cols="30" rows="5" class="form-control">

                                    </textarea>
                                </div>

                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group row">


                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary ml-3">ارسل ردك الآن
                                        <i class="flaticon-paper-plane-1 text-light"></i>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--end : sending modal--}}
@endsection
