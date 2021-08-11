<?php
include '../core.php';
$zaman = $sbilgi["time_left"];

$time = $zaman - time();               // you have 1299446702 in time
$year = $time/31556926 % 12;  // to get year

if ($year >0){
    echo $year;
}else{
    echo "0";
}


