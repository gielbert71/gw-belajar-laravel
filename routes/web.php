<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/', [HelloController::class,'Index']);
route::get('/hello', [HelloController::class,'HelloWorld']);
route::get('/crud', [HelloController::class,'products']);
route::get('/create', [HelloController::class,'showCreate'])->name('create');
route::post('/buat', [HelloController::class,'create'])->name('buat');
route::get('{id}/edit', [HelloController::class,'edit'])->name('edit');
route::put('{id}/update', [HelloController::class,'update'])->name('update');
route::delete('{id}/delete', [HelloController::class,'delete'])->name('delete');