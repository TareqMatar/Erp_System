@extends('layouts.layoutManager')

@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <div class="form-group row col-lg-12 " style="    margin-top: 19px;
">
                <label class="col-form-label text-right col-lg-auto col-sm-12">
                    الخدمات المطلوبة :
                </label>
                <div class="col-lg-auto col-md-9 col-sm-12" style="width: 333px">
                    <select class="form-control select2" id="kt_select2_1" name="param">
                        <option value="">----</option>
                        <option value="">خدمة اعلانات التوظيف</option>
                        <option value="">حضور وغياب</option>

                    </select>
                </div>
                <button type="button" style="    margin-right: 666px;
" class="btn btn-light-primary font-weight-bolder "
                        aria-haspopup="true" aria-expanded="false" data-toggle="modal"
                        data-target="#ِAddRequestservice">
                    <span class="svg-icon svg-icon-md">

                    </span>طلب خدمة
                </button>

            </div>

        </div>

    </div>
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact border-3">
        <!--begin::Form-->
        <form class="form">
            <div class="card-body ">
                <div class="card-body">
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الخدمة:</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                        </div>
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">تاريخ الطلب:</label>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">الحالة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="الحالة "/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $"/>
                            </div>

                        </div>

                    </div>
                    <div class="chat-req">
                        <a href="#"> تجديد الطلب
                            <i class="flaticon2-circular-arrow text-"></i>
                        </a>

                        <a href="#"> حذف الطلب
                            <i class="flaticon-delete-1 text-hover-dark-65"></i>
                        </a>
                    </div>
                </div>


            </div>
        </form>
        <!--end::Form-->

    </div>
    <div class="card card-custom gutter-b example example-compact border-3">
        <!--begin::Form-->
        <form class="form">
            <div class="card-body ">
                <div class="card-body">
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الخدمة:</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                        </div>
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">تاريخ الطلب:</label>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">الحالة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="الحالة "/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $"/>
                            </div>

                        </div>

                    </div>
                    <div class="chat-req">
                        <a href="#"> تجديد الطلب
                            <i class="flaticon2-circular-arrow text-"></i>
                        </a>

                        <a href="#"> حذف الطلب
                            <i class="flaticon-delete-1 text-hover-dark-65"></i>
                        </a>
                    </div>
                </div>


            </div>
        </form>
        <!--end::Form-->

    </div>
    <div class="card card-custom gutter-b example example-compact border-3">
        <!--begin::Form-->
        <form class="form">
            <div class="card-body ">
                <div class="card-body">
                    <div class="form-group row mt-3">
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الخدمة:</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                        </div>
                        <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">تاريخ الطلب:</label>
                        <div class="col-lg-4">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">الحالة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="الحالة "/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $"/>
                            </div>

                        </div>

                    </div>
                    <div class="chat-req">
                        <a href="#"> تجديد الطلب
                            <i class="flaticon2-circular-arrow text-"></i>
                        </a>

                        <a href="#"> حذف الطلب
                            <i class="flaticon-delete-1 text-hover-dark-65"></i>
                        </a>
                    </div>
                </div>


            </div>
        </form>
        <!--end::Form-->

    </div>


    <!--start: modal for Add request -->
    <div class="modal fade" id="ِAddRequestservice" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">طلب خدمة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الخدمة:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="اسم الخدمة" value="اعلان توظيف"
                                           disabled="disabled"/>
                                </div>
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder=" التكلفة" value="200$ "
                                           disabled="disabled"/>
                                </div>

                            </div>
                            {{--<div class="form-group row">--}}
                            {{--<label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;--}}
                            {{--padding-left: 0px;">آلية الإعلان :</label>--}}

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label>آلية الإعلان:</label>
                                    <div class="radio-inline">
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" checked="checked" value="2"/> إعلان -
                                            مقابلة - توظيف
                                            <span></span>
                                        </label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2"/> إعلان - اختبار - توظيف
                                            <span></span>
                                        </label>
                                        <label class="radio radio-solid">
                                            <input type="radio" name="example_2" value="2"/> إعلان - اختبار - مقابلة -
                                            توظيف
                                            <span></span>
                                        </label>
                                    </div>
                                    <span class="form-text text-muted">رجاءَ قم بتحديد الآلية المناسبة لإعلانك!</span>
                                </div>
                            </div>

                            <div class="separator separator-dashed my-22"></div>

                            <div id="kt_repeater_1">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right">الموعد:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item="" class="form-group row align-items-center">
                                            <div class="col-md-3">
                                                <label>التاريخ:</label>
                                                <input type="date" class="form-control" placeholder="Enter full name"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>من:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>إلى:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="javascript:;" data-repeater-delete=""
                                                   class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create=""
                                           class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>إضافة</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">المسمى الوظيفي:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="المسمى الوظيفي"/>
                                </div>
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">مجال العمل المطلوب:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="المجال"/>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">استقبال الطلبات:</label>
                                <div data-repeater-list="" class="col-lg-10">
                                    <div data-repeater-item="" class="form-group row align-items-center">
                                        <div class="col-md-4">
                                            <label>من تاريخ:</label>
                                            <input type="date" class="form-control" placeholder="Enter full name"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>إلى:</label>
                                            <input type="date" class="form-control" placeholder="Enter contact number"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="separator separator-dashed my-22"></div>

                            <div id="kt_repeater_2">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right">موعد الاختبارت:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item="" class="form-group row align-items-center">
                                            <div class="col-md-3">
                                                <label>التاريخ:</label>
                                                <input type="date" class="form-control" placeholder="Enter full name"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>من:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>إلى:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="javascript:;" data-repeater-delete=""
                                                   class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create=""
                                           class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>إضافة</a>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_repeater_3">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right">موعد المقابلات:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item="" class="form-group row align-items-center">
                                            <div class="col-md-3">
                                                <label>التاريخ:</label>
                                                <input type="date" class="form-control" placeholder="Enter full name"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>من:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>إلى:</label>
                                                <input type="time" class="form-control"
                                                       placeholder="Enter contact number"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="javascript:;" data-repeater-delete=""
                                                   class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create=""
                                           class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>إضافة</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">المسمى الوظيفي:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="المسمى الوظيفي"/>
                                </div>
                                <label class="col-lg-auto col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">مجال العمل المطلوب:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="المجال"/>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-right">استقبال الطلبات:</label>
                                <div data-repeater-list="" class="col-lg-10">
                                    <div data-repeater-item="" class="form-group row align-items-center">
                                        <div class="col-md-4">
                                            <label>من تاريخ:</label>
                                            <input type="date" class="form-control" placeholder="Enter full name"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>إلى:</label>
                                            <input type="date" class="form-control" placeholder="Enter contact number"/>
                                            <div class="d-md-none mb-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="separator separator-dashed my-22"></div>
                            <div id="kt_repeater_4">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right">شروط التوظيف:</label>
                                    <div data-repeater-list="" class="col-lg-10">
                                        <div data-repeater-item="" class="form-group row align-items-center">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="الشروط"/>
                                                <div class="d-md-none mb-2"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="javascript:;" data-repeater-delete=""
                                                   class="btn btn-sm font-weight-bolder btn-light-danger">
                                                    <i class="la la-trash-o"></i>حذف</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-right"></label>
                                    <div class="col-lg-4">
                                        <a href="javascript:;" data-repeater-create=""
                                           class="btn btn-sm font-weight-bolder btn-light-primary">
                                            <i class="la la-plus"></i>إضافة</a>
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
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!--end: modal for Add request -->
@endsection