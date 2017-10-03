<?php

include ('./db/connect.php');
$scheduledisplay = $_POST["scheduledisplay"];
$scheduleedit = $_POST["scheduleedit"];

$sql = "UPDATE schedulelinks SET scheduledisplay = :scheduledisplay, scheduleedit = :scheduleedit WHERE colid='1' ";
$query = $handler->prepare($sql);

$query->execute(array(
  ':scheduledisplay' => $scheduledisplay,
  ':scheduleedit' => $scheduleedit,
));
$message = 'Links Updated!';
echo "<script type='text/javascript'>alert('$message');window.location = '../schedule.php';</script>";?>
