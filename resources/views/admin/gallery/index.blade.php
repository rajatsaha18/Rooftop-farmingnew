@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('gallery.create') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Add gallery</a>
            </div>
            <h4 class="text-center text-success mb-3">Gallery Manage</h4>
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Name</td>
                                <td>Image</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $gallery->name }}</td>
                                <td>
                                    <img src="{{ asset($gallery->image) }}" alt="project-image" style="width:80px"/>
                                </td>
                                <td>
                                    @if($gallery->status == 1)
                                    <span class="text-success">Active</span>
                                    @else
                                    <span class="text-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('gallery.edit',$gallery->id) }}" class="btn btn-info btn-sm" id="button_edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('gallery.delete',$gallery->id) }}" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger btn-sm" id="button_delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
