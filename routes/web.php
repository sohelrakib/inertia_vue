<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\PostController;
use App\Http\Controllers\PracTestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return Inertia::render('home');
// });

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('users.destroy');

Route::get('/prac/test1', [PracTestController::class, 'test1'])->name('prac.test1');
Route::get('/prac/test2', [PracTestController::class, 'test2'])->name('prac.test2');
Route::post('/prac/test2/submit', [PracTestController::class, 'test2Submit'])->name('prac.test2.submit');
