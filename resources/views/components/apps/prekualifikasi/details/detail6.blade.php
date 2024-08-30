@php $n = 1; @endphp
<x-elements.tables.table :datatable="false">
    <thead>
        <tr>
            <th colspan="3">
                 6. Equipment and Materials
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
            <td colspan="5"></td>
        </tr>
        <tr>
            <td>6.1</td>
            <td colspan="7">
                Umum:
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah Perusahaan menyediakan dan memelihara MSDS (Lembar Keselamatan Bahan Berbahaya) untuk cat dan bahan kimia yang digunakan?
            </td>
            <td>
                @if( (int)$mdl['jwb_6'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_6'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_6'.$n])?implode('<br>', $mdl['lampiran_6'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_6'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('6'.($n-1))" :nama="'klarifikasi.6'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_6'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_6'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_6'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_6'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_6'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah Perusahaan mempunyai proses dan kebijakan mengenai keselamatan kendaraan bermotor?
            </td>
            <td>
                @if( (int)$mdl['jwb_6'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_6'.$n] == 0) No
                @else NA
                @endif
            </td>

            <td>
                @php echo isset($mdl['lampiran_6'.$n])?implode('<br>', $mdl['lampiran_6'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_6'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('6'.($n-1))" :nama="'klarifikasi.6'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_6'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_6'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_6'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_6'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_6'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>6.2</td>
            <td colspan="5">
                Peralatan:
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah Perusahaan melaksanakan, mendokumentasikan dan menindaklanjuti pemeriksaan/ inspeksi pada peralatan operasi (misalnya crane, forklift)?
            </td>
            <td>
                @if( (int)$mdl['jwb_6'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_6'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_6'.$n])?implode('<br>', $mdl['lampiran_6'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_6'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('6'.($n-1))" :nama="'klarifikasi.6'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_6'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_6'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_6'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_6'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_6'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah Perusahaan mengelola/ memelihara peralatan operasi dengan mematuhi ketentuan dari badan yang berwenang termasuk sertifikasi, kalibrasi, sistem perawatan, dll ?
            </td>
            <td>
                @if( (int)$mdl['jwb_6'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_6'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_6'.$n])?implode('<br>', $mdl['lampiran_6'.$n]):''; @endphp
                @php $n++; @endphp
            </td>
            <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_6'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('6'.($n-1))" :nama="'klarifikasi.6'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_6'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_6'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_6'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_6'.($n-1)]):''; @endphp
                @endif   
            </td>
            <td>@php echo $mdl['review_6'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_6'.($n-1)] }}</td>
        </tr>  
    </tbody>
</x-elements.tables.table>
