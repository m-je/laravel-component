<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
    <![endif]-->
            <style>
                .baru {
                  background-image: url({{ asset('/media/static/ando.JPG') }});
                  background-size: cover;
                  background-position: center;
                  background-repeat: no-repeat;
                }
                li > a {
                    background-color : white;
                }
            </style>
  </head>
  <body class="hold-transition login-page baru">

    <div class="login-box">
    <div id="notif"></div>
      <div class="login-logo">
        <a href=""><b>{{ $title1 }} </b>{{ $title2 }}</a>
      </div><!-- /.login-logo -->
      <ul class="nav nav-tabs" role="tablist">
        <li id="myTabs" role="presentation" class="active"><a href="#pegawai" aria-controls="pegawai" role="tab" data-toggle="tab">Admin</a>
        </li>
        <li id="myTabs" role="presentation" class=""><a href="#hse" aria-controls="hse" role="tab" data-toggle="tab">Operator</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="pegawai">
          <div class="login-box-body">
            <x-elements.forms.login id="pjb" />
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="hse">
          <div class="login-box-body">
            <x-elements.forms.login id="pjb" />
          </div>
        </div>
      </div>
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script>  
    $(function () {
        jQuery("a#pass_eye").click(function(){
            var ht = jQuery(this).parent().find("input");
            if( ht.attr('type') == "password")
            {
                ht.attr('type','text');
                ht.parent().find('a').html(
                    "<i class='glyphicon glyphicon-eye-close'></i> Sembunyikan "
                    );
            } else {
                ht.attr('type','password');
                ht.parent().find('a').html(
                    "<i class='glyphicon glyphicon-eye-open'></i> Tampilkan"
                    );
            }
        });
        jQuery("form.lupa").submit(function(){
            // lakukan proses reset password untuk akun yang lupa password
            var dt = jQuery(this).serialize();
            jQuery.ajax({
                url : "{{ url('login/lupa') }}",
                data: dt,
                method: "POST",
                cache: false,
                success: function(dts){
                    alert( dts.pesan);
                }
            });
            return false;
        });
      jQuery("form.formlogin").submit(function(){
        var url_1 = "";
        if(jQuery(this).attr("id")=="pjb")
        {
            url_1 = "{{ url($url.'pegawai') }}";
        } else {
            url_1 = "{{ url($url.'kontraktor') }}";
        }
        var msg = jQuery("div#notif");
        msg.html("");          
        msg.hide();
        msg.append(
            jQuery("<div></div>")
            .addClass("alert alert-warning alert-dismissable")
            .append(
                jQuery("<button></button>")
                .addClass("close")
                .attr({
                    type:"button",
                    'data-dismiss':"alert",
                    'aria-hidden':"true"
                })
            )
            .append("Proses pengecekan . . .")
        );
        msg.show(1000);
        var data_form = jQuery(this).serialize();
        setTimeout(function(){
            jQuery.ajax({
                url : url_1,
                data : data_form,
                method : "POST",
                cache : false,
                success:function(datas){
                    console.log( datas );
                    var dt = datas;
                    console.log( dt );
                    if(dt.status){
                        msg.html("");
                        msg.append(
                            jQuery("<div></div>")
                            .addClass("alert alert-success alert-dismissable")
                            .append(
                                jQuery("<button></button>")
                                .addClass("close")
                                .attr({
                                    type:"button",
                                    'data-dismiss':"alert",
                                    'aria-hidden':"true"
                                })
                            )
                            .append("Login Sukses")
                        );
                        setTimeout(function(){
                            location.href = dt.redirek;
                        },2000);
                    } else {
                        msg.html("");
                        msg.append(
                            jQuery("<div></div>")
                            .addClass("alert alert-danger alert-dismissable")
                            .append(
                                jQuery("<button></button>")
                                .addClass("close")
                                .attr({
                                    type:"button",
                                    'data-dismiss':"alert",
                                    'aria-hidden':"true"
                                })
                            )
                            .append("Maaf username/password anda salah")
                        );
                        jQuery("input[type=password]").val("");
                    }
                },
                fail : function( jqXHR, textStatus ) {
                    msg.html("");
                    msg.append(
                        jQuery("<div></div>")
                        .addClass("alert alert-warning alert-dismissable")
                        .append(
                            jQuery("<button></button>")
                            .addClass("close")
                            .attr({
                                type:"button",
                                'data-dismiss':"alert",
                                'aria-hidden':"true"
                            })
                        )
                        .append("Login gagal")
                    );
                },
                error:function(xhr){
                    msg.html("");
                    msg.append(
                        jQuery("<div></div>")
                        .addClass("alert alert-danger alert-dismissable")
                        .append(
                            jQuery("<button></button>")
                            .addClass("close")
                            .attr({
                                type:"button",
                                'data-dismiss':"alert",
                                'aria-hidden':"true"
                            })
                        )
                        .append("Error : "+xhr.status+" "+xhr.statusText)
                    );
                }
            });
            // jQuery("div#notif").delay(3000).hide(3000);
          },3000);
        return false;
      });
    });
    </script>
  </body>
</html>
