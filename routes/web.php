<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('main/',[ArticleController::class, 'index'])->name('allArticles');
Route::get('add/article',[ArticleController::class, 'articleForm'])->name('articleForm'); //add new article
Route::post('add/article',[ArticleController::class, 'addArticle'])->name('addArticle');//add new article
Route::post('edit/article',[ArticleController::class, 'editArticle']);//edit article


Route::post('search' ,[ArticleController::class, 'search'])->name('search');

// Route::post('main/add/like',[UserController::class ,'addLike'])->name('addLike');
// test 

// Route::get('test/view/post' ,function(){
//     return view('testView');
// });


Route::post('main/add/{user_id}/{article_id}' ,[CommentController::class, 'addComment'])->name('addComment');