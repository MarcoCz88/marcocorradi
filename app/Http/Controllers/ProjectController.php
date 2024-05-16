<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(){
        return view('projects.create');
    }

    public function showProject (Project $project){
        return view('projects.show', compact ('project'));
    }

    public function indexProject() {
        $projects= Project::where('is_accepted', true)->get();
        return view('projects.index', compact('projects'));
    }
}
