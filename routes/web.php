<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);

Route::resource('tasks', TaskController::class);


#Route::get('/task', [TaskController::class, 'index']);
#Route::get('/task/add', [TaskController::class, 'add']);
#Route::get('/task/store', [TaskController::class, 'store'])->name('task.store');