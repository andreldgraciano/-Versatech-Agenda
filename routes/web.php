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
    return redirect()->route('home');
});

Route::get('/empresa/atividades', [TaskController::class, 'tasks_all'])->name('tasksList')->middleware('auth');
Route::get('/user/atividades', [TaskController::class, 'tasks_user'])->name('home')->middleware('auth');
Route::get('/atividades/criar', [TaskController::class, 'taskFormCreate'])->name('taskFormCreate')->middleware('auth');
Route::post('/storeTask', [TaskController::class, 'store'])->name('taskStore')->middleware('auth');
Route::get('/atividades/{id}', [TaskController::class, 'show'])->name('taskShow')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);
