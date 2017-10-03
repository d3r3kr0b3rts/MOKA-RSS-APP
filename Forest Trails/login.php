<?php
include ('./be/db/dbmaker.php');

if(isset($_COOKIE)) {
  $query = $handler->query("SELECT * FROM loggedin");
  while($r = $query->fetch()) {
    foreach ($_COOKIE as $key => $value) {
      $userpin = $r['userpin'];
      $dbhash = $r['dbhash'];
      if(($userpin == $key && $dbhash == $value)){
        $query = $handler->query("SELECT * FROM access WHERE userpin=".$userpin);
        while($r = $query->fetch()) {
          $_SESSION['userpin'] = $r['userpin'];
          $_SESSION['role'] = $r['role'];
          $_SESSION['fname'] = $r['fname'];
          $_SESSION['minitial'] = $r['minitial'];
          $_SESSION['lname'] = $r['lname'];
          $_SESSION['phone'] = $r['phone'];
          $_SESSION['carrier'] = $r['carrier'];
          $_SESSION['signature'] = $r['fname'].' '.$r['minitial'].'. '.$r['lname'];
          $split1 = str_split($_SESSION['fname'], 1);
          $split2 = str_split($_SESSION['lname'], 1);
          $firstini = $split1['0'];
          $lastini = $split2['0'];
          $_SESSION['initials'] = $firstini.$_SESSION['minitial'].$lastini;
          if($_SESSION['role'] ==  'Maintenance') {
              header("Location:./maintenancerequests.php");
            }else{
            header("Location:./index.php");
          }
        }
      }
    }
  }
}

include ('./includes/clock.php');
include ('./includes/head.php');
include ('./includes/formlogin.php');
include ('./includes/foot.php');

?>
