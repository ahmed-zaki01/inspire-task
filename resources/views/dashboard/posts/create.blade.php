@extends('dashboard.layout', ['title' => 'New Post'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-user mr-1"></i> New Post</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark"><i class="fas fa-arrow-left mr-2"></i> Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('dashboard.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card-body">

            <div class="form-group">
                <label for="users">Select User</label>
                <select class="form-control" id="users" name="user_id">
                    <option disabled selected>Users</option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" class="form-control img-input" id="img">
            </div>

            <div class="form-group">
                <img src="{{url('uploads/posts/default.png')}}" style="height: 100px;" class="img-thumbnail img-preview" alt="post image">
            </div>

            <div class="form-group">
                <label for="short_desc">Short Description</label>
                <input type="text" name="short_desc" value="{{old('short_desc')}}" class="form-control" id="short_desc">
            </div>

            <div class="form-group">
                <label for="desc">Full Description</label>
                <textarea name="desc" id="desc" class="form-control ckeditor" rows="5">{{old('desc')}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Submit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
