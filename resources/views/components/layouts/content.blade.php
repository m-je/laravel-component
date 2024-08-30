<div class="row">
    @if( session('psn_sukses') )
        <div class="alert alert-success">
            {{ session('psn_sukses') }}
        </div>
    @endif
    @if( session('psn_failed') )
        <div class="alert alert-danger">
            {{ session('psn_failed') }}
        </div>
    @endif
    @if( $isnotif )
    <div class="col-xs-12" id="notif">
        @if( $errors->any() )
            @foreach( $errors->all() as $error )
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    @endif
    <div class="col-xs-12">        
        <div class="box{{ $warnabox == '' ? '': '-'.$warnabox }}">
            <div class="box-header">
                <h3 class="box-title">
                    {{ $title }}
                </h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body">
                {{ $slot }}
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>