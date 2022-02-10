<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/','front.home')->name('home');
Route::view('/about','front.about-us')->name('about');
Route::view('/acting','front.acting-academy')->name('acting');
Route::view('/classes','front.classes')->name('classes');
Route::view('/contact','front.contact')->name('contact');
Route::view('/digital','front.digital-marketing')->name('digital');
Route::view('/filmmaker','front.filmmaker-academy')->name('filmmaker');
Route::view('/pricing','front.pricing')->name('pricing');
Route::view('/crypto','front.crypto')->name('crypto');
Route::get('/price',[App\Http\Controllers\Front\PriceController::class, 'index'])->name('price');

// Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about']);
// Route::get('/acting', [App\Http\Controllers\FrontendController::class, 'acting']);
// Route::get('/classes', [App\Http\Controllers\FrontendController::class, 'classes']);
// Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact']);
// Route::get('/digital', [App\Http\Controllers\FrontendController::class, 'digital']);
// Route::get('/filmmaker', [App\Http\Controllers\FrontendController::class, 'filmmaker']);

Auth::routes();
//Auth::routes(['register' => true]);
Route::get('verify/resend', [App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');
Route::resource('verify', App\Http\Controllers\Auth\TwoFactorController::class)->only(['index', 'store']);
//Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'twofactor']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('dashboard');
    // Permissions
    Route::delete('permissions/destroy', [App\Http\Controllers\Admin\PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [App\Http\Controllers\Admin\RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [App\Http\Controllers\Admin\UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

//    Settings
    Route::resource('settings', SettingsController::class)->only(['edit', 'update']);

    // Categories
    Route::delete('categories/destroy', [App\Http\Controllers\Admin\CategoriesController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoriesController::class);

    // Courses
    Route::delete('courses/destroy', [App\Http\Controllers\Admin\CoursesController::class, 'massDestroy'])->name('courses.massDestroy');
    Route::resource('courses', CoursesController::class);

    // Update User Details
    Route::put('/update-profile/{user}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/edit-profile', [App\Http\Controllers\HomeController::class, 'editProfile'])->name('editProfile');

    Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
