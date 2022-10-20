<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('products', [ProductController::class, 'index'])
        ->name('products');

    Route::get('products-create', [ProductController::class, 'create'])
        ->name('products-create');

    Route::post('products-create', [ProductController::class, 'store']);

    Route::delete('products-destroy', [ProductController::class, 'destroy'])
        ->name('products-destroy');

    Route::get('products-show/{id}', [ProductController::class, 'show'])
        ->name('products-show');

    Route::get('products-edit/{id}', [ProductController::class, 'edit'])
        ->name('products-edit');

    Route::post('products-update/{id}', [ProductController::class, 'update'])
        ->name('products-update');
        
});

require __DIR__ . '/auth.php';
