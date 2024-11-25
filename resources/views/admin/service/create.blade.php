@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('service.index') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Back</a>
            </div>
            <div class="col-md-8 mx-auto">
                <div class="card card-body shadow-lg">
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center">Add service</h4>
                        <div class="from-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                            <span class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
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
