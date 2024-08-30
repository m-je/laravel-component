<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <x-layouts.css.loads />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <!-- Header -->
    <x-layouts.header title="CSMS Header" title1="TPPI Header" title2="Apps Header" />
    <!-- end header -->
      <!-- Left side column. contains the logo and sidebar -->
      <!-- Nav -->
      <x-layouts.sidebar />
      <!-- end nav -->
      <!-- end Sidebar -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>{{ $title1 }}
            <small>{{ $title2 }}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            @if( count( $breadcrumbs ) > 0)
            @foreach( $breadcrumbs as $k => $v)
              <li
              @if( $v['url'] == "")
                class="active"
              @endif
              ><a href="{{ $v['url'] }}">{{ $v['label'] }}</a></li>
            @endforeach
            @endif
          </ol>
        </section>
        <!-- load js/loads -->
        <x-layouts.js.loads jenis="1" />
        <!-- Main content -->
        <section class="content">
        {{ $slot }}
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2024 <a href="#">Anonim</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

      <!-- Loads js/loads untuk selain jquery dan bootstrap -->
      <x-layouts.js.loads jenis="2" />
<!-- loads js/custom untuk loads js custom script -->
<x-layouts.js.custom />
  </body>
</html>
