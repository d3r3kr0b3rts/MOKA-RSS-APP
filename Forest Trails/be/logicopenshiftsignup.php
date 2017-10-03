<?php
ob_start();
session_start();
include ('./db/connect.php');

$query = $handler->query("SELECT email FROM access WHERE role='supervisor' ");
while($r = $query->fetch()) {
  $to = $r['email'];
}

$from = 'admin@derekscottroberts.com';
$staff = $_SESSION['signature'];
$shiftdate = date("m-d-Y", strtotime($_POST['shiftdate']));
$starttime = date("g:i A", strtotime($_POST['starttime']));
$endtime = date("g:i A", strtotime($_POST['endtime']));
$shifttime = $starttime." to ".$endtime;
$notes = $_POST['notes'];
$subject = $shiftdate.' @ '.$shifttime;
$headers = array("From: $from",
    "Reply-To: $from",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
$message = $staff."\r\nWould like to work the open shift on\r\n".$shiftdate." at ".$shifttime."\r\n".$notes;
$message = wordwrap($message, 120, "\r\n");

if (mail($to, $subject, $message, $headers )) {
  $message = 'Your request has been sent to the home supervisor!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../schedule.php';</script>";
}else{
  $message = 'Error! Please submit your request again.';
  echo "<script type='text/javascript'>alert('$message');window.location = '../schedule.php';</script>";
};

?>
