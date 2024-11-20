@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        {{-- <div class="mb-5">
            <a href="{{ route('member.logout') }}" class="btn member_button">Logout</a>
        </div> --}}
        <div class="row">
            @include('website.member.sidebar')

            <div class="col-md-9">
                <div class="card card-body">
                    <h4>This is Dashboard</h4>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
