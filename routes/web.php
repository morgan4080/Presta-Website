<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostSubCategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\PostCategory;
use App\Models\PostSubCategory;
use App\Models\Post;

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

Route::get('/request-demo', function () {

    return Inertia::render('Demo', [

    ]);
})->name('demo');

// {postSubCategory:slug} PostSubCategory $postSubCategory
Route::get('solutions/{slug}', function ($slug) {
    return Inertia::render('Solutions/' . $slug, [

    ]);
})->name('solutions.show');

Route::get('/blogs/{post:slug}', function (Post $post) {
    dd($post);
})->name('blogs.index');



// CMS

// ******** Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);

// ******** PostCategory

Route::get('/post-categories', [PostCategoryController::class, 'index'])->name('post-categories')->middleware(['auth:sanctum', 'verified']);
Route::get('/post-categories/{postCategory}/edit', [PostCategoryController::class, 'edit'])->name('post-category.edit')->middleware(['auth:sanctum', 'verified']);
Route::get('/post-categories/create', [PostCategoryController::class, 'create'])->name('post-category.create')->middleware(['auth:sanctum', 'verified']);
Route::post('/post-categories', [PostCategoryController::class, 'store'])->name('post-category.store')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-categories/{postCategory}', [PostCategoryController::class, 'update'])->name('post-category.update')->middleware(['auth:sanctum', 'verified']);
Route::delete('/post-categories/{postCategory}', [PostCategoryController::class, 'destroy'])->name('post-category.destroy')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-categories/{postCategory}/restore', [PostCategoryController::class, 'restore'])->name('post-category.restore')->middleware(['auth:sanctum', 'verified']);



// ******* PostSubCategory

Route::get('/post-sub-categories/{postSubCategory}/edit', [PostSubCategoryController::class, 'edit'])->name('post-sub-category.edit')->middleware(['auth:sanctum', 'verified']);
Route::get('/post-sub-categories/create', [PostSubCategoryController::class, 'create'])->name('post-sub-category.create')->middleware(['auth:sanctum', 'verified']);
Route::post('/post-sub-categories', [PostSubCategoryController::class, 'store'])->name('post-sub-category.store')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-sub-categories/{postSubCategory}', [PostSubCategoryController::class, 'update'])->name('post-sub-category.update')->middleware(['auth:sanctum', 'verified']);
Route::delete('/post-sub-categories/{postSubCategory}', [PostSubCategoryController::class, 'destroy'])->name('post-sub-category.destroy')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-sub-categories/{postSubCategory}/restore', [PostSubCategoryController::class, 'restore'])->name('post-sub-category.restore')->middleware(['auth:sanctum', 'verified']);
