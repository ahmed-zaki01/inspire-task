@extends('front.layout', ['title' => ucwords($page->title) ])

@section('content')
<div class="container-fluid">
    {{$page->content}}
</div>

@endsection
