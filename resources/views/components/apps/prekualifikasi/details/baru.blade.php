<h2 class="text-center">{{ $judul }}</h2>
<x-elements.tables.table :datatable="false">
    <thead>
        <th>#</th>
        <th>Item</th>
        <th>Bukti</th>
        <th>Klarifikasi</th>
        <th>Klarifikasi<br>Kontraktor</th>
        <th>Review</th>
        <th>Score<br>Doc</th>
        <th>Score<br>Lap</th>
    </thead>
    <tbody>
        @php $n = 1; @endphp
        @foreach( $mdl as $k => $v)
        <tr>
            <td>{{ $n++ }}</td>
            <td>{{ $v->pertanyaan->nama }}</td>
            <!-- ini td jawaban yang dihapus -->
            <td>@php echo implode( $v->pertanyaan->lampiran()->toTampil($v->prekualifikasi->id) ); @endphp</td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( $v->klarifikasi_at )
                    {{ date('d F Y H:i:s',strtotime( $v->klarifikasi_at ) ) }}
                    <br>
                    {{ $v->klarifikasi_by }}
                @else
                    <div class="alert alert-danger">
                        Proses<br>Review
                    </div>
                @endif
            </td>
            <!-- ini td untuk klarifikasi kontraktor -->
            <td>
                @if( $v->klarified_at )
                    <p class="text-center text-danger">{{ $v->klarifikasi_komen }}</p>
                    @php echo implode("<br>", $v->pertanyaan->klarifikasi()->toTampil($v->prekualifikasi->id) ); @endphp
                @else
                    @if( $v->klarifikasi_at )
                        <p class="text-center text-danger">{{ $v->klarifikasi_komen }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="$v->pertanyaan->id" :nama="'klarifikasi.'.$v->pertanyaan->id" />
                        <x-elements.forms.form :url="url('review/klarified/'.$v->prekualifikasi->id)" :isupload="true">
                            <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @else
                        <div class="alert alert-danger">
                            Proses<br>Review
                        </div>
                    @endif
                @endif
            </td>
            <td>
                @if( $v->reviewed_at )
                    {{ date('d F Y H:i:s', strtotime( $v->reviewed_at)) }}
                    <br>
                    {{ $v->reviewed_by }}
                @else
                    <div class="alert alert-danger">
                        Proses<br>Review
                    </div>
                @endif
            </td>
            <td>{{ $v->score }}</td>
            <td>{{ $v->score_lap }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="6"><center>Sub Total </center></th>
            <th>{{ $scrdoc }}</th>
            <th>{{ $scrlap }}</th>
        </tr>
    </tfoot>
</x-elements.tables.table>