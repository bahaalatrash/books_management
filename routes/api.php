<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;
use App\Http\Middleware\AccessCodeMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('books')->group(function () {
    Route::get('/', [BooksController::class, 'index']);
    Route::post('/', [BooksController::class, 'store']);
    Route::get('/{id}', [BooksController::class, 'show']);
    Route::put('/{id}', [BooksController::class, 'update']);
    Route::delete('/{id}', [BooksController::class, 'destroy']);

});

Route::post('/review/create',[ReviewsController::class,'store']);








// Route::get('test', function () {
//     return 1;
// })->middleware('access_code');

