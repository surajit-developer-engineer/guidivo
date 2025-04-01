<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/category', [IndexController::class, 'category'])->name('category');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/brands', [IndexController::class, 'brands'])->name('brands');
Route::get('/topic', [IndexController::class, 'topic'])->name('topic');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');

Route::get('/guidivo', [IndexController::class, 'guidivo'])->name('guidivo');
Route::get('/partner-with-guidivo', [IndexController::class, 'partnerWithGuidivo'])->name('partner.with.guidivo');
Route::get('/publisher-partnerships', [IndexController::class, 'publisherPartnerships'])->name('publisher.partnerships');

Route::get('/advertisement-disclosure', [IndexController::class, 'advertisementDisclosure'])->name('advertisement.disclosure');
Route::get('/legal-disclosure', [IndexController::class, 'legalDisclosure'])->name('legal.disclosure');
Route::get('/reviews-guidelines', [IndexController::class, 'reviewsGuidelines'])->name('reviews.guidelines');
Route::get('/terms-and-conditions', [IndexController::class, 'termsAndConditions'])->name('terms.and.conditions');
Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/sell-my-information', [IndexController::class, 'sellMyInformation'])->name('sell.my.information');
Route::get('/privacy-notice', [IndexController::class, 'privacyNotice'])->name('privacy.notice');
Route::get('/methodology', [IndexController::class, 'methodology'])->name('methodology');

// Group admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});
