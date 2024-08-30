<form action="{{ url( $url ) }}" method="POST" 
@if( $isupload ) enctype="multipart/form-data" @endif
>
    {{ csrf_field() }}
    {{ $slot }}
</form>