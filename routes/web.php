<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\admins\CommentController;
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

Route::get('/', [HomeController::class, 'home'])->name('Home');
Route::get('contact', [HomeController::class, 'contact'])->name('Contact');
Route::get('faq', [HomeController::class, 'faq'])->name('Faq');
Route::get('feedback', [HomeController::class, 'feedback'])->name('Feedback');


// Route::group(['prefix'=>'admin','as'=>'admin.'], function ()  {
//     Route::get('/',[AdminsHomeController::class,'home'])->name('Home');
// });

// Route::resource('dashboard', DashboardController::class);
// Route::get('admin', [AdminController::class, 'index']);

// Route::get('/logon', [AdminController::class, 'logon'])->name('logon');
// Route::post('/logon', [AdminController::class, 'postlogon'])->name('admin.logon');
// Route::get('/sign-out', [AdminController::class, 'signOut'])->name('admin.signout');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    
    Route::resource('category', CategoryController::class);
    Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('/category/{id}/forceDelete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');


    Route::resource('article', ArticleController::class);
    Route::get('/articles-trash', [ArticleController::class, 'trash'])->name('articles.trash');
    Route::get('/articles/{id}/restore', [ArticleController::class, 'restore'])->name('articles.restore');
    Route::get('/articles/{id}/forceDelete', [ArticleController::class, 'forceDelete'])->name('articles.forceDelete');

    
    Route::resource('comments', AdminCommentController::class);
    Route::get('/comments-trash', [AdminCommentController::class, 'trash'])->name('comments.trash');
    Route::get('/comments/{id}/restore', [AdminCommentController::class, 'restore'])->name('comments.restore');
    Route::get('/comments/{id}/forceDelete', [AdminCommentController::class, 'forceDelete'])->name('comments.forceDelete');
    Route::get('/comments/{id}/detail', [AdminCommentController::class, 'detail'])->name('comments.detail');
    Route::post('/comments/{id}/update-status', [AdminCommentController::class, 'updatestt'])->name('comments.updatestt');

    

});

