<x-elements.tables.table :datatable="false">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Kontraktor</th>
            <th>Email / No HP Kontraktor</th>
            <th>Nama Pimpinan</th>
            <th>Email/No Hp Pimpinan</th>
        </tr>
    </thead>
    <tbody>
        @php $n = 1; @endphp
        @foreach( $dt as $k => $v)
        <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $v->kode }}</td>
            <td>{{ $v->nama_pt }}</td>
            <td>{{ $v->email.' || '.$v->no_hp }}</td>
            <td>{{ $v->nama_pimpinan }}</td>
            <td>{{ $v->email_pimpinan.' || '.$v->no_hp }}</td>
        </tr>
        @endforeach
    </tbody>
</x-elements.tables.table>