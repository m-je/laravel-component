@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;
@endphp
<x-layouts.template :title="$temp_tit" title1="CSMS TPPI" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.buttons.button :url="url('pegawai/add')" warna="primary" label="Tambah" ikon="plus" />
		<x-elements.tables.table :datatable="false">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th>Nama</th>
					<th>Email</th>
					<th>No HP</th>
					<th>Aksi</th>
					<th>Reset<br>Password</th>
				</tr>
			</thead>
			<tbody>
				@php $n = 1; @endphp
				@foreach( $dt as $k => $v)
					<tr>
						<td>{{ $n++ }}</td>
						<td>{{ $v->nip }}</td>
						<td>{{ $v->jabatan->nama }}</td>
						<td>{{ $v->nama }}</td>
						<td>{{ $v->email }}</td>
						<td>{{ $v->no_hp }}</td>
						<td>
							<x-elements.tables.aksi :isedit="1" :ishapus="0" :isdetail="0" controller="pegawai" :id="$v->id" />
						</td>
						<td>
							<x-elements.buttons.button :url="url('pegawai/reset/'.$v->id)" label="Reset" warna="danger" ikon="" />
						</td>
						</tr>
				@endforeach
			</tbody>
		</x-elements.tables.table>
	</x-layouts.content>
</x-layouts.template>