<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('task', Task::class);
Route::get('/clear',[Task::class, 'clear'])->name('tasks.clear');
Route::get('/completed', [Task::class, 'completed'])->name('task.completed');
Route::get('/active', [Task::class, 'active'])->name('task.active');


Route::get('/',[HomeController::class, 'index']);
Auth::routes();

