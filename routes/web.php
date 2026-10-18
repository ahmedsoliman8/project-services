<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {
    Route::get('/', function () {
        return view('front.index');
    })->name('index');
    Route::get('/about', function () {
        return view('front.about');
    })->name('about');
    Route::get('/service', function () {
        return view('front.service');
    })->name('service');
    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');
});

Route::name('admin.')->prefix('admin')->group(function () {

    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');
    });

    /* Route::get('/login', function () {
         return view('admin.auth.login');
     })->name('login');*/
    require __DIR__ . '/auth.php';
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

