@php
$klas = "";
$lbl = "";
if( $nilai >= 15 && $nilai < 31 )
{
    $klas = "danger";
    $lbl = "Resiko Rendah ";
} else if( $nilai >=31 && $nilai < 56 ) {
    $klas = "warning";
    $lbl = "Resiko Menengah";
} else if( $nilai >= 56 ) {
    $klas = "success";
    $lbl = "Resiko Tinggi";
} else {
    $klas = "default";
    $lbl = "-";
}

@endphp
<p class="text-center text-{{ $hsl['warna'] }}">
    {{ $hsl['huruf'] }} 
    </p>