<?php
if(strlen($_POST['password']) < 8) {
  $message = 'Password requirements not met, user not added';
  echo "<script type='text/javascript'>alert('$message');window.location = '../updateuser.php';</script>";
  die();
}

include ('./db/connect.php');
$pin = htmlspecialchars(trim($_POST["userpin"]));
$pass = htmlspecialchars(trim(password_hash($_POST["password"], PASSWORD_DEFAULT)));

$sql = "UPDATE access SET password = :password WHERE userpin=:pin ";
$query = $handler->prepare($sql);

$query->execute(array(
  ':pin' => $pin,
  ':password' => $pass,
));
$message = 'User Password Updated!';
echo "<script type='text/javascript'>alert('$message');window.location = '../updateuser.php';</script>";?>
