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

// ----------------------------
// - MiscWebController routes -
// ----------------------------

Route::get('/', 'MiscWebController@getIndex');
Route::get('/1', 'MiscWebController@get1');
Route::post('/contact-form', 'MiscWebController@postContactForm');
Route::get('/contact-form-confirmation', 'MiscWebController@getContactFormConfirmation');

// --------------------------------
// - CalendarWebController routes -
// --------------------------------

Route::get('/calendar/test', 'CalendarWebController@getTest');

// ---------------------------------
// - DashboardWebController routes -
// ---------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'DashboardWebController@getDashboard')->name('dashboard');

// --------------------------------
// - ImageWebController routes -
// --------------------------------

Route::get('/i/{file}', 'ImageWebController@getFile');
Route::post('/i/make-file', 'ImageWebController@postMakeFile');
Route::get('/i/summary/{file_id}', 'ImageWebController@getFileSummary');
