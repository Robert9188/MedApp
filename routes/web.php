<?php

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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('rendez-vous', [\App\Http\Controllers\ReservationController::class, 'index'])->name('rendez-vous.index');

require __DIR__.'/auth.php';

Route::multiauth('Employee', 'employee', ['register' => false]);

require __DIR__.'/employee.php';

Route::middleware(['auth'])->group(function (){

    Route::get('dashboard', [\App\Http\Controllers\Patient\ReservationController::class, 'index'])->name('dashboard');
    Route::get('dashboard/reservation/create', [\App\Http\Controllers\Patient\ReservationController::class, 'create'])->name('reservation.create');
    Route::post('dashboard/reservation/store', [\App\Http\Controllers\Patient\ReservationController::class, 'store'])->name('reservation.store');
    Route::get('reservation/cancel/{reservation}', [\App\Http\Controllers\Patient\ReservationController::class, 'destroy'])->name('reservation.cancel');
    Route::get('dashboard/reservations', [\App\Http\Controllers\Patient\ReservationController::class, 'dashReservations'])->name('dashboard.reservations');
    Route::get('dashboard/services', [\App\Http\Controllers\ServiceController::class, 'dashboardServices'])->name('dashboard.services');
    Route::get('dashboard/profile', [\App\Http\Controllers\ProfileController::class, 'index'])->name('dashboard.profile');
});
