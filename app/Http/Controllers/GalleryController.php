<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

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
            'date' => ['nullable'],
            'gallery_image' => ['nullable']
        ]);

        $created = Auth::user()
            ->gallery()
            ->create(
                Request::all([ 'user_id','title','description','date'])
            );

        if (Request::file('gallery_image')):
            $images = [];
            foreach (Request::file('gallery_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $created->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('gallery_image');
            endforeach;
        endif;

        return Redirect::route('gallery.edit', $created->title)->with('success', 'Gallery created.');
    }
    public function show()
    {
        return Inertia::render('Gallery/View', [

        ]);
    }
    }
