@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body shadow-lg">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ old('name',auth()->user()->name) }}" class="form-control" placeholder="Change name">
                            </div>
                            <div class="form-group">
                                <label for="">Current Password</label>
                                <input type="password" name="current_password" class="form-control" id="" placeholder="current password">
                            </div>
                            <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
