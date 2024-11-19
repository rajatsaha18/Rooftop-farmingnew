<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Session;

class MyProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('website.project.index',compact('projects'));
    }
    public function projectAdd()
    {
        return view('website.project.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'image'     => 'required',
            'location'  => 'required'
        ]);
        Project::newProject($request);
        return redirect()->route('member.project')->with('message', 'Project Save Successfully');

    }
}

