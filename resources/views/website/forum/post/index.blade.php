@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <style>

    </style>
    <section class="py-2">
        <div class="container">
            <div class="row">

                <div class="text-end">
                    <a href="{{ route('forum.post.create') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-folder-plus"></i> Add Post</a>
                </div>
                <h4 class="text-center text-success mb-3">Community Forum</h4>
                @include('website.member.sidebar')

                <div class="col-md-6 mx-auto">

                    <div class="card card-body">
                        @foreach ($posts as $post)
                        <div>
                            <h4><a href="{{ route('forum.post.show',$post->id) }}">{{ $post->title }}</a></h4>
                            <p>{{ $post->category->name }} | Posted by {{ $post->user->name }}</p>

                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
