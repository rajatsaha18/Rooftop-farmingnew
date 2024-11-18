@extends('admin.layouts.master')
@section('content')
<section class="py-5">
    <div class="container">
        <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
        <div class="row">

            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('member.approved',$member->id) }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for="">Name</label>
                            <input type="text" value="{{ $member->name }}" name="name" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for="">email</label>
                            <input type="email" value="{{ $member->email }}" name="email" class="form-control">
                        </div>
                        <div class="from-group">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Approved">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
