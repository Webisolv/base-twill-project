<?php

use App\Http\Controllers\Frontend\PageDisplayController;
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

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localizationRedirect', 'localeSessionRedirect']],
    function () {
        Route::get('/', [PageDisplayController::class, 'landingPage'])->name('front.homepage');

        Route::get('/{slug}', [PageDisplayController::class, 'displayPage'])->name('front.page');
    }
);
