<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

// Show the signup form
Route::get('/signup', [UserController::class, 'create']);

// Create a new user
Route::post('/users', [UserController::class, 'store']);

// Logout the user
Route::post('/logout', [UserController::class, 'logout']);

// Show the login form
Route::get('/login', [UserController::class, 'login']);

// Authenticate (login) the user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Show all tasks
Route::get('/', [TaskController::class, 'index']);

// Show the form to create a new task
Route::get('/tasks/create', [TaskController::class, 'create']);

// Create a new task
Route::post('/tasks', [TaskController::class, 'store']);

// Show the form to edit an existing task
Route::put('/tasks/{task}', [TaskController::class, 'update']);

// Delete an existing task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);

// Show a specific task
Route::get('/tasks/{task}', [TaskController::class, 'show']);