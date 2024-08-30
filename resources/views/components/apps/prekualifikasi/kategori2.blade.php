<x-elements.forms.form :url="url('prekualifikasi/simpan/2')" :isupload="true">
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="12">
            2. Apakah data yang tercantum di 2.1 – 2.10 tersedia untuk tiga (3) tahun terakhir? Jika ya, mohon lampirkan buktinya (salinan catatan HSE statistic data Perusahaan).
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            Berikan informasi data perusahaan keseluruhan selama 3 tahun terakhir
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.1 Jumlah jam kerja pegawai
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.1.1 Jelaskan dasar perhitungannya!
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="6">
            ini berisi list check 8hr  12ht    other
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>

    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.1.2 Jumlah kilometer kendaraan yang dipakai
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.2 Jumlah kematian karena kecelakaan kerja
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.1 Jumlah cedera yang mengakibatkan kehilangan hari kerja (lihat lampiran definisi)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.4 Jumlah cedera yang tercatat
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.5 Jumlah kecelakaan kendaraan bermotor (lihat lampiran definisi)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            Berikan informasi terkait dengan pekerjaan di PT PLN(Persero) (data 3 tahun terakhir)
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.6.1 Jumlah jam kerja pegawai yang bekerja di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.6.2 Jumlah kilometer kendaraan yang dipakai di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.7 Jumlah kematian karena kecelakaan kerja di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.8 Jumlah cedera yang mengakibatkan kehilangan hari kerja di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.9 Jumlah cedera yang tercatat di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="4">
            2.10 Jumlah kecelakaan kendaraan bermotor di wilayah PT PLN (Persero)
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-2" jenis="year" nama="tahun_2" placeholder="" :nilai="isset( $mdl['tahun_2'] )?$mdl['tahun_2']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris>
    <x-elements.grid.baris>
        <x-elements.grid.kolom :md="6">
            2.11 Apakah perusahaan pernah dituntut atau sedang dituntut pengadilan terkait dengan insiden K3LH atau tidak mematuhi ketentuan K3LH dalam 3 tahun terakhir
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')-1" jenis="year" nama="tahun_1" placeholder="" :nilai="isset( $mdl['tahun_1'] )?$mdl['tahun_1']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="true" :label="(int)date('Y')" jenis="year" nama="tahun_0" placeholder="" :nilai="isset( $mdl['tahun_0'] )?$mdl['tahun_0']:''" />
        </x-elements.grid.kolom>
        <x-elements.grid.kolom :md="2">
            <x-elements.forms.input :isgroup="false" label="" jenis="file" nama="lampiran" placeholder="" :nilai="isset( $mdl['lampiran'] )?$mdl['lampiran']:''" />
        </x-elements.grid.kolom>
    </x-elements.grid.baris> 
</x-elements.forms.form>