<?php
include('connect.php');

$r = $handler->query("SELECT * FROM homes");
$allhomes = $r->fetchall();
?>
