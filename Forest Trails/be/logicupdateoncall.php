<?php
include ('./db/connect.php');

$oncallphone = $_POST['oncall'];

$query = $handler->query("SELECT * FROM access WHERE phone='$oncallphone'");
$r = $query->fetch(PDO::FETCH_ASSOC);
$fname = $r['fname'];
$lname = $r['lname'];
$oncallname = $fname.' '.$lname;

  $sql = "UPDATE oncall SET name = :name, phone = :phone";
  $query = $handler->prepare($sql);

  $query->execute(array(
    ':name' => $oncallname,
    ':phone' => $oncallphone,
  ));

  $message = 'On Call Staff Updated!';
  echo "<script type='text/javascript'>alert('$message');window.location = '../index.php';</script>";

?>
