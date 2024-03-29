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
    public function show(CaseStudy $caseStudy)
    {
        if ($caseStudy->getMedia('caseStudy_image')):
            $caseStudy->getMedia('caseStudy_image')->each(function ($fileAdder) {
                $this->caseStudy_image[] = $fileAdder->getUrl();
            });
        endif;
//        dd($caseStudy);
        return Inertia::render('CaseStudy/View', [
            'CaseStudy' => [
                'id' => $caseStudy->id,
                'title' => $caseStudy->title,
                'client' => $caseStudy->client,
                'category' => $caseStudy->category,
                'description' => $caseStudy->description,
                'date' => $caseStudy->date,
                'deleted_at' => $caseStudy->deleted_at,
                'caseStudy_image' => $caseStudy->getMedia('caseStudy_image') ? $this->caseStudy_image : null,
            ]
        ]);
    }
    public function edit(CaseStudy $caseStudy)
    {
        if ($caseStudy->getMedia('caseStudy_image')):
            $caseStudy->getMedia('caseStudy_image')->each(function ($fileAdder) {
                $this->caseStudy_image[] = $fileAdder->getUrl();
            });
        endif;
        return Inertia::render('CaseStudy/Edit', [
            'caseStudy' => [
                'id' => $caseStudy->id,
                'title' => $caseStudy->title,
                'client' => $caseStudy->client,
                'category' => $caseStudy->category,
                'description' => $caseStudy->description,
                'date' => $caseStudy->date,
                'deleted_at' => $caseStudy->deleted_at,
                'caseStudy_image' => $caseStudy->getMedia('caseStudy_image') ? $this->caseStudy_image : null,
            ]
        ]);
    }
    public function update(CaseStudy $caseStudy)
    {
        if (\Illuminate\Support\Facades\Request::file('caseStudy_image')) :
            $images = [];
            foreach (Request::file('caseStudy_image') as $image):
                $images[] = $image;
            endforeach;
            foreach ($images as $im):
                $caseStudy->addMedia($im)
                    ->withResponsiveImages()
                    ->toMediaCollection('caseStudy_image');
            endforeach;
        endif;
        $caseStudy->update(
            Request::validate([
                'title' => ['required'],
                'client' => ['nullable'],
                'category' => ['nullable'],
                'date' => ['nullable'],
                'description' => ['nullable'],
            ])
        );

        return Redirect::route('case-study.show', $caseStudy->id)->with('success', 'Case Study updated.');
    }
}
