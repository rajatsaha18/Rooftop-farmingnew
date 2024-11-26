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
                <a href="{{ route('plant.create') }}" class="btn member_button mb-2"><i class="fa-solid fa-folder-plus"></i> Add Plant</a>
            </div>
            <h4 class="text-center text-success mb-3">Plant Manage</h4>
            @include('website.member.sidebar')

            <div class="col-md-9">

                <div class="card card-body">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Name</td>
                                <td>Planting Date</td>
                                <td>Current Stage</td>
                                <td>Harvest Date</td>
                                <td>Care Schedule</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plants as $plant)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $plant->name }}</td>
                                <td>{{ $plant->planting_date }}</td>
                                <td>{{ $plant->current_stage }}</td>
                                <!--check have harvested-->
                                @if($plant->harvest_date)
                                <td>{{ $plant->harvest_date }}</td>
                                @else
                                <td>Not harvested yet</td>
                                @endif
                                <td>
                                    <a href="{{ route('care_schedule.create',$plant->id) }}" class="custom_button" ><i class="fa-solid fa-calendar-days"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('plant.show',$plant->id) }}" class="btn btn-info btn-sm" id="button_edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('plant.delete',$plant->id) }}" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger" id="button_delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </section>

@endsection
