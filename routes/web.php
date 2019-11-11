<?php

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
    return view('main');
})->middleware('auth');

Route::get('courses', 'CourseController@index')->name('courses')->middleware('auth');
Route::get('ncourses', 'CourseController@show')->name('ncourses')->middleware('auth');
Route::get('course.edit', 'CourseController@edit')->name('course.edit')->middleware('auth');
Route::post('course.destroy', 'CourseController@destroy')->name('course.destroy')->middleware('auth');
Route::post('course.update', 'CourseController@update')->name('course.update')->middleware('auth');
Route::get('createcourse', 'CourseController@create')->name('createcourse')->middleware('auth');
Route::post('storecourse', 'CourseController@store')->name('storecourse')->middleware('auth');
Route::post('search.courses', 'CourseController@search')->name('search.courses')->middleware('auth');

Route::get('students', 'StudentController@index')->name('students')->middleware('auth');
Route::get('student.edit', 'StudentController@edit')->name('student.edit')->middleware('auth');
Route::post('student.update', 'StudentController@update')->name('student.update')->middleware('auth');
Route::get('createstudent', 'StudentController@create')->name('createstudent')->middleware('auth');
Route::post('storestudent', 'StudentController@store')->name('storestudent')->middleware('auth');
Route::post('student.destroy', 'StudentController@destroy')->name('student.destroy')->middleware('auth');
Route::get('student.statement/{id}', 'StudentController@show')->name('student.statement')->middleware('auth');
Route::post('search.students', 'StudentController@search')->name('search.students')->middleware('auth');
Route::get('open.changeCourse', 'StudentController@openChangeCourse')->name('open.changeCourse')->middleware('auth');
Route::get('open.automaticDebit', 'StudentController@openAutomaticDebits')->name('open.automaticDebit')->middleware('auth');
Route::post('student.changeCourse', 'StudentController@changeCourse')->name('student.changeCourse')->middleware('auth');
Route::post('student.automaticDebit', 'StudentController@automaticDebit')->name('student.automaticDebit')->middleware('auth');

Route::get('users', 'UserController@index')->name('users')->middleware('auth');
Route::get('user.edit', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('user.update', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('createuser', 'UserController@create')->name('createuser')->middleware('auth');
Route::post('storeuser', 'UserController@store')->name('storeuser')->middleware('auth');
Route::post('user.destroy', 'UserController@destroy')->name('user.destroy')->middleware('auth');
Route::post('search.user', 'UserController@search')->name('search.user')->middleware('auth');

Route::get('debittypes', 'DebitTypeController@index')->name('debittypes')->middleware('auth');
Route::get('debittype.edit', 'DebitTypeController@edit')->name('debittype.edit')->middleware('auth');
Route::post('debittype', 'DebitTypeController@update')->name('debittype.update')->middleware('auth');
Route::post('debittype.destroy', 'DebitTypeController@destroy')->name('debittype.destroy')->middleware('auth');
Route::get('createdebittype', 'DebitTypeController@create')->name('createdebittype')->middleware('auth');
Route::post('storedebittype', 'DebitTypeController@store')->name('storedebittype')->middleware('auth');

Route::get('debit.edit', 'DebitController@edit')->name('debit.edit')->middleware('auth');
Route::post('debit.update', 'DebitController@update')->name('debit.update')->middleware('auth');
Route::post('debit.destroy', 'DebitController@destroy')->name('debit.destroy')->middleware('auth');
Route::get('createdebit', 'DebitController@create')->name('createdebit')->middleware('auth');
Route::post('storedebit', 'DebitController@store')->name('storedebit')->middleware('auth');

Route::get('credit.edit', 'CreditController@edit')->name('credit.edit')->middleware('auth');
Route::post('credit.update', 'CreditController@update')->name('credit.update')->middleware('auth');
Route::post('credit.destroy', 'CreditController@destroy')->name('credit.destroy')->middleware('auth');
Route::get('createcredit', 'CreditController@create')->name('createcredit')->middleware('auth');
Route::post('storecredit', 'CreditController@store')->name('storecredit')->middleware('auth');

Route::get('report.daily', 'CheckingAccountController@daily')->name('report.daily')->middleware('auth');
Route::get('report.weekly', 'CheckingAccountController@weekly')->name('report.weekly')->middleware('auth');
Route::get('report.monthly', 'CheckingAccountController@monthly')->name('report.monthly')->middleware('auth');
Route::get('report.studentaccount', 'CheckingAccountController@account')->name('report.studentaccount')->middleware('auth');
Route::get('report.bydate', 'CheckingAccountController@openByDate')->name('report.bydate')->middleware('auth');
Route::post('report.getByDate', 'CheckingAccountController@reportByDate')->name('report.getByDate')->middleware('auth');
Route::get('report.examlist', 'CheckingAccountController@accountSitauation')->name('report.examlist')->middleware('auth');
Route::get('generate.receipt', 'DynamicPDFController@pdf')->name('generate.receipt')->middleware('auth');
Route::get('studentaccount.report', 'CheckingAccountController@pdf')->name('studentaccount.report')->middleware('auth');
Route::get('students.report', 'StudentController@pdf')->name('students.report')->middleware('auth');
Route::get('courses.report', 'CourseController@pdf')->name('courses.report')->middleware('auth');

Route::get('report.dailyPdf', 'CheckingAccountController@dailyPdf')->name('report.dailyPdf')->middleware('auth');
Route::get('report.weeklyPdf', 'CheckingAccountController@weeklyPdf')->name('report.weeklyPdf')->middleware('auth');
Route::get('report.monthlyPdf', 'CheckingAccountController@monthlyPdf')->name('report.monthlyPdf')->middleware('auth');
Route::get('report.bydatePdf', 'CheckingAccountController@openByDatePdf')->name('report.bydatePdf')->middleware('auth');
Route::get('report.gender', 'CheckingAccountController@genderReport')->name('report.gender')->middleware('auth');
//Route::post('user.changePass', '')->name('user.changePass')->middleware('auth');

Route::get('report.examlistPdf', 'CheckingAccountController@accountSitauationPdf')->name('report.examlist')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
