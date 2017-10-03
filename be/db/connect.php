<?php

$addr1 = ($_SERVER['SERVER_ADDR']);
if($addr1 == '10.24.3.15'){
  $sn = 'derekscottroberts.com.mysql';
  $un = 'derekscottroberts_com_network';
  $pw = 'R1D3R1D3';
  $db = 'derekscottroberts_com_network';
} else {
  $sn = "127.0.0.1";
  $un = "root";
  $pw = "";
  $db = "network";
}
//check connection
try {
  $handler = new PDO("mysql:host=$sn;dbname=$db", "$un", "$pw");
  $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
  die();
}

?>
