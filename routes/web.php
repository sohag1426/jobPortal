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
    return view('open_jobs');
});

//job_applications
Route::get('job_applications/create', 'JobApplicationController@create')->name('job_applications.create');
Route::post('job_applications', 'JobApplicationController@store')->name('job_applications.store');
Route::get('/home', 'JobApplicationController@index')->name('home')->middleware('auth');
Route::get('job_applications/{job_application}', 'JobApplicationController@show')->name('job_applications.show')->middleware('auth');
Route::get('job_applications/{job_application}/edit', 'JobApplicationController@edit')->name('job_applications.edit')->middleware('auth');
Route::put('job_applications/{job_application}', 'JobApplicationController@update')->name('job_applications.update')->middleware('auth');
Route::delete('job_applications/{job_application}', 'JobApplicationController@destroy')->name('job_applications.destroy')->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/no_application', 'HomeController@index')->name('no_application');
