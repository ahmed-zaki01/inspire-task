@extends('front.layout')

@section('content')


<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron mb-0">
        <div class="container">
            {{-- intro of homepage --}}
            <h1 class="display-3 pt-5">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>

        {{-- latest posts div --}}

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    {{-- view latest posts --}}
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" width="100%" height="225" src="{{url('uploads/posts').'/'.$post->img}}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{$post->short_desc}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('front.show_post', $post->id)}}" class="btn btn-sm btn-info">Read More</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
