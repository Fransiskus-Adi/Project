<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::get('/register', [UserController::class, 'index'])->middleware('guest');
Route::post('/store', [UserController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'userLogin']);
Route::post('/logout', [LoginController::class, 'userLogout']);

// Route::get('/show-products', function () {
//     return view('show-products');
// });

Route::get('/show-products', [ProductController::class, 'index']);
Route::get('/product-detail/{name}', [ProductController::class, 'detailProduct']);

// Route::get('/product-detail', function () {
//     return view('product-detail');
// });

// Route::get('/manage-item', function () {
//     return view('manage-item');
// });

Route::get('/manage-item', [ProductController::class, 'listProduct'])->name('manageProduct')->middleware('admin');
Route::post('/manage-item/{id}', [ProductController::class, 'deleteProduct'])->middleware('admin');
Route::get('/add-item', function () {
    return view('add-item');
})->name('add-item')->middleware('admin');

Route::post('/store', [ProductController::class, 'storeProduct']);


// Route::get('/update-item', function () {
//     return view('update-item');
// });

Route::get('/update-item/{id}', [ProductController::class, 'updateProduct'])->middleware('admin');
Route::patch('/update-item/{id}', [ProductController::class, 'validateUpdate'])->middleware('admin');

Route::get('/edit-profile', function () {
    return view('edit-profile');
});
