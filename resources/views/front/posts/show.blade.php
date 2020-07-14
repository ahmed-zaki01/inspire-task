@extends('front.layout', ['title' => 'Post'])

@section('content')

<div class="container mt-5">
    <div class="row">

        {{-- img, desc --}}
        <div class="col-md-6">
            <div>
                <img src="{{url('uploads/posts').'/'.$post->img}}" alt="">
            </div>
            <p class="pt-3 pb-5 text-info"> {{$post->desc}} </p>
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
