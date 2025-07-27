<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/newsandinsights', [HomeController::class, 'NewsAndInSights'])->name('newsandinsights');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');
