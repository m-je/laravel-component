<x-elements.forms.form :url="url( 'kontraktor/simpan' )" :isupload="true">
    <x-elements.forms.input :isgroup="true" label="Kode Perusahaan Kontraktor" jenis="text" nama="kode" placeholder="Masukkan kode perusahaan anda" :nilai="isset( $mdl['kode'] )?$mdl['kode']:''" />
    <x-elements.forms.input :isgroup="true" label="Nama Perusahaan Kontraktor" jenis="text" nama="nama_pt" placeholder="Masukkan nama perusahaan anda" :nilai="isset( $mdl['nama_pt'] )?$mdl['nama_pt']:''" />
    <x-elements.forms.input :isgroup="true" label="Alamat Perusahaan Kontraktor" jenis="text" nama="alamat_pt" placeholder="Masukkan alamat perusahaan anda" :nilai="isset( $mdl['alamat_pt'] )?$mdl['alamat_pt']:''" />
    <x-elements.forms.input :isgroup="true" label="Tahun Berdiri" jenis="year" nama="tahun_berdiri_pt" placeholder="Masukkan tahun berdiri perusahaan anda" :nilai="isset( $mdl['tahun_berdiri_pt'] )?$mdl['tahun_berdiri_pt']:''" />
    <x-elements.forms.input :isgroup="true" label="Dokumen Akta notaris<br>(PDF,JPEG,JPG)" jenis="file" nama="file_aktanotaris" placeholder="Upload Dokumen Aktanotaris" :nilai="isset( $mdl['file_aktanotaris'] )?$mdl['file_aktanotaris']:''" />
    @if( isset( $mdl['file_aktanotaris']))
    <x-elements.buttons.button :url="url('/kontraktor/download/'.$mdl['kode'])" label="Unduh Dokumen Akta Notaris" ikon="Download" warna="success" />
    @endif
    <x-elements.forms.input :isgroup="true" label="Bidang Jasa " jenis="text" nama="bidang_jasa" placeholder="Masukkan bidang jasa perusahaan anda" :nilai="isset( $mdl['bidang_jasa'] )?$mdl['bidang_jasa']:''" />
    <x-elements.forms.input :isgroup="true" label="Divisi Kontraktor di TPPI" jenis="text" nama="divisi_tppi" placeholder="Masukkan nama divisi kontraktor yang ada di TPPI" :nilai="isset( $mdl['divisi_tppi'] )?$mdl['divisi_tppi']:''" />
    <x-elements.forms.input :isgroup="true" label="Jumlah Pekerja " jenis="text" nama="jumlah_pekerja" placeholder="Masukkan jumlah pekerja" :nilai="isset( $mdl['jumlah_pekerja'] )?$mdl['jumlah_pekerja']:''" />
    <x-elements.forms.input :isgroup="true" label="Email Perusahaan Kontraktor" jenis="email" nama="email" placeholder="Masukkan email perusahaan anda" :nilai="isset( $mdl['email'] )?$mdl['email']:''" />
    <x-elements.forms.input :isgroup="true" label="No Telp/HP Perusahaan Kontraktor" jenis="tel" nama="no_hp" placeholder="Masukkan no telp/hp perusahaan anda" :nilai="isset( $mdl['no_hp'] )?$mdl['no_hp']:''" />
    <!-- <x-elements.forms.input :isgroup="true" label="Password Perusahaan Kontraktor" jenis="text" nama="password" placeholder="Masukkan password perusahaan anda" :nilai="isset( $mdl['password'] )?$mdl['password']:''" /> -->
    <x-elements.forms.input :isgroup="true" label="Nama Direktur / Manager Perusahaan Kontraktor" jenis="text" nama="nama_pimpinan" placeholder="Masukkan nama direktur / manager perusahaan anda" :nilai="isset( $mdl['nama_pimpinan'] )?$mdl['nama_pimpinan']:''" />
    <x-elements.forms.input :isgroup="true" label="Email Direktur / Manager Perusahaan Kontraktor" jenis="email" nama="email_pimpinan" placeholder="Masukkan email Direktur / Manager perusahaan anda" :nilai="isset( $mdl['email_pimpinan'] )?$mdl['email_pimpinan']:''" />
    <x-elements.forms.input :isgroup="true" label="No telp / hp Direktur / Manager Perusahaan Kontraktor" jenis="tel" nama="no_hp_pimpinan" placeholder="Masukkan no telp / hp Direktur / Manager perusahaan anda" :nilai="isset( $mdl['no_hp_pimpinan'] )?$mdl['no_hp_pimpinan']:''" />
    <input type="hidden" name="fax_pimpinan" value="-" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="nama_pic" placeholder="Masukkan nama penyelia perusahaan anda" :nilai="isset( $mdl['nama_pic'] )?$mdl['nama_pic']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="email_pic" placeholder="Masukkan email penyelia perusahaan anda" :nilai="isset( $mdl['email_pic'] )?$mdl['email_pic']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="no_hp_pic" placeholder="Masukkan no telp / hp perusahaan anda" :nilai="isset( $mdl['no_hp_pic'] )?$mdl['no_hp_pic']:''" />
    <input type="hidden" name="fax_pic" value="-" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="nama_pj_hse" placeholder="Masukkan nama perwakilan K3LH perusahaan anda" :nilai="isset( $mdl['nama_pj_hse'] )?$mdl['nama_pj_hse']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="email_pj_hse" placeholder="Masukkan email perwakilan K3LH perusahaan anda" :nilai="isset( $mdl['email_pj_hse'] )?$mdl['email_pj_hse']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="no_hp_pj_hse" placeholder="Masukkan no telp/hp Perwakilan K3LH perusahaan anda" :nilai="isset( $mdl['no_hp_pj_hse'] )?$mdl['no_hp_pj_hse']:''" />
    <input type="hidden" name="fax_pj_hse" value="-" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="nama_pj" placeholder="Masukkan nama perwakilan manajemen perusahaan anda" :nilai="isset( $mdl['nama_pj'] )?$mdl['nama_pj']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="email_pj" placeholder="Masukkan email perwakilan perusahaan anda" :nilai="isset( $mdl['email_pj'] )?$mdl['email_pj']:''" />
    <x-elements.forms.input :isgroup="false" label="" jenis="hidden" nama="no_hp_pj" placeholder="Masukkan no telp/hp perwakilan manajemen perusahaan anda" :nilai="isset( $mdl['no_hp_pj'] )?$mdl['no_hp_pj']:''" />
    <input type="hidden" name="fax_pj" value="-" />
    <x-elements.buttons.button jenis="submit" warna="primary" label="Update" ikon="pencil" />
</x-elements.forms.form>