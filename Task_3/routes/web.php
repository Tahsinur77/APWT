<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\customerController;

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

Route::get('/pages/product',[pagesController::class,'product'] )->name('pages.product');
Route::post('/check',[pagesController::class,'check'] )->name('check');
Route::get('/list',[pagesController::class,'list'])->name('list');
Route::get('/edit/{id}/{productName}',[pagesController::class,'edit']);
Route::post('/product/edit',[pagesController::class,'editSubmit'])->name('editSubmit');
Route::get('/delete/{id}',[pagesController::class,'delete']);
Route::get('/customer/login',[customerController::class,'login'])->name('customer.login');
Route::post('/customer/validation',[customerController::class,'validation'])->name('customer.validation');
Route::get('/customer/logout',[customerController::class,'logout'])->name('customer.logout');
Route::get('/addtocart/{id}',[customerController::class,'addCart']);