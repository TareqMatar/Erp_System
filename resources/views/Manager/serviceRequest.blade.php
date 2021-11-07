@extends('layouts.layoutManager')

@section('content')
    <section class="coinfo" id="">
        <div class="container">

            {{--<label  class="col-lg-1 col-form-label text-right" style="margin-left: 22px;--}}
            {{--padding-left: 0px;">الخدمات المطلوبة :</label>--}}
            {{--<div class="col-lg-8">--}}
            <div class="label-light-success">
                <h6 class="card-title align-content-md-between" style="inLine_block">الخدمات المطلوبة:</h6>
                <select class="form-control" id="StatusService">

                    <option>خدمة توظيف</option>
                    <option>حضور وغياب</option>


                </select>
            </div>
            <div class="row justify-content-center">

                <div class="col-10 card my-5 border-3">
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

                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">حالة الطلب :</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $$"/>
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

                <div class="col-10 card my-5 border-3">
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

                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">حالة الطلب :</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $$"/>
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
                <div class="col-10 card my-5 border-3">
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

                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;">حالة الطلب :</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="اسم الخدمة"/>
                            </div>
                            <label class="col-lg-1 col-form-label text-right" style="margin-left: 22px;
    padding-left: 0px;
">التكلفة:</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" placeholder="التكلفة $$"/>
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
        </div>
    </section>
@endsection