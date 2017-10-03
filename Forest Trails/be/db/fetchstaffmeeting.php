<?php
include ('connect.php');

$query = $handler->query("SELECT *, MAX(entryid) FROM staffmeeting GROUP BY entryid");
while($r = $query->fetch()) {
  $meetinglocation = $r['meetinglocation'];
  $meetingdate = $r['meetingdate'];
  $meetingdate = date('l, m-d-Y' , strtotime($meetingdate));
  $meetingtime = $r['meetingtime'];
  $notes = $r['notes'];
}
 ?>
