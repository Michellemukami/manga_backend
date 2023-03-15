<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MangaPostController;
use App\Http\Controllers\GenrePostController;
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
Route::get('/uploadpage', function () {
    return view('uploadpage');});
Route::get('/uploadpage', [GenreController::class,'uploadgenre']); 
Route::get('/uploadpage', [MangaController::class,'uploadmanga']);
Route::post('/uploadmanga', [PostController::class,'uploadmanga']);
Route::post('/uploadgenres', [GenrePostController::class,'uploadgenres']);
Route::post('/uploadmangadetails', [MangaPostController::class,'uploadmangadetails']);
// Route::get('/show',[PageController::class,'show']);

//  Route::get('/view/{id}', [PageController::class,'view']);

