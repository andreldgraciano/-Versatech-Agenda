<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/atividades', [TaskController::class, 'index'])->name('taskList');
Route::get('/atividades/criar', [TaskController::class, 'taskCreate'])->name('taskCreate');

// Route::get('/admin/funcionarios', [TaskController::class, 'index'])->name('employeeList');