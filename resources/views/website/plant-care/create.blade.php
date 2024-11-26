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
                    <h4 class="text-center">Set up plant care schedule for <strong>{{ $plant->name }}</strong></h4>
                    <div class="card card-body shadow-lg">

                        <form action="{{ route('care.schedule.store',$plant->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for="">Care Type:</label>
                                <select name="type" class="form-control">
                                    <option value="watering">watering</option>
                                    <option value="fertilization">Fertilization</option>
                                </select>
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Next Due Date</label>
                                <input type="date" name="next_due_date" class="form-control">
                                <span class="text-danger">{{ $errors->has('planting_date') ? $errors->first('planting_date') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Frequency(in days):</label>
                                <input type="text" name="frequency_in_days" class="form-control">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn member_button" value="Save Schedule" />
                            </div>


                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
