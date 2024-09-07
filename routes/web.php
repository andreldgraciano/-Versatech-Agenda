<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/atividades', [TaskController::class, 'index'])->name('taskIndex');
Route::get('/atividades/criar', [TaskController::class, 'taskFormCreate'])->name('taskFormCreate');
Route::post('/storeTask', [TaskController::class, 'store'])->name('taskStore');
Route::get('/atividades/{id}', [TaskController::class, 'show'])->name('taskShow');

// Route::get('/admin/funcionarios', [TaskController::class, 'index'])->name('employeeList');