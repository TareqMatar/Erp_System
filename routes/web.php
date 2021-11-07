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
    return view('Admin.Login');
});

Route::get('/CompanyInfo', function () {
    return view('Admin.CompanyInfo');
});

Route::get('/employee', function () {
    return view('Admin.employee');
});
Route::get('/service', function () {
    return view('Admin.service');
});
Route::get('/serviceRequest', function () {
    return view('Admin.serviceRequest');
});

Route::get('/dataTable', function () {
    return view('Admin.dataTable');
});

Route::get('/modal', function () {
    return view('Admin.modal');
});

Route::get('/account', function () {
    return view('templete.accountTemplete');
});
Route::get('/wizard', function () {
    return view('Admin.wizard');
});

Route::get('/AddService', function () {
    return view('Admin.AddService');
});

Route::get('/holidayRequest', function () {
    return view('Admin.holidayReq');
});

Route::get('/IhtiagRequest', function () {
    return view('Admin.IhtiagReq');
});
Route::get('/resignationrequest', function () {
    return view('Admin.resignationrequest');
});

Route::get('/SubscriptionFee', function () {
    return view('Admin.SubscriptionFee');
});
Route::get('/serviceFee', function () {
    return view('Admin.serviceFee');
});
Route::get('/contractWorks', function () {
    return view('Admin.contractWorks');
});
Route::get('/RecruitmentAds', function () {
    return view('Admin.RecruitmentAds');
});

Route::get('/interviewTaps', function () {
    return view('Admin.interviewTaps');
});
Route::get('/JobApplicantData', function () {
    return view('Admin.JobApplicantData');
});

//Manager Routes
Route::get('/ManagerAccount', function () {
    return view('Manager.ManagerAccount');
});
Route::get('/ManageracountInformation', function () {
    return view('Manager.ManageracountInformation');
});
Route::get('/ManagerChangePassword', function () {
    return view('Manager.ManagerChangePassword');
});
Route::get('/ManagerEmailSiting', function () {
    return view('Manager.ManagerEmailSiting');
});
Route::get('/serviceRequest', function () {
    return view('Manager.serviceRequest');
});



