@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;

@endphp
<x-layouts.template :title="$temp_tit" title1="CSMS TPPI" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.grid.baris>
			<x-elements.grid.kolom :md="3">
			<x-elements.box.small warna="aqua" :angka="$dt['kon']" teks="Jumlah Kontraktor" ikon="stats-bars" />
		</x-elements.grid.kolom>
		<x-elements.grid.kolom :md="3">
			<x-elements.box.small warna="green" :angka="$dt['jml_tinggi']" teks="Resiko Tinggi" ikon="stats-bars" />
		</x-elements.grid.kolom>
		<x-elements.grid.kolom :md="3">
			<x-elements.box.small warna="yellow" :angka="$dt['jml_sedang']" teks="Resiko Sedang" ikon="stats-bars" />
		</x-elements.grid.kolom>
		<x-elements.grid.kolom :md="3">
			<x-elements.box.small warna="red" :angka="$dt['jml_rendah']" teks="Resiko Rendah" ikon="stats-bars" />
		</x-elements.grid.kolom>
	</x-elements.grid.baris>
	<x-elements.grid.baris>
		<x-elements.grid.kolom :md="12">
			<x-dashboards.resiko :idtinggi="$iddt['tinggi']" :idsedang="$iddt['sedang']" :idrendah="$iddt['rendah']" />
		</x-elements.grid.kolom>
	</x-elements.grid.baris>
	</x-layouts.content>
</x-layouts.template>