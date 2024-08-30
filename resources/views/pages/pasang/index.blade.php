@php
$br = [
['label' => $title,'url' => ''],
];
$temp_tit = "HJS | ".$title;
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.buttons.button :url="url('pasang/add')" jenis="" warna="primary" label="Tambah" ikon="plus" />
		<x-elements.tables.table :datatable="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Kode</th>
					<th>Artikel</th>
					<th>Warna</th>
					<th>Ukuran</th>
					<th>Aksi</th>
				</tr>
				<tr>
					<th>No</th>
					<th>Product</th>
					<th>Kode</th>
					<th>Artikel</th>
					<th>Warna</th>
					<th>Ukuran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php $n = 1; @endphp
				@foreach( $dt as $k => $v)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $v->product->product }}</td>
						<td>{{ $v->kode }}</td>
						<td>{{ $v->product->artikel }}</td>
						<td>{{ $v->product->warna }}</td>
						<td>{{ $v->ukuran }}</td>
						<td>
							<x-elements.tables.aksi :isedit="1" :ishapus="0" :isdetail="0" controller="product" :id="$v->id" />
						</td>
						</tr>
				@endforeach
			</tbody>
		</x-elements.tables.table>
	</x-layouts.content>
</x-layouts.template>