@if( $url == "")
    <button type="{{ $jenis  }}" 
@else
    <a href="{{ $url }}" 
@endif
class="btn btn-{{ $warna }} btn-flat">
    @if( $ikon == "" )
        {{ $label }}
    @else
        <i class="fa fa-{{ $ikon }}"></i> {{ $label }}
    @endif
@if( $url == "")
    </button>
@else
    </a>
@endif