@extends('dashboard.layout', ['title' => 'Custom Pages'])


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
                    <li class="breadcrumb-item active">@lang('site.pages')</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- pages table -->
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">

            <h3 class="card-title">@lang('site.pages') Table - Total ({{$pages->total()}})</h3>
            <a href="{{route('dashboard.pages.create')}}" class="btn btn-primary px-4"><i class="fa fa-plus"></i> Add</a>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if ($pages->count())
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $index => $page)

                <tr>
                    <td class="table-col">{{$index + 1}}</td>
                    <td class="table-col">{{$page->title}}</td>
                    <td class="table-col">{{$page->slug}}</td>
                    <td class="row justify-content-center align-items-center">

                        <a href="{{route('dashboard.pages.edit', $page->id)}}" class="btn btn-sm btn-info mr-2"><i class="fa fa-edit"></i> Edit</a>

                        <form action="{{route('dashboard.pages.destroy', $page->id)}}" method="post" class="mb-0">
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
        {{ $pages->links() }}
    </div>
</div>

@endsection
