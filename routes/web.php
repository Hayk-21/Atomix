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


Auth::routes();

Route::middleware(['dashboard_auth'])->group(function () {
    Route::get('/', 'PageController@index')->name('index');
    Route::get('service', 'PageController@service')->name('service');
    Route::get('abouetus', 'PageController@aboute')->name('aboute');
    Route::get('faq', 'PageController@faq')->name('faq');
    Route::get('aboute/news', 'PageController@news')->name('news');
    Route::get('aboute/rodmap', 'PageController@rodmap')->name('rodmap');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboardpartner', 'PageController@dashboardpartner')->name('dashboardpartner');
    Route::get('dashboard', 'PageController@dashboardindex')->name('dashboardindex');
    Route::get('partnersone', 'PageController@partnersone')->name('partnersone');
});
