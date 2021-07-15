<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\detailjobController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index');

// joblist Route
Route::post('/cari', 'App\Http\Controllers\jobsController@cari')->name('cari');
Route::get('/joblist', 'App\Http\Controllers\jobsController@index');
Route::post('/joblist', 'App\Http\Controllers\jobsController@store');
Route::get('/joblist/create', 'App\Http\Controllers\jobsController@create');
Route::post('/joblist/confirm', 'App\Http\Controllers\jobsController@confirm')->name('joblist_confirm');
Route::get('/joblist/{joblist}', 'App\Http\Controllers\jobsController@show');
Route::post('/joblist/proposal', 'App\Http\Controllers\jobsController@proposal')->name('joblist_proposal');
Route::post('/joblist/submit', 'App\Http\Controllers\jobsController@submit')->name('joblist_submit');
Route::get('/pembayaran', 'App\Http\Controllers\jobController@payment');
Route::get('/test', 'App\Http\Controllers\detailJobController@test');

Route::get('/jobtransaction/{id}', 'App\Http\Controllers\JobTransaction@index')->name('jobtransaction');
Route::post('/jobtransaction/{id}/file', 'App\Http\Controllers\JobTransaction@file')->name('jobtransaction_post_file');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
Route::get('/profile/translator/{id}', 'App\Http\Controllers\ProfileController@show')->name('profile_translator');


Route::get('/user', 'App\Http\Controllers\userController@index');

// Auth::routes();
Route::middleware(['auth','admin'])->group(function () {
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth','client'])->group(function () {
    Route::get('client/home', [App\Http\Controllers\HomeController::class, 'userHome'])->name('home');
});

Route::middleware(['auth','translator'])->group(function () {
    Route::get('translator/home', [App\Http\Controllers\HomeController::class, 'translatorHome'])->name('translator.home');
});

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
