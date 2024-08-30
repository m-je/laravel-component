@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;
$dt_select = [];
$pilih = isset( $dt )?$dt->jabatan->id:0;
foreach( $slt as $k => $v)
{
	$dt_select[$k] = [
	'nilai' => $v->id, 'label' => $v->nama
	];
	if( $v->id == $pilih )
	$dt_select[ $k ]['aktif'] = 1;
}
$idf = isset($dt->id)?$dt->id:0;
@endphp
<x-layouts.template :title="$temp_tit" title1="CSMS TPPI" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.forms.form :url="url('pegawai/simpan/'. $idf)" :isupload="false">
			<x-elements.forms.select :isgroup="true" nama="jabatan_id" label="Jabatan" :dt="$dt_select" />
			<x-elements.forms.input :nilai="isset($dt->nip)?$dt->nip:''" :isgroup="true" nama="nip" label="NIP" jenis="text" placeholder="Masukkan NIP" />
			<x-elements.forms.input :nilai="isset($dt->nama)?$dt->nama:''" :isgroup="true" nama="nama" label="Nama" jenis="text" placeholder="Masukkan Nama" />
			<x-elements.forms.input :nilai="isset($dt->email)?$dt->email:''" :isgroup="true" nama="email" label="Email" jenis="text" placeholder="Masukkan Email" />
			@if( !isset( $dt->id) )
				<x-elements.forms.input :isgroup="true" nama="password" label="Password" jenis="text" placeholder="Masukkan Password" />
			@endif
			<x-elements.forms.input :nilai="isset($dt->no_hp)?$dt->no_hp:''" :isgroup="true" nama="no_hp" label="No HP" jenis="text" placeholder="Masukkan No HP" />
			<x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
		</x-elements.forms.form>
	</x-layouts.content>
</x-layouts.template>