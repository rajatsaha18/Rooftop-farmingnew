@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="text-end">
                    <a href="{{ route('forum.post.index') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-person-walking-arrow-loop-left"></i> Back</a>
                </div>
                <div class="col-md-8 mx-auto">
                    <div>
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                    </div>
                    <h2>Comments:</h2>
                    @foreach ($comments as $comment)
                    <div>
                        <p>{{ $comment->body }}</p>
                        <small>By {{ $comment->user->name }}</small>

                    </div>

                    @endforeach


                    <h3>Add a Comment:</h3>
                    <form action="{{ route('forum.comment.store', $post->id) }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for="">Body:</label>
                            <textarea name="body" class="form-control"></textarea>

                        </div>
                        <button type="submit" class="btn btn-success">Add Comment</button>
                    </form>



                </div>
            </div>
        </div>
    </section>
@endsection
