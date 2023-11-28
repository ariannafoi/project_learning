<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'])->name('welcome');

Route::get('/topic/index', [TopicController::class, 'index'])->name('topic.index')->middleware('auth');
Route::get('/topic/create', [TopicController::class, 'create'])->name('topic.create')->middleware('auth');

Route::post('/topic/store', [TopicController::class, 'store'])->name('topic.store');