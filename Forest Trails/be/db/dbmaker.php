<?php
$step1 = getcwd();
$addr1 = ($_SERVER['SERVER_ADDR']);

if($addr1 == '10.24.3.15'){
  $pieces = explode('/', $step1);
} else {
  $pieces = explode('\\', $step1);
}
$residence = end($pieces);
if (isset($_SESSION)) {
  session_start();
  $userpin = $_SESSION['userpin'];
  if ($_SESSION['residence'] == $residence) {
    include('./be/db/connect.php');
    $query = $handler->query("SELECT * FROM access WHERE userpin=".$userpin);
    while($r = $query->fetch()) {
      $dbuserpin = $r['userpin'];
      if (($r['userpin'] == $_SESSION['userpin'])) {
        header("Location:./index.php");
        exit;
      }
    }
  }
}
ob_start();
session_start();
unset($_SESSION['userpin']);
unset($_SESSION['residence']);
session_destroy();
session_start();

$_SESSION['residence'] = $residence;
$step2 = str_replace(' ', '', $residence);
$step3 = strtolower($step2);
$dbname = $step3;
$dbpass = $dbname;
$filename = '../be/db/framework.sql';
$sql = file_get_contents($filename);

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
$handler = new PDO("mysql:host=$sn", "$un", "$pw");
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$handler->query("CREATE DATABASE IF NOT EXISTS $db");
$handler->query("use $db");
try {
  $handler->query("SELECT 1 FROM access LIMIT 1");
} catch (Exception $e) {
  $handler->exec($sql);
}
?>
