<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Models\Blog;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/services/{department}', [ServiceController::class, 'ServiceDep'])->name('ServiceDep');
Route::get('/ServiceDepartment', [ServiceController::class, 'ServiceDepartment'])->name('ServiceDepartment');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service-single');

// Route::get('/blogs', function () {
//     return view('blogs');
// })->name('blogs');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog-single');

// Route::group();
Route::get('/doctores',[TeamController::class, 'index'])->name('doctores');
Route::get('/doctore/{slug}',[TeamController::class, 'show'])->name('doctor.details');

Route::get('/gallery', function () {
    $galleries = Gallery::all();
    return view('gallery', compact('galleries'));
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('send-email', [EmailController::class, 'sendEmail'])->name('send-email');

// set 404 page
Route::fallback(function () {
    return view('404');
});