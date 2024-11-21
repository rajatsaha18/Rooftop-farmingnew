@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="text-end">
                    <a href="{{ route('member.project') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-person-walking-arrow-loop-left"></i> Back</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow-lg">
                        <h4 class="text-center">Add Project</h4>
                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('image') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Location</label>
                                <input type="text" name="location" class="form-control">
                                <span
                                    class="text-danger">{{ $errors->has('name') ? $errors->first('location') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Project Type</label>
                                <input type="text" name="project_type" class="form-control">
                            </div>
                            <div class="from-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="from-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn member_button" value="Save" />
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
