@php $n = 1; @endphp
<x-elements.tables.table :datatable="false">
    <thead>
        <tr>
            <th colspan="3">
                 4. Fitness For Duty:  Skills, Knowledge, and Training
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
            <td>4.1</td>
            <td colspan="8">
                Pekerja yang Baru Ditempatkan: 
                pekerja yang baru diterima atau ditugaskan pada tempat yang baru :
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Apakah perusahaan mempunyai dokumentasi tentang program untuk Pekerja yang Baru ditempatkan?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>4.2</td>
            <td colspan="7">
                Pelatihan Keahlian:
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah pekerja telah dilatih dengan keterampilan yang sesuai?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah untuk pekerjaan tertentu keterampilan tersebut dilengkapi dengan sertifikasi dari badan yang berwenang?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>4.3</td>
            <td colspan="7">
                Orientasi K3LH :
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah Perusahaan mempunyai program orientasi/ pengenalan K3LH untuk pekerja baru?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah program orientasi meliputi ketentuan yang tercantum dalam lampiran kontrak K3LH?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>4.4</td>
            <td colspan="7">
                Rincian Pelatihan K3LH :
            </td>
        </tr>
        <tr>
            <td>a.</td>
            <td>Apakah Perusahaan mengetahui tentang pelatihan K3LH yang ditentukan oleh Pemerintah dan juga PT TPPI untuk para pekerja?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>b.</td>
            <td>Apakah pekerja telah menerima pelatihan dan mengikuti pelatihan ulang tentang K3LH yang diperlukan?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>c.</td>
            <td>Apakah perusahaan memberikan pelatihan K3LH yang spesifik untuk penyelia baru dan pelatihan penyegaran untuk penyelia lama?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>d.</td>
            <td colspan="7">
                Apakah pelatihan meliputi praktek/ pelaksanaan kerja dan prosedur seperti:
            </td>
                        
        </tr>
        <tr>
            <td></td>
            <td>Praktik kerja selamat yang umum?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Penguncian dan Penandaan peralatan?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Prosedur izin kerja?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Perlindungan terhadap jatuh?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Alat pelindung diri?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Keselamatan kendaraan bermotor/ mengemudi?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Pentanahan peralatan listrik?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>           
        <tr>
            <td></td>
            <td>Pelaporan dan penyelidikan insiden?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Kesiapan dan tanggap darurat?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Perlindungan lingkungan?</td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td></td>
            <td>Identifikasi dan Pengendalian bahaya?
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
        <tr>
            <td>4.5</td>
            <td colspan="7">
                Daftar Pelatihan yang telah dilaksanakan:
            </td>
                        
        </tr>
        <tr>
            <td></td>
            <td>Apakah perusahaan mempunyai catatan pelatihan K3LH dan keahlian/ ketrampilan untuk masing-masing pekerja yang mencakup identitas pekerja (seperti: nama, nomor pegawai, Divisi / Fungsi/ bagian), tanggal pelatihan dan nama pelatih/instruktur
            </td>
            <td>
                @if( (int)$mdl['jwb_4'.$n] == 1) Yes
                @elseif( (int)$mdl['jwb_4'.$n] == 0) No
                @else NA
                @endif
            </td>
            
            <td>
                @php echo isset($mdl['lampiran_4'.$n])?implode('<br>', $mdl['lampiran_4'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_4'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_4'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_4'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('4'.($n-1))" :nama="'klarifikasi.4'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_4'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_4'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_4'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_4'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_4'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_4'.($n-1)] }}</td>
        </tr>
    </tbody>
</x-elements.tables.table>
