<?php

use App\Models\Task;
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


Route::get('/create', fn() => view('create'));
Route::get('/manage', fn() => view('manage'));
Route::get('/edit', fn() => view('edit', ['task' => new Task()]));


Route::get('/', [TaskController::class, 'index']);
Route::post('/', [TaskController::class, 'store']);
Route::Delete('/manage/{task}', [TaskController::class, 'destroy']);
Route::get('/manage/{task}/edit', [TaskController::class, 'edit']);
Route::patch('/manage/{task}', [TaskController::class, 'update']);
