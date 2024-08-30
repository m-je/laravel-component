@php $n = 1; @endphp
<x-elements.forms.form :url="url('prekualifikasi/simpan/6')" :isupload="true">
    <x-elements.tables.table :datatable="false">
        <thead>
            <tr>
                <th colspan="5">
                     6. Equipment and Materials
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
                <td>6.1</td>
                <td colspan="5">
                    Umum:
                </td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Apakah Perusahaan menyediakan dan memelihara MSDS (Lembar Keselamatan Bahan Berbahaya) untuk cat dan bahan kimia yang digunakan?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.6'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah Perusahaan mempunyai proses dan kebijakan mengenai keselamatan kendaraan bermotor?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="0" />
                </td>
                <td>
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.6'.$n++" />
                </td>
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
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.6'.$n++" />
                </td>
            </tr>
            <tr>
                <td>b.</td>
                <td>Apakah Perusahaan mengelola/ memelihara peralatan operasi dengan mematuhi ketentuan dari badan yang berwenang termasuk sertifikasi, kalibrasi, sistem perawatan, dll ?
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="1" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="0" />
                </td>
                <td>
                    <x-elements.forms.radio :nama="'jwb.6'.$n" label="" :nilai="-1" />
                </td>
                <td>
                    <x-elements.dropzone.v2 url="prekualifikasi/upload" urlhapus="prekualifikasi/hapusfile" :n="(int)('2'.$n)" :nama="'lampiran.6'.$n++" />
                </td>
            </tr>  
        </tbody>
    </x-elements.tables.table>
    <x-elements.buttons.button jenis="submit" warna="primary" label="Simpan" ikon="pencil" />
</x-elements.forms.form>