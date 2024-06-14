<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlockLandingController;
use App\Http\Controllers\Admin\NewsController;
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
    Route::post('/landingpages/updateImage', [DashboardController::class, 'updateImage'])->name('landingpages.updateImage');
    Route::get('/{id}/blockLandingPage', [BlockLandingController::class, 'index'])->name('block.admin');
    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.admin');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::get('/store', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    });
})->name('admin');
