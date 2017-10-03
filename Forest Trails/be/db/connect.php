<?php

if (!isset($_SESSION['fname'])) {
  ob_start();
  session_start();
}

$step1 = $_SESSION['residence'];
$step2 = str_replace(' ', '', $step1);
$step3 = strtolower($step2);
$dbname = $step3;
$dbpass = $dbname;
$addr1 = ($_SERVER['SERVER_ADDR']);

if($addr1 == '10.24.3.15'){
  $sn = 'derekscottroberts.com.mysql';
  $un = 'derekscottroberts_com_'.$dbname;
  $pw = $dbpass;
  $db = 'derekscottroberts_com_'.$dbname;
} else {
  $sn = "127.0.0.1";
  $un = "root";
  $pw = "";
  $db = "$dbname";
}
//check connection
try {
  $handler = new PDO("mysql:host=$sn;dbname=$db", "$un", "$pw");
  $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo $e->getMessage();
  die();
}

$from = 'admin@derekscottroberts.com';

?>
