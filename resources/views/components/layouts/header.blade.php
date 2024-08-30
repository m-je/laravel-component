
<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CSMS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CSMS</b> Apps</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications Dropdown Menu -->
              <x-layouts.kepalas.notif />
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user-circle"></i>
                  <span class="hidden-xs">{{ $mdl['nama'] }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <center><i class="fa fa-user-circle fa-4x"></i></center>
                    <p>
                      {{ $mdl['nama'] }}
                      <small>
                        {{ $mdl['alamat'] }}
                      </small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-12 text-center">
                      {{ $mdl['nama'] }}
                    </div>
                    <div class="col-xs-12 text-center">
                      {{ $mdl['alamat'] }}
                    </div>
                    <div class="col-xs-12 text-center">
                      {{ $mdl['email'] }}
                    </div>
                    <div class="col-xs-12 text-center">
                      {{ $mdl['no_hp'] }}
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('dashboard/sandi') }}" class="btn btn-primary btn-flat">Ganti Kata Sandi</a>
                    </div>
                    <div class="pull-right">
                      <form action="{{ url('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-flat">Keluar</button>
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>