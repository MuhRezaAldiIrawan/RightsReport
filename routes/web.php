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

//Main
Route::get('/', 'App\Http\Controllers\MainController@index');
Route::get('/korupsi', 'App\Http\Controllers\MainController@korupsi');
Route::get('/korupsi2', 'App\Http\Controllers\MainController@korupsi2');
Route::get('/kekerasan', 'App\Http\Controllers\MainController@kekerasan');
Route::get('/bullying', 'App\Http\Controllers\MainController@bullying');
Route::get('/pembatasankebebasan', 'App\Http\Controllers\MainController@pembatasankebebasan');
Route::get('/diskriminasi', 'App\Http\Controllers\MainController@diskriminasi');
Route::get('/report', 'App\Http\Controllers\MainController@report');
Route::post('/report', 'App\Http\Controllers\MainController@addreport');




//Auth
Route::get('/login', 'App\Http\Controllers\AuthController@index');
Route::get('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@authenticate');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout');

//Dashboard
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
// Route::get('/dashboard', 'App\Http\Controllers\DashboardController@reportchart');

//Kategori
Route::get('/kategori', 'App\Http\Controllers\KategoriController@index');

//Report
Route::get('/new_report', 'App\Http\Controllers\ReportController@new_report')->name('new_report');
Route::get('/proggress_report', 'App\Http\Controllers\ReportController@proggress_report')->name('proggress_report');
Route::get('/histori_report', 'App\Http\Controllers\ReportController@histori_report')->name('histori_report');
Route::get('/detailreport/{id}', 'App\Http\Controllers\ReportController@detailreport');
Route::post('/proses_report/{id}', 'App\Http\Controllers\ReportController@proses_report');
Route::post('/end_report/{id}', 'App\Http\Controllers\ReportController@end_report');

//Pesan
Route::get('/email', 'App\Http\Controllers\EmailController@index');
Route::get('/whatsapp', 'App\Http\Controllers\WhatsappController@index');
Route::post('/sendemail', 'App\Http\Controllers\EmailController@sendemail');

