<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerformanceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Performance;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/performances', PerformanceController::class);

Route::get('/about_us', function (){
    return view('/about_us');
});

Route::get('/about_village', function (){
    return view('/about_village');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
