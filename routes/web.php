<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::group (['prefix' => 'admin'], function () {
//    Route::resource ('/Log', 'AdminController\LogController');
//    Route::resource ('/CompanyInfo', 'AdminController\CompanyInfo');
//    Route::resource ('/employee', 'AdminController\employee');
//    Route::resource ('/service', 'AdminController\service');
//    Route::resource ('/serviceRequest', 'AdminController\serviceRequest');
//
//
//});

Route::get('/Log', function () {
    return view('Systems.Admin.Login');
});

Route::get('/CompanyInfo', function () {
    return view('Systems.Admin.companyInfo');
});

Route::get('/employee', function () {
    return view('Systems.Admin.employee');
});
Route::get('/service', function () {
    return view('Systems.Admin.service');
});
Route::get('/serviceRequest', function () {
    return view('Systems.Admin.serviceRequest');
});

Route::get('/dataTable', function () {
    return view('Systems.Admin.dataTable');
});

Route::get('/modal', function () {
    return view('Systems.Admin.modal');
});

Route::get('/report', function () {
    return view('templete.report');
});




Route::get('/holidayRequest', function () {
    return view('Systems.Admin.holidayReq');
});

Route::get('/IhtiagRequest', function () {
    return view('Systems.Admin.IhtiagReq');
});
Route::get('/resignationrequest', function () {
    return view('Systems.Admin.resignationrequest');
});

Route::get('/SubscriptionFee', function () {
    return view('Systems.Admin.SubscriptionFee');
});
Route::get('/serviceFee', function () {
    return view('Systems.Admin.serviceFee');
});
Route::get('/contractWorks', function () {
    return view('Systems.Admin.contractWorks');
});
Route::get('/RecruitmentAds', function () {
    return view('Systems.Admin.recruitmentAds');
});

Route::get('/interviewTaps', function () {
    return view('Systems.Admin.interviewTaps');
});
Route::get('/JobApplicantData', function () {
    return view('Systems.Admin.JobApplicantData');
});

Route::get('/massages', function () {
    return view('Systems.Admin.massages');
});
Route::get('/allReportAdmin', function () {
    return view('Systems.Admin.allReportAdmin');
});
Route::get('/UrgentRequest', function () {
    return view('Systems.Admin.urgentRequest');
});
Route::get('/viewManagerAccount', function () {
    return view('Systems.Admin.viewManagerAccount');
});
Route::get('/viewEmployeeAccount', function () {
    return view('Systems.Admin.viewEmployeeAccount');
});



//Manager Routes
Route::get('/ManagerAccount', function () {
    return view('Systems.Manager.ManagerAccount');
});
Route::get('/ManageracountInformation', function () {
    return view('Systems.Manager.ManageracountInformation');
});
Route::get('/ManagerChangePassword', function () {
    return view('Systems.Manager.ManagerChangePassword');
});
Route::get('/ManagerviewManagerAccount', function () {
    return view('Systems.Manager.viewManagerAccount');
});
Route::get('/ManagerEmailSiting', function () {
    return view('Systems.Manager.ManagerEmailSiting');
});
Route::get('/ManagerserviceRequest', function () {
    return view('Systems.Manager.ManagerserviceRequest');
});
Route::get('/employeeInformation', function () {
    return view('Systems.Manager.employeeInformation');
});

Route::get('/ManagersalaryFee', function () {
    return view('Systems.Manager.ManagersalaryFee');
});

Route::get('/ManagersubscriptionFee', function () {
    return view('Systems.Manager.ManagersubscriptionFee');
});

Route::get('/ManagerMassages', function () {
    return view('Systems.Manager.ManagerMassages');
});


//Employee Routs
Route::get('/EmployeeAccount', function () {
    return view('Systems.employee.EmployeeAccount');
});
Route::get('/EmployeeAcountInformation', function () {
    return view('Systems.employee.EmployeeAcountInformation');
});
Route::get('/EmployeeChangePassword', function () {
    return view('Systems.employee.EmployeeChangePassword');
});
Route::get('/EmployeeviewEmployeeAccount', function () {
    return view('Systems.employee.viewEmployeeAccount');
});

Route::get('/EmployeeCV', function () {
    return view('Systems.employee.EmployeeCV');
});
Route::get('/EmployeeResignationrRequest', function () {
    return view('Systems.employee.EmployeeResignationrRequest');
});

Route::get('/EmployeeHoliday', function () {
    return view('Systems.employee.EmployeeHoliday');
});
Route::get('/EmployeeUrgentRequest', function () {
    return view('Systems.employee.EmployeeUrgentRequest');
});

Route::get('/EmployeeIhtiagRequest', function () {
    return view('Systems.employee.EmployeeIhtiagRequest');
});

Route::get('/EmployeeSalary', function () {
    return view('Systems.employee.EmployeeSalary');
});
