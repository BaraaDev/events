<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GovernorateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CountryController;
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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['auth','dashboard','localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],function (){
        Route::prefix('dashboard')->group(function (){
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');
        Route::resource('/tags', TagController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/countries', CountryController::class);
        Route::resource('/governorates', GovernorateController::class);
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



