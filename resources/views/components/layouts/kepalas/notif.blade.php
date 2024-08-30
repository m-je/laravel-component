<li class="dropdown notifications-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-bell-o"></i>
    @if( $jml > 0 )
      <span class="label label-{{ $warna }}">{{ $jml }}</span>
    @endif
  </a>
  <ul class="dropdown-menu">
    <li class="header text-center text-bold">{{ $jml }} Pemberitahuan</li>
    <li>
      <ul class="menu">
        @foreach( $dt as $k => $v )
        @if( $v['jml'] > 0 )
          <li>
            <a href="{{ $v['url'] }}">
              <i class="fa fa-warning text-yellow"></i>{{ $v['pesan'] }}
            </a>
          </li>
          @endif
        @endforeach
  </ul>
  </li>
  <!-- <li class="footer"><a href="#">View all</a></li> -->
  </ul>
</li>