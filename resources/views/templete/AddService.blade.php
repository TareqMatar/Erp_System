@extends('layouts.layout')

@section('content')

        <div class="card card-custom">
            <div class="card-header">
                <h4 class="card-title">
                    إضافة خدمة جديدة                </h4>
            </div>
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
                            <div class="col-lg-14">
                                <button type="submit" class=" col-lg-12 btn btn-primary mr-4">إضافــة</button>
                                <button class="btn btn-secondary" data-dismiss="modal">إغلاق</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>


@endsection