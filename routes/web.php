<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('home');
Route::view('contacto', 'contact')->name('contact');

Route::get('blog', [PostController::class, 'index'])->name('blog');

Route::view('nosotros', 'about')->name('about');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
