<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class MyProjectController extends Controller
{
    public $projects;
    public function index()
    {
        $userId = Auth::id();
        $projects = $this->projects = Project::where('user_id',$userId )->get();
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

    public function edit($id)
    {
        $project = Project::find($id);
        return view('website.project.edit',compact('project'));
    }

    public function update(Request $request,$id)
    {
        Project::updateProject($request,$id);
        return redirect()->route('member.project')->with('message', 'Project Update Successfully');
    }
    public function delete($id)
    {
        Project::deleteProject($id);
        return redirect()->route('member.project')->with('message', 'Project Delete Successfully');
    }
}

