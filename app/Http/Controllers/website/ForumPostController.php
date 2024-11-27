<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ForumCategory;
use App\Models\ForumPost;
use Illuminate\Http\Request;

class ForumPostController extends Controller
{
    public function index()
    {
        $posts = ForumPost::with('category','user')->latest()->get();
        return view('website.forum.post.index',compact('posts'));
    }
    public function create()
    {
        $categories = ForumCategory::all();
        return view('website.forum.post.create',compact('categories'));
    }
    public function show($id)
    {
        $post = ForumPost::with('comments.user')->findOrFail($id);
        $comments = Comment::all();
        return view('website.forum.post.show',compact('post','comments'));
    }
    public function store(Request $request)
    {

        ForumPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'post create successfully');
    }
    public function comment(Request $request,$id)
    {

        $post = ForumPost::findOrFail($id);

        Comment::create([
            'body' => $request->body,
            'post_id' => $post->id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'comment create successfully');
    }
}
