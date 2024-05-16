<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome () {
        $projects = Project::where('is_accepted', true)->take(3)->get()->sortByDesc('created_at');
        return view('welcome', compact('projects'));
    }
    public function experience () {
        return view('experience');
    }
    public function whoiam () {
        return view('whoiam');
    }
    public function portfolio () {
        return view('portfolio');
    }
    public function contact () {
        return view('contact');
    }
}
