<?php
ob_start();
session_start();
unset($_SESSION['userpin']);
session_destroy();
include('./be/head.php');
$homename = $_GET['homename'];
$directory = './'.$homename;
$source = './Forest Trails';

if (!file_exists($directory)) {
  mkdir($directory, 0755);
  foreach (
  $iterator = new \RecursiveIteratorIterator(
  new \RecursiveDirectoryIterator
  ($source,\RecursiveDirectoryIterator::SKIP_DOTS),\RecursiveIteratorIterator::SELF_FIRST) as $item) {
    if ($item->isDir()) {
      mkdir($directory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
    } else {
      copy($item, $directory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
    }
  }
  header( "Location: $directory" );
}
if (file_exists($directory)) {
  foreach (
  $iterator = new \RecursiveIteratorIterator(
  new \RecursiveDirectoryIterator
  ($source,\RecursiveDirectoryIterator::SKIP_DOTS),\RecursiveIteratorIterator::SELF_FIRST) as $item) {
    if ($item->isDir()) {
      mkdir($directory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
    } else {
      copy($item, $directory . DIRECTORY_SEPARATOR . $iterator->getSubPathName());
    }
  }
}
header( "Location: $directory" );

include('./be/foot.php');
?>
