<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
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
    return view('index');
})->name('home');

Route::middleware(['auth','verified'])->group(function() {
    Route::get('home', fn() => redirect(route('home')));

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Recruiters
    Route::prefix('recruiter')->group(function() {
        Route::get('post-a-job', [JobController::class, 'landing'])->name('post-a-job');
    });
});
