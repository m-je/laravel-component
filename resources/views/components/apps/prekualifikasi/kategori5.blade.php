@php $n = 1; @endphp
<x-elements.forms.form :url="url('prekualifikasi/simpan/5')" :isupload="true">
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                     5. Fitness For Duty:  Medical Suitability and Industrial Monitoring
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
                <td>5.1</td>
                <td colspan="5">
                    Layanan Kesehatan :
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah Perusahaan mempunyai proses untuk memberikan perawatan medis bagi pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.5'.$n++" />
                </td>
            </tr>
            <tr>
                <td>5.2</td>
                <td colspan="5">
                    Pemeriksaan Kesehatan:  
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah Perusahaan melaksanakan pemeriksaan kesehatan untuk para pekerja sebelum ditempatkan pada pekerjaan yang sesuai?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.5'.$n++" />
                </td>
            </tr>
            <tr>
                <td>5.3</td>
                <td colspan="5">
                    Penyalahgunaan bahan/ obat-obatan : 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Apakah Perusahaan mempunyai program pemantauan penyalahgunaan bahan/ obat-obatan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.5'.$n++" />
                </td>
            </tr>
            <tr>
                <td>5.4</td>
                <td colspan="5">
                    Industrial Hygiene (IH):
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan melaksanakan pemantauan Higiene Industri pada pekerja?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.5'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah Perusahaan mempunyai program perlindungan pendengaran melalui pemeriksaan tahunan (mis. Audiogram)?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.5'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.5'.$n++" />
                </td>
            </tr>
        </tbody>
    </x-elements.tables.table>
    <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
</x-elements.forms.form>