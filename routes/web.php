<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;

use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\admins\CommentController;

use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\ClienController;

use App\Http\Controllers\clients\ArticleController as ClientsArticleController;
use App\Http\Controllers\clients\CommentController as ClientsCommentController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsClient;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::resource('dashboard', DashboardController::class);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('login', [AuthenController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthenController::class, 'login'])->name('admin.login');
    Route::post('logout', [AuthenController::class, 'logout'])->name('logout');
    Route::get('register', [AuthenController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthenController::class, 'register'])->name('register');



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


    Route::resource('advertisement', AdvertisementController::class);
    // Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
    // Route::get('/category/{id}/restore', [CategoryController::class, 'restore'])->name('category.restore');
    // Route::get('/category/{id}/forceDelete', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');

});


    Route::get('article/{slug}', [ClientsArticleController::class, 'show'])->name('article.show');
   
// Route::controller(AdminController::class)
// ->group(function () {
//     Route::get('admin/login', 'showLoginForm')->name('login');
//     Route::post('admin/login', 'handLogin');
//     Route::post('admin/logout', 'logout')->name('logout');
//     Route::get('admin/register', 'showRegisterForm')->name('register');
//     Route::post('admin/register', 'handRegister');
// });



Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('article/{slug}', [ClientsArticleController::class, 'show'])->name('article.show');

Route::get("/result/{id}", [ClientsArticleController::class, "result"])->name("result");



    Route::post('comment', [ClientsCommentController::class, 'addcomment'])->name('comment');



