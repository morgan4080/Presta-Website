<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DigitalOnboardingController extends Controller
{
    public function index()
    {
        return Inertia::render('DigitalOnboarding/Index', [
        ]);
    }
}
