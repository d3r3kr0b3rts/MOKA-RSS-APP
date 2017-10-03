<?php
include ('connect.php');

$query = $handler->query("SELECT * FROM access");
while($r = $query->fetch(PDO::FETCH_ASSOC)) {
  echo '<input type="radio" name="oncall" value="'.$r['phone'].'"> '.$r['fname'].' '.$r['lname'].' '.$r['phone'].'<br>';
}
 ?>
