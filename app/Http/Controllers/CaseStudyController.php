<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class CaseStudyController extends Controller
{
    public function index()
    {
        return Inertia::render('CaseStudy/Index', [

        ]);
    }
    public function create()
    {
        return Inertia::render('CaseStudy/Create', [

        ]);
    }
    public function store()
    {
        \Illuminate\Support\Facades\Request::validate([
            'title' => ['required'],
            'client' => ['required'],
            'category' => ['required'],
            'description' => ['nullable'],
            'date' => ['nullable'],
            'caseStudy_image' => ['nullable']
        ]);

        $created = Auth::user()
            ->caseStudy()
            ->create(
                Request::all([ 'user_id','category','title','client','description','date'])
            );
        if (Request::file('caseStudy_image')):
            $images = [];
            foreach (Request::file('caseStudy_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $created->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('caseStudy_image');
            endforeach;
        endif;

        return Redirect::route('gallery.index', $created->title)->with('success', 'Gallery created.');
    }
    public function show()
    {
        return Inertia::render('CaseStudy/View', [

        ]);
    }
    public function edit()
    {
        return Inertia::render('CaseStudy/Edit', [

        ]);
    }
}
