@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('blog.add') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Add Blog</a>
            </div>
            <h4 class="text-center text-success mb-3">Forum Category</h4>
            <div class="col-md-4">
                <div class="card card-body">
                    <h4 class="text-center">Category Create</h4>
                    <form action="{{ route('forum.category.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter category Name"/>
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="create category"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    <h4 class="text-center">Category Manage</h4>
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Name</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forumCategory as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
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
