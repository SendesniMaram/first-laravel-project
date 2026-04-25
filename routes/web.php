<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/profil', 'profil')->name('profil');
/* Dashboard */
Route::get('/dashboard', function () {

    $tasks = auth()->user()->tasks;

    $completed = $tasks->where('completed', true)->count();

    return view('dashboard', compact('tasks', 'completed'));

})->middleware(['auth', 'verified'])->name('dashboard');

/* Routes protégées */
Route::middleware(['auth' , 'active'])->group(function () {

    // CRUD Tasks
    Route::resource('tasks', TaskController::class);

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Auth Breeze */
require __DIR__.'/auth.php';