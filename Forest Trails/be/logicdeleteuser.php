<?php

include ('./db/connect.php');
$pin = htmlspecialchars(trim($_POST["userpin"]));

$sql = "DELETE FROM access WHERE userpin=:pin ";
$query = $handler->prepare($sql);

$query->execute(array(
  ':pin' => $pin,
));
$message = 'User DELETED!';
echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";?>
