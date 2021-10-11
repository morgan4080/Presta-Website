<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostSubCategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Support\Facades\View;

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

class PostProcessor {
    public array $featuredImages = [];

    public function do_filter($id, $arr): array
    {
        return array_filter($arr, function ($item) use ($id){
            return ($item->id === $id);
        });
    }

    public function do_image_each($arr): array {
        $arr->each(function ($featuredImg) {
            $this->featuredImages[] = View::make('Svg', ['img' => $featuredImg])->render();
        });

        $returnVal = $this->featuredImages;

        $this->featuredImages = [];

        return $returnVal;
    }

    public function do_reduce($posts, $postSubCategories): array {
        return array_reduce($posts, function (&$carry, $item) use ($postSubCategories) {
            $filterResult = $this->do_filter($item->post_sub_category_id, $postSubCategories);
            $images = $item->getMedia('featured_image');
            $featured_images = null;
            if ($images):
                $featured_images = $this->do_image_each($images);
            endif;
            $carry[] = array(
                "id" => $item->id,
                "author_name" => User::find($item->user_id)->name,
                "post_sub_category" => $filterResult[array_key_first($filterResult)]->toArray(),
                "title" => $item->title,
                "sub_title" => $item->sub_title,
                "slug" => $item->slug,
                "excerpt" => $item->excerpt,
                "description" => $item->description,
                "metadata" => $item->metadata,
                "featured_images" => $featured_images,
                "created_at" => \Carbon\Carbon::parse($item->created_at)->diffForHumans(),
            );

            return $carry;
        }, []);
    }

    public function related_articles($posts, $postSubCategory): array {
        return array_reduce($posts, function (&$carry, $item) use($postSubCategory) {
            $images = $item->getMedia('featured_image');
            $featured_images = null;
            if ($images):
                $featured_images = $this->do_image_each($images);
            endif;
            $carry[] = array(
                "id" => $item->id,
                "author_name" => User::find($item->user_id)->name,
                "post_sub_category" => $postSubCategory->toArray(),
                "title" => $item->title,
                "sub_title" => $item->sub_title,
                "slug" => $item->slug,
                "excerpt" => $item->excerpt,
                "description" => $item->description,
                "metadata" => $item->metadata,
                "featured_images" => $featured_images,
                "created_at" => \Carbon\Carbon::parse($item->created_at)->diffForHumans(),
            );
            return $carry;
        },[]);
    }
}

Route::get('/', function () {
    $postCategoryClass = new PostCategory;

    $commander = $postCategoryClass->where('slug', 'homepage')->with('postSubCategories')->with('posts')->get()->all();

    $commander1 = $postCategoryClass->where('slug', 'blogs')->with('postSubCategories')->with('posts')->get()->all();

    $homepageBuilder = $commander ? $commander[0] : null;

    $blogsBuilder =  $commander1 ? $commander1[0] : null;

    $postProcessor = new PostProcessor;

    if ($homepageBuilder):

        $homepageData = $postProcessor->do_reduce($homepageBuilder["posts"]->all(), $homepageBuilder["postSubCategories"]->all());

        if ($blogsBuilder):
            $blogs = $postProcessor->do_reduce($blogsBuilder["posts"]->take(3)->all(), $blogsBuilder["postSubCategories"]->all());

            return Inertia::render('Homepage', [
                "blogs" => $blogs,
                "homepageData" => $homepageData
            ]);
        endif;

        return Inertia::render('Homepage', [
            "blogs" => [],
            "homepageData" => $homepageData
        ]);
    else:
        return Inertia::render('Homepage', [
            "blogs" => [],
            "homepageData" => []
        ]);

    endif;

})->name('homepage');

Route::get('/blogs/{subCategory_slug}/{post_slug}/', function ($subCategory_slug, $post_slug) {
    $postCategoryClass = new PostCategory;
    $connector0 = $postCategoryClass->where('slug', 'blogs')->with(['postSubCategories' => function($query) use($subCategory_slug) {
        $query->where('slug', $subCategory_slug)->with('posts')->get()->all()[0];
    }])->get()->all();
    $blogsBuilder =  $connector0 ? $connector0[0] : null;
    $postProcessor = new PostProcessor;
    if ($blogsBuilder):
        $postSubCategory = $blogsBuilder["postSubCategories"]->all();
        $related_articles = $postProcessor->related_articles($postSubCategory[0]["posts"]->all(), $postSubCategory[0]);
        $post = array_filter($related_articles, function ($item) use ($post_slug){
            return ($item['slug'] === $post_slug);
        });
        $posts = array_reduce($related_articles, function (&$carry, $item) use ($post_slug) {
            if ($item['slug'] !== $post_slug) {
                $carry[] = $item;
            }
            return $carry;
        }, []);

        return Inertia::render('Blogs/SingleBlog', [
            "posts" => $posts,
            "post" => $post
        ]);
    endif;
    return Inertia::render('Blogs/SingleBlog', [
        "posts" => [],
        "post" => []
    ]);
})->name('blogs.view');


Route::get('/blogs/{subCategory_slug}', function ($subCategory_slug) {
    // show specific sub category blogs
    $postCategoryClass = new PostCategory;
    $connector1 = $postCategoryClass->where('slug', 'blogs')->with(['postSubCategories' => function($query) use($subCategory_slug) {
        $query->where('slug', $subCategory_slug)->with('posts')->get()->all()[0];
    }])->get()->all();
    $blogsBuilder =  $connector1 ? $connector1[0] : null;
    $postProcessor = new PostProcessor;

    if ($blogsBuilder):
        $postSubCategory = $blogsBuilder["postSubCategories"]->all();

        $subCategory_articles = $postProcessor->related_articles($postSubCategory[0]["posts"]->all(), $postSubCategory[0]);

        return Inertia::render('Blogs/Index', [
            "posts" => $subCategory_articles
        ]);
    endif;

    return Inertia::render('Blogs/Index', [
        "posts" => []
    ]);

})->name('blog_sub_category.index');

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


Route::get('solutions/{slug}', function ($slug) {
    return Inertia::render('Solutions/' . $slug, [

    ]);
})->name('solutions.show');

Route::get('/blogs', function () {
    $postCategoryClass = new PostCategory;

    $commander = $postCategoryClass->where('slug', 'blogs')->with('postSubCategories')->with('posts')->get()->all();

    $blogsBuilder =  $commander ? $commander[0] : null;

    $postProcessor = new PostProcessor;

    if ($blogsBuilder):

        $blogs = $postProcessor->do_reduce($blogsBuilder["posts"]->all(), $blogsBuilder["postSubCategories"]->all());

        return Inertia::render('Blogs/Index', [
            "posts" => $blogs
        ]);
    endif;

    return Inertia::render('Blogs/Index', [
        "posts" => []
    ]);

})->name('blogs.index');


Route::get('/request-a-demo/confirmation', function () {
    return Inertia::render('Confirmation', [

    ]);
})->name('confirmation.index');



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
Route::get('/post-sub-categories/{postCategory}/create', [PostSubCategoryController::class, 'create'])->name('post-sub-category.create')->middleware(['auth:sanctum', 'verified']);
Route::post('/post-sub-categories', [PostSubCategoryController::class, 'store'])->name('post-sub-category.store')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-sub-categories/{postSubCategory}', [PostSubCategoryController::class, 'update'])->name('post-sub-category.update')->middleware(['auth:sanctum', 'verified']);
Route::delete('/post-sub-categories/{postSubCategory}', [PostSubCategoryController::class, 'destroy'])->name('post-sub-category.destroy')->middleware(['auth:sanctum', 'verified']);
Route::put('/post-sub-categories/{postSubCategory}/restore', [PostSubCategoryController::class, 'restore'])->name('post-sub-category.restore')->middleware(['auth:sanctum', 'verified']);

// ******* Posts

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->middleware(['auth:sanctum', 'verified']);
Route::get('/posts/{postCategory}/{postSubCategory}/create', [PostController::class, 'create'])->name('post.create')->middleware(['auth:sanctum', 'verified']);
Route::post('/posts', [PostController::class, 'store'])->name('post.store')->middleware(['auth:sanctum', 'verified']);
Route::put('/posts/{post}', [PostController::class, 'update'])->name('post.update')->middleware(['auth:sanctum', 'verified']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy')->middleware(['auth:sanctum', 'verified']);
Route::put('/posts/{post}/restore', [PostController::class, 'restore'])->name('post.restore')->middleware(['auth:sanctum', 'verified']);



// {postSubCategory:slug} PostSubCategory $postSubCategory
