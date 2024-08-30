@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS INJECT" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.buttons.button :url="url('jabatan/add')" jenis warna="primary" label="Tambah" ikon="plus" />
		<x-elements.tables.table :datatable="false">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@php $n = 1; @endphp
				@foreach( $dt as $k => $v)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $v->nama }}</td>
						<td>
							<x-elements.tables.aksi :isedit="1" :ishapus="1" :isdetail="0" controller="jabatan" :id="$v->id" />
						</td>
						</tr>
				@endforeach
			</tbody>
		</x-elements.tables.table>
	</x-layouts.content>
</x-layouts.template>