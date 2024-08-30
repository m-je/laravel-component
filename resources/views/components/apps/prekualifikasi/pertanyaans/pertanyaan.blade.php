<x-elements.forms.form :url="url('prekualifikasi/simpan/0')" :isupload="true">
<div class="tab tab-vert">
    <!-- INi adalah list header tab -->
    <ul class="tab-legend">
      @foreach( $mdl as $k => $v)
        <li>{{ $v->nama }}</li>
      @endforeach
    </ul>
    <!-- Ini adalah list body dimana urutan header sama dengan body -->
    <ul class="tab-content"style="padding: 20px; ">
    @foreach( $mdl as $k => $v)
      <li>
        <x-apps.prekualifikasi.pertanyaans.content :id="$v->id" :judul="$v->nama" />
      </li>
    @endforeach
    </ul>
</div>
  <button type="submit" class="btn btn-primary pull-right">Simpan Prekualifikasi</button>
</x-elements.forms.form>
<script type="text/javascript" src="{{ asset('assets/plugins/tab/dist/tabModule.js') }}"></script>
<script>
  (function(){
    jQuery(function(){
      tabModule.init();
    });
  })(jQuery);
</script>