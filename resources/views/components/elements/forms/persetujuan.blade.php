@if( auth()->guard('pegawai')->check() )
<x-elements.forms.form :url="$url" :isupload="false">
    <input type="hidden" name="pemenang_id" value="{{ $id }}">
    <input type="hidden" name="jenis_menu" value="{{ $jm }}">
    <x-elements.buttons.button jenis="submit" warna="danger" label="Setujui" ikon="check" />
</x-elements.forms.form>
@endif