<?php

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/notification_1', function () {
    return view('notification_1');
})->name('notification_1');

Route::get('/adminlogin_1', function () {
    return view('adminlogin_1');
})->name('admin.login_1');

Route::get('/adminlogin_2', function () {
    return view('adminlogin_2');
})->name('admin.login_2');

Route::get('/notification_2', function () {
    return view('notification_2');
})->name('notification_2');


Route::get('/congratulations1', function () {
    session(['has_accessed1' => true]); 
    return view('congratulations1'); 
})->name('clear_1');

Route::get('/congratulations2A', function () {
    session(['has_accessed2' => true]); 
    return view('congratulations2A'); 
})->name('congratulations2A');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
