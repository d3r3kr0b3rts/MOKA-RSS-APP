<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include ($root.'/be/db/connect.php');

$query = $handler->query("SELECT * FROM communityevents WHERE eventdate>=CURRENT_DATE");
$events = $query->fetchall();
function date_compare($a, $b)
  {
      $t1 = strtotime($a['eventdate']);
      $t2 = strtotime($b['eventdate']);
      return $t1 - $t2;
  }
usort($events, 'date_compare');
$x = '0';
foreach ($events as $event) {
  $eventlocation = $events[$x]['eventlocation'];
  $eventdate = $events[$x]['eventdate'];
  $eventdate = date('l, m-d-Y' , strtotime($eventdate));
  $eventtime = $events[$x]['eventtime'];
  $eventnotes = $events[$x]['notes'];
  $eventauthor = $events[$x]['author'];
  echo '<div class="container" style="margin-top:10px;"><table>';
  echo '
    <tr>
      <th>Posted By:</th>
      <td>'.$eventauthor.'</td>
    </tr>
    <tr>
      <th>Date:</th>
      <td>'.$eventdate.'</td>
    </tr>
    <tr>
      <th>Time:</th>
      <td>'.$eventtime.'</td>
    </tr>
    <tr>
      <th>Location:</th>
      <td>'.$eventlocation.'</td>
    </tr>
    <tr>
      <th>Notes:</th>
      <td>'.nl2br($eventnotes).'</td>
    </tr>
    ';
  echo '</table></div>';
  $x++;
}
?>
