<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\PageController;
use \App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/c/{slug}', [HomeController::class, 'category'])->name('category');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'user'], function (){
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::match(['post', 'get'], '/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::get('/{id}/delete', [UserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::group(['prefix' => 'category'], function (){
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::match(['post', 'get'], '/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::get('/{id}/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');

        Route::get('/{id}/config-page', [PageController::class, 'configPage'])->name('admin.category.configPage');
        Route::post('/{id}/config/change', [PageController::class, 'configChange'])->name('admin.category.configChange');
    });

    Route::group(['prefix' => 'config'], function (){
        Route::get('/', [ConfigController::class, 'index'])->name('admin.config');
        Route::post('/', [ConfigController::class, 'store'])->name('admin.config.store');
        Route::post('/link', [ConfigController::class, 'link'])->name('admin.config.link');
        Route::post('/delete', [ConfigController::class, 'delete'])->name('admin.config.delete');
    });
});

Route::get('oauth', ['as' => 'oauthCallback', 'uses' => 'HomeController@oauth']);
