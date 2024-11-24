@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('gallery.index') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Back</a>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="{{ route('gallery.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center">Add Gallery</h4>
                        <div class="from-group mb-3">
                            <label for="">Name</label>
                            <input type="text" value="{{ $gallery->name }}" name="name" class="form-control">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset($gallery->image) }}" alt="gallery-image" style="width: 80px;"/>
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('image') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{ $gallery->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $gallery->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="from-group mb-3">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Update" />
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
