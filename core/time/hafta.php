<?php
include '../core.php';
$zaman = $sbilgi["time_left"];

$time = $zaman - time();               // you have 1299446702 in time
$week = $time / 604800 % 52;  // to get weeks

if ($week >0){
    echo $week;
}else{
    echo "0";
}