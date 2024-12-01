@extends('website.layouts.master')

@section('title')
Blog | Rooftop Farming
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card card-body shadow-lg">
                    <img src="{{ asset($blog->image) }}" alt="blog-image" style="height: 200px;">
                    <h4 class="mt-2"><a href="">{{ Str::limit($blog->name, 30, '...') }}</a></h4>
                    <p>{!! Str::limit($blog->description, 50, '...') !!}</p>
                    <div>
                        <a href="{{ route('home.blog.details',$blog->slug) }}" class="btn member_button">Details</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
