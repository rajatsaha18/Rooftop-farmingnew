@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">

                <div class="text-end">
                    <a href="{{ route('plant.index') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-person-walking-arrow-loop-left"></i> Back</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow-lg">
                        <h4 class="text-center">Add Plant</h4>
                        <form action="{{ route('plant.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Plant Date</label>
                                <input type="date" name="planting_date" class="form-control">
                                <span class="text-danger">{{ $errors->has('planting_date') ? $errors->first('planting_date') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn member_button" value="Create Plant" />
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
