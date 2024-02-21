<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Utilizziamo il main controller
use App\Http\Controllers\Guest\PageController;

//Utilizziamo il controller per la pagina iniziale se non loggato :D
use App\Http\Controllers\Guest\HelloUser;

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

//Rotta iniziale PRE-LOGIN
Route::get('/hello', [HelloUser::class, 'index'])->name('hello.user');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    //Profile route con l'autorizzazione
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Our Routes

    //Rotta per l'INDEX del controller
    Route::get('/', [PageController::class, 'index'])->name('project.index');

    //Rotta per la CREATE (in GET)
    Route::get('/project/create', [PageController::class, 'create'])->name('project.create');

    //Rotta per la CREATE (in POST)
    Route::post('/project', [PageController::class, 'store'])->name('project.store');

    //Rotta per l'EDIT
    Route::get('/project/{id}/edit', [PageController::class, 'edit'])->name('project.edit');

    //Rotta per l'UPDATE
    Route::put('/project/{id}', [PageController::class, 'update'])->name('project.update');

    //Rotta per la DELETE
    Route::delete('/project/{id}', [PageController::class, 'destroy'])->name('project.destroy');

    //Rotta per la SHOW
    Route::get('/project/{id}', [PageController::class, 'show'])->name('project.show');
});

require __DIR__ . '/auth.php';
