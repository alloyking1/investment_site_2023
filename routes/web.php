<?php

use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ProfileController;
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



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/converter', function () {
        return view('converter');
    })->name('converter');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('investment')->group(function () {
    Route::get('/', [InvestmentController::class, 'index'])->name('investment.create');
    Route::post('/save', [InvestmentController::class, 'save'])->name('investment.save');
    Route::get('/deposit', [InvestmentController::class, 'deposit'])->name('investment.deposit');
    Route::post('/deposit/save', [InvestmentController::class, 'depositSave'])->name('investment.deposit.save');
});

require __DIR__ . '/auth.php';
