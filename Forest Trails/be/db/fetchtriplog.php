
<?php

include ('connect.php');

$query = $handler->query("SELECT endmileage FROM triplog ORDER BY endmileage DESC LIMIT 1");
while($r = $query->fetch(PDO::FETCH_ASSOC)) {
  $dbstartmileage = $r['endmileage'];
  $estendmileage = $dbstartmileage + 10;
}

$y = 0;
$query = $handler->query("SELECT * FROM triplog ORDER BY entryid DESC LIMIT 1");
while($r = $query->fetch(PDO::FETCH_ASSOC)) {

  foreach ($r as $entry) {
    print_r('<div class="row"><div class="col-8 col-lg-4" style="text-align:right;">'.$headers[$y].'</div><div class="col-4 col-lg-3" style="text-align:left;">'.$entry.'</div></div>');
    $y++;
  }

}

 ?>
