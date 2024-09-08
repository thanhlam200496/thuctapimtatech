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

Route::get('/', [HomeController::class,'home']);

Route::group(['prefix'=>'admin'], function ()  {
    Route::get('/',[AdminsHomeController::class,'home']);
});