<?php

use App\Http\Controllers\admins\HomeController as AdminsHomeController;
use App\Http\Controllers\clients\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'home'])->name('Home');
Route::get('contact', [HomeController::class,'contact'])->name('Contact');
Route::get('faq', [HomeController::class,'faq'])->name('Faq');
Route::get('feedback', [HomeController::class,'feedback'])->name('Feedback');

Route::group(['prefix'=>'admin','as'=>'admin.'], function ()  {
    Route::get('/',[AdminsHomeController::class,'home'])->name('Home');
});