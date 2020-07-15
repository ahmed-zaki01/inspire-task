<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">Blog App</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('dashboard/plugins')}}/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard/plugins')}}/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge("uibutton", $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- ckeditor plugin --}}
<script src="{{asset('dashboard/plugins')}}/ckeditor/ckeditor.js"></script>

<!-- AdminLTE App -->
<script src="{{asset('dashboard/js')}}/adminlte.min.js"></script>

<!-- custom page script -->
@yield('script')

</body>

</html>
