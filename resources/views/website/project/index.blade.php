@extends('website.layouts.master')
@section('title')
Home | Rooftop Farming
@endsection
@section('content')
<style>
    #button_edit
    {
        background-color: skyblue;
    }
    #button_delete
    {
        background-color: red;
    }
</style>
 <section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('project.add') }}" class="btn member_button mb-2"><i class="fa-solid fa-folder-plus"></i> Add Project</a>
            </div>
            <h4 class="text-center text-success mb-3">Project Manage</h4>
            @include('website.member.sidebar')

            <div class="col-md-9">

                <div class="card card-body">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Name</td>
                                <td>Location</td>
                                <td>Type</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->location }}</td>
                                <td>{{ $project->project_type }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    <img src="{{ asset($project->image) }}" alt="project-image" style="width:80px"/>
                                </td>
                                <td>
                                    @if($project->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('project.edit',$project->id) }}" class="btn btn-info btn-sm" id="button_edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('project.delete',$project->id) }}" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger" id="button_delete"><i class="fa fa-trash"></i></a>
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
