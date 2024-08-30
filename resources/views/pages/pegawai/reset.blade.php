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
		<x-elements.forms.form :url="url('pegawai/simpan_reset/'. $idf)" :isupload="false">
			<div class="form-group">
				<label>Email</label>
				<span class="form-control">{{ $email }}</span>
			</div>
				<x-elements.forms.input :isgroup="true" nama="password" label="Password" jenis="text" placeholder="Masukkan Password" />
				<x-elements.forms.input :isgroup="true" nama="confirm_password" label="Konfirmasi Password" jenis="text" placeholder="Masukkan Konfirmasi Password" />
		
			<x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
		</x-elements.forms.form>
	</x-layouts.content>
</x-layouts.template>