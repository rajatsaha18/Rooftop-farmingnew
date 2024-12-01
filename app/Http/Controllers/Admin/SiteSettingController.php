<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index()
    {
        $site = SiteSetting::first();
        return view('admin.site-setting.index',compact('site'));
    }
    public function update(Request $request)
    {
        SiteSetting::updateSite($request);
        return redirect()->back()->with('message', 'Site Update Successfully');
    }
}
