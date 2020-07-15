<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        {{ config('app.name') }} |
        @isset($title)
        {{ $title }}
        @endisset
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/img')}}/favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins')}}/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Noty -->
    <link rel="stylesheet" href="{{asset('dashboard/plugins')}}/noty/noty.min.css">
    <!-- noty plugin -->
    <script src="{{asset('dashboard/plugins')}}/noty/noty.min.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dashboard/css')}}/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- custom page style -->
    @yield('style')

</head>

<body class="hold-transition sidebar-mini layout-fixed" dir="ltr">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('dashboard.index')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard.logout')}}">
                        <i class="fa fa-sign-out-alt"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Include Adminlte Sidebar -->
        @include('dashboard.inc._aside')
