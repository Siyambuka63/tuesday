<?php

use App\Http\Controllers\BoardControllerSF;
use App\Http\Controllers\UserControllerSF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController; // ✅ ADD THIS LINE
use App\Http\Controllers\TaskControllerSF;

// Show the signup form
Route::get('/signup', [UserControllerSF::class, 'create']);

// Create a new user
Route::post('/users', [UserControllerSF::class, 'store']);

// Logout the user
Route::post('/logout', [UserControllerSF::class, 'logout'])->middleware('auth');

// Show the login form
Route::get('/login', [UserControllerSF::class, 'login'])->name('login');

// Authenticate (login) the user
Route::post('/users/authenticate', [UserControllerSF::class, 'authenticate']);

// Show all tasks
Route::get('/', [TaskControllerSF::class, 'index'])->middleware('auth');

// Show the form to create a new task
Route::get('/tasks/create', [TaskControllerSF::class, 'create'])->middleware('auth');

// Create a new task
Route::post('/tasks', [TaskControllerSF::class, 'store'])->middleware('auth');

// Show the form to edit an existing task
Route::put('/tasks/{task}', [TaskControllerSF::class, 'update'])->middleware('auth');

// Delete an existing task
Route::delete('/tasks/{task}', [TaskControllerSF::class, 'destroy'])->middleware('auth');

// Show a specific task
Route::get('/tasks/{task}', [TaskControllerSF::class, 'show'])->middleware('auth');

// ✅ Board routes (make sure BoardController is imported above)
Route::middleware(['auth'])->group(function () {
    Route::get('/boards', [BoardControllerSF::class, 'index'])->name('boards.index'); // Route for dashboard
    Route::get('/boards/create', [BoardControllerSF::class, 'create'])->name('boards.create');
    Route::post('/boards', [BoardControllerSF::class, 'store'])->name('boards.store');
    Route::get('/boards/{board}', [BoardControllerSF::class, 'show'])->name('boards.show');
});