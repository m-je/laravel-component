            <!-- Td untuk klarifikasi di bawah -->
            <td>
                @if( isset( $mdl['review_3'.($n-1)] ) )
                    @if( strlen( $mdl['review_6'.($n-1)] ) > 0 )
                        @if( isset( $mdl['klarifikasi_3'.($n-1)] ) )
                            @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                                @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                                <x-elements.buttons.button :url="url('review/klarifikasi/'.$mdl['id_6'.($n-1)])" warna="primary" label="Edit" ikon="pencil" />
                            @endif
                        @endif
                    @else
                        @if( strlen( $mdl['klarifikasi_6'.($n-1)] ) > 0)
                            @php echo $mdl['klarifikasi_6'.($n-1)]; @endphp
                            <x-elements.buttons.button :url="url('review/klarifikasi/'.$mdl['id_6'.($n-1)])" warna="primary" label="Edit" ikon="pencil" />
                        @else
                            <x-elements.forms.form :url="url('review/klarifikasi/'.$idpre)" :isupload="true">
                                <input type="hidden" name="kategori2" value="{{ $mdl['id_6'.($n-1)] }}" />
                                <input type="text" name="komen" placeholder="Input klarifikasi" />
                                <x-elements.buttons.button jenis="submit" warna="primary" label="Klarifikasi" ikon="pencil" />
                            </x-elements.forms.form>
                        @endif
                    @endif
                @endif
            </td>