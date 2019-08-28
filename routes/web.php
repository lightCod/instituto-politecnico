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
    return view('welcome');
});

Route::get('/courses', 'CourseController@index')->name('courses');
Route::post('/storecourses', 'CourseController@store')->name('storecourses');
Route::get('course/{id}/edit', 'CourseController@edit')->name('course.edit');
Route::post('course.destroy/{id}', 'CourseController@destroy')->name('course.destroy');
Route::post('course/{id}', 'CourseController@update')->name('course.update');

Route::get('/createcourse', 'CourseController@create')->name('createcourse');
Route::post('storecourse', 'CourseController@store')->name('storecourse');

