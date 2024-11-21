<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }
    public function create()
    {
        return view('admin.blog.create');
    }
    public function store(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->route('blog.index')->with('message','Blog Create Successfully');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }
    public function update(Request $request,$id)
    {
        Blog::updateBlog($request,$id);
        return redirect()->route('blog.index')->with('message','Blog Update Successfully');
    }
    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect()->route('blog.index')->with('message','Blog Update Successfully');
    }
}
