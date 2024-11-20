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
}
