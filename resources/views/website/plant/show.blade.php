@extends('website.layouts.master')
@section('title')
    Home | Rooftop Farming
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>{{ $plant->name }}</h2>
                    <p> <strong>Planting Date: </strong>{{ $plant->planting_date }}</p>
                    <p> <strong>Current Stage:</strong>  {{ $plant->current_stage }}</p>
                    <!--check that if harvested date-->
                    @if ($plant->harvest_date)
                        <p> <strong>Harvested Date:</strong>  {{ $plant->harvest_date }}<p>
                    @else
                        <td> <strong>Harvested Date:</strong> Not harvested yet</td>
                    @endif
                    <div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>sl</th>
                                    <th>type</th>
                                    <th>next date</th>
                                    <th>frequency</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plant->careSchedules as $schedule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $schedule->type }}</td>
                                    <td>{{ $schedule->next_due_date }}</td>
                                    <td>{{ $schedule->frequency_in_days }}</td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Growth Stage</h2>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>sl</th>
                                <th>stage</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plant->growthStages as $stage)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stage->stage }}</td>
                                    <td>{{ $stage->date }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="text-end">
                    <a href="{{ route('plant.index') }}" class="btn member_button mb-2"><i
                            class="fa-solid fa-person-walking-arrow-loop-left"></i> Back</a>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card card-body shadow-lg">
                        <h4 class="text-center">Update Growth Stage</h4>
                        <form action="{{ route('plant.updateStage', $plant->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <label for=""></label>
                                <input type="hidden" name="plant_id" value="{{ $plant->id }}" class="form-control">

                            </div>
                            <div class="from-group">
                                <label for="">Stage</label>
                                <input type="text" name="stage" class="form-control">
                                <span class="text-danger">{{ $errors->has('stage') ? $errors->first('stage') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for="">Date</label>
                                <input type="date" name="date" class="form-control">
                                <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
                            </div>
                            <div class="from-group">
                                <label for=""></label>
                                <input type="submit" class="btn member_button" value="Update Stage" />
                            </div>


                        </form>
                    </div>

                    <div class="mt-3">
                        <form action="{{ route('plant.harvested', $plant->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Mark as Harvested</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
