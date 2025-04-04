<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello', [WelcomeController::class,'hello']);

//BASIC ROUTING
    Route::get('/hello', [WelcomeController::class,'hello']);

     Route::get('/world', function () {
        return 'World';
        });

    //Index
    Route::get('/', [HomeController::class,'index']);

    //About
    Route::get('/about', [AboutController::class,'about']);

    Route::get('/user/{name}', function ($name) {
        return 'Nama saya '.$name;
        });
    
    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
        });

    //Articles
    Route::get('/articles/{id}', [ArticleController::class, 'articles']);

    Route::get('/userr/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
        });
    
//RESOURCE CONTROLLER
    Route::resource('posts', PhotoController::class);

    Route::resource('photos', PhotoController::class)->only([ 'index', 'show']);

    Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy']);

    Route::get('/greeting', [WelcomeController::class, 'greeting']);