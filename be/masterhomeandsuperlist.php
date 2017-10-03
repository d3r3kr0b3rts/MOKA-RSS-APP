<?php
include('./be/db/fetchhomes.php');
foreach ($allhomes as $homes) {
  $step1 = str_split($homes['deptnum']);
  $step2 = $step1[0];
  if($step2==1){
    $mhomes[]=$homes['residence'];
  }
  elseif($step2==2){
    $ohomes[]=$homes['residence'];
  }
  elseif($step2==3){
    $khomes[]=$homes['residence'];
  }
  elseif($step2==4){
    $ahomes[]=$homes['residence'];
  }
}
sort($mhomes);
sort($ohomes);
sort($khomes);
sort($ahomes);

$allhomes = array_merge($mhomes,$ohomes,$khomes,$ahomes);
$allhomes = sort($allhomes);

?>
