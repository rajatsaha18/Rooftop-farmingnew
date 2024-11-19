@extends('website.layouts.master')
@section('title')
Member-Login | Rooftop Farming
@endsection
@section('content')
<style>
    /* body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */
    .login-form {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
    }
    .login-form h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    .form-control {
        margin-bottom: 15px;
    }
    .btn-primary {
        width: 100%;
    }
</style>
<section class="py-5">
    <div class="container">
        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
        <div class="login-form mx-auto">
            <h2>Login</h2>
            <form action="{{ route('member.login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</section>

@endsection
