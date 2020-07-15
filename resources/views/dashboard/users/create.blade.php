@extends('dashboard.layout')

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-user mr-1"></i> New User</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark"><i class="fas fa-arrow-left mr-2"></i> Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('dashboard.users.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number (Optional)</label>
                <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
