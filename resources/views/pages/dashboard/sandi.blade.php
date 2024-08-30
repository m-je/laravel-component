@php
$br = [
['label' => '$title','url' => ''],
];
$temp_tit = "CSMS | ".$title;
@endphp
<x-layouts.template :title="$temp_tit" title1="HJS" title2="Apps" :breadcrumbs="$br" >
	<x-layouts.content :title="$title" :isnotif="$notif" warnabox="">
		<x-elements.forms.form :url="url('dashboard/simpan')" :isupload="false">
			<x-elements.forms.input :isgroup="true" nama="password" label="Password Lama" placeholder="Masukkan password lama" jenis="text" />
			<x-elements.forms.input :isgroup="true" nama="password_baru" label="Password Baru" placeholder="Masukkan password baru" jenis="text" />
			<x-elements.forms.input :isgroup="true" nama="password_konfirm" label="Ulangi Password Baru" placeholder="Masukkan ulang password baru" jenis="text" />
			<x-elements.buttons.button url jenis="submit" warna="primary" label="Simpan" ikon="plus" />
		</x-elements.forms.form>
	</x-layouts.content>
</x-layouts.template>