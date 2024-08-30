<h2 class="text-center">{{ $judul }}</h2>

    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th>#</th>
                <th>Item</th>
                <th>Ya</th>
                <th>Bukti Dokumen</th>
            </tr>
        </thead>
        <tbody>
            @php $n=1; @endphp
        @foreach( $mdl as $k => $v)
            <tr>
                <td>{{ $n++ }}</td>
                <td>{{ $v->nama }}</td>
                <td>
                    <input type="hidden" name="jwb_{{ $v->id }}" value="0" />
                    <x-elements.forms.checkbox :nama="'jwb_'.$v->id" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="$v->id" :nama="'lampiran.'.$v->id" />
                </td>
            </tr>
        @endforeach
        </tbody>
    </x-elements.tables.table>
    
