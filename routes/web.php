<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
// Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create');
// Route::post('/catalog/store',[CatalogController::class, 'store'])->name('catalog.store');
Route::resource('/catalog',CatalogController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
