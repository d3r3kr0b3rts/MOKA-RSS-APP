<?php
include ('./db/connect.php');
$userpin = $_POST['userpin'];
$password = $_POST['password'];
$residence = $_SESSION['residence'];

$query = $handler->query("SELECT * FROM access WHERE userpin=".$userpin);
while($r = $query->fetch()) {
  $dbuserpin = $r['userpin'];
  $dbpassword = $r['password'];

  if (!password_verify($password, $dbpassword) || $userpin != $dbuserpin)  {
    $message = "Incorrect Employee ID or Password";
    echo "<script type='text/javascript'>alert('$message');window.location = '../login.php';</script>";
  } elseif(password_verify($password, $dbpassword) && $userpin == $dbuserpin){
//set stay logged in cookie
    if(isset($_POST['staylogged'])) {
      $shuffle = str_shuffle($_POST["password"]);
      $dbhash = password_hash($shuffle, PASSWORD_DEFAULT);
      $residence = password_hash($residence, PASSWORD_DEFAULT);
      setcookie($userpin,$dbhash, time() + (1 * 365 * 24 * 60 * 60), '/');
      setcookie('Residence',$residence, time() + (1 * 365 * 24 * 60 * 60), '/');
      $sql = "INSERT INTO loggedin (colid,userpin,dbhash) VALUES (:colid,:userpin,:dbhash)";
      $query = $handler->prepare($sql);
      $query->execute(array(
        ':colid' => NULL,
        ':userpin' => $userpin,
        ':dbhash' => $dbhash,
      ));
    }
    if (!isset($_SESSION)) {
      ob_start();
      session_start();
    }
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
        header("Location:../maintenancerequests.php");
      }else{
      header("Location:../index.php");
    }
  }
}
$message = "User Not Found";
echo "<script type='text/javascript'>alert('$message');window.location = '../login.php';</script>";

?>
