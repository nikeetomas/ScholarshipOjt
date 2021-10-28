<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function(){
    return view('admin.dashboard');
});

//Route::get('/scholarship','Admin\ScholarshipController@scholarships');

Route::get('/scholarship', [App\Http\Controllers\HomeController::class, 'scholarships'])->name('scholarships');
Route::get('scholarships/scholarship-create', 'App\Http\Controllers\HomeController@create');
Route::get('/scholarhip-edit/{id}','App\Http\Controllers\HomeController@scholarshipedit');
Route::put('/scholarship-update/{id}','App\Http\Controllers\HomeController@scholarshipupdate');
Route::delete('/scholarship-delete/{id}','App\Http\Controllers\HomeController@scholarshipdelete');
Route::post('/scholarship','App\Http\Controllers\HomeController@store');
Route::get('/scholars','App\Http\Controllers\HomeController@join');
Route::get('/scholarlist','App\Http\Controllers\HomeController@show');

