<?php

use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Socialite\Facades\Socialite;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', fn() => redirect(route('home')));
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Recruiters
    Route::prefix('recruiter')->group(function () {
        Route::resource('company', CompanyController::class);
        Route::get('post-a-job', [JobController::class, 'landing'])->name('post-a-job');
    });
});

// Social Login
Route::middleware(['guest'])->group(function () {
    Route::get('/login/{provider:slug}', [OauthController::class, 'redirect'])->name('social-login');
    Route::get('/login/{provider:slug}/callback', [OauthController::class, 'callback']);
});
