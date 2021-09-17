<?php

use App\Http\Controllers\DashboardController;
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

// * Dashboard/Index

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);

// * Index

Route::get('/posts', function (Post $post) {
    dd($post);
    // Post/Index
})->name('posts')->middleware(['auth:sanctum', 'verified']);

Route::get('/post-categories', function (PostCategory $postCategory) {
    dd($postCategory);
    // PostCategory/Index
})->name('post-categories')->middleware(['auth:sanctum', 'verified']);

Route::get('/post-sub-categories', function (PostSubCategory $postSubCategory) {
    dd($postSubCategory);
    // PostSubCategory/Index
})->name('post-sub-categories')->middleware(['auth:sanctum', 'verified']);

// * Edit

Route::get('/posts/{post:slug}/edit', function (Post $post) {
    dd($post);
    // Post/Edit
})->name('post.edit')->middleware(['auth:sanctum', 'verified']);

Route::get('/post-categories/{postCategory:slug}/edit', function (PostCategory $postCategory) {
    dd($postCategory);
    // PostCategory/Edit
})->name('post-category.edit')->middleware(['auth:sanctum', 'verified']);

Route::get('/post-sub-categories/{postSubCategory:slug}/edit', function (PostSubCategory $postSubCategory) {
    dd($postSubCategory);
    // PostSubCategory/Edit
})->name('post-sub-category.edit')->middleware(['auth:sanctum', 'verified']);


// * Create




