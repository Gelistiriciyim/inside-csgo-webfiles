<?php
$string = 'denemeYazi';
$sifrelendi = gzcompress($string);
echo $sifrelendi;
echo '<br>';
$sifre_cozuldu = gzuncompress($sifrelendi);
echo $sifre_cozuldu; //denemeYazi
?>
