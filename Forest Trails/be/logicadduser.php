<?php
include ('./db/connect.php');

if(strlen($_POST['minitial']) != 1) {
  $message = 'Middle Initial can only be 1 letter, no punctuation, user not added';
  echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";
  die();
}
if(strlen($_POST['phone']) != 10) {
  $message = 'Phone number not 10 digits, user not added';
  echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";
  die();
}

if(strlen($_POST['password']) < 8) {
  $message = 'Password requirements not met, user not added';
  echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";
  die();
}

$id = NULL;
$pin = htmlspecialchars(trim($_POST["userpin"]));
$role = htmlspecialchars(trim($_POST["role"]));
$first = htmlspecialchars(trim($_POST["fname"]));
$middle = htmlspecialchars(trim($_POST["minitial"]));
$last = htmlspecialchars(trim($_POST["lname"]));
$email = htmlspecialchars(trim($_POST["email"]));
$phone = htmlspecialchars(trim($_POST["phone"]));
$carrier = $_POST["carrier"];
$pass = htmlspecialchars(trim(password_hash($_POST["password"], PASSWORD_DEFAULT)));

$split1 = str_split($phone, 3);
$areacode = $split1['0'];
$threedigits = $split1['1'];
$fourdigits = $split1['2'].$split1['3'];
$phonenumber = "($areacode) $threedigits - $fourdigits";

$sql = "INSERT INTO access (userid,userpin,role,fname,minitial,lname,email,phone,carrier,password) VALUES (:id,:pin,:role,:first,:middle,:last,:email,:phone,:carrier,:pass)";
$query = $handler->prepare($sql);

$query->execute(array(
  ':id' => $id,
  ':pin' => $pin,
  ':role' => $role,
  ':first' => $first,
  ':middle'=> $middle,
  ':last' => $last,
  ':email' => $email,
  ':phone' => $phonenumber,
  ':carrier' => $carrier,
  ':pass' => $pass
));
$message = 'New User Successfully Added!';
echo "<script type='text/javascript'>alert('$message');window.location = '../adduser.php';</script>";?>
