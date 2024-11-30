@extends('website.layouts.master')

@section('title')
Service | Rooftop Farming
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-md-4">
                <div class="card card-body shadow-lg">
                    <img src="{{ asset($service->image) }}" alt="service-image" style="height: 200px;">
                    <h4 class="mt-2"><a href="">{{ $service->name }}</a></h4>
                    <p><strong>Price:</strong>{{ $service->price }}</p>
                    <p>{!! Str::limit($service->description, 50, '...') !!}</p>
                    <div>
                        <a href="" class="btn member_button">Details</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
@endsection
