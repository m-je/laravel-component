    <script type="text/javascript">
      jQuery(function(){
        // select2
        // jQuery(".select2").select2();
        jQuery("select[select2='true']").select2();
        jQuery("select[select2='true_multiple']").select2({
          multiple: true
        });
        // datatables
        jQuery("#example1 thead tr:first th").each(function(){
          var title = $(this).text();
          var inp = jQuery("<input type='text'>");
          inp.css("width","75%").attr("placeholder","Search "+title);
          inp.on("keyup click",function(){
            jQuery("#example1").DataTable()
            .column(jQuery(this).parent().index())
            .search(jQuery(this).val())
            .draw();
          });
          $(this).html(inp);
        });
        var tbl = jQuery("#example1").DataTable({
          // "scrollY": "300px",
          "scrollX": true,
          "scrollCollapse": true
        });
        //Date picker
        jQuery("input[date='time']").clockpicker({
          format: "HH:mm:ss",
          autoclose: true,
          placement: "bottom",
        });
        jQuery("input[date='date']").datepicker({
          // format: "dd-mm-yyyy",
          format: "yyyy-mm-dd",
          autoclose: true,
        });
        // year
        jQuery("input[date='year']").datepicker({
          format: "yyyy",
          minViewMode: "years",
          autoclose: true,
        });
        // Month and year
        jQuery("input[date='month_year']").datepicker({
          format: "MM yyyy",
          autoclose: true,
        });
        if(jQuery("textarea#editor1").length > 0)
        {
          CKEDITOR.replace( 'editor1',{
            toolbar:[
              { name: 'insert', items: [ 'Undo','Redo','Copy','Cut','Paste','Bold','Underline','Italic','links','NumberedList', 'BulletedList']}
            ]
          });
        }
      });
    </script>