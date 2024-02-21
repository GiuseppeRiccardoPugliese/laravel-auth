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

//Rotta per l'INDEX del controller
Route::get('/', [PageController::class, 'index'])->name('project.index');

//Rotta per la CREATE (in GET)
Route::get('/project/create', [PageController::class, 'create'])->name('project.create');

//Rotta per la CREATE (in POST)
Route::post('/project', [PageController::class, 'store'])->name('project.store');

//Rotta per la DELETE
Route::delete('/project/{id}', [PageController::class, 'destroy'])->name('project.destroy');

//Rotta per la show
Route::get('/project/{id}', [PageController::class, 'show'])->name('project.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
