<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-services', [HomeController::class, 'ourServices'])->name('our-services');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/data-hub', [HomeController::class, 'dataHub'])->name('data-hub');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [HomeController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::post('newsletter/subscribe', [HomeController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/newsandinsights', [HomeController::class, 'NewsAndInSights'])->name('newsandinsights');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');
