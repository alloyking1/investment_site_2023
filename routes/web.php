<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WithdrawerController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Models\Investment;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/price', [PagesController::class, 'price'])->name('price');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/how/it/works', [PagesController::class, 'howItWorks'])->name('howItWorks');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/terms/of/service', [PagesController::class, 'termsOfService'])->name('terms-of-services');
// Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::post('/contact', ContactController::class)->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/converter', function () {

        return view('converter', [
            'investment' => Investment::where('user_id', Auth::id())->get()
        ]);
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

Route::prefix('withdrawer')->group(function () {
    Route::post('/save', WithdrawerController::class)->name('withdrawer.save');
});

require __DIR__ . '/auth.php';
