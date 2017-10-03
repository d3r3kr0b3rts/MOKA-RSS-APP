<?php
ob_start();
session_start();
include ('../../be/db/connect.php');

$eventlocation = $_POST['eventlocation'];
$eventdate = $_POST['eventdate'];
$starttime = date("g:i A", strtotime($_POST['starttime']));
$endtime = date("g:i A", strtotime($_POST['endtime']));
$eventtime = $starttime." to ".$endtime;
$notes = $_POST['notes'];
$id = NULL;
$author = $_SESSION['signature'].', '.$_SESSION['role'].' at '.$_SESSION['residence'];

  $sql = "INSERT INTO communityevents (entryid,eventlocation,eventdate,eventtime,notes,author) VALUES (:entryid,:eventlocation,:eventdate,:eventtime,:notes,:author)";
  $query = $handler->prepare($sql);

  $query->execute(array(
    ':entryid' => $id,
    ':eventlocation' => $eventlocation,
    ':eventdate' => $eventdate,
    ':eventtime' => $eventtime,
    ':notes' => $notes,
    ':author' => $author
  ));
  $message = 'Community Event Added!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../index.php';</script>";

?>
