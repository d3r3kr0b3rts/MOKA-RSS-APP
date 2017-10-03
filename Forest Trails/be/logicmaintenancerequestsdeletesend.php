<?php
ob_start();
session_start();
include ('./db/connect.php');
include ('../includes/maintenancelist.php');
echo $_POST['requestnumber'];
echo $_POST['submit'];
$requestnumber = $_POST['requestnumber'];
if($_POST['submit'] == 'delete') {
  $sql = ('DELETE FROM maintenancerequests WHERE requestnumber='.$requestnumber);
  $query = $handler->prepare($sql);
  $query->exec($sql);
  $message = 'Maintenance Request Deleted!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../maintenancerequests.php';</script>";
}
?>
