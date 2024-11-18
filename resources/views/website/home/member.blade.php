@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
            <div class="col-md-6">
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
</section>

@endsection
