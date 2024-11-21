@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('blog.index') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Back</a>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center">Edit Blog</h4>
                        <div class="from-group mb-3">
                            <label for="">Name</label>
                            <input type="text" value="{{ $blog->name }}" name="name" class="form-control">

                        </div>
                        <div class="from-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset($blog->image) }}" alt="blog-image" style="width: 80px;"/>

                        </div>
                        <div class="from-group mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control">{{ $blog->name }}</textarea>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="from-group mb-3">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Save" />
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
