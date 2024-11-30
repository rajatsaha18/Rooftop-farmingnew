<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'current_password' => 'nullable|required_with:password',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        $user->name = $request->name;
        if($request->filled('password'))
        {
            if(!Hash::check($request->current_password,$user->password))
            {
                return back()->withErrors(['current_password' => 'This not match our records']);
            }
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back()->with('message', 'profile update successfully');
    }
}
