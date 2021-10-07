<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;

class PostController extends Controller
{
    public function create($postCategory, $postSubCategory)
    {
        return Inertia::render('Post/Create', [
            'postCategoryId' => (int)$postCategory,
            'postSubCategoryId' => (int)$postSubCategory
        ]);
    }

    public function store()
    {
        Request::validate([
            'title' => ['required', 'max:50'],
            'sub_title' => ['nullable', 'max:50'],
            'slug' => ['required', 'max:50'],
            'excerpt' => ['nullable', 'max:100'],
            'description' => ['nullable', 'max:150'],
            'metadata' => ['nullable']
        ]);

        $data = Request::all(['post_category_id', 'post_sub_category_id', 'title', 'sub_title', 'slug','description', 'metadata']);

        $created = Auth::user()
            ->posts()
            ->create(
                $data
            );

        return Redirect::route('post-sub-category.edit', $created->post_sub_category_id)->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        return Inertia::render('Post/Edit', [
            'post' => [
                'post_category_id' => $post->post_category_id,
                'post_sub_category_id' => $post->post_sub_category_id,
                'id' => $post->id,
                'title' => $post->title,
                'sub_title' => $post->sub_title,
                'slug' => $post->slug,
                'description' => $post->description,
                'metadata' => $post->metadata,
                'deleted_at' => $post->deleted_at,
            ],
            'filters' => Request::all('search', 'trashed'),
        ]);
    }

    public function update(Post $post)
    {
        $post->update(
            Request::validate([
                'title' => ['required', 'max:50'],
                'sub_title' => ['nullable', 'max:50'],
                'slug' => ['required', 'max:50'],
                'excerpt' => ['nullable', 'max:100'],
                'description' => ['nullable', 'max:150'],
                'metadata' => ['nullable']
            ])
        );

        return Redirect::back()->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return Redirect::back()->with('success', 'Post deleted.');
    }

    public function restore(Post $post)
    {
        $post->restore();

        return Redirect::back()->with('success', 'Post restored.');
    }
}
