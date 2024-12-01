@extends('website.layouts.master')

@section('title')
Blog | Rooftop Farming
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body shadow-lg">
                    <img src="{{ asset($blog->image) }}" alt="blog-image">
                    <h4 class="mt-5">{{ $blog->name }}</h4>
                    <p class="mt-5">{!! $blog->description !!}</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
