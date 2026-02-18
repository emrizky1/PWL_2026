<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use resources\views\hello;

Route::resource('photos', PhotoController::class) -> only(['index', 'show']);

Route::resource('photos', PhotoController::class) -> except(['create', 'store', 'update', 'destroy']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/article/{id}', [ArticleController::class, 'articles']);

Route::get('/world', function (){
    return 'World';
});

Route::get('/user/{name?}', function($name='    John') {
    return 'My name ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Post to ' . $postId . ' Comments to: ' . $commentId;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/greeting', [WelcomeController::class, 'greeting']);