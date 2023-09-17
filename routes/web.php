<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LocalizationController::class,'index']);
Route::get('/about',[WelcomeController::class,'index']);

if (file_exists(app_path('Http/Controllers/LocalizationController.php')))
{
    Route::get('lang/{locale}', [LocalizationController::class , 'lang']);
}

Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
