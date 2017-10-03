<?php
date_default_timezone_set('America/New_York');
$time = date('h:i:s a');
$hour = idate('H');
if($hour >= 7 && $hour < 15){
  $shift = '1st';
}elseif($hour >= 15 && $hour < 23){
  $shift = '2nd';
}elseif($hour >= 23 || $hour < 7){
  $shift = '3rd';
}
$today = date('l');
$date = date('m-d-Y');
$datenoyear = date('m-d');
$year = date('Y');
$month = date('M');
$week = date('W');

?>
