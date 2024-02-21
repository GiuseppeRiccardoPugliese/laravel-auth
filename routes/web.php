<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Utilizziamo il main controller
use App\Http\Controllers\Guest\PageController;

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

//Rotta per l'index del controller
Route::get('/', [PageController::class, 'index'])->name('project.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Rotta per la show
Route::get('/project/{id}', [PageController::class, 'show'])->name('project.show');

require __DIR__ . '/auth.php';
