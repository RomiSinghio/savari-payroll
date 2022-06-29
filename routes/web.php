<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\ReportController;

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

Route::redirect('/', 'login');



// Reports 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {



    Route::get('/weeks', [WeekController::class, 'index'])->name('weeks');


    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    Route::get('/report/create', [ReportController::class, 'create'])->name('create-report');
    Route::post('/reports', [ReportController::class, 'store'])->name('store-report');
    Route::get('/report/{report}/edit', [ReportController::class, 'edit'])->name('edit-report');
    Route::put('/report/{report}', [ReportController::class, 'update'])->name('update-report');



    Route::get('/drivers', function () {
        return Inertia::render('Drivers');
    })->name('drivers');

    Route::get('/users', function () {
        return Inertia::render('Users');
    })->name('users');
});
