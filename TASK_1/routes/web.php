<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/home', [PagesController::class,'home'])->name('home');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');
Route::get('/about us', [PagesController::class,'aboutUs'])->name('about_us');
Route::get('/service', [PagesController::class,'service'])->name('service');
Route::get('/our team', [PagesController::class,'ourTeam'])->name('our_team');