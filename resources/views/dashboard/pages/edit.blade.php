@extends('dashboard.layout', ['title' => 'Edit Page'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-file-alt mr-1"></i> New Page</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark"><i class="fas fa-arrow-left mr-2"></i> Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('dashboard.pages.update', $page->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="card-body">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$page->title}}" class="form-control" id="title" required>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control ckeditor" rows="5">{{$page->content}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
