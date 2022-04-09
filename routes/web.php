<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

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


Route::get('main',[ArticleController::class, 'index'])->name('allArticles');
Route::get('add/article',[ArticleController::class, 'articleForm'])->name('articleForm');
Route::post('add/article',[ArticleController::class, 'addArticle'])->name('addArticle');


Route::post('search' ,[ArticleController::class, 'search'])->name('search');

Route::post('main/add/like',[UserController::class ,'addLike'])->name('addLike');
// test 

// Route::get('test/view/post' ,function(){
//     return view('testView');
// });