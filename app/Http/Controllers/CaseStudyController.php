<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class CaseStudyController extends Controller
{
    protected $caseStudy_image = null;


    public function index()
    {
        $caseStudy = new CaseStudy();
        $allGs = $caseStudy->get();
        $arr = $allGs->all();
        $dump = [];
        foreach ($arr as $items) {
            if ($items->getMedia('caseStudy_image')):
                $items->getMedia('caseStudy_image')->each(function ($fileAdder) {
                    $this->caseStudy_image[] = $fileAdder->getUrl();
                });
            endif;
            $dump[] = [
                'id' => $items->id,
                'title' => $items->title,
                'client' => $items->client,
                'category' => $items->category,
                'date' => $items->date,
                'description' => $items->description,
                'caseStudy_image'=> $this->caseStudy_image
            ];
            $this->caseStudy_image = [];
        }

//        dd($this->caseStudy_image);
        return Inertia::render('CaseStudy/Index', [
            'caseStudy' =>collect($dump)
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
//            dd(Request::file('caseStudy_image'));
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

        return Redirect::route('case-study.index', $created->title)->with('success', 'Case Study created.');
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
