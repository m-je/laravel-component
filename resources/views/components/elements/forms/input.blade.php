@if( $isgroup )
<div class="form-group">
@endif
@if( strlen( $label) > 0 )
<label for="{{ $nama }}">@php echo $label; @endphp</label>
@endif
<input type="{{ $jenis }}" class="form-control" id="{{ $nama }}" name="{{ $nama }}" placeholder="{{ $placeholder }}" 
@if( $jenis == "date" ) date="date" 
@elseif( $jenis == "year" ) date="year" 
@elseif( $jenis == "month_year" ) date="month_year" 
@elseif( $jenis == "time" ) date="time" 
@endif
@php
if( strlen( $nilai ) > 0 || (int)$nilai > 0) echo "value='".$nilai."'";
else echo "value='".old( $nama )."'";
@endphp
>
@if( $isgroup )
</div>
@endif