<aside class="main-sidebar" style="padding-top:5%;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <i class="fa fa-user-circle fa-3x" style="color: white;"></i>
      </div>
      <div class="pull-left info">
        <p>Admin Page</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <!-- <li><a href="#">Jumlah Menu : {{count($data_menu) }}</a></li> -->
      @php
      foreach( $data_menu as $k => $menu )
      {
        echo $menu;
      }
      @endphp
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
