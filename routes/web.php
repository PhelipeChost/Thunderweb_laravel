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

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/midia', [App\Http\Controllers\MidiaController::class, 'Midia']);
Route::get('/parcerias', [App\Http\Controllers\ParceriasController::class, 'parcerias']);
Route::get('/capitulos', [App\Http\Controllers\ChaptersController::class, 'Chapters']);

Route::get('/chapter{number}', [App\Http\Controllers\ChaptersallController::class, 'Chaptersall'])->where('number', '[0-9]{1,2}');
Route::get('/Peter-Enigma-dos-Senhos', [App\Http\Controllers\PartnershipallController::class, 'Peter']);

Route::middleware('auth')->group(function () {
    Route::any('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
