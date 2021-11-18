@extends('layouts.layout')

@section('content')
    <div class="card card-custom card-custom gutter-t">

        <div class="card-header py-3">
            <div class="card-title">
                <h3 class="card-label">العقـــود</h3>
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

                    <button type="button" class="btn btn-light-primary font-weight-bolder "
                            aria-haspopup="true" aria-expanded="false" data-toggle="modal"
                            data-target="#addCompanyModal">
                    <span class="svg-icon svg-icon-md">

                    </span>إنشاء عقد
                    </button>

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
                    <th scope="col">اسم الشركة</th>
                    <th scope="col"> اسم الموظف</th>
                    <th scope="col">المسمى الوظيفي</th>
                    <th>قيمة الراتب</th>
                    <th>نوع العقد</th>
                    <th scope="col">الحالة</th>
                    <th scope="col">الإجراءات</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td></td>
                    <td>1</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم دادر</td>
                    <td>مطور ويب</td>
                    <td>300$</td>
                    <td>عقد شهري</td>

                    <td nowrap="nowrap"><span
                                class="label label-lg label-inline mr-2 label-rounded label-success"
                                style="color:#fff;">
                                       مفعلـــة </span>
                    </td>
                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal"
                           data-target="#showCompanyModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                            <i class="icon-x1 text-primary text-primary-40 flaticon-list icon-primary"></i>
                        </a>
                        <a href="#edit" data-toggle="modal"
                           class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                            <i class="icon-x1 text-success text-success-40 flaticon-edit-1 icon-success"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="أنهاء العقد">
                                                                           <span class="svg-icon svg-icon-primary svg-icon-2x text-hover-danger"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\General\Trash.svg--><svg
                                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                                       xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                       width="24px" height="24px"
                                                                                       viewBox="0 0 24 24"
                                                                                       version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
              fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>

                        </a>
                    </td>


                </tr>
                <tr>
                    <td></td>
                    <td>2</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم دادر</td>
                    <td>مطور ويب</td>
                    <td>300$</td>
                    <td>عقد شهري</td>

                    <td nowrap="nowrap"><span
                                class="label label-lg label-inline mr-2 label-rounded label-warning"
                                style="color:#fff;">
                                      غير مفعلـــة</span>
                    </td>

                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal"
                           data-target="#showCompanyModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                            <i class="icon-x1 text-primary text-primary-40 flaticon-list icon-primary"></i>
                        </a>
                        <a href="#edit" data-toggle="modal"
                           class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                            <i class="icon-x1 text-success text-success-40 flaticon-edit-1 icon-success"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="إنهاء العقد">
                                                                           <span class="svg-icon svg-icon-primary svg-icon-2x text-hover-danger"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\General\Trash.svg--><svg
                                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                                       xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                       width="24px" height="24px"
                                                                                       viewBox="0 0 24 24"
                                                                                       version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
              fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>

                        </a>
                    </td>

                </tr>
                <tr>
                    <td></td>
                    <td>3</td>
                    <td>شركة بوصلة</td>
                    <td>عائشة ابراهيم دادر</td>
                    <td>مطور ويب</td>
                    <td>300$</td>
                    <td>عقد شهري</td>

                    <td nowrap="nowrap">
								<span
                                        class="label label-lg label-inline mr-2 label-rounded label-dark"
                                        style="color:#fff;">
                                        منتهيــة
										</span>
                    </td>

                    <td nowrap="nowrap">
                        <a href="#view" data-toggle="modal"
                           data-target="#showCompanyModal_"
                           class="btn btn-sm btn-icon btn-light btn-hover-info mr-2" title="عرض">
                            <i class="icon-x1 text-primary text-primary-40 flaticon-list icon-primary"></i>
                        </a>
                        <a href="#edit" data-toggle="modal"
                           class="btn btn-sm btn-icon btn-light btn-hover-primary mr-2" title="تعديل">

                            <i class="icon-x1 text-success text-success-40 flaticon-edit-1 icon-success"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-sm btn-icon btn-light btn-hover-danger"
                           title="إنهاء العقد">
                                                                           <span class="svg-icon svg-icon-primary svg-icon-2x text-hover-danger"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\General\Trash.svg--><svg
                                                                                       xmlns="http://www.w3.org/2000/svg"
                                                                                       xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                       width="24px" height="24px"
                                                                                       viewBox="0 0 24 24"
                                                                                       version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
              fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
              fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>

                        </a>
                    </td>

                </tr>

                </tbody>

            </table>
            <!--end: Datatable-->
        </div>

        <!--start: modal for Add service-->
        <div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إنشاء العــقد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="card-body">
                                <div class="form-group row mt-5">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الشركة:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الشركة"
                                               value=""
                                        />
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">نوع العقد:</label>
                                    <div class="col-lg-4" style="
    left: 15px;
">
                                        <input type="text" class="form-control" placeholder="نوع العقد" value=" "
                                        />
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الموظف:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الموظف"
                                               value="  " style="
"/>
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="">رقم الهوية:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="رقم الهوية "
                                               value="  " style="
"/>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="
">قيمة الراتب:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="قيمة الراتب" value=""
                                        />
                                    </div>
                                    <label class="col-lg-1 col-form-label text-right" style="
   ">العملة:</label>
                                    <div class="col-lg-4" style="right: 22px; ">
                                        <input type="text" class="form-control" placeholder="العملة " value=""
                                               style=""/>
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label text-right" style="">الحالــة :</label>
                                    <div class="col-lg-8" style="right: 65px;">
                                        <select class="form-control" id="StatusService">
                                            <option></option>
                                            <option>مفعلة</option>
                                            <option>متوقفة</option>
                                            <option>منتهي</option>


                                        </select>

                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-auto col-form-label text-right" style="

    margin-left: 22px;
    padding-left: 0px;
">الشروط لدى الطرفين :</label>
                                    <div class="col-lg-8">
                                                    <textarea class="form-control" rows="5"
                                                              style="align-content: center;">

                                                    </textarea>


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
                                        <button type="submit" class="btn btn-primary mr-2">حفظ</button>

                                        <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!--end: modal for Add service-->

        <!--start: modal for show service-->
        <div class="modal fade" id="showCompanyModal_" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تفاصيل العــقد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="card-body">
                                <div class="form-group row mt-5">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الشركة:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الشركة"
                                               value="شركة بوصلة"
                                               disabled="disabled"/>
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">نوع العقد:</label>
                                    <div class="col-lg-4" style="
    left: 15px;
">
                                        <input type="text" class="form-control" placeholder="نوع العقد" value="عقد شهري"
                                               disabled="disabled"/>
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الموظف:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الموظف"
                                               value=" عائشة ابراهيم دادر " disabled="disabled"/>
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="">رقم الهوية:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="رقم الهوية "
                                               value=" 400 000000 " disabled="disabled"/>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="
">قيمة الراتب:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="قيمة الراتب" value="3000"
                                               disabled="disabled"/>
                                    </div>
                                    <label class="col-lg-1 col-form-label text-right">العملة:</label>
                                    <div class="col-lg-4" style="right: 22px; ">
                                        <input type="text" class="form-control" placeholder="العملة " value="$"
                                               disabled="disabled"/>
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label text-right" style="">الحالــة :</label>
                                    <div class="col-lg-8" style="right: 65px;">
                                        <select class="form-control" id="StatusService">
                                            <option selected>مفعلة</option>
                                            <option>متوقفة</option>
                                            <option>منتهي</option>


                                        </select>

                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-auto col-form-label text-right" style="

    margin-left: 22px;
    padding-left: 0px;
">الشروط لدى الطرفين :</label>
                                    <div class="col-lg-8">
                                                    <textarea class="form-control" rows="5" disabled="disabled"
                                                              style="align-content: center;">
                                                        1-................................................
                                                        2-................................................
                                                        3-................................................
                                                    </textarea>


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
                                        <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!--end: modal for show service-->

        <!--start: modal for edit service-->

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل العــقد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <div class="card-body">
                                <div class="form-group row mt-5">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الشركة:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الشركة"
                                               value="شركة بوصلة"
                                        />
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">نوع العقد:</label>
                                    <div class="col-lg-4" style="
    left: 15px;
">
                                        <input type="text" class="form-control" placeholder="نوع العقد"
                                               value="عقد شهري "
                                        />
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الموظف:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="اسم الموظف"
                                               value="  عائشة ابراهيم دادر" style="
"/>
                                    </div>
                                    <label class="col-lg-auto col-form-label text-right" style="">رقم الهوية:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="رقم الهوية "
                                               value=" 40 0000 000 " style="
"/>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-lg-auto col-form-label text-right" style="
">قيمة الراتب:</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" placeholder="قيمة الراتب" value="300"
                                        />
                                    </div>
                                    <label class="col-lg-1 col-form-label text-right" style="
   ">العملة:</label>
                                    <div class="col-lg-4" style="right: 22px; ">
                                        <input type="text" class="form-control" placeholder="العملة " value="$"
                                               style=""/>
                                    </div>

                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label text-right" style="">الحالــة :</label>
                                    <div class="col-lg-8" style="right: 65px;">
                                        <select class="form-control" id="StatusService">
                                            <option></option>
                                            <option selected>مفعلة</option>
                                            <option>متوقفة</option>
                                            <option>منتهي</option>


                                        </select>

                                    </div>
                                </div>

                                <div class="separator separator-dashed my-10"></div>

                                <div class="form-group row">
                                    <label class="col-lg-auto col-form-label text-right" style="

    margin-left: 22px;
    padding-left: 0px;
">الشروط لدى الطرفين :</label>
                                    <div class="col-lg-8">
                                                    <textarea class="form-control" rows="5"
                                                              style="align-content: center;">
                                                        1-..............................................
                                                        2-.........................................
                                                        3-............................................................
                                                    </textarea>


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
                                        <button type="submit" class="btn btn-primary mr-2">تعديل</button>

                                        <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!--end: modal for edit service-->


    </div>


@endsection



