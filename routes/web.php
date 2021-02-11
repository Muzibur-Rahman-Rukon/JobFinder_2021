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


Route::get('/','App\Http\Controllers\PhotoController@index');
Route::get('/userRegister','App\Http\Controllers\PhotoController@userRegister');
Route::get('/userLogin','App\Http\Controllers\PhotoController@userLogin');
Route::get('/JobList','App\Http\Controllers\PhotoController@JobList');
Route::get('/about','App\Http\Controllers\PhotoController@about');
Route::get('/contact','App\Http\Controllers\PhotoController@contact');



/*


-----------------------------------
Admin Route Start
-----------------------------------
*/

Route::get('/admin','App\Http\Controllers\AdminController@login');
Route::post('/admin_login_check','App\Http\Controllers\AdminController@admin_login_check');
Route::get('/index','App\Http\Controllers\AdminController@index');
Route::get('/addJob','App\Http\Controllers\AdminController@addJob');
Route::get('/manageJob','App\Http\Controllers\AdminController@manageJob');
Route::get('/addJobCategory','App\Http\Controllers\AdminController@addJobCategory');
Route::get('/viewCategory','App\Http\Controllers\AdminController@viewCategory');
Route::get('/addCompany','App\Http\Controllers\AdminController@addCompany');
Route::get('/viewCompany','App\Http\Controllers\AdminController@viewCompany');
Route::get('/viewallUser','App\Http\Controllers\AdminController@viewallUser');
Route::get('/logout','App\Http\Controllers\AdminController@logout');





