<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReviewsController;
use App\Http\Middleware\AccessCodeMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('books')->controller(App\Http\Controllers\BooksController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');

});

Route::post('/review/create',[ReviewsController::class,'store']);








// Route::get('test', function () {
//     return 1;
// })->middleware('access_code');

