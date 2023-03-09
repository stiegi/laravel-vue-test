<?php

use App\Http\Controllers\ProfileController;
use \App\Http\Controllers\ProductController;
use App\Http\Controllers\StorageController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Models\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', ["storages" => Storage::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lager', [StorageController::class, 'index'])->middleware(['auth', 'verified'])->name('storage.index');
Route::get('/lager/neu', [StorageController::class, 'create'])->middleware(['auth', 'verified'])->name('storage.create');
Route::get('/lager/{storage}/edit', [StorageController::class, 'edit'])->middleware(['auth', 'verified'])->name('storage.edit');
Route::post('/lager', [StorageController::class, 'store'])->middleware(['auth', 'verified'])->name('storage.store');
Route::put('/lager/{storage}', [StorageController::class, 'update'])->middleware(['auth', 'verified'])->name('storage.update');
Route::get('/lager/{storage}', [StorageController::class, 'products'])->middleware(['auth', 'verified'])->name('storage.products');

Route::get('/produkte', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('product.index');
Route::get('/produkte/{product}/edit', [ProductController::class, 'edit'])->middleware(['auth', 'verified'])->name('product.edit');
Route::post('/produkte', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('product.store');
Route::put('/produkte/{product}', [ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('product.update');
Route::delete('/produkte/{product}', [ProductController::class, 'delete'])->middleware(['auth', 'verified'])->name('product.delete');
Route::get('/produkte/neu', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('product.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
