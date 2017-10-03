<?php
ob_start();
session_start();
$userpin = 'Peter Griffin';

foreach ($_COOKIE as $key => $value) {
  if(ctype_digit($key)) {
    $userpin = $key;
  }
}
if(isset($_COOKIE[$userpin])) {
  setcookie($userpin,"", time() - 3600, '/');
  setcookie('Residence',"", time() - 3600, '/');
  unset($_SESSION['userpin']);
  unset($_SESSION['residence']);
  header("Location:index.php");
  die();
}

session_destroy();
include('./be/head.php');
include('./be/bodyindex.php');
include('./be/foot.php');
?>
