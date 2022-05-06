<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GovernorateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
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
        Route::group([], function () {   //group function for "home" route.
            Route::get('/', [HomeController::class, 'index'])->name('dashboard');
        });
        //-------------------- start tags route. --------------------//
        Route::resource('/tags', TagController::class);
        Route::get('/tag/delete', [TagController::class, 'delete'])->name('tags.delete');
        Route::get('/tag/restore/{id}/', [TagController::class, 'restore'])->name('tags.restore');
        Route::delete('/tag/forceDelete/{id}/', [TagController::class, 'forceDelete'])->name('tags.forceDelete');
        //-------------------- end tags route. --------------------//

        //-------------------- start countries route. --------------------//
        Route::resource('/countries', CountryController::class);
        Route::get('/country/delete', [CountryController::class, 'delete'])->name('countries.delete');
        Route::get('/country/restore/{id}/', [CountryController::class, 'restore'])->name('countries.restore');
        Route::delete('/country/forceDelete/{id}/', [CountryController::class, 'forceDelete'])->name('countries.forceDelete');
        //-------------------- end countries route. --------------------//

        //-------------------- start governorates route. --------------------//
        Route::resource('/governorates', GovernorateController::class);
        Route::get('/governorate/delete', [GovernorateController::class, 'delete'])->name('governorates.delete');
        Route::get('/governorate/restore/{id}/', [GovernorateController::class, 'restore'])->name('governorates.restore');
        Route::delete('/governorate/forceDelete/{id}/', [GovernorateController::class, 'forceDelete'])->name('governorates.forceDelete');
        //-------------------- end governorates route. --------------------//

        //-------------------- end cities route. --------------------//
        Route::resource('/cities', CityController::class);
        Route::get('/city/delete', [CityController::class, 'delete'])->name('cities.delete');
        Route::get('/city/restore/{id}/', [CityController::class, 'restore'])->name('cities.restore');
        Route::delete('/city/forceDelete/{id}/', [CityController::class, 'forceDelete'])->name('cities.forceDelete');
        //-------------------- end cities route. --------------------//

        //-------------------- start categories route. --------------------//
        Route::resource('/categories', CategoryController::class);
        Route::get('/category/delete', [CategoryController::class, 'delete'])->name('categories.delete');
        Route::get('/category/restore/{id}/', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::delete('/category/forceDelete/{id}/', [CategoryController::class, 'forceDelete'])->name('categories.forceDelete');
        //-------------------- start categories route. --------------------//

        //-------------------- start events route. --------------------//
        Route::resource('/events', EventController::class);
        //-------------------- end events route. --------------------//

        //-------------------- start users route. --------------------//
        Route::resource('users',UserController::class);
        Route::get('/profile', [ProfileController::class,'profile'])->name('profile');
        Route::get('/edit-profile', [ProfileController::class,'edit'])->name('edit-profile');
        Route::post('/edit-profile-post', [ProfileController::class,'profileUpdatePassword'])->name('edit-profile-post');
        Route::post('/edit-myProfile', [ProfileController::class,'edit_my_Profile'])->name('edit-myProfile');
        //-------------------- end users route. --------------------//

        //-------------------- Start setting route. --------------------//
        Route::get('/setting', [SettingController::class,'setting'])->name('setting');
        Route::post('/setting-post', [SettingController::class,'update'])->name('setting.update');
        //-------------------- End setting route. --------------------//
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
