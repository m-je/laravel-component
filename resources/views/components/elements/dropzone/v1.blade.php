
<div class="dropzone_{{ $n }}" nama="{{ $nama }}">
  <div class="dz-message">
    <button onclick="return false" class="btn btn-primary">
      Add File
    </button>
  </div>
</div>

<script type="text/javascript">
(function(){
Dropzone.autoDiscover = false;
  var foto_upload_{{ $n }} = new Dropzone(".dropzone_{{ $n }}",{
    url: "{{ url( $url ) }}",
    maxFilesize: 20,
    method:"post",
    acceptedFiles:".doc,.docx,.pdf,.txt,.xls,.xlsx,.rtf,.ppt,.pptx,.jpg,.jpeg",
    paramName:"userfile",
    dictInvalidFileType:"Jenis file ini tidak dizinkan",
     headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
    addRemoveLinks:true,
    init :
  });
  //Event ketika Memulai mengupload
  foto_upload_{{ $n }}.on("sending",function(a,b,c){
      a.nama = a.name.replace(" ","_");
      // a.klarifikasi = jQuery(foto_upload_{{ $n }}.element).attr("nama");
      a.nama_variable = "{{ $nama }}";
      c.append("nama",a.nama);
      c.append("nama_variable",a.nama_variable);
  });
  foto_upload_{{ $n }}.on("success",function(file,response_server){
    jQuery("div.dz-success-mark").hide();
    jQuery("div.dz-error-mark").hide();
    jQuery(".dz-image").hide();
    jQuery(".dz-remove").addClass("btn btn-danger");
    jQuery(".dz-remove").html("<i class='fa fa-trash'></i> Remove File");
    file.id_res_server = response_server;
    console.log(response_server);
  });
  foto_upload_{{ $n }}.on("error",function(file,response_server){
    alert('error :',response_server);
    console.log(response_server);
    jQuery("a.dz-remove").parent().remove();

  });
  foto_upload_{{ $n }}.on("removedfile",function(a){
    var id_res_server = a.id_res_server;
    $.ajax({
        type:"post",
        data:{id:id_res_server},
        url:"{{ url( $urlhapus ) }}",
        cache:false,
        dataType: 'json',
        headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        success: function(dt){
          console.log( dt );
          if(dt.status)
          {
            alert("berhasil dihapus");
          }
          console.log(dt);
          console.log("Foto terhapus");
        },
        error: function(){
            console.log("Error hapus file");
        }
    });
    return false;
  });

jQuery("script").html("");
})(jQuery);
</script>
