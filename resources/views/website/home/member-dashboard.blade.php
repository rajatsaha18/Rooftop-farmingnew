@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div>
            <a href="{{ route('member.logout') }}" class="btn member_button">Logout</a>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="card card-body">
                    <h1>This is Member Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
