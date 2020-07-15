@extends('dashboard.layout', ['title' => 'Edit Settings'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-file-alt mr-1"></i> Edit @lang('site.settings')</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark"><i class="fas fa-arrow-left mr-2"></i> Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('dashboard.settings.update', $setting->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                <label for="site_name">Site Name</label>
                <input type="text" name="site_name" value="{{$setting->site_name}}" class="form-control" id="site_name" required>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
