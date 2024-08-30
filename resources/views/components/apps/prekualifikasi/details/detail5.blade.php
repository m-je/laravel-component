@php $n = 1; @endphp
<x-elements.tables.table :datatable="false">
    <thead>
        <tr>
            <th colspan="3">
                 5. Fitness For Duty:  Medical Suitability and Industrial Monitoring
            </th>
            <th>Bukti Dokumen</th>
            <th>Klarifikasi</th>
            <th>Klarifikasi<br>Kontraktor</th>
            <th>Review</th>
            <th>Score</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2">
                Key Element
            </td>
            <td>Jawaban</td>
            <td colspan="7"></td>
        </tr>
        <tr>
            <td>5.1</td>
            <td colspan="8">
                Layanan Kesehatan :
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Apakah Perusahaan mempunyai proses untuk memberikan perawatan medis bagi pekerja?
            </td>
            <td>
                @if( (int)$mdl['jwb_5'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_5'.$n] == 0) No
                @else NA
                @endif
            </td>
            
                        <td>
                @php echo isset($mdl['lampiran_5'.$n])?implode('<br>', $mdl['lampiran_5'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_5'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_5'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('5'.($n-1))" :nama="'klarifikasi.5'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_5'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_5'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_5'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_5'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_5'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>5.2</td>
            <td colspan="7">
                Pemeriksaan Kesehatan:  
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Apakah Perusahaan melaksanakan pemeriksaan kesehatan untuk para pekerja sebelum ditempatkan pada pekerjaan yang sesuai?
            </td>
            <td>
                @if( (int)$mdl['jwb_5'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_5'.$n] == 0) No
                @else NA
                @endif
            </td>

                        <td>
                @php echo isset($mdl['lampiran_5'.$n])?implode('<br>', $mdl['lampiran_5'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_5'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_5'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('5'.($n-1))" :nama="'klarifikasi.5'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_5'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_5'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_5'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_5'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_5'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>5.3</td>
            <td colspan="7">
                Penyalahgunaan bahan/ obat-obatan : 
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Apakah Perusahaan mempunyai program pemantauan penyalahgunaan bahan/ obat-obatan?
            </td>
            <td>
                @if( (int)$mdl['jwb_5'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_5'.$n] == 0) No
                @else NA
                @endif
            </td>

                        <td>
                @php echo isset($mdl['lampiran_5'.$n])?implode('<br>', $mdl['lampiran_5'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_5'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_5'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('5'.($n-1))" :nama="'klarifikasi.5'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_5'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_5'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_5'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_5'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_5'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>5.4</td>
            <td colspan="7">
                Industrial Hygiene (IH):
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah Perusahaan melaksanakan pemantauan Higiene Industri pada pekerja?
            </td>
            <td>
                @if( (int)$mdl['jwb_5'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_5'.$n] == 0) No
                @else NA
                @endif
            </td>

                        <td>
                @php echo isset($mdl['lampiran_5'.$n])?implode('<br>', $mdl['lampiran_5'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_5'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_5'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('5'.($n-1))" :nama="'klarifikasi.5'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_5'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_5'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_5'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_5'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_5'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah Perusahaan mempunyai program perlindungan pendengaran melalui pemeriksaan tahunan (mis. Audiogram)?
            </td>
            <td>
                @if( (int)$mdl['jwb_5'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_5'.$n] == 0) No
                @else NA
                @endif
            </td>

                        <td>
                @php echo isset($mdl['lampiran_5'.$n])?implode('<br>', $mdl['lampiran_5'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_5'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_5'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_5'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('5'.($n-1))" :nama="'klarifikasi.5'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_5'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_5'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_5'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_5'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_5'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_5'.($n-1)] }}</td>
        </tr>
    </tbody>
</x-elements.tables.table>
