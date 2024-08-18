<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TagController;

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;

use App\Models\User;

Route::get('/users', function () {
    $users = User::all();

    return view('users', [
        'users' => $users
    ]);
});

Route::resource('data',DataController::class)->middleware('auth');
Route::resource('tags',TagController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::middleware(['auth'])->group(function () {
    Route::post('/data', [DataController::class, 'store']);
});
