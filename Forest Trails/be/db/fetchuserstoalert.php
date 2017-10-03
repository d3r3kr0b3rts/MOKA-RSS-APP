<?php
$i=0;
$query = $handler->query("SELECT * FROM access WHERE role='RSS'");
while($r = $query->fetch(PDO::FETCH_ASSOC)) {
  $linitial = mb_substr($r['lname'],0,1);
  $linitial = $linitial['0'];
  $fullname[] = $r['fname'].' '.$linitial;
  $strippedphone = preg_replace("/[^0-9]/","",$r['phone']);
    foreach ($mobilecarrierlist as $provider => $gateway) {
      if ($r['carrier'] == $provider) {
        $step1 = array($fullname[$i] => $strippedphone.'@'.$gateway);
        $tousegateway[] = array_merge($step1);
      }
    }
$i++;
}

?>
