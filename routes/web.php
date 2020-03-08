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
    return view('auth/login');
});

Route::get('/registers', function() {
    return view('createuser');
});

Auth::routes();

Route::get('/welcome', function() {
    return view('/welcome');
})->middleware('is_admin');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'StudentCountController@index')->name('home');
Route::get('/courses', 'CoursesController@listCourses')->middleware('auth');
Route::get('/create', 'CoursesController@create')->middleware('auth');
Route::post('/courses/store', 'CoursesController@store')->middleware('auth');
Route::get('/courses/bulk', 'CoursesController@upload')->middleware('auth');
Route::post('/courses/newCourse', 'CoursesController@newCourse')->middleware('auth');
Route::get('/charts', 'StudentCountController@index')->middleware('auth');
Route::get('/waitlist', 'StudentCountController@waitListed')->middleware('auth');
Route::get('/capacity', 'StudentCountController@capacity')->middleware('auth');
Route::get('/enrolled', 'StudentCountController@enrolled')->middleware('auth');
Route::get('/courses/{ID}', 'CoursesController@show')->middleware('auth');
Route::get('/courses/{ID}/edit', 'CoursesController@edit')->middleware('auth');
Route::put('/courses/{ID}',               'CoursesController@update')->middleware('auth');
Route::get('/courses/delete/{ID}',     'CoursesController@delete')->middleware('auth');
Route::get('deleteuser', 'DeleteUserController@index')->middleware('is_admin');
Route::get('deleteuser/{ID}', 'DeleteUserController@delete')->middleware('is_admin');
Route::post('/reg', 'DeleteUserController@createUser')->middleware('is_admin');
