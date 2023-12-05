<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\HighchartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
    // return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::get('/', [HelloController::class,'Index'])->name('index');
    route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

require __DIR__.'/auth.php';
route::get('/hello', [HelloController::class,'HelloWorld']);
route::get('/crud', [HelloController::class,'products'])->name('crud');
route::get('/create', [HelloController::class,'showCreate'])->name('create');
route::post('/buat', [HelloController::class,'create'])->name('buat');
route::get('{id}/edit', [HelloController::class,'edit'])->name('edit');
route::put('{id}/update', [HelloController::class,'update'])->name('update');
route::delete('{id}/delete', [HelloController::class,'delete'])->name('delete');
route::get('/chart',[HighchartController::class,'handleChart'])->name('chart');
