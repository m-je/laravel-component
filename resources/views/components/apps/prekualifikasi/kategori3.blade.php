@php $n = 1; @endphp
<x-elements.forms.form :url="url('prekualifikasi/simpan/3')" :isupload="true">
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                     3. Health, Environmental and Safety Management
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
                <td>3.1</td>
                <td colspan="5">
                    Apakah perusahaan Anda mempunyai :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Direktur atau Manajer Senior yang bertanggung jawab untuk K3LH?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah perusahaan mempunyai jabatan paruh-waktu/tetap yang bertanggung jawab untuk K3LH? (Jelaskan dengan bukti lampiran)
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.2</td>
                <td colspan="5">
                    Apakah perusahaan Anda mempunyai atau menyediakan kepada pekerja :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Asuransi kesehatan
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Pelatihan K3LH
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.3</td>
                <td colspan="5">
                    Sebutkan sasaran K3LH perusahaan Anda di bidang :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Keselamatan
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Kesehatan
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Lingkungan
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.4</td>
                <td colspan="5">
                    Apakah rencana/pedoman/panduan K3LH tertulis Anda mencakup :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Kebijakan komitmen manajemen dan harapan K3LH tersedia, ditandatangani direktur dan bertanggal?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Secara jelas menyebutkan tanggung jawab dan tanggung gugat K3LH bagi para manajer, penyelia dan pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Sumberdaya untuk memenuhi ketentuan-ketentuan K3LH?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Pengkajian secara berkala terhadap sistem manajemen dari proses-proses utama, prosedur, dan standard untuk memastikan kepatuhan dan perbaikan kinerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>e.</td>
                <td>Sistem pengawasan dan penyimpanan dokumen?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>f.</td>
                <td>Prosedur kerja selamat yang terkait secara spesifik terhadap pekerjaan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>g.</td>
                <td>Proses kelaikan untuk bekerja (berdasarkan ketrampilan, pengetahuan dan kesesuaian fisik/medis terhadap pekerjaan) yang didokumentasikan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>h.</td>
                <td>Program Inspeksi/ Audit?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>i.</td>
                <td>Identifikasi bahaya dan pengendalian risiko?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.5</td>
                <td colspan="5">
                    Keterlibatan Pekerja:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Penilaian berkala di bidang K3LH untuk seluruh pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah pekerja Anda berperan serta dalam kegiatan untuk memperbaiki kinerja K3LH?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah pekerja Anda diberi kewenangan untuk menghentikan pekerjaan dengan alasan keselamatan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Apakah masalah K3LH, hasil inspeksi dan investigasi dan pembelajaran dikomunikasikan kepada pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.6</td>
                <td colspan="5">
                    Apakah Perusahaan melaksanakan rapat K3LH berkala yang meliputi :
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Penyelia di lapangan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Subkontraktor?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah rapat “tool box” harian dilaksanakan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah rapat K3LH didokumentasikan dengan risalah dan daftar pesertanya?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah para manajer ikut serta dalam rapat keselamatan? (Nama jabatan?)
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.7</td>
                <td colspan="5">
                    Sub-Kontraktor:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan mempekerjakan subkontraktor?
                Jika Ya, berikan daftar perusahaan subkontraktor. Jika Tidak, pilih N/A untuk pertanyaan selanjutnya.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah ada proses manajemen keselamatan kontraktor?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan menilai kemampuan subkontraktor untuk mematuhi ketentuan K3LH sebagai bagian dari proses pemilihan? Berikan contoh atau kriterianya.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.8</td>
                <td colspan="5">
                    Inspeksi dan Audit:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan Anda mempunyai prosedur tertulis mengenai inspeksi/ audit?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah Perusahaan melakukan sendiri inspeksi dan audit serta mendokumentasikannya?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan melacak/mengukur penyelesaian langkah-langkah perbaikan dalam waktu yang telah ditentukan?Jelaskan cara pengabsahannya.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.9</td>
                <td colspan="5">
                    Identifikasi dan Pengendalian Bahaya:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah perusahaan mempunyai proses yang terdokumentasi untuk menilai/identifikasi bahaya kerja termasuk tugas/pekerjaan, tempat kerja, kondisi alam/lingkungan dan bahan/material?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah pelaksanaan kerja dan prosedur dibuat berdasarkan bahaya yang teridentifikasi untuk mengurangi risiko terhadap pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.10</td>
                <td colspan="5">
                    Laporan Kecelakaan, Penyelidikan Kecelakaan, dan Data Statistik :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan mempunyai proses tertulis untuk melaporkan, menyelidiki dan mencatat insiden?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah proses tersebut meliputi teknik analisis akar permasalahan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan mempunyai proses untuk melacak pelaksanaan rekomendasi dan langkah perbaikan dalam waktu yang telah ditentukan? Berikan cara verifikasinya.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Apakah perusahaan mempunyai proses untuk berbagi informasi tentang pelajaran yang didapat dari insiden dan kejadian hampir celaka?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.11</td>
                <td colspan="5">
                    Perilaku Berbasis Keselamatan:
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah perusahaan mempunyai proses “Perilaku Berbasis Keselamatan”?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.12</td>
                <td colspan="5">
                    Alat Pelindung Diri (APD) :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td colspan="5">
                    Apakah perusahaan mempunyai program tertulis mengenai APD (Alat Pelindung Diri) yang meliputi:
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Pemilihan APD
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Penggunaan APD
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Perawatan dan pemeliharaan APD
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah program tersebut dikomunikasikan ke seluruh pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan menyediakan APD yang diperlukan untuk pekerjaan yang dilakukan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.13</td>
                <td colspan="5">
                    Kepatuhan terhadap Regulasi dan Peraturan :
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah Perusahaan mengetahui peraturan pemerintah pusat dan lokal tentang K3LH berkaitan dengan bidang usaha perusahaan? Jika Ya, buat daftar peraturan tersebut dan lampirkan.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.14</td>
                <td colspan="5">
                    Pencegahan Polusi :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan mempunyai manajemen pengelolaan limbah?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah semua aliran limbah sudah teridentifikasi?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Apakah perusahaan mempunyai program pencegahan tumpahan/ limpahan limbah yang spesifik untuk tempat kerja tertentu?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>3.15</td>
                <td colspan="5">
                    Kesiapan dan Tanggap Darurat :
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah perusahaan mempunyai Rancangan Tanggap Darurat (RTD) yang spesifik untuk tempat kerja?
                    Perusahaan kecil mungkin tidak mempunyai rancangan tersendiri tetapi tetap harus mempunyai RTD untuk tempat kerja.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah perusahaan mendokumentasikan pelatihan dan uji coba tanggap darurat?
                    Perusahaan kecil tetap harus mendokumentasikan keikutsertaannya pada uji coba yang dilakukan oleh pemilik fasilitas.
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.3'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <input type="hidden" name="hd.3{{ $n }}" value="" />
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.3'.$n++" />
                </td>
            </tr>
        </tbody>
    </x-elements.tables.table>
    <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
</x-elements.forms.form>