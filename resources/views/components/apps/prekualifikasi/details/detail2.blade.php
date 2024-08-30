@php $n=1; @endphp
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                    2. Health, Environmental and Safety Performance
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
                <td colspan="10">
                    Apakah data yang tercantum di 2.1 – 2.10 tersedia untuk tiga (3) tahun terakhir? Jika ya, mohon lampirkan buktinya (salinan catatan HSE statistic data Perusahaan)
                </td>
            </tr>
            <tr>
                <td colspan="2">Berikan data</td>
                <td>Tahun {{ (int)date('Y')-2 }}</td>
                <td>Tahun {{ (int)date('Y')-1 }}</td>
                <td>Tahun {{ (int)date('Y') }}</td>
                <td>Bukti Dokumen</td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td>2.1.1.a</td>
                <td>Jumlah jam kerja pegawai</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                    @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
                    @php $n++; @endphp
                </td>
                            <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
                <!-- ini td untuk review -->
                <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
                <!-- ini td untuk score -->
                <td>{{ $mdl['score_2'.($n-1)] }}</td>
            </tr>
            <tr>
                <td>2.1.1.b</td>
                <td>
                    Jelaskan dasar perhitungannya 
                </td>
                <td colspan="3">
                    {{ $mdl['jwb_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.1.2</td>
                <td>Jumlah kilometer kendaraan yang dipakai</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.2</td>
                <td>Jumlah kematian karena kecelakaan kerja</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.3</td>
                <td>Jumlah cedera yang mengakibatkan kehilangan hari kerja (lihat lampiran definisi).</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.4</td>
                <td>Jumlah cedera yang tercatat (lihat lampiran definisi).</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.5</td>
                <td>Jumlah kecelakaan kendaraan bermotor (lihat lampiran definisi).</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td colspan="6">
                    Berikan informasi terkait dengan pekerjaan di PT TPPI (data 3 tahun terakhir).
                </td>
            </tr>
            <tr>
                <td>2.6.1</td>
                <td>Jumlah jam kerja pegawai yang bekerja di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.6.2</td>
                <td>Jumlah kilometer kendaraan yang dipakai di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.7</td>
                <td>Jumlah kematian karena kecelakaan kerja di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.8</td>
                <td>Jumlah cedera yang mengakibatkan kehilangan hari kerja di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.9</td>
                <td>Jumlah cedera yang tercatat di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.10</td>
                <td>Jumlah kecelakaan kendaraan bermotor di wilayah PT TPPI.</td>
                <td>
                    {{  $mdl['tahun_2_2'.$n]  }}
                </td>
                <td>
                    {{  $mdl['tahun_1_2'.$n] }}
                </td>
                <td>
                    {{  $mdl['tahun_0_2'.$n] }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
            <tr>
                <td>2.11</td>
                <td colspan="2">
                    Apakah perusahaan pernah dituntut atau sedang dituntut pengadilan terkait dengan insiden K3LH atau tidak mematuhi ketentuan K3LH dalam tiga tahun terakhir? 
                </td>
                <td colspan="2">
                    {{ (int)$mdl['jwb_2'.$n] == 1 ? 'Yes' : 'No' }}
                </td>
                <td>
                @php echo isset($mdl['lampiran_2'.$n])?implode("<br>",$mdl['lampiran_2'.$n]):''; @endphp
@php $n++; @endphp
            </td>
                        <!-- ini td untuk klarifikasi -->
            <td>
                @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0)
                    @php echo $mdl['klarifikasi_2'.($n-1)]; @endphp
                @endif
            </td>
            <!-- ini td untuk klarifkasi kontraktor -->
            <td>
                @if( strlen( $mdl['klarified_2'.($n-1)] ) <= 0)
                    @if( strlen( $mdl['klarifikasi_2'.($n-1)] ) > 0 )
                        <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                        <x-elements.dropzone.v2 url="review/upload" urlhapus="review/hapusfile" :n="(int)('2'.($n-1))" :nama="'klarifikasi.2'.($n-1)" />
                        <x-elements.forms.form :url="url('review/klarified/'.$idpre)" :isupload="true">
                            <input type="hidden" name="kategori2" value="{{ $mdl['id_2'.($n-1)] }}" />
                            <x-elements.buttons.button jenis="submit" warna="primary" label="Selesai" ikon="pencil" />
                        </x-elements.forms.form>
                    @endif
                @else
                    <p class="text-danger">{{ $mdl['klarifikasi_komen_2'.($n-1)] }}</p>
                    @php echo isset($mdl['klarifikasi_lampiran_2'.($n-1)])?implode("<br>",$mdl['klarifikasi_lampiran_2'.($n-1)]):''; @endphp
                @endif
            </td>
            <td>@php echo $mdl['review_2'.($n-1)]; @endphp</td>
            <td>{{ $mdl['score_2'.($n-1)] }}</td>
        </tr>
        </tbody>
    </x-elements.tables.table>
    