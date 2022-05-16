<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContributionController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GovernorateController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CommentController;
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

//*****-------------------- start dashboard/admin route. --------------------*****//
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['auth', 'dashboard', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::prefix('dashboard')->group(function () {
        Route::group([], function () {   //group function for "home" route.
            Route::get('/', [HomeController::class, 'index'])->name('dashboard');
            Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
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
        Route::get('/event/delete', [EventController::class, 'delete'])->name('events.delete');
        Route::get('/event/restore/{id}/', [EventController::class, 'restore'])->name('events.restore');
        Route::delete('/event/forceDelete/{id}/', [EventController::class, 'forceDelete'])->name('events.forceDelete');
        //-------------------- end events route. --------------------//

        //-------------------- start users route. --------------------//
        Route::resource('users', UserController::class);
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
        Route::post('/edit-profile-post', [ProfileController::class, 'profileUpdatePassword'])->name('edit-profile-post');
        Route::post('/edit-myProfile', [ProfileController::class, 'edit_my_Profile'])->name('edit-myProfile');
        //-------------------- end users route. --------------------//

        //-------------------- Start setting route. --------------------//
        Route::get('/setting', [SettingController::class, 'setting'])->name('setting');
        Route::post('/setting-post', [SettingController::class, 'update'])->name('setting.update');
        //-------------------- End setting route. --------------------//

        //---------------------Start Slider route. -------------------//
        Route::resource('/sliders', SliderController::class);
        Route::get('/slider/delete', [sliderController::class, 'delete'])->name('sliders.delete');
        Route::get('/slider/restore/{id}/', [sliderController::class, 'restore'])->name('sliders.restore');
        Route::delete('/slider/forceDelete/{id}/', [sliderController::class, 'forceDelete'])->name('sliders.forceDelete');
        //---------------------end Slider route. -------------------//


        //-------------------- start setting route. --------------------//
        Route::get('/setting', [SettingController::class,'setting'])->name('setting');
        Route::post('/setting-post', [SettingController::class,'update'])->name('setting.update');
        //-------------------- end setting route. --------------------//

        //-------------------- start contributions route. --------------------//
        Route::resource('/contributions', ContributionController::class);
        Route::get('/contribution/delete', [ContributionController::class, 'delete'])->name('contributions.delete');
        Route::get('/contribution/restore/{id}/', [ContributionController::class, 'restore'])->name('contributions.restore');
        Route::delete('/contribution/forceDelete/{id}/', [ContributionController::class, 'forceDelete'])->name('contributions.forceDelete');
        //-------------------- start contributions route. --------------------//
    });
});
//*****-------------------- end dashboard/admin route. --------------------*****//


//*****-------------------- start customer event route. --------------------*****//
Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('allEvents');
    Route::get('/events/create', [App\Http\Controllers\EventController::class, 'create'])->name('event.create');
    Route::get('/events/store', [App\Http\Controllers\EventController::class, 'store'])->name('event.store');
    Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');
    Route::delete('/comment/delete/{id}/', [App\Http\Controllers\CommentController::class, 'CommentDelete'])->name('comment.delete');
    Route::get('/category/{id}', [App\Http\Controllers\EventController::class, 'category'])->name('event.category');
    Route::get('/country/{id}', [App\Http\Controllers\EventController::class, 'country'])->name('event.country');
    Route::get('/governorate/{id}', [App\Http\Controllers\EventController::class, 'governorate'])->name('event.governorate');
    Route::get('/city/{id}', [App\Http\Controllers\EventController::class, 'city'])->name('event.city');
    Route::post('/comment/store', [CommentController::class,'store'])->name('comment.add');

});
//*****-------------------- end customer event route. --------------------*****//
