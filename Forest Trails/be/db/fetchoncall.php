<?php
include ('connect.php');

$query = $handler->query("SELECT *, MAX(listid) FROM oncall GROUP BY listid");
while($r = $query->fetch()) {
  $oncallname = $r['name'];
  $oncallnumber = $r['phone'];

}
 ?>
