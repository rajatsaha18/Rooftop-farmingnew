@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="text-end">
                <a href="{{ route('service.create') }}" class="btn btn-success mb-2"><i class="fa-solid fa-folder-plus"></i> Add service</a>
            </div>
            <h4 class="text-center text-success mb-3">Service Manage</h4>
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table table-bordered table-strip">
                        <thead>
                            <tr>
                                <td>sl</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Price</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->price }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <img src="{{ asset($service->image) }}" alt="project-image" style="width:80px"/>
                                </td>
                                <td>
                                    @if($service->status == 1)
                                    <span class="text-success">Active</span>
                                    @else
                                    <span class="">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('service.edit',$service->id) }}" class="btn btn-info btn-sm" id="button_edit"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('service.delete',$service->id) }}" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger btn-sm" id="button_delete"><i class="fa fa-trash"></i></a>
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
