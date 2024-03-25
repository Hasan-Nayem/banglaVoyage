<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

/*
|--------------------------------------------------------------------------
| Frontend routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/events', [HomeController::class, 'events'])->name('event.show');
Route::get('/event-details', [HomeController::class, 'eventDetails'])->name('event.details');
Route::get('/event-book', [HomeController::class, 'eventBook'])->name('event.book');

Route::get('/user-login', function(){
    return view('frontend.pages.login');
});
Route::get('/user-register', function(){
    return view('frontend.pages.registration');
});

require __DIR__.'/auth.php';
