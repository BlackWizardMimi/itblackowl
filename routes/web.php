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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('email', 'App\Http\Controllers\MenuController@email')->name('email');
    Route::get('code_acak', 'App\Http\Controllers\MenuController@code_acak')->name('code_acak');
    Route::get('qrcode', 'App\Http\Controllers\MenuController@qrcode')->name('qrcode');
    Route::get('masking', 'App\Http\Controllers\MenuController@masking')->name('masking');
    Route::get('parsing', 'App\Http\Controllers\MenuController@parsing')->name('parsing');

});

require __DIR__.'/auth.php';
