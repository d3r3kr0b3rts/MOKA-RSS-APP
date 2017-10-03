<?php
ob_start();
session_start();
include ('./db/connect.php');
include ('../includes/residence.php');
include ('../includes/staffroles.php');
include ('../includes/mobilecarriergateways.php');
include ('./db/fetchuserstoalert.php');

$shiftdate = date("l, m-d-Y", strtotime($_POST['shiftdate']));
$starttime = date("g:i A", strtotime($_POST['starttime']));
$endtime = date("g:i A", strtotime($_POST['endtime']));
$shifttime = $starttime." to ".$endtime;
$notes = "\r\n".$_POST['notes'];
$subject = $shiftdate.' @ '.$shifttime;
$headers = array("From: $from",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
$message = "\r\nAttn:\r\nThere is an upcoming open shift @\r\nResidence: $residence\r\nOn: $shiftdate\r\nFrom: $shifttime";
$i = 0;

foreach ($_POST as $key => $value) {
  foreach ($tousegateway as $step1) {
    foreach ($step1 as $recipient => $to) {
      if(str_replace("_", " ", $key) == $recipient){
        if(mail($to, '', $message, $headers)){
          $i++;
          if(!empty($notes)) {
            mail($to,'', $notes, $headers);
          }
        }
      }
    }
  }
  $message = 'The Open Shift Alert has been sent to '.$i.' staff!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../schedule.php';</script>";
}

?>
