<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActivityRuleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScoreController;
use App\Models\Product;
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
Route::get('/ugmart', function () {
    return view('ugmart.ugmart');
});
Route::get('/ugmart/ugmartproducts', function () {
    $products = Product::all();
    return view('ugmart.products', compact('products'));
})->name('ugmart.products');
Route::get('/products/redeem/{product}', [ProductController::class, 'redeem'])->name('products.redeem');
Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('activities', ActivityController::class);
    Route::resource('activity-rules', ActivityRuleController::class);
    Route::resource('scores', ScoreController::class);
    Route::resource('products', ProductController::class);
});
