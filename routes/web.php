<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\clients\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

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

// Route::group(['prefix'=>'admin','as'=>'admin.'], function ()  {
//     Route::get('/',[AdminsHomeController::class,'home'])->name('Home');
// });

Route::resource('dashboard', DashboardController::class);
Route::get('admin', [AdminController::class, 'index']);


Route::resource('category', CategoryController::class);
Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::get('/category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
Route::get('/category/{id}/forceDelete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');