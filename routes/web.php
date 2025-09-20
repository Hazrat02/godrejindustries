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
})->name('home');
// Route::get('/know-us', function () {
//     return view('know-us');
// });
// Route::get('/know-us/our-story', function () {
//     return view('know-us.our-story');
// });
// Route::get('/know-us/godrej-foundation', function () {
//     return view('know-us.godrej-foundation');
// });
// Route::get('/know-us/leadership', function () {
//     return view('know-us.leadership');
// });

// Route::get('/know-us/about-godrej-industries-group', function () {
//     return view('know-us.about-godrej-industries-group');
// })->name('group');


Route::prefix('know-us')->group(function () {
    Route::get('/', fn () => view('know-us'))->name('know-us.index');
    Route::get('/our-story', fn () => view('know-us.our-story'))->name('know-us.story');
    Route::get('/about-godrej-industries-group', fn () => view('know-us.about-godrej-industries-group'))->name('know-us.about');
    Route::get('/godrej-foundation', fn () => view('know-us.godrej-foundation'))->name('know-us.foundation');
    Route::get('/leadership', fn () => view('know-us.leadership'))->name('know-us.leadership');
});



// Route::prefix('investors')->group(function () {
//     Route::get('/', fn () => view('investors.index'));
//     Route::get('/annual-reports', fn () => view('investors.annual-reports'));
//     Route::get('/financial-updates', fn () => view('investors.financial-updates'));
//     Route::get('/shareholder-information', fn () => view('investors.shareholder-information'));
//     Route::get('/investors-information', fn () => view('investors.investors-information'));
//     Route::get('/subsidiaries-accounts', fn () => view('investors.subsidiaries-accounts'));
//     Route::get('/listing-compliance', fn () => view('investors.listing-compliance'));
//     Route::get('/board-committees', fn () => view('investors.board-committees'));
// });

Route::prefix('investors')->name('investors.')->group(function () {
    Route::view('/', 'investors.index')->name('index');
    Route::view('/annual-reports', 'investors.annual-reports')->name('annual-reports');
    Route::view('/financial-updates', 'investors.financial-updates')->name('financial-updates');
    Route::view('/shareholder-information', 'investors.shareholder-information')->name('shareholder-information');
    Route::view('/investors-information', 'investors.investors-information')->name('investors-information');
    Route::view('/subsidiaries-accounts', 'investors.subsidiaries-accounts')->name('subsidiaries-accounts');
    Route::view('/listing-compliance', 'investors.listing-compliance')->name('listing-compliance');
    Route::view('/board-committees', 'investors.board-committees')->name('board-committees');
});



/*
|--------------------------------------------------------------------------
| Careers
|--------------------------------------------------------------------------
*/
Route::prefix('careers')->group(function () {
    Route::get('/', fn () => view('careers.index'))->name('careers.index');
    // Route::get('/people-philosophy', fn () => view('careers.people-philosophy'));
    // Route::get('/learning', fn () => view('careers.learning'));
    // Route::get('/benefits', fn () => view('careers.benefits'));
    // Route::get('/on-campus', fn () => view('careers.on-campus'));
    // Route::get('/work-with-us', fn () => view('careers.work-with-us'));
});

/*
|--------------------------------------------------------------------------
| Sustainability
|--------------------------------------------------------------------------
*/
// Route::prefix('sustainability')->group(function () {
//     Route::get('/', fn () => view('sustainability.index'));
//     Route::get('/10-years-of-sustainability', fn () => view('sustainability.10-years'));
//     Route::get('/csr', fn () => view('sustainability.csr'));
//     Route::get('/green-supply-chain', fn () => view('sustainability.green-supply-chain'));
//     Route::get('/volunteering', fn () => view('sustainability.volunteering'));
// });
Route::view('/businesses', 'businesses.index')->name('businesses.index');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/legal', 'legal')->name('legal');

Route::prefix('sustainability')->name('sustainability.')->group(function () {
    Route::view('/', 'sustainability.index')->name('index');
    Route::view('/10-years-of-sustainability', 'sustainability.10-years')->name('10-years');
    Route::view('/csr', 'sustainability.csr')->name('csr');
    Route::view('/green-supply-chain', 'sustainability.green-supply-chain')->name('green-supply-chain');
    Route::view('/volunteering', 'sustainability.volunteering')->name('volunteering');
});