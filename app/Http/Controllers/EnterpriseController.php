<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EnterpriseController extends Controller
{
    public function index()
    {
        return Inertia::render('Enterprise/Index', [
        ]);
    }
}

