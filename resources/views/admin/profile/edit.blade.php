@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <h4 class="text-center">Admin Profile</h4>
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ old('name',auth()->user()->name) }}" class="form-control" placeholder="Change name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Current Password</label>
                            <input type="password" name="current_password" class="form-control" id="" placeholder="current password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">New Password</label>
                            <input type="password" name="password" class="form-control" id="" placeholder="">
                        </div>
                        <div class="form-group mb-3">
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
