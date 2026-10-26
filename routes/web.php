<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes - UTS Pemrograman Berbasis Framework (NPM Ganjil)
| Mahasiswa: PRUDENTA FAJAR OCTORA (23670031)
|--------------------------------------------------------------------------
*/

// ==========================================
// LANDING PAGE / USERHOME ROUTES (Fitness)
// ==========================================
Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/course', [LandingController::class, 'course'])->name('landing.course');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/feature', [LandingController::class, 'feature'])->name('landing.feature');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// ==========================================
// ADMIN ROUTES (StudioAdmin)
// ==========================================
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('admin.form_elements');
    Route::get('/table-plugins', [AdminController::class, 'tablePlugins'])->name('admin.table_plugins');
    Route::get('/ui-modal-notification', [AdminController::class, 'uiModalNotification'])->name('admin.ui_modal_notification');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
});
