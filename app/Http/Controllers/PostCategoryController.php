<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PostCategoryController extends Controller
{
    public function index()
    {
        return Inertia::render('PostCategory/Index', [
            'filters' => Request::all('search', 'trashed'),
            'postCategories' => Auth::user()->postCategories()
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn($category) => [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'description' => $category->description,
                    'created_at' => \Carbon\Carbon::parse($category->created_at)->diffForHumans(),
                    'deleted_at' => $category->deleted_at
                ]),
        ]);
    }

    public function create()
    {
        return Inertia::render('PostCategory/Create', [

        ]);
    }

    public function store()
    {
        Auth::user()->postCategories()->create(
            Request::validate([
                'name' => ['required'],
                'slug' => ['required', 'max:200'],
                'description' => ['required']
            ])
        );

        return Redirect::route('post-categories')->with('success', 'Post Category created.');
    }

    public function edit(PostCategory $postCategory)
    {
        return Inertia::render('PostCategory/Edit', [
            'postCategory' => [
                'id' => $postCategory->id,
                'name' => $postCategory->name,
                'slug' => $postCategory->slug,
                'description' => $postCategory->description,
                'deleted_at' => $postCategory->deleted_at,
            ],
            'filters' => Request::all('search', 'trashed'),
            'postSubCategories' => Auth::user()->postSubCategories()
                ->where('post_category_id', $postCategory->id)
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn($category) => [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                    'description' => $category->description,
                    'created_at' => \Carbon\Carbon::parse($category->created_at)->diffForHumans(),
                    'deleted_at' => $category->deleted_at
                ]),
        ]);
    }

    public function update(PostCategory $postCategory)
    {
        $postCategory->update(
            Request::validate([
                'name' => ['required'],
                'slug' => ['required', 'max:200'],
                'description' => ['required']
            ])
        );

        return Redirect::back()->with('success', 'Post Category updated.');
    }

    public function destroy(PostCategory $postCategory)
    {
        $postCategory->delete();

        return Redirect::back()->with('success', 'Post Category deleted.');
    }

    public function restore(PostCategory $postCategory)
    {
        $postCategory->restore();

        return Redirect::back()->with('success', 'Post Category restored.');
    }
}
