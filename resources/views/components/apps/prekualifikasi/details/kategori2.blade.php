@php $n=1; @endphp
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                    2. Health, Environmental and Safety Performance
                </th>
                <th>Bukti Dokumen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6">
                    Apakah data yang tercantum di 2.1 – 2.10 tersedia untuk tiga (3) tahun terakhir? Jika ya, mohon lampirkan buktinya (salinan catatan HSE statistic data Perusahaan)
                </td>
            </tr>
            <tr>
                <td colspan="2">Berikan data</td>
                <td>Tahun {{ (int)date('Y')-2 }}</td>
                <td>Tahun {{ (int)date('Y')-1 }}</td>
                <td>Tahun {{ (int)date('Y') }}</td>
                <td>Bukti Dokumen</td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
            </tr>
            <tr>
                <td>2.1.1.b</td>
                <td>
                    Jelaskan dasar perhitungannya 
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb_2'.$n" label=" 8 Hr.Shifts" nilai="8 Hr.Shifts" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb_2'.$n" label=" 12 Hr.Shifts" nilai="12 Hr.Shifts" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb_2'.$n" label=" Other" nilai="Other" />
                </td>
                <td>
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
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
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
            </tr>
            <tr>
                <td>2.11</td>
                <td colspan="2">
                    Apakah perusahaan pernah dituntut atau sedang dituntut pengadilan terkait dengan insiden K3LH atau tidak mematuhi ketentuan K3LH dalam tiga tahun terakhir? 
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb_2'.$n" label=" Yes" nilai="1" />
                </td>
                <td>
                     <x-elements.forms.radio :nama="'jwb_2'.$n" label=" No" nilai="0" />
                </td>
                <td>
                    {{  $mdl['lampiran_2'.$n++] }}
                </td>
            </tr>
        </tbody>
    </x-elements.tables.table>
    <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />