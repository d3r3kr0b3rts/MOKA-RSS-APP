<?php
ob_start();
session_start();
$step1 = getcwd();
$addr1 = ($_SERVER['SERVER_ADDR']);
if($addr1 == '10.24.3.15'){
  $pieces = explode('/', $step1);
} else {
  $pieces = explode('\\', $step1);
}
$residence = end($pieces);

if ($_SESSION['residence'] != $residence) {
    setcookie($userpin,"", time() - 3600, '/');
    header("Location:./login.php");
    die();
}

if (!isset($_SESSION['userpin'])) {
    header("Location:./login.php");
    die();
}

if(isset($_SESSION['userpin'])) {
  $userpin = $_SESSION['userpin'];
  $checked = 'no';
  include('./be/db/connect.php');
  $query = $handler->query("SELECT userpin FROM access");
  while($r = $query->fetch()) {
    $dbuserpin = $r['userpin'];
    if (($dbuserpin == $_SESSION['userpin'])) {
      $checked = 'yes';
    }
  }
  if($checked == 'no') {
  setcookie($userpin,"", time() - 3600, '/');
  header("Location:./login.php");
  }
}

/*
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ((60*60)*) )) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time();
*/
?>
