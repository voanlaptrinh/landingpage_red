<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlockLandingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubcriptionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WebConfigController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserFaqController;
use App\Http\Controllers\UserFeedbackController;
use App\Http\Controllers\UserNewsController;
use App\Http\Controllers\UserTeamController;
use App\Models\Subcription;
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
Route::post('/upload-image', [UploadController::class, 'uploadImage'])->name('upload-image');
Route::prefix('/news')->group(function () {
    Route::get('/', [UserNewsController::class, 'index'])->name('newsUser.index');
    Route::get('/{id}/detail', [UserNewsController::class, 'detail'])->name('newsUser.detail');
});
Route::prefix('/contact')->group(function () {
    Route::get('/', [UserContactController::class, 'index'])->name('contact.index');
    Route::post('/post-contact', [UserContactController::class, 'store'])->name('contact.store');
    Route::post('/post-email', [UserContactController::class, 'Emailstore'])->name('email.store');
});
Route::prefix('/teams')->group(function () {
    Route::get('/', [UserTeamController::class, 'index'])->name('teams.index');
});
Route::prefix('/faqs')->group(function () {
    Route::get('/', [UserFaqController::class, 'index'])->name('faqs.index');
});
Route::prefix('/feedback')->group(function () {
    Route::get('/', [UserFeedbackController::class, 'index'])->name('feedback.index');
});
Route::prefix('/admin')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('landingpage.admin');
    Route::post('/landingpages/sort', [DashboardController::class, 'sort'])->name('landingpages.sort');
    Route::post('/landingpages/toggle-status', [DashboardController::class, 'toggleStatus'])->name('landingpages.toggleStatus');
    Route::post('/landingpages/updateImage', [DashboardController::class, 'updateImage'])->name('landingpages.updateImage');
    Route::get('/{id}/blockLandingPage', [BlockLandingController::class, 'index'])->name('block.admin');
    Route::put('/blocks/{id}/updateBlock', [BlockLandingController::class, 'update'])->name('blocks.update');

    Route::prefix('/mailContact')->group(function () {
        Route::get('/', [ContactController::class, 'EmailCotact'])->name('email.index');
    });


    Route::prefix('/faqs')->group(function () {
        // Route::resource('/', FaqController::class);
        Route::get('/', [FaqController::class, 'index'])->name('faqs.admin');
        Route::get('/create', [FaqController::class, 'create'])->name('faqs.create');
        Route::post('/faqs', [FaqController::class, 'store'])->name('faqs.store');
        Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
        Route::put('/{id}/update', [FaqController::class, 'update'])->name('faqs.update');
        Route::delete('/faqs/{id}', [FaqController::class, 'destroy'])->name('faqs.destroy');
        Route::post('/reorder', [FaqController::class, 'reorder'])->name('faqs.reorder');
    });
    //subcription
    Route::prefix('/subcription')->group(function () {
        Route::get('/', [SubcriptionController::class, 'index'])->name('subcription.admin');
        Route::get('/create', [SubcriptionController::class, 'create'])->name('subcription.create');
        Route::post('/subcription', [SubcriptionController::class, 'store'])->name('subcription.store');
        Route::get('/{id}/edit', [SubcriptionController::class, 'edit'])->name('subcription.edit');
        Route::put('/{id}/update', [SubcriptionController::class, 'update'])->name('subcription.update');
        Route::delete('/news/{id}', [SubcriptionController::class, 'destroy'])->name('subcription.destroy');
        Route::get('/{id}/detail', [SubcriptionController::class, 'detail'])->name('subcription.detail');
    });


    //Tin tức
    Route::prefix('/news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('news.admin');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/{id}/update', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
        Route::get('/{id}/detail', [NewsController::class, 'detail'])->name('news.detail');
    });
    //End TIn tức
    Route::get('/config', [WebConfigController::class, 'index'])->name('webconfig.admin');
    Route::put('/config/update', [WebConfigController::class, 'update'])->name('webconfig.update');

    Route::prefix('/contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact.admin');
    });

    Route::prefix('/team')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('team.admin');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/team', [TeamController::class, 'store'])->name('team.store');
        Route::get('/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
        Route::put('/{id}/update', [TeamController::class, 'update'])->name('team.update');
        Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
    });


})->name('admin');
