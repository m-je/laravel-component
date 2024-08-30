@if( $jenis == 1 )
<!-- jQuery 2.1.4 -->
        <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- plugin for dropzone -->
        <script type="text/javascript" src="{{ asset('assets/plugins/dropzone/js/dropzone.min.js') }}"></script>

        <!-- Ck Editor -->
        <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>        

@else

        <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    
    @if( $urlsegmen == "admin" || $urlsegmen == "dashboard")
      <!-- Morris.js charts -->
      <script src="{{ asset('assets/admin/js/raphael-min.js') }}"></script>
      <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
      <!-- Sparkline -->
      <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
      <!-- jvectormap -->
      <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    @endif
    <!-- Bootstrap Switch -->
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Clockpicker -->
    <script src="{{ asset('assets/plugins/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/dist/js/app.min.js') }}"></script>
    
    @if( $urlsegmen == "admin" || $urlsegmen == "dashboard")
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script>
    @endif
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script>
    <!-- DATA TABLES SCRIPT -->
    <!-- <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script> -->
    <!-- <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('assets/plugins/datatables1/datatables.min.js') }}" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
@endif