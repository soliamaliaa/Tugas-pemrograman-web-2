<?php
$warna = array("hijau", "kuning", "kelabu", "merah muda", "biru");


echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya<br>";

echo implode(", ", array_slice($warna, 0, -1)) . ", dan " . end($warna) . ".<br>";

echo "Meletus balon " . $warna[0] . " DOR!!!<br>";
echo "Hatiku sangat kacau.";
?>
