@php $n = 1; @endphp
<x-elements.forms.form :url="url('prekualifikasi/simpan/4')" :isupload="true">
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                     4. Fitness For Duty:  Skills, Knowledge, and Training
                </th>
                <th>Bukti Dokumen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2">
                    Key Element
                </td>
                <td>Yes</td>
                <td>No</td>
                <td>N/A</td>
                <td></td>
            </tr>
            <tr>
                <td>4.1</td>
                <td colspan="5">
                    Pekerja yang Baru Ditempatkan: 
                    pekerja yang baru diterima atau ditugaskan pada tempat yang baru :
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah perusahaan mempunyai dokumentasi tentang program untuk Pekerja yang Baru ditempatkan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>4.2</td>
                <td colspan="5">
                    Pelatihan Keahlian:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah pekerja telah dilatih dengan keterampilan yang sesuai?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah untuk pekerjaan tertentu keterampilan tersebut dilengkapi dengan sertifikasi dari badan yang berwenang?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>4.3</td>
                <td colspan="5">
                    Orientasi K3LH :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan mempunyai program orientasi/ pengenalan K3LH untuk pekerja baru?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah program orientasi meliputi ketentuan yang tercantum dalam lampiran kontrak K3LH?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>4.4</td>
                <td colspan="5">
                    Rincian Pelatihan K3LH :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan mengetahui tentang pelatihan K3LH yang ditentukan oleh Pemerintah dan juga PT TPPI untuk para pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah pekerja telah menerima pelatihan dan mengikuti pelatihan ulang tentang K3LH yang diperlukan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan memberikan pelatihan K3LH yang spesifik untuk penyelia baru dan pelatihan penyegaran untuk penyelia lama?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>d.</td>
                <td colspan="5">
                    Apakah pelatihan meliputi praktek/ pelaksanaan kerja dan prosedur seperti:
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Praktik kerja selamat yang umum?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Penguncian dan Penandaan peralatan?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Prosedur izin kerja?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Perlindungan terhadap jatuh?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Alat pelindung diri?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Keselamatan kendaraan bermotor/ mengemudi?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Pentanahan peralatan listrik?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>           
            <tr>
                <td></td>
                <td>Pelaporan dan penyelidikan insiden?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Kesiapan dan tanggap darurat?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Perlindungan lingkungan?</td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Identifikasi dan Pengendalian bahaya?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
            <tr>
                <td>4.5</td>
                <td colspan="5">
                    Daftar Pelatihan yang telah dilaksanakan:
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah perusahaan mempunyai catatan pelatihan K3LH dan keahlian/ ketrampilan untuk masing-masing pekerja yang mencakup identitas pekerja (seperti: nama, nomor pegawai, Divisi / Fungsi/ bagian), tanggal pelatihan dan nama pelatih/instruktur
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.4'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.4'.$n++" />
                </td>
            </tr>
        </tbody>
    </x-elements.tables.table>
    <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
</x-elements.forms.form>