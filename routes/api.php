<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('search', [App\Http\Controllers\Api\SearchController::class, 'searchLib']);


Route::get('books/{sort}', [App\Http\Controllers\Api\Books\BooksController::class, 'books']);

Route::get('authors', [App\Http\Controllers\Api\Authors\AuthorsController::class, 'authors']);
Route::get('authors/{id}', [App\Http\Controllers\Api\Authors\AuthorsController::class, 'authorBook']);

Route::post('login', [App\Http\Controllers\Api\Auth\LoginController::class, 'login']);

Route::group(['middleware'=>['jwt.verify']], function() {
	
	Route::get('refresh', [App\Http\Controllers\Api\Auth\LoginController::class, 'refresh']);
	
	Route::post('books/raiting/{book_id}', [App\Http\Controllers\Api\Books\BooksController::class, 'booksRaiting']);
	Route::post('authors/raiting/{author_id}', [App\Http\Controllers\Api\Authors\AuthorsController::class, 'authorsRaiting']);
	
	
	Route::post('books/crud', [App\Http\Controllers\Api\Books\BooksController::class, 'booksCrud']);
	Route::post('authors/crud', [App\Http\Controllers\Api\Authors\AuthorsController::class, 'authorsCrud']);
	
});