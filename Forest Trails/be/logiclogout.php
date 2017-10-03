<?php
ob_start();
session_start();
$userpin = $_SESSION['userpin'];
setcookie($userpin,"", time() - 3600, '/');
unset($_SESSION['fname']);
session_destroy();
header("Location: ../login.php");
?>
