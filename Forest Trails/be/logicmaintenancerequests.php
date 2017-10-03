<?php
ob_start();
session_start();
include ('./db/connect.php');
include('../includes/maintenancelist.php');
$id = NULL;
$requestnumber = NULL;
$requestdate = date('Y-m-d');
$requestby = $_SESSION['signature'];
$safetyconcern = 'Undefined';
$location = 'Undefined';
$object = 'Undefined';
$type = 'Undefined';
$note = $_POST['note'];
$senttosuper = 'yes';
foreach ($safetyconcerns as $key => $value) {
  if($_POST['safetyconcern'] == $key) {
    $safetyconcern = $key;
  }
}
foreach ($locations as $key => $value) {
  if($_POST['location'] == $key) {
    $location = $key;
  }
}
foreach ($objects as $key => $value) {
  if($_POST['object'] == $key) {
    $object = $key;
  }
}
foreach ($types as $key => $value) {
  if($_POST['type'] == $key) {
    $type = $key;
  }
}

$sql = "INSERT INTO maintenancerequests (requestnumber,requestdate,requestby,safetyconcern,location,object,type,note,senttosuper) VALUES (:requestnumber,:requestdate,:requestby,:safetyconcern,:location,:object,:type,:note,:senttosuper)";
$query = $handler->prepare($sql);
$query->execute(array(
  ':requestnumber' => $requestnumber,
  ':requestdate' => $requestdate,
  ':requestby' => $requestby,
  ':safetyconcern' => $safetyconcern,
  ':location' => $location,
  ':object' => $object,
  ':type' => $type,
  ':note' => $note,
  ':senttosuper' => $senttosuper
));
$subject = 'Maintenance Request';
$headers = array("From: $from",
    "Reply-To: $from",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
$note = wordwrap($note, 120, "\r\n");
$col = ': ';
$requestnumber = 'Not Assigned Yet';
$message =
<<<EX
A maintenance request has been submitted{$col}
Request Number{$col}{$requestnumber}
Request Date{$col}{$requestdate}
Submitted By{$col}{$requestby}
Safety Concern{$col}{$safetyconcern}
Location{$col}{$location}
Object{$col}{$object}
Type{$col}{$type}
Note{$col}
{$note}
EX;
include ('./db/connect.php');

$query = $handler->query("SELECT email FROM access WHERE role='supervisor' ");
while($r = $query->fetch()) {
  $to = $r['email'];
}

if (mail($to, $subject, $message, $headers )) {
  $message = 'Maintenance Request sent to Supervisor!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../maintenancerequests.php';</script>";
}else{
  $message = 'Error! Please submit your request again.';
  echo "<script type='text/javascript'>alert('$message');window.location = '../maintenancerequests.php';</script>";
};
?>
