<?php
if(strlen($_POST['minitial']) != 1) {
  $message = 'Middle Initial can only be 1 letter, no punctuation, user not added';
  echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";
  die();
}

include "./db/connect.php";
$id = NULL;
$pin = htmlspecialchars(trim($_POST["userpin"]));
$role = htmlspecialchars(trim($_POST["role"]));
$first = htmlspecialchars(trim($_POST["fname"]));
$middle = htmlspecialchars(trim($_POST["minitial"]));
$last = htmlspecialchars(trim($_POST["lname"]));
$email = htmlspecialchars(trim($_POST["email"]));
$phone = htmlspecialchars(trim($_POST["phone"]));
$carrier = $_POST["carrier"];

$sql = "UPDATE access SET userpin = :pin, role = :role, fname = :first, minitial = :middle, lname = :last, email = :email, phone = :phone, carrier = :carrier WHERE userpin=:pin ";
$query = $handler->prepare($sql);

$query->execute(array(
  ':pin' => $pin,
  ':role' => $role,
  ':first' => $first,
  ':middle'=> $middle,
  ':last' => $last,
  ':email' => $email,
  ':phone' => $phone,
  ':carrier' => $carrier
));
$message = 'User Information Updated!';
echo "<script type='text/javascript'>alert('$message');window.location = '../updateuser.php';</script>";?>
