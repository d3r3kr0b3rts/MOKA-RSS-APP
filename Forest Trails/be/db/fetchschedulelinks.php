<?php
include ('connect.php');

$query = $handler->query("SELECT *, MAX(colid) FROM schedulelinks GROUP BY colid");
while($r = $query->fetch()) {
  $scheduledisplay = $r['scheduledisplay'];
  $scheduleedit = $r['scheduleedit'];

}
 ?>
