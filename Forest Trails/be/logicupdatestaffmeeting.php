<?php


include ('./db/connect.php');

if(empty($_POST['meetinglocation'])){
  $meetinglocation = 'MOKA Offices';
}else{$meetinglocation = $_POST['meetinglocation'];}

$meetingdate = $_POST['meetingdate'];

$starttime = date("g:i A", strtotime($_POST['starttime']));
$endtime = date("g:i A", strtotime($_POST['endtime']));
$meetingtime = $starttime." to ".$endtime;

$notes = $_POST['notes'];
$id = NULL;

  $sql = "INSERT INTO staffmeeting (entryid,meetinglocation,meetingdate,meetingtime,notes) VALUES (:entryid,:meetinglocation,:meetingdate,:meetingtime,:notes)";
  $query = $handler->prepare($sql);

  $query->execute(array(
    ':entryid' => $id,
    ':meetinglocation' => $meetinglocation,
    ':meetingdate' => $meetingdate,
    ':meetingtime' => $meetingtime,
    ':notes' => $notes
  ));
  $message = 'Staff Meeting Info Updated!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../index.php';</script>";

?>
