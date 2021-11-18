@extends('layouts.layout')

@section('content')

    <section class="coinfo" id="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 card my-5">
                    <div class="card-body">

                        <h3 class="font-weight-medium text-dark mt-5 mt-lg-0 text-center">طلب تدريب
 </h3>
                        <form method="get">
                            <div class="form-row mb-3">
                                <div class="form-group col-md-4">
                                    <label for="firstName">الاسم الأول <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="first_name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="secondName">اسم الأب <span class="text-danger"> *</span> </label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="secund_name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastName">العائلة<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" name="last_name">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="email">البريد الإلكتروني <span class="text-danger"> *</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="ex: name@gmail.com"
                                           name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">رقم التواصل *</label>
                                    <input type="tel" class="form-control" id="" placeholder="" name="phhone_no">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="">الحالة الدراسية *</label>
                                    <select id="inputState" class="form-control" name="statuse">
                                        <option selected>اختر...</option>
                                        <option value="طالب">طالب</option>
                                        <option value="خريج">خريج</option>
                                        <option value="غير ذلك">غير ذلك</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">الجامعة<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="University">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for=""> الكلية *</label>
                                    <input type="text" class="form-control" id="" placeholder="" name="college">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">التخصص الدراسي<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="Specialization">
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-md-6">
                                    <label for="">نوع التدريب *</label>
                                    <select id="inputState" class="form-control" name="training_type">
                                        <option selected>اختر...</option>
                                        <option value="تدريب شخصي">تدريب شخصي</option>
                                        <option value="تدريب جامعي">تدريب جامعي</option>
                                        <option value="غير ذلك">غير ذلك</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">مجال التدريب المرغوب<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" id="" placeholder="" name="Field_training">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="d-block">مستوى الخبرة *</label>

                                <div class="form-check form-check mr-1 ml-4">
                                    <input class="form-check-input mr-0 ml-2" type="radio" name="inlineRadioOptions"
                                           id="inlineRadio1" value="معرفة أساسية لم أقم بتطبيق أي مشروع عملي">
                                    <label class="form-check-label " for="inlineRadio1">معرفة أساسية لم أقم بتطبيق أي
                                        مشروع عملي</label>
                                </div>
                                <div class="form-check form-check mr-1 ml-4">
                                    <input class="form-check-input mr-0 ml-2" type="radio" name="inlineRadioOptions"
                                           id="inlineRadio2" value="قمت بتطبيق بعض المشاريع الذاتبة أو مشاريع جامعية صغيرة">
                                    <label class="form-check-label" for="inlineRadio2">قمت بتطبيق بعض المشاريع الذاتبة
                                        أو مشاريع جامعية صغيرة</label>
                                </div>
                                <div class="form-check form-check mr-1 ml-4">
                                    <input class="form-check-input mr-0 ml-2" type="radio" name="inlineRadioOptions"
                                           id="inlineRadio3" value="لدي خبرة في مشاريع حقيقية">
                                    <label class="form-check-label" for="inlineRadio3">لدي خبرة في مشاريع حقيقية</label>
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="form-group col-8">
                                    <label for="">تحدث عن مهاراتك وسبب اختيارك لمجال التدريب<span
                                                class="text-danger"> *</span></label>
                                    <textarea class="form-control" name="request_Text" id="" cols="30" rows="5"
                                              placeholder="تحدث عن مهاراتك العملية وما يميزك ..."></textarea>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ml-3">ارسل طلبك الآن <i
                                            class="flaticon-paper-plane-1 text-light"></i></button>
                                <button type="submit" class="btn btn-secondary">الحفظ ك مسودة <i
                                            class="flaticon-file-2 text-light"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection