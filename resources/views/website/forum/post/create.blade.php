@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="text-end">
                    <a href="{{ route('forum.post.index') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-person-walking-arrow-loop-left"></i> Back</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow-lg">
                        <h4 class="text-center">Add Plant</h4>
                        <form action="{{ route('forum.post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for="">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group">
                                <label for="">Post Title:</label>
                                <input type="text" name="title" class="form-control">
                                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Body:</label>
                                <textarea name="body" class="form-control"></textarea>

                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn member_button" value="Create Post" />
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
