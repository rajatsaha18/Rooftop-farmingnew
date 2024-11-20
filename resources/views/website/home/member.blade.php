@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<style>


</style>
<section class="py-5">
    <div class="container">
        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
        <div class="login-form mx-auto">
            <h2>Member Register</h2>
            <form action="{{ route('member.submit') }}" method="POST">
                @csrf
                <div class="from-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="from-group">
                    <label for="">email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="from-group">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>
        </div>
    </div>
</section>
{{-- <section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="{{ route('member.submit') }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
