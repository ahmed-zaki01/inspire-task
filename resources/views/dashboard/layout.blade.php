@include('dashboard.inc._header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    {{-- include session --}}
    @include('partials._session')
    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('dashboard.inc._footer')
