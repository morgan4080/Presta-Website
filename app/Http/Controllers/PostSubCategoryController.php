<?php

namespace App\Http\Controllers;

use App\Models\PostSubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PostSubCategoryController extends Controller
{
    public function create($postCategory)
    {
        return Inertia::render('PostSubCategory/Create', [
            'postCategoryId' => (int)$postCategory
        ]);
    }

    public function store()
    {
        Request::validate([
            'name' => ['required'],
            'slug' => ['required', 'max:200'],
            'description' => ['required']
        ]);

        $data = Request::all(['post_category_id', 'name','slug','description']);

        $created = Auth::user()
            ->postSubCategories()
            ->create(
                $data
            );

        return Redirect::route('post-category.edit', $created->post_category_id)->with('success', 'Post Sub Category created.');
    }

    public function edit(PostSubCategory $postSubCategory)
    {
        return Inertia::render('PostSubCategory/Edit', [
            'postSubCategory' => [
                'post_category_id' => $postSubCategory->post_category_id,
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
                    'title' => $category->title,
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
                'name' => ['required'],
                'slug' => ['required', 'max:200'],
                'description' => ['required']
            ])
        );

        return Redirect::back()->with('success', 'Post Sub Category updated.');
    }

    public function destroy(PostSubCategory $postSubCategory)
    {
        $postSubCategory->delete();

        return Redirect::back()->with('success', 'Post Sub Category deleted.');
    }

    public function restore(PostSubCategory $postSubCategory)
    {
        $postSubCategory->restore();

        return Redirect::back()->with('success', 'Post Sub Category restored.');
    }
}
