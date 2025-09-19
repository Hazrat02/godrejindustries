<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
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
Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('route:clear');

    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'done';
});
Route::get('/', function () {
    return view('home');
});
Route::get('/know-us', function () {
    return view('know-us');
});
Route::get('/know-us/our-story', function () {
    return view('know-us.our-story');
});
Route::get('/know-us/about-godrej-industries-group', function () {
    return view('know-us.about-godrej-industries-group');
})->name('group');


