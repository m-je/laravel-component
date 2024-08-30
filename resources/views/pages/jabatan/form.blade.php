@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;
$dt_select = [];
foreach( $slt as $k => $v)
{
	$dt_select[$k] = [
	'nilai' => $v->id, 'label' => $v->nama
	];
	if( $v->id == $dt->jabatan->id )
	$dt_select[ $k ]['aktif'] = 1;
}
$idf = isset($dt->id)?$dt->id:0;
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS INJECT" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.forms.form :url="url('jabatan/simpan/'. $idf)" :isupload="false">
			<x-elements.forms.input :nilai="isset($dt->nama)?$dt->nama:''" :isgroup="true" nama="nama" label="Nama" jenis="text" placeholder="Masukkan Nama" />
			<x-elements.buttons.button url jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
		</x-elements.forms.form>
	</x-layouts.content>
</x-layouts.template>