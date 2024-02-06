<?php

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

// routes/web.php

use App\Http\Controllers\ProductController;

Route::get('/product/form', [ProductController::class, 'showForm'])->name('product.form');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('/product/update-price', [ProductController::class, 'updatePrice'])->name('product.update-price');

Route::get('/dashboard', [ProductController::class, 'showDashboard'])->name('dashboard');
Route::get('/transaction/history', [ProductController::class, 'showTransactionHistory'])->name('transaction.history');

