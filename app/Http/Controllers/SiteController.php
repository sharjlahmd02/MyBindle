<?php

namespace App\Http\Controllers;
use App\Models\CmsSection;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
{
    $sections = CmsSection::all()
        ->groupBy('section_name')
        ->map(fn ($section) => $section->pluck('value', 'key'));

    return view('index', compact('sections'));
}
}
