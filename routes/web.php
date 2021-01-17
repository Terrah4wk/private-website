<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [
    'as' => 'site.home',
    'uses' => 'App\Http\Controllers\SiteController@home',
]);

Route::get('/about-me', [
    'as' => 'site.about-me',
    'uses' => 'App\Http\Controllers\SiteController@aboutMe',
]);

Route::get('/cv', [
    'as' => 'site.cv',
    'uses' => 'App\Http\Controllers\SiteController@cv',
]);

Route::get('/imprint', [
    'as' => 'site.imprint',
    'uses' => 'App\Http\Controllers\SiteController@imprint',
]);