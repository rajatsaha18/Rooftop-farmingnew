<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }
    public function create()
    {
        return view('admin.service.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required|integer',
        ],[
            'price.integer' => 'please enter number',
        ]);

        Service::newService($request);
        return redirect()->route('service.index')->with('message','Service Create Successfully');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
    }
    public function update(Request $request,$id)
    {
        Service::updateService($request,$id);
        return redirect()->route('service.index')->with('message','Service Update Successfully');
    }
    public function delete($id)
    {
        Service::deleteService($id);
        return redirect()->route('service.index')->with('message','Service Delete Successfully');
    }
}
