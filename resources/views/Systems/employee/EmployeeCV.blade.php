@extends('layouts.layoutEmployee')

@section('content')
    <div class="content flex-column-fluid" id="kt_content">
        <div class="card card-custom">
            <div class="card-body p-0">
                <!--begin: Wizard-->
                <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first"
                     data-wizard-clickable="true">
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav">
                        <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>1.</span>البيانات الشخصية</h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                            <!--begin::Wizard Step 2 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>2.</span>المؤهل العلمي</h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 2 Nav-->
                            <!--begin::Wizard Step 3 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>3.</span>الدورات التدريبية</h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 3 Nav-->

                            <!--begin::Wizard Step 4 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-label">
                                    <h3 class="wizard-title">
                                        <span>4.</span>مراجعة وحفظ</h3>
                                    <div class="wizard-bar"></div>
                                </div>
                            </div>
                            <!--end::Wizard Step 4 Nav-->
                        </div>
                    </div>
                    <!--end: Wizard Nav-->
                    <!--begin: Wizard Body-->
                    <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10">
                        <div class="col-xl-12 col-xxl-7">
                            <!--begin: Wizard Form-->
                            <form class="form" id="kt_form">
                                <!--begin: Wizard Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h4 class="mb-10 font-weight-bold text-dark">قم بإعداد بياناتك الشخصية</h4>
                                    <div class="row">

                                        <div class="col-xl-3">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>الاسم بالغة العربية *</label>
                                                <input type="text" class="form-control" name="firstName"
                                                       placeholder="الاسم الأول" value="الاسم الأول"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="secondName"
                                                       placeholder="الاسم الثاني" value="الاسم الثاني"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="thirdName"
                                                       placeholder="الاسم الثالث" value="الاسم الثالث"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="forthName"
                                                       placeholder="الاسم الأخير" value="الاسم الأخير"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <!--begin::Input-->
                                            <div class="form-group">
                                                <label>الاسم بالغة الانجليزية *</label>
                                                <input type="text" class="form-control" name="firstName"
                                                       placeholder="الاسم الأول" value="firstName"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="secondName"
                                                       placeholder="الاسم الثاني" value="secondName"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="thirdName"
                                                       placeholder="الاسم الثالث" value="thirdName"/>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label></label>
                                                <input type="text" class="form-control" name="forthName"
                                                       placeholder="الاسم الأخير" value="LastName"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                    <div class="row">
                                        <!--begin::Input-->
                                        <label>رقم الهوية</label>
                                        <div class="col-xl-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="Identification"
                                                       placeholder="Identification" value="0400000000"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>

                                        <label>Identification Number</label>
                                        <!--end::Input-->
                                    </div>
                                    <div class="row">
                                        <!--begin::Input-->
                                        <label>تاريخ الميلاد</label>
                                        <div class="col-xl-9">
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="dateOfBirth"
                                                       placeholder=" dateOfBirth" value=" 18/3/1999"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>

                                        <label>date Of Birth</label>
                                        <!--end::Input-->
                                    </div>
                                    <!--begin::Input-->
                                    <div class="row">
                                        <!--begin::Input-->
                                        <label>رقم الهاتف: </label>
                                        <div class="col-xl-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="phoneNumber"
                                                       placeholder=" phoneNumber" value=" 059 9 000 000"/>
                                                <span class="form-text text-muted">أدخل رقم هاتفك الشخصي الفعال</span>
                                            </div>
                                        </div>

                                        <label> phone Number:</label>
                                        <!--end::Input-->
                                    </div>
                                    <div class="row">
                                        <!--begin::Input-->
                                        <label>الحالة الاجتماعية</label>
                                        <div class="col-xl-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="SocialStatus"
                                                       placeholder="الحالة الاجتماعية" value="الحالة الاجتماعية"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                        </div>

                                        <label>SocialStatus</label>
                                        <!--end::Input-->
                                    </div>

                                    <!--end::Input-->

                                    <div class="row">
                                        <label>الجنسية</label>
                                        <div class="col-xl-5">

                                            <!--begin::Input-->
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="Nationality"
                                                       placeholder="الجنسية" value="الجنسية"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>

                                        <div class="col-xl-5">
                                            <!--begin::Input-->
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="Nationality"
                                                       placeholder="Nationality"
                                                       value="Nationality"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <label>Nationality</label>
                                    </div>

                                    <div class="row">
                                        <label>مكان الميلاد</label>
                                        <div class="col-xl-5">

                                            <!--begin::Input-->
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="placeOfBirth"
                                                       placeholder="مكان الميلاد" value="مكان الميلاد"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>

                                        <div class="col-xl-5">
                                            <!--begin::Input-->
                                            <div class="form-group">

                                                <input type="text" class="form-control" name="placeOfBirth"
                                                       placeholder="place of birth"
                                                       value="place of birth"/>
                                                <span class="form-text text-muted"></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <label>place of birth</label>
                                    </div>

                                </div>
                                <!--end: Wizard Step 1-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark"> المؤهلات العلمية</h4>
                                    <!--begin::Select-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <div id="kt_repeater_1">
                                        <div class="form-group row">
                                            <div data-repeater-list="" class="col-lg-12">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="row">
                                                        <label>المؤهل العلمي </label>
                                                        <div class="col-xl-5">
                                                            <!--begin::Input-->
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                       name="Qualification"
                                                                       placeholder=" المؤهل العلمي" value=" بكالوريس"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <!--begin::Input-->
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                       name="Qualification"
                                                                       placeholder=" Qualification "
                                                                       value="Qualification"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <label>Qualification</label>
                                                    </div>

                                                    <div class="row">
                                                        <label>الجامعة </label>
                                                        <div class="col-xl-5">

                                                            <!--begin::Input-->
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                       name="University"
                                                                       placeholder="الجامعة" value="الجامعة"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <!--begin::Input-->
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                       name="University"
                                                                       placeholder="University"
                                                                       value="University"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <label>University</label>
                                                    </div>

                                                    <div class="row">
                                                        <!--begin::Input-->
                                                        <label>سنة التخرج </label>
                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <input type="date" class="form-control"
                                                                       name="GraduationYear"
                                                                       placeholder="سنة التخرج" value="2020"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                        </div>

                                                        <label>Graduation Year</label>
                                                        <!--end::Input-->
                                                    </div>


                                                    <div class="col-md-4">
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
                                    <!--end::Select-->
                                </div>

                                <!--begin: Wizard Step 2-->

                                <!--end: Wizard Step 2-->
                                <!--begin: Wizard Step 3-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">الدورات التدريبية</h4>
                                    <!--begin::Select-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <div id="kt_repeater_2">
                                        <div class="form-group row">
                                            <div data-repeater-list="" class="col-lg-12">
                                                <div data-repeater-item="" class="form-group row align-items-center">
                                                    <div class="row">
                                                        <label>اسم الدورة:</label>
                                                        <div class="col-xl-5">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="CourseName"
                                                                       placeholder="اسم الدورة" value="دورة ---"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="col-xl-4">
                                                            <!--begin::Input-->
                                                            <div class="form-group">

                                                                <input type="text" class="form-control"
                                                                       name="CourseName"
                                                                       placeholder="CourseName"
                                                                       value="Course---"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <label>Course Name</label>
                                                    </div>
                                                    <div class="row">
                                                        <label>فترة التدريب:</label>
                                                        <div class="col-xl-5">
                                                            <label>من:</label>
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <input type="date" class="form-control"
                                                                       name="CourseDate"
                                                                       placeholder="" value="dd/mm/yyyy"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="col-xl-5">
                                                            <label>إلى:</label>
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <input type="date" class="form-control"
                                                                       name="CourseDateEnd"
                                                                       placeholder="" value="dd/mm/yyyy"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <label>عدد ساعات التدريب:</label>
                                                        <div class="col-xl-8">
                                                            <label></label>
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                       name="CourseDate"
                                                                       placeholder="" value="50"/>
                                                                <span class="form-text text-muted"></span>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                    </div>


                                                    <div class="col-md-4">
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
                                    <!--end::Select-->
                                </div>
                                <!--end: Wizard Step 3-->

                                <!--begin: Wizard Step 4-->

                                <div class="pb-5" data-wizard-type="step-content">
                                    <!--begin::Section-->
                                    <h4 class="mb-10 font-weight-bold text-dark">مراجعة بياناتك الشخصية وحفظها</h4>
                                    <h6 class="font-weight-bolder mb-3">الاسم باللغة العربية :</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>عائشة إبراهيم عوض دادر</div>
                                    </div>
                                    <h6 class="font-weight-bolder mb-3">الاسم باللغة الانجليزية :</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>Aisha ibraheam awad dader</div>
                                    </div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <h6 class="font-weight-bolder mb-3">الحالة الاجتماعية:</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>أعزب</div>
                                    </div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <h6 class="font-weight-bolder mb-3">رقم الهاتف:</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>059 9 000 000</div>
                                    </div>
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <h6 class="font-weight-bolder mb-3">المؤهل العلمي:</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>بكالوريس تطوير برمجيات </div>
                                        <div>دبلوم تريبة</div>
                                    </div>
                                    <!--end::Section-->
                                    <div class="separator separator-dashed my-5"></div>
                                    <!--end::Section-->
                                    <!--begin::Section-->
                                    <h6 class="font-weight-bolder mb-3"> الدورات التدريبية:</h6>
                                    <div class="text-dark-50 line-height-lg">
                                        <div>دورة تطوير في بيئة لارفيل </div>
                                        <div>فترة تدريب من 11/7/2021 الى : 1/12/2021</div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end: Wizard Step 4-->
                                <!--begin: Wizard Step 5-->
                                <!--end: Wizard Step 5-->
                                <!--begin: Wizard Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4"
                                                data-wizard-type="action-prev">السابق
                                        </button>
                                    </div>
                                    <div>
                                        <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4"
                                                data-wizard-type="action-submit">حفظ
                                        </button>
                                        <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4"
                                                data-wizard-type="action-next">الخطوة التالية
                                        </button>
                                    </div>
                                </div>
                                <!--end: Wizard Actions-->
                            </form>
                            <!--end: Wizard Form-->
                        </div>
                    </div>
                    <!--end: Wizard Body-->
                </div>
                <!--end: Wizard-->
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection