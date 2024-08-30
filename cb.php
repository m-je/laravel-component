<?php
$a = ['a' => 'zaki','b'=>'sarwani','c'=>1];
print_r( $a);
echo "<br>";
$a['email'] = $a['b'];
unset( $a['b'] );
print_r( $a );
