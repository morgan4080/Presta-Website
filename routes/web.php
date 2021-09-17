<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return Inertia::render('Homepage', [

    ]);
})->name('homepage');

Route::get('/pricing', function () {

    return Inertia::render('Pricing', [

    ]);
})->name('pricing');

Route::get('/about-us', function () {

    return Inertia::render('About', [

    ]);
})->name('about');

Route::get('/contact-us', function () {

    return Inertia::render('Contact', [

    ]);
})->name('contact');

Route::get('solutions/{SubCategory}', function () {

    $uri = '/Sacco';

    return Inertia::render('Solutions' . $uri, [

    ]);
})->name('contact');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
