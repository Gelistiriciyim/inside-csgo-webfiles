<?php

include '../core.php';
if (isset($_SESSION["login"]))
    $login  = $_SESSION["login"];
    $kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
    $sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();
$zaman = $sbilgi["time_left"];

$time = $zaman - time();             
$gun = $time / 86000 % 999999999999;

if ($gun >0){
    echo $gun;
}else{
    echo "0";
}
