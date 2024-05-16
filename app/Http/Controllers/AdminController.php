<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $project_to_check = Project::where('is_accepted', null)->first();
        return view('admin.index', compact('project_to_check'));
    }

    public function acceptProject(Project $project)
    {
        $project->setAccepted(true);
        return redirect()->back()->with('message','Hai accettato il Progetto');
    }

    public function rejectProject(Project $project)
    {
        $project->setAccepted(false);
        return redirect()->back()->with('message','Hai rifiutato il Progetto');
    }
}
