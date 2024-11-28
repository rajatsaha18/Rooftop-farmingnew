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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body shadow-lg">
                            @php
                                DB::table('projects')->where('user_id')count();
                            @endphp
                            <p class="text-center">My Projects</p>
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
