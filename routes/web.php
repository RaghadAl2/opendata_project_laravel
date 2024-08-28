<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TagController;

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Tag;
use App\Models\User;

Route::get('/users', function () {
    $users = User::all();

    return view('users', [
        'users' => $users
    ]);
});


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::prefix('/data')->middleware(['auth'])->name('data.')->group(function () {
    Route::get('/',[DataController::class, 'index'])->name('index');
    Route::get('/create', [DataController::class, 'create'])->name('create');
    Route::post('/',[DataController::class, 'store'])->name('store');
    Route::get('/{data}', [DataController::class, 'show'])->name('show');
    Route::get('/{data}/edit', [DataController::class, 'edit'])->name('edit')->middleware(['auth'])->can('edit', 'data');
    Route::patch('/{data}',[DataController::class, 'update'])->name('update');
    Route::delete('/{data}',[DataController::class, 'destroy'])->name('destroy');

});

Route::prefix('tags')->middleware(['auth'])->name('tags.')->group(function () {
    
    Route::get('/',[TagController::class, 'index'])->name('index');
    Route::get('/create', [TagController::class, 'create'])->name('create');
    Route::post('/',[TagController::class, 'store'])->name('store');
    Route::get('/{tag}/edit', [TagController::class, 'edit'])->name('edit')->middleware(['auth'])->can('edit', 'tag');;
    Route::patch('/{tag}',[TagController::class, 'update'])->name('update');
    Route::delete('/{tag}',[TagController::class, 'destroy'])->name('destroy');

});
