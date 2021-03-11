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
Route::get('/contact', 'MiscWebController@getContact');
Route::post('/contact-form', 'MiscWebController@postContactForm');
Route::get('/contact-form-confirmation', 'MiscWebController@getContactFormConfirmation');

// ----------------------------------
// - AdminAlbumWebController routes -
// ----------------------------------

Route::middleware(['admins-only'])->group(function() {
	Route::get('/admin/album/create', 'AdminAlbumWebController@getCreateAlbum');
	Route::post('/admin/album/create', 'AdminAlbumWebController@postCreateAlbum');
	Route::post('/admin/album/delete/{album_id}', 'AdminAlbumWebController@postDeleteAlbum');
	Route::get('/admin/album/search', 'AdminAlbumWebController@getAlbumSearch');
	Route::post('/admin/album/search', 'AdminAlbumWebController@postAlbumSearch');
	Route::get('/admin/album/{album_id}', 'AdminAlbumWebController@getAlbum'); // Make sure it's last in list
});

// ---------------------------
// - AdminImageWebController -
// ---------------------------

Route::middleware(['admins-only'])->group(function() {
	Route::get('/admin/i/summary/{file_id}', 'AdminImageWebController@getFileSummary');
	Route::post('/admin/i/make-file', 'AdminImageWebController@postMakeFile');
});

// --------------------------------
// - CalendarWebController routes -
// --------------------------------

Route::get('/calendar/schedule', 'CalendarWebController@getSchedule');
Route::get('/calendar/test', 'CalendarWebController@getTest');

// ---------------------------------
// - DashboardWebController routes -
// ---------------------------------

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'DashboardWebController@getDashboard')->name('dashboard');

// -----------------------------
// - ImageWebController routes -
// -----------------------------

Route::post('/i/delete/{file}', 'ImageWebController@postDeleteFile');
Route::get('/i/{file}', 'ImageWebController@getFile'); // Make sure it's last in list

