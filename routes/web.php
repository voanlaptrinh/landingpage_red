<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LandingpageController;
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

Route::get('/', [LandingpageController::class, 'index'])->name('landingpage');



Route::prefix('/admin')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('landingpage.admin');
    Route::post('/landingpages/sort', [DashboardController::class, 'sort'])->name('landingpages.sort');
    Route::post('/landingpages/toggle-status', [DashboardController::class, 'toggleStatus'])->name('landingpages.toggleStatus');
  

})->name('admin');