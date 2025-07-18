<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController; // ✅ ADD THIS LINE

// Show the signup form
Route::get('/signup', [UserController::class, 'create']);

// Create a new user
Route::post('/users', [UserController::class, 'store']);

// Logout the user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show the login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Authenticate (login) the user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Show all tasks
Route::get('/', [TaskController::class, 'index'])->middleware('auth');

// Show the form to create a new task
Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('auth');

// Create a new task
Route::post('/tasks', [TaskController::class, 'store'])->middleware('auth');

// Show the form to edit an existing task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->middleware('auth');

// Delete an existing task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->middleware('auth');

// Show a specific task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->middleware('auth');

// ✅ Board routes (make sure BoardController is imported above)
Route::middleware(['auth'])->group(function () {
    Route::get('/boards', [BoardController::class, 'index'])->name('boards.index'); // Route for dashboard
    Route::get('/boards/create', [BoardController::class, 'create'])->name('boards.create');
    Route::post('/boards', [BoardController::class, 'store'])->name('boards.store');
    Route::get('/boards/{board}', [BoardController::class, 'show'])->name('boards.show');
});