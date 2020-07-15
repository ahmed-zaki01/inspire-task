@extends('front.layout', ['title' => 'Post'])

@section('content')

<div class="container mt-5" style="height: 80vh;">
    <div class="row">

        {{-- img, desc --}}
        <div class="col-md-6">
            <div>
                <img src="{{url('uploads/posts').'/'.$post->img}}" style="width: 500px; height: 350px;" alt="">
            </div>
            <div class="pt-3 pb-4 text-info"> {!! $post->desc !!} </div>
        </div>

        {{-- title, date --}}
        <div class="col-md-6 d-flex justify-content-center">
            <ul class="list-unstyled">
                <li class="pb-2"><span class="text-primary font-weight-bold">Title: </span>{{$post->title}}</li>
                <li class="pb-2"><span class="text-primary font-weight-bold">Writer: </span>{{$post->user->name}}</li>
                <li><span class="text-primary font-weight-bold">Created At: </span>{{$post->created_at}}</li>
            </ul>
        </div>
    </div>
</div>

@endsection
