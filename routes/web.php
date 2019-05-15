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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	Route::get('list-user', 'AdminController@listAllUsers')->name('list-user');
});

Route::group(['middleware' => 'App\Http\Middleware\TeacherMiddleware'], function()
{
	Route::get('list-student', 'TeacherController@listAllStudents')->name('list-student');
});

Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
	Route::get('list-teacher', 'StudentController@listAllTeachers')->name('list-teacher');
});
