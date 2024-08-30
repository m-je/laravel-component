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
      <li><x-apps.prekualifikasi.reviews.baru :id="$v->id" :idpre="$idpre" />
    @endforeach
    </ul>
</div>
@if( ! $mdl->disetujui_at )
<form id="reviewed" action="{{ url('review/reviewed/'.$idpre) }}" method="POST">
  {{ csrf_field() }}
  <div class="pull-right">
    <x-elements.buttons.button jenis="submit" label="Selesai Review" warna="danger" ikon="check-circle" />
  </div>
</form>
@endif
<script type="text/javascript" src="{{ asset('assets/plugins/tab/dist/tabModule.js') }}"></script>
<script>
  (function(){
    jQuery(function(){
      tabModule.init();

      jQuery("form#reviewed").submit(function(){
        var y = confirm("Apakah anda yakin sudah mereview dan memberi nilai semua pertanyaan prekualifikasi?");
        if( y ) return true;
        else return false;
      });
    });
  })(jQuery);
</script>