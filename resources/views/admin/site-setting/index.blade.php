@extends('admin.layouts.master')
@section('content')
<section class="py-2">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="{{ route('site.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center">Create Site Setting</h4>
                        <div class="from-group mb-3">
                            <label for="">Logo</label>
                            <input type="file" name="image" class="form-control">
                            @if ($site)
                            <img src="{{ asset($site->image) }}" alt="logo" style="width: 80px;">
                            @endif

                        </div>
                        <div class="from-group mb-3">
                            <label for="">Email</label>
                            @if ($site)
                            <input type="email" value="{{ $site->email }}" name="email" class="form-control">
                            @else
                            <input type="email" name="email" class="form-control">
                            @endif
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Mobile</label>
                            @if ($site)
                            <input type="mobile" value="{{ $site->mobile }}" name="mobile" class="form-control">
                            @else
                            <input type="mobile" name="mobile" class="form-control">
                            @endif
                        </div>
                        <div class="from-group mb-3">
                            <label for="">Address</label>
                            @if ($site)
                            <textarea name="address" class="form-control">{{ $site->address }}</textarea>
                            @else
                            <textarea name="address" class="form-control"></textarea>
                            @endif

                        </div>
                        <div class="from-group mb-3">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Update SiteSetting"/>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
