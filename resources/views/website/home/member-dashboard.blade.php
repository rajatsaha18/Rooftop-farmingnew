@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <div class="mb-5">
            <a href="{{ route('member.logout') }}" class="btn member_button">Logout</a>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="card card-body">
                    <ul>
                        <li class="mb-2"><a href="{{ route('member.project') }}">My Project</a></li>
                        <li class="mb-2"><a href="">My Project</a></li>
                        <li class="mb-2"><a href="">My Project</a></li>
                        <li class="mb-2"><a href="">My Project</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-body">
                    <h4>This is Dashboard</h4>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
