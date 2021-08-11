<?php

try {
  $vt= new PDO("mysql:host=localhost;dbname=inside;charset=utf8","root","");
} catch (PDOException $e) {
  echo $e->getMessage();
}

date_default_timezone_set('Europe/Istanbul');
session_start();
ob_start();
error_reporting(0);

?>
