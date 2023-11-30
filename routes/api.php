<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\TransactionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Auth API
Route::middleware('auth:sanctum')->group(function () {
    // User Controller
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/update', [AuthController::class, 'update']);
    Route::get('/user', [AuthController::class, 'user']);

    // Book Controller
    Route::get('/latest-books', [BookController::class, 'latestBooks']);
    Route::get('/popular-books', [BookController::class, 'popularBooks']);
    Route::get('/books/search/{title}', [BookController::class, 'searchByTitle']);
    Route::get('/books/{id}', [BookController::class, 'bookDetail']);

    // Transaction Controller
    Route::get('/transactions', [TransactionController::class, 'userTransaction']);
    Route::post('/transaction/create', [TransactionController::class, 'create']);
});
