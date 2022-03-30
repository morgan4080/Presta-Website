<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function index()
    {
        return Inertia::render('Gallery/Index', [

        ]);
    }

    public function create()
    {
        return Inertia::render('Gallery/Create', [

        ]);
    }
    public function store()
    {
        \Illuminate\Support\Facades\Request::validate([
            'user_id' => ['required'],
            'title' => ['required'],
            'description' => ['nullable'],
            'metadata' => ['nullable'],
            'gallery_image' => ['nullable']
        ]);

        $created = Auth::user()
            ->gallery()
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

        return Redirect::route('post-sub-category.edit', $created->post_sub_category_id)->with('success', 'Post created.');
    }
    public function show()
    {
        return Inertia::render('Gallery/View', [

        ]);
    }
    }
