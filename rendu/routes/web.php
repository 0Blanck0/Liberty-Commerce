<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalogue', [App\Http\Controllers\CatalogueController::class, 'show'])->name('catalogue');

Route::get('catalogue/{id}', [App\Http\Controllers\ProductController::class, 'show_product'])->name('show_product');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::post('/admin', [App\Http\Controllers\AdminController::class, 'save'])->name('save');

Route::get('/panier', [App\Http\Controllers\PaniersController::class, 'index'])->name('panier');

Route::post('/panier/buy', [App\Http\Controllers\PaniersController::class, 'buy'])->name('buy');
