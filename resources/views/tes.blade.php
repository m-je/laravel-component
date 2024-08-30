@if( auth()->guard('pegawai')->check() || auth()->guard('kontraktor')->check() )
@php
$data = [];
$g = auth()->guard('pegawai')->check()?"pegawai":"kontraktor";
$data = auth()->guard( $g )->user();
echo " id : ".$data->id;
echo "<br>";
echo " nama : ".$data->nama;
echo "<br>";
echo " email : ".$data->email;
echo "<br>";
echo "Jabatan ID : ".$data->jabatan_id;
echo "<br>";
@endphp
	<x-elements.forms.form url="logout" :isupload="false">
		<input type="submit" value="Logout">
	</x-elements.forms.form>
@else
	<x-elements.forms.form url="login/kontraktor" :isupload="false">
		<input type="text" name="username" >
		<input type="password" name="password">
		<input type="submit" value="simpan">
	</x-elements.forms.form>
@endif