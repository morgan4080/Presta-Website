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
