<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GovernorateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
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
    'middleware' => ['auth', 'dashboard', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('dashboard')->group(function () {
        Route::group([], function() {   //group function for "Home" route.
            Route::get('/', [HomeController::class, 'index'])->name('dashboard');
            Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
        });
        Route::resource('/tags', TagController::class);
        Route::resource('/categories', CategoryController::class);
        Route::get('/category/delete', [CategoryController::class,'delete'])->name('categories.delete');
        Route::get('/category/restore/{id}/', [CategoryController::class,'restore'])->name('categories.restore');
        Route::delete('/category/forceDelete/{id}/', [CategoryController::class,'forceDelete'])->name('categories.forceDelete');
        Route::resource('/countries', CountryController::class);
        Route::resource('/governorates', GovernorateController::class);
        Route::resource('/events', EventController::class);
        Route::resource('/cities', CityController::class);
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
