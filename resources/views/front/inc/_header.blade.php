<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ config('app.name') }} |
        @isset($title)
        {{ $title }}
        @endisset
    </title>
    <link rel="shortcut icon" href="{{asset('front/img')}}/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('front.index')}}">{{ $settings->site_name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('front.index')}}">Home</a>
                </li>

                @foreach ($pages as $page)
                @if ($page->show == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('front.get_page', $page->slug)}}">{{ucwords($page->title)}}</a>
                </li>
                @endif
                @endforeach

            </ul>

        </div>
    </nav>
