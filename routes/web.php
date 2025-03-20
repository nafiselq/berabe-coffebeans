<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TermOfServiceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutusController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/terms-of-service', [TermOfServiceController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//Subscriber
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');


//Feedback
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        // Prefix for Product routes
        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'indexAdmin'])->name('admin.product');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.product.create');
            Route::post('/', [ProductController::class, 'store'])->name('admin.product.store');
            Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
            Route::post('/{id}', [ProductController::class, 'update'])->name('admin.product.update');
            Route::delete('/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
        });

        Route::prefix('feedback')->group(function () {
            Route::get('/', [FeedbackController::class, 'indexAdmin'])->name('admin.feedback');
            Route::delete('/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.destroy');
        });

        Route::prefix('promo')->group(function () {
            Route::get('/', [PromoController::class, 'index'])->name('admin.promo');
            Route::delete('/{id}', [PromoController::class, 'destroy'])->name('admin.promo.destroy');
            Route::post('/send', [PromoController::class, 'blastPromo'])->name('admin.promo.send');
        });


        Route::prefix('about')->group(function () {
            Route::get('/', [AboutusController::class, 'indexAdmin'])->name('admin.about');
            Route::post('/{id}', [AboutusController::class, 'update'])->name('admin.about.update');
        });

        // Prefix for Profile routes
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'edit'])->name('admin.profile.edit');
            Route::patch('/', [ProfileController::class, 'update'])->name('admin.profile.update');
            Route::delete('/', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
        });
    });
});

require __DIR__ . '/auth.php';
