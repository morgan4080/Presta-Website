<?php

namespace App\Http\Controllers;

use App\Models\PostSubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PostSubCategoryController extends Controller
{
    public function create()
    {
        return Inertia::render('PostSubCategory/Create', [

        ]);
    }

    public function store()
    {
        Auth::user()->postCategories()->create(
            Request::validate([
                'name' => ['required', 'max:50'],
                'slug' => ['required', 'max:50'],
                'description' => ['required', 'max:150']
            ])
        );

        return Redirect::route('post-categories')->with('success', 'Post Category created.');
    }

    public function edit(PostSubCategory $postSubCategory)
    {
        return Inertia::render('PostSubCategory/Edit', [
            'PostSubCategory' => [
                'id' => $postSubCategory->id,
                'name' => $postSubCategory->name,
                'slug' => $postSubCategory->slug,
                'description' => $postSubCategory->description,
                'deleted_at' => $postSubCategory->deleted_at,
            ],
            'filters' => Request::all('search', 'trashed'),
            'posts' => Auth::user()->posts()
                ->where('post_sub_category_id', $postSubCategory->id)
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

    public function update(PostSubCategory $postSubCategory)
    {
        $postSubCategory->update(
            Request::validate([
                'name' => ['required', 'max:50'],
                'slug' => ['required', 'max:50'],
                'description' => ['required', 'max:150']
            ])
        );

        return Redirect::back()->with('success', 'Post Category updated.');
    }

    public function destroy(PostSubCategory $postSubCategory)
    {
        $postSubCategory->delete();

        return Redirect::back()->with('success', 'Post Category deleted.');
    }

    public function restore(PostSubCategory $postSubCategory)
    {
        $postSubCategory->restore();

        return Redirect::back()->with('success', 'Post Category restored.');
    }
}
