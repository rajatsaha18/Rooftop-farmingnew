<?php

namespace App\Http\Controllers\website;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }
    public function member()
    {
        return view('website.home.member');
    }
    public function memberLogin()
    {
        return view('website.home.member-login');
    }
    public function memberDashboard()
    {
        return view('website.home.member-dashboard');
    }
    public function memberLoginSubmit(Request $request)
    {
       $credentials = $request->only('email', 'password');
       if(Auth::attempt($credentials))
       {
        return redirect()->route('member.dashboard')->with('message', 'Member Login Successfully');
       }
       return redirect()->route('member.login')->with('message', 'Please login');
    }

    public function memberLogout()
    {
        Auth::logout();
        return redirect()->route('member.login')->with('message', 'Logout Successfully');
    }
    public function memberSubmit(Request $request)
    {
        $member = new User();
        $member->name       = $request->name;
        $member->email      = $request->email;
        $member->password   = $request->password;
        $member->save();
        return redirect()->back()->with('message', 'Please wait for approved admin your membership');
    }
    public function shop()
    {
        return view('website.home.shop');
    }
    public function service()
    {
        $services = Service::where('status',1)->get();
        return view('website.home.service',compact('services'));
    }
    public function blog()
    {
        $blogs = Blog::where('status',1)->get();
        return view('website.home.blog',compact('blogs'));
    }
    public function blogDetails($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('website.home.blog-details',compact('blog'));
    }
    public function forumAccess()
    {
        if(!Auth::check())
        {
            return redirect()->back()->with('message','please log in first');
        }
        else
        {
            return redirect()->route('forum.post.index');
        }
    }

}
