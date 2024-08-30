@php
$br = [
['label' => $title,'url' => ''],
];
$temp_tit = "CSMS | ".$title;
$dt_select = [];
$dt_select[] = ['nilai' => 0, 'label' => 'Menu Utama '];
$pilih = isset($dt->parent)?$dt->parent:0;
foreach( $slt as $k => $v)
{
	$dt_select[$k+1] = [
	'nilai' => $v->id, 'label' => $v->nama
	];
	if( $v->id == $pilih)
	$dt_select[ $k+1 ]['aktif'] = 1;
}
$idf = isset($dt->id)?$dt->id:0;
@endphp
<x-layouts.template :title="$temp_tit" title1="CSMS TPPI" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.forms.form :url="url('menu/simpan/'. $idf)" :isupload="false">
			<x-elements.forms.select :isgroup="true" nama="parent" label="Menu Induk" :dt="$dt_select" />
			<x-elements.forms.input :nilai="isset($dt->nama)?$dt->nama:''" :isgroup="true" nama="nama" label="NAMA" jenis="text" placeholder="Masukkan Nama" />
			<x-elements.forms.input :nilai="isset($dt->link)?$dt->link:''" :isgroup="true" nama="link" label="LINK" jenis="text" placeholder="Masukkan Link" />
			<x-elements.forms.input :nilai="isset($dt->ikon)?$dt->ikon:''" :isgroup="true" nama="ikon" label="IKON" jenis="text" placeholder="Masukkan Ikon" />
			<x-elements.forms.input :nilai="isset($dt->urutan)?$dt->urutan:''" :isgroup="true" nama="urutan" label="URUTAN" jenis="text" placeholder="Masukkan Urutan" />
			<div class="form-group">
				<label for="jabatan_id">Untuk Jabatan</label>
				<br>
				@foreach( $jbt as $k => $v)
				<div class="checkbox-inline">
				<label>
					<input type="checkbox" name="jabatan_id[]" id="jabatan_id" value="{{ $v->id }}" 
					@if( isset( $jbtm ) )
						@if( in_array( $v->id, $jbtm ) ) checked @endif
					@endif
					>{{ $v->nama }}
				</label>
				</div>
				@endforeach
			</div>
			<x-elements.buttons.button url="" jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
		</x-elements.forms.form>
	</x-layouts.content>
</x-layouts.template>