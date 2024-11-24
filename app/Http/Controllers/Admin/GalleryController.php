<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }
    public function create()
    {
        return view('admin.gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        Gallery::newGallery($request);
        return redirect()->route('gallery.index')->with('message', 'Gallery Create Successfully');
    }
    public function edit($id)
    {

        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery'));
    }
    public function update(Request $request,$id)
    {
        Gallery::updateGallery($request,$id);
        return redirect()->route('gallery.index')->with('message', 'Gallery Update Successfully');
    }
    public function delete($id)
    {
        Gallery::deleteGallery($id);
        return redirect()->route('gallery.index')->with('message', 'Gallery Delete Successfully');
    }

}
