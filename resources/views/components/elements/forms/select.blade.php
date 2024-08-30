@if( $isgroup )
<div class="form-group">
@endif
@if( strlen( $label) > 0 )
<label for="{{ $nama }}">{{ $label }}</label>
@endif
<select name="{{ $nama }}" id="{{ $nama }}" class="form-control">
    @foreach( $dt as $k => $v)
        <option value="{{ $v['nilai'] }}"
        @if( isset( $v['aktif'] ) ) selected @endif
        >{{ $v['label'] }}</option>
    @endforeach
</select>

@if( $isgroup )
</div>
@endif