@extends('dashboard.layout', ['title' => 'Posts'])


@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@lang('site.dashboard')</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">@lang('site.posts')</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- posts table -->
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">

            <h3 class="card-title">@lang('site.posts') Table - Total ({{$posts->total()}})</h3>
            <a href="{{route('dashboard.posts.create')}}" class="btn btn-primary px-4"><i class="fa fa-plus"></i> Add</a>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if ($posts->count())
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Short Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $post)

                <tr>
                    <td class="table-col">{{$index + 1}}</td>
                    <td class="table-col">{{$post->title}}</td>
                    <td class="table-col"><img src="{{url('uploads/posts').'/'.$post->img}}" style="width: 100px; height: 75px;" alt=""></td>
                    <td class="table-col">{{$post->short_desc}}</td>


                    <td class="row justify-content-center align-items-center" style="height: 100px;">

                        <a href="{{route('dashboard.posts.edit', $post->id)}}" class="btn btn-sm btn-info mr-2"><i class="fa fa-edit"></i> Edit</a>

                        <form action="{{route('dashboard.posts.destroy', $post->id)}}" method="post" class="mb-0">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i> Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h2 class="py-5 text-center">@lang('site.no_data_found')</h2>
        @endif
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $posts->links() }}
    </div>
</div>

@endsection
