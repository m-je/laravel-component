@php
$br = [
['label' => $title,'url' => ''],
];
$temp_tit = "HJS | ".$title;
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.buttons.button :url="url('product/add')" jenis="" warna="primary" label="Tambah" ikon="plus" />
		<x-elements.tables.table :datatable="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Kode</th>
					<th>Artikel</th>
					<th>Warna</th>
					<th>Ukuran</th>
					<th>Spesifikasi</th>
					<th>Detail Ukuran</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Kode</th>
					<th>Artikel</th>
					<th>Warna</th>
					<th>Ukuran</th>
					<th>Spesifikasi</th>
					<th>Detail Ukuran</th>
					<th>Tanggal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php $n = 1; @endphp
				@foreach( $dt as $k => $v)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $v->product }}</td>
						<td>{{ $v->kode }}</td>
						<td>{{ $v->artikel }}</td>
						<td>{{ $v->warna }}</td>
						<td>{{ $v->ukuran }}</td>
						<td>{{ $v->spesifikasi }}</td>
						<td>{{ $v->det_ukuran }}</td>
						<td>{{ $v->tgl }}</td>
						<td>
							<x-elements.tables.aksi :isedit="1" :ishapus="0" :isdetail="0" controller="product" :id="$v->id" />
						</td>
						</tr>
				@endforeach
			</tbody>
		</x-elements.tables.table>
	</x-layouts.content>
</x-layouts.template>