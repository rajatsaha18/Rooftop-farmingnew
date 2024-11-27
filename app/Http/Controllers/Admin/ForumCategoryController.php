<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ForumCategory;
use Illuminate\Http\Request;

class ForumCategoryController extends Controller
{
    public function index()
    {
        $forumCategory = ForumCategory::all();
        return view('admin.forum.index',compact('forumCategory'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new ForumCategory();
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('message', 'Category Create Successfully');
    }
}
