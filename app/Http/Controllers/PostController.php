<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostSubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    protected $featured_image = null;

    public function create($postCategory, $postSubCategory)
    {
        return Inertia::render('Post/Create', [
            'postCategoryId' => (int)$postCategory,
            'postSubCategoryId' => (int)$postSubCategory,
            'postSubCategoryName' => PostSubCategory::where('id', (int)$postSubCategory)->pluck('name')[0]
        ]);
    }

    public function store()
    {
        Request::validate([
            'post_category_id' => ['required'],
            'post_sub_category_id' => ['required'],
            'title' => ['required'],
            'sub_title' => ['nullable'],
            'slug' => ['required', 'max:200'],
            'excerpt' => ['nullable'],
            'description' => ['nullable'],
            'metadata' => ['nullable'],
            'featured_image' => ['nullable']
        ]);

        $created = Auth::user()
            ->posts()
            ->create(
                Request::all(['post_category_id', 'post_sub_category_id', 'title', 'sub_title', 'slug', 'excerpt', 'description', 'metadata'])
            );

        if (Request::file('featured_image')):
            $images = [];
            foreach (Request::file('featured_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $created->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('featured_image');
            endforeach;
        endif;

        return Redirect::route('gallery.edit', $created->post_sub_category_id)->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        if ($post->getMedia('featured_image')):
            $post->getMedia('featured_image')->each(function ($fileAdder) {
                $this->featured_image[] = $fileAdder->getUrl();
            });
        endif;

        return Inertia::render('Post/Edit', [
            'post' => [
                'post_category_id' => $post->post_category_id,
                'post_sub_category_id' => $post->post_sub_category_id,
                'id' => $post->id,
                'title' => $post->title,
                'sub_title' => $post->sub_title,
                'slug' => $post->slug,
                'excerpt' => $post->excerpt,
                'description' => $post->description,
                'metadata' => $post->metadata,
                'deleted_at' => $post->deleted_at,
                'featured_image' => $post->getMedia('featured_image') ? $this->featured_image : null,
            ],
            'postSubCategoryName' => PostSubCategory::where('id', $post->post_sub_category_id)->pluck('name')[0]
        ]);
    }

    public function update(Post $post)
    {
        $post->update(
            Request::validate([
                'title' => ['required'],
                'sub_title' => ['nullable'],
                'slug' => ['required', 'max:200'],
                'excerpt' => ['nullable'],
                'description' => ['nullable'],
                'metadata' => ['nullable']
            ])
        );

        if (Request::file('featured_image')) :
            $mediaItems = $post->getMedia('featured_image');
            if (isset($mediaItems)) :
                foreach ($mediaItems as $mediaItem):
                    $mediaItem->delete();
                endforeach;
            endif;
            $images = [];
            foreach (Request::file('featured_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $post->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('featured_image');
            endforeach;
        endif;

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
