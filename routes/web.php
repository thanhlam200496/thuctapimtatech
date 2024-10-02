<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;

use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\admin\CommentController;

use App\Http\Controllers\Admin\AdvertisementController;

use App\Http\Controllers\Admin\ContactController as AdminsContactController;

use App\Http\Controllers\admin\FAQController;

use App\Http\Controllers\AuthenController;
use App\Http\Controllers\ClienController;
use App\Http\Controllers\clients\ArticleController as ClientsArticleController;
use App\Http\Controllers\clients\CommentController as ClientsCommentController;

use App\Http\Controllers\clients\ContactController;

use App\Http\Controllers\clients\FAQController as ClientsFAQController;

use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\LoginFacebookController;
use App\Http\Controllers\LoginGoogleController;
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

Route::get('form-contact', [HomeController::class, 'contact'])->name('form-contact');
Route::get('faq', [HomeController::class, 'faq'])->name('Faq');

Route::get('feedback', [HomeController::class, 'feedback'])->name('Feedback');


// Route::group(['prefix'=>'admin','as'=>'admin.'], function ()  {
//     Route::get('/',[AdminsHomeController::class,'home'])->name('Home');
// });

Route::resource('dashboard', DashboardController::class);

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware('isAdmin');


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

    Route::resource('contact', AdminsContactController::class);
    


    Route::resource('faqs', FAQController::class);


});

//Auth::routes();
Route::controller(AuthenController::class)
    ->group(function () {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'login');
        Route::post('logout', 'logout')->name('logout');
        Route::get('register', 'showRegisterForm')->name('register');
        Route::post('register', 'register');
    });
    Route::prefix('clients')->middleware('auth')->group(function () {
        Route::get('dashboard', [ClienController::class, 'dashboard'])
            ->name('clients.dashboard')
            ->middleware('isClient');
    });
    
    Route::controller(LoginGoogleController::class)->group(function(){
        Route::get('auth/google', 'redirectToGoogle')->name('login-by-google');
        Route::get('auth/google/callback', 'handleGoogleCallback');
    });

    Route::controller(LoginFacebookController::class)->group(function(){
        Route::get('auth/facebook', 'redirectToFacebook')->name('login-by-faceebook');
        Route::get('auth/facebook/callback', 'handleFacebookCallback');
    });
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

Route::get("/search", [HomeController::class, "home"])->name("search");


Route::get('/filter-articles', [ClientsArticleController::class, 'filter'])->name('filter.articles');



// Route::post('comment/{article}', [ClientsCommentController::class, 'addcmt'])->name('comment');
Route::post('comment/{id}', [ClientsCommentController::class, 'addcmt'])->name('comment');

Route::get('/comments', [ClientsCommentController::class, 'detail'])->name('detail');
    
// Route::resource('contact', ContactController::class);


Route::middleware(['checklogin'])->group(function () {
    Route::post('comments/{id}', [ClientsCommentController::class, 'addcmt'])->name('comment');
});


Route::get('/comments', [ClientsCommentController::class, 'detail'])->name('detail');
Route::get('/faqs', [ClientsFAQController::class, 'index'])->name('clients.faq');


