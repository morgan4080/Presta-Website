<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class GalleryController extends Controller
{
    protected $gallery_image = null;


    public function index()
    {
        $gallery = new Gallery;
        $allGs = $gallery->get();
        $arr = $allGs->all();
        $dump = [];
        foreach ($arr as $items) {
            if ($items->getMedia('gallery_image')):
                $items->getMedia('gallery_image')->each(function ($fileAdder) {
                    $this->gallery_image[] = $fileAdder->getUrl();
                });
            endif;
            $dump[] = [
                'id' => $items->id,
                'title' => $items->title,
                'date' => $items->date,
                'description' => $items->description,
                'gallery_image'=> $this->gallery_image
            ];
            $this->gallery_image = [];
        }

//        dd($this->gallery_image);
        return Inertia::render('Gallery/Index', [
            'gallery' =>collect($dump)
        ]);
    }

    public function create()
    {
        return Inertia::render('Gallery/Create', [

        ]);
    }

    public function edit(Gallery $gallery)
    {
        if ($gallery->getMedia('gallery_image')):
            $gallery->getMedia('gallery_image')->each(function ($fileAdder) {
                $this->gallery_image[] = $fileAdder->getUrl();
            });
        endif;
        return Inertia::render('Gallery/Edit', [
            'gallery' => [
                'id' => $gallery->id,
                'title' => $gallery->title,
                'description' => $gallery->description,
                'date' => $gallery->date,
                'deleted_at' => $gallery->deleted_at,
                'gallery_image' => $gallery->getMedia('gallery_image') ? $this->gallery_image : null,
            ]
        ]);
    }
    public function store()
    {
        \Illuminate\Support\Facades\Request::validate([
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

        return Redirect::route('gallery.index', $created->title)->with('success', 'Gallery created.');
    }

    public function show(Gallery $gallery)
    {
        if ($gallery->getMedia('gallery_image')):
            $gallery->getMedia('gallery_image')->each(function ($fileAdder) {
                $this->gallery_image[] = $fileAdder->getUrl();
            });
        endif;
        return Inertia::render('Gallery/View', [
            'album' => [
                'id' => $gallery->id,
                'title' => $gallery->title,
                'description' => $gallery->description,
                'date' => $gallery->date,
                'deleted_at' => $gallery->deleted_at,
                'gallery_image' => $gallery->getMedia('gallery_image') ? $this->gallery_image : null,
            ]
        ]);
    }


    public function update(Gallery $gallery)
    {
        if (\Illuminate\Support\Facades\Request::file('gallery_image')) :
            $images = [];
            foreach (Request::file('gallery_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $gallery->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('gallery_image');
            endforeach;
        endif;
        $gallery->update(
            Request::validate([
                'title' => ['required'],
                'date' => ['nullable'],
                'description' => ['nullable'],
            ])
        );

        return Redirect::back()->with('success', 'Gallery updated.');
    }


}
