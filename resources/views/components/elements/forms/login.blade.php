<form id="{{ $id }}" method="post" class="formlogin">
    {{ csrf_field() }}
  <div class="form-group has-feedback">
    <input type="email" autofocus name="username" class="form-control" placeholder="Username">
    <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" name="password" class="form-control" placeholder="Password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    <a class="btn" id="pass_eye">
        <i class="glyphicon glyphicon-eye-open"></i> Tampilkan
    </a>
  </div>
  <div class="form-group has-feedback">
    <a class="text-right" data-toggle="modal" data-target="#myModal">Lupa Password</a>
  </div>
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
    </div><!-- /.col -->
  </div>
</form>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Lupa Password</h4>
      </div>
      <div class="modal-body">
        <p>Masukkan alamat email anda untuk mendapatkan password baru</p>
        <form class="lupa" id="lupapassword" method="post">
          {{ csrf_field() }}
          <x-elements.forms.input jenis="email" label="E-Mail" :isgroup="true" placeholder="Masukkan alamat email terdaftar anda" nama="email" />
          <x-elements.buttons.button jenis="submit" warna="danger" label="Reset Password" ikon="" url="" />
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
