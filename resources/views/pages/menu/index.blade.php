@php
$br = [
['label' => $title,'url' => ''],
];
$temp_tit = "CSMS | ".$title;
$url = url('menu/add');
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.buttons.button :url="url('menu/add')" jenis warna="primary" label="Tambah" ikon="plus" />
		<x-elements.tables.table :datatable="false">
			<thead>
				<tr>
					<th>No</th>
					<th>Menu Induk</th>
					<th>Nama</th>
					<th>Link</th>
					<th>Ikon</th>
					<th>Urutan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $data as $k => $dt )
				<tr>
					<td>{{ $k+1 }}</td>
					<td>{{ $dt->parent }}</td>
					<td>{{ $dt->nama }}</td>
					<td>{{ $dt->link }}</td>
					<td><i class="{{ $dt->ikon }}"></i></td>
					<td>{{ $dt->urutan }}</td>
					<td>
						<x-elements.tables.aksi :isedit="1" :ishapus="0" :isdetail="0" controller="menu" :id="$dt->id" />
					</td>
				</tr>
				@endforeach
			</tbody>
		</x-elements.tables.table>
	</x-layouts.content>
</x-layouts.template>