<h2 class="text-center">{{ $judul }}</h2>
<x-elements.tables.table :datatable="false">
    <thead>
        <th>#</th>
        <th>Item</th>
        <!-- <th>Jawaban</th> -->
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
<!--             <td>{{ $v->jawab?'Ya':'Tidak' }}</td> -->
            <td>@php echo implode( $v->pertanyaan->lampiran()->toTampil($v->prekualifikasi->id) ); @endphp</td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( $v->klarifikasi_at )
                    {{ date('d F Y',strtotime( $v->klarifikasi_at ) ) }}
                    <br>
                    {{ $v->klarifikasi_by }}
                @else
                    @if( ! $v->reviewed_at )
                        <x-elements.forms.form :url="url('review/klarifikasi/'.$v->prekualifikasi->id)" :isupload="true">
                            <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                            <input type="text" name="komen" placeholder="Input klarifikasi" style="width:85%;" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="kirim" ikon="" />
                        </x-elements.forms.form>
                    @endif
                @endif
            </td>
            <!-- ini td untuk klarifikasi kontraktor -->
            <td>
                @if( $v->klarified_at )
                    <p class="text-center text-danger">{{ $v->klarifikasi_komen }}</p>
                    @php echo implode("<br>", $v->pertanyaan->klarifikasi()->toTampil($v->prekualifikasi->id) ); @endphp
                @else
                    @if( $v->klarifikasi_at )
                        <p class="text-center text-danger">
                            Menunggu<br>Klarifikasi
                        </p>
                    @endif
                @endif
            </td>
            <!-- ini td untuk review -->
            <td>
                @if( $v->reviewed_at )
                    {{ date('d F Y', strtotime( $v->reviewed_at)) }}
                    <br>
                    {{ $v->reviewed_by }}
                @else
                    @if( ! $v->klarified_at )
                        @if( $v->klarifikasi_at )
                            <p class="text-center text-danger">
                                Menunggu<br>Klarifikasi
                            </p>
                        @endif
                    @endif
                @endif
            </td>
            <!-- ini td untuk score -->
            <td>
                @if( $v->reviewed_at )
                    {{ $v->score }}
                @else
                    @if( ! $v->klarified_at )
                        @if( $v->klarifikasi_at )
                            <p class="text-center text-danger">
                                Menunggu<br>Klarifikasi
                            </p>
                        @else
                            <x-elements.forms.form :url="url('review/prekualifikasi/'.$v->prekualifikasi->id)" :isupload="true">
                                <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                                <input type="number" name="score" min="0" max="5" step="0.5" placeholder="Input Score" style="width:85%;" />
                                <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
                            </x-elements.forms.form>
                        @endif
                    @else
                        <x-elements.forms.form :url="url('review/prekualifikasi/'.$v->prekualifikasi->id)" :isupload="true">
                            <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                            <input type="number" name="score" min="0" max="5" step="0.5" placeholder="Input Score" style="width:85%;" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @endif
            </td>
            <!-- ini td untuk score lapangan -->
            <td>
                @if( $v->score_lap )
                    {{ $v->score_lap }}
                @else
                    @if( ! $v->klarified_at )
                        @if( $v->klarifikasi_at )
                            <p class="text-center text-danger">
                                Menunggu<br>Klarifikasi
                            </p>
                        @else
                            <x-elements.forms.form :url="url('review/prekualifikasi/'.$v->prekualifikasi->id)" :isupload="true">
                                <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                                <input type="number" name="score_lap" min="0" max="5" step="0.5" placeholder="Input Score" style="width:85%;" />
                                <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
                            </x-elements.forms.form>
                        @endif
                    @else
                        <x-elements.forms.form :url="url('review/prekualifikasi/'.$v->prekualifikasi->id)" :isupload="true">
                            <input type="hidden" name="jawaban" value="{{ $v->id }}" />
                            <input type="number" name="score" min="0" max="5" step="0.5" placeholder="Input Score" style="width:85%;" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @endif
            </td>
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