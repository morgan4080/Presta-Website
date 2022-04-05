<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
