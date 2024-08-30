@if( $isedit )
<x-elements.buttons.button jenis :url="url($controller.'/edit/'.$id)" warna="warning" label="Edit" ikon="pencil" />
@endif

@if( $ishapus )
<x-elements.forms.form :url="url($controller.'/hapus/'.$id)" :isupload="false" >
    <x-elements.buttons.button url jenis="submit" warna="danger" label="Hapus" ikon="trash" />
</x-elements.forms.form>
@endif

@if( $isdetail )
<x-elements.buttons.button jenis :url="url($controller.'/detail/'.$id)" warna="primary" label="Detail" ikon="binoculars" />
@endif