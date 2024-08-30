<x-elements.tables.table :datatable="false">
    <tbody>
        <tr>
            <td>Nama Perusahaan </td>
            <td>{{ $mdl->nama_pt }}</td>
            <td>Email</td>
            <td>{{ $mdl->email }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $mdl->alamat_pt }}</td>
            <th>No HP</th>
            <td>{{ $mdl->no_hp }}</td>
        </tr>
        <tr>
            <th>Tahun Berdiri</th>
            <td>{{ $mdl->tahun_berdiri }}</td>
            <th>Dokumen</th>
            <td>{{ $mdl->file_aktanotaris }}</td>
        </tr>
        <tr>
            <th>Bidang Jasa</th>
            <td>{{ $mdl->bidang_jasa }}</td>
            <th>Jumlah Pekerja</th>
            <td>{{ $mdl->jumlah_pekerja }}</td>
        </tr>
        <tr>
            <th>Divisi di TPPI</th>
            <td>{{ $mdl->divisi_tppi }}</td>
        </tr>
        <tr>
            <th colspan="4"><center>Pimpinan Perusahaan</center></th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mdl->nama_pimpinan }}</td>
            <th>Email</th>
            <td>{{ $mdl->email_pimpinan }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>No HP</th>
            <td>{{ $mdl->no_hp_pimpinan }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>Fax</th>
            <td>{{ $mdl->fax_pimpinan }}</td>
        </tr>
        <tr>
            <th colspan="4"><center>Penyelia Perusahaan</center></th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mdl->nama_pic }}</td>
            <th>Email</th>
            <td>{{ $mdl->email_pic }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>No HP</th>
            <td>{{ $mdl->no_hp_pic }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>Fax</th>
            <td>{{ $mdl->fax_pic }}</td>
        </tr>
        <tr>
            <th colspan="4"><center>Perwakilan HSE Perusahaan</center></th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mdl->nama_pj_hse }}</td>
            <th>Email</th>
            <td>{{ $mdl->email_pj_hse }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>No HP</th>
            <td>{{ $mdl->no_hp_pj_hse }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>Fax</th>
            <td>{{ $mdl->fax_pj_hse }}</td>
        </tr>
        <tr>
            <th colspan="4"><center>Perwakilan Perusahaan Di Lapangan</center></th>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $mdl->nama_pj }}</td>
            <th>Email</th>
            <td>{{ $mdl->email_pj }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>No HP</th>
            <td>{{ $mdl->no_hp_pj }}</td>
        </tr>
        <tr>
            <th colspan="2"></th>
            <th>Fax</th>
            <td>{{ $mdl->fax_pj }}</td>
        </tr>
    </tbody>
</x-elements.tables.table>