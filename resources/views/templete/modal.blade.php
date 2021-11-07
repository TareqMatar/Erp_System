@extends('layouts.layout')

@section('content')

    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Sizes</h3>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Example-->
            <div class="example">
                <div class="example-preview">
                    <!-- Button trigger modal-->
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalSizeDefault">Modal - default</button>
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalSizeLg">Modal - lg</button>



                    <!--begin::Modal-->
                    <div class="modal fade" id="exampleModalSizeLg" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeLg" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">إضافة خدمة جديدة</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form">
                                        <div class="card-body">
                                            <div class="form-group row mt-3">
                                                <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">اسم الخدمة:</label>
                                                <div class="col-lg-4">
                                                    <input type="email" class="form-control" placeholder="اسم الخدمة"/>
                                                </div>
                                                <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفــة:</label>
                                                <div class="col-lg-4">
                                                    <input type="email" class="form-control" placeholder="التكلفة $"/>
                                                </div>

                                            </div>

                                            <div class="separator separator-dashed my-10"></div>

                                            <div class="form-group row">
                                                <label  class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">الحالة :</label>
                                                <div class="col-lg-8">
                                                   <select class="form-control" id="StatusService">

                                                       <option>تفعيـل</option>
                                                       <option>إيقاف</option>


                                                   </select>

                                                </div>
                                            </div>

                                            <div class="separator separator-dashed my-10"></div>

                                            <div class="form-group row">
                                                <label  class="col-lg-1 col-form-label text-right" style="

    margin-left: 22px;
    padding-left: 0px;
">التفاصيل :</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" rows="5">

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
                                                    <button type="reset" class="btn btn-primary mr-2">حفظ</button>
                                                    <button type="reset" class="btn btn-secondary">إغلاق</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end::Modal-->

                </div>
                <div class="example-code">
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                    <div class="example-highlight">

                    </div>
                </div>
            </div>
            <!--end::Example-->
        </div>
    </div>@endsection