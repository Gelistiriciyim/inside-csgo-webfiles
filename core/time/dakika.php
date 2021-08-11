<?php

include'../core.php' ;
if (isset($_SESSION["login"]))
    $login  = $_SESSION["login"];
$kbilgi= $vt->query("select * from userdatabase where login='$login'")->fetch();
$sbilgi= $vt->query("select * from subscriptions where login='$login'")->fetch();
$zaman = $sbilgi["time_left"];

$time = $zaman - time();               // you have 1299446702 in time
$year = $time/31556926 % 12;  // to get year
$week = $time / 604800 % 52;  // to get weeks
$gun = $time / 86000 % 365;
$hour = $time / 3600 % 24;    // to get hours
$minute = $time / 60 % 60;    // to get minutes
$second = $time % 60;         // to get seconds

if ($hour >0){
    echo $minute;
}else{
    echo "0";
}