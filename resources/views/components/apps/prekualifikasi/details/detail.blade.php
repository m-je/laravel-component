@php
use App\Helpers\Skor;
$s = new Skor( $mdl->score );
@endphp
<x-elements.grid.baris>
  <x-elements.grid.kolom :md="12">
    <form id="upgrade" action="{{ url('prekualifikasi/upgrade') }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="prekualifikasi" value="{{ $idpre }}" />
      <button type="submit" class="btn btn-success pull-right">Upgrade Sertifikat</button>
    </form>
  </x-elements.grid.kolom>
</x-elements.grid.baris>
<x-elements.grid.baris>
    <x-elements.grid.kolom :md="2">
        Tanggal Diajukan 
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="3">
        :{{ isset($mdl->ajukan_at)?date('d F Y H:i:s',strtotime($mdl->ajukan_at)):'' }}
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="2">
        Score 
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="3">
        :{{ isset($mdl->score)?floor($s->get()['nilai']):'-' }}%
    </x-elements.grid.kolom>
</x-elements.grid.baris>

<x-elements.grid.baris>
    <x-elements.grid.kolom :md="2">
        Tanggal Disetujui 
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="4">
        : {{ $mdl->disetujui_at?date('d F Y H:i:s',strtotime($mdl->disetujui_at)):'' }}
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="6">
        <center>Level Resiko</center>
    </x-elements.grid.kolom>
</x-elements.grid.baris>
<x-elements.grid.baris>
    <x-elements.grid.kolom :md="2">
        Status 
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="4">
        :@if( isset( $mdl->disetujui_at ) ) {{ strlen( $mdl->disetujui_at)>0?'Selesai ':'Proses ' }}
        @else Proses @endif Review
    </x-elements.grid.kolom>
    <x-elements.grid.kolom :md="6">
        <x-apps.prekualifikasi.level :nilai="$mdl->score" />
    </x-elements.grid.kolom>
</x-elements.grid.baris>
<x-elements.grid.baris>
    <x-elements.grid.kolom :md="12">
        @if( $s->get()['huruf'] != "-" )
        <x-elements.forms.form :url="url('sertifikat')" :isupload="false">
            <input type="hidden" name="id" value="{{ $mdl->id }}" />
            <x-elements.buttons.button jenis="submit" label="Unduh Sertifikat" ikon="download" warna="success" />
        </x-elements.forms.form>
        @endif
    </x-elements.grid.kolom>
</x-elements.grid.baris>

<div class="tab tab-vert">
    <!-- INi adalah list header tab -->
    <ul class="tab-legend">
      @foreach( $ktg as $k => $v)
      <li>{{ $v->nama }}</li>
      @endforeach
    </ul>
    <!-- Ini adalah list body dimana urutan header sama dengan body -->
    <ul class="tab-content"style="padding: 20px; ">
    @foreach( $ktg as $k => $v)
      <li><x-apps.prekualifikasi.details.baru :id="$v->id" :idpre="$idpre" />
    @endforeach
    </ul>
</div>
<script type="text/javascript" src="{{ asset('assets/plugins/tab/dist/tabModule.js') }}"></script>
<script>
  (function(){
    jQuery(function(){
      tabModule.init();
    });
  })(jQuery);
</script>