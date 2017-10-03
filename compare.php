<?php
include('./be/head.php');
include('./be/foot.php');
$dirs = array_filter(glob('*'), 'is_dir');
print_r( $dirs);
?>
<h1 align="center">Upgrade checker</h1>
<form class="col-lg-6 offset-lg-3" action="./compare.php" method="post">
  <select class="form-control" name="directory" required>
    <?php
      foreach ($dirs as $key => $value) {
        echo '<option value="'.$value.'">'.$value.'</option>';
      }
    ?>
  </select>
  <button type="submit" class="btn btn-primary" style="margin-top:10px;">Check</button>
<?php
  if(isset($_POST['directory'])) {
    include('./be/compare.class.php');		// Load the class
    $post = $_POST['directory'];
    $cmp = new compare();				// Initialize the class
    $dir = dirname(__FILE__);
    $cmp->set_source($dir.'/Forest Trails');	// Directory where Source files are
    $cmp->set_update($dir.'/'.$post);	// Directory where pristeen files are
    $cmp->do_compare();					// Do the compare
    $removed = $cmp->get_removed();		// Get the results
    $added = $cmp->get_added();			// ...
    $changed = $cmp->get_changed();
    echo '<h3>Files Changed</h3>';		// Display the results
    foreach($changed as $file) {
        echo $file.' has been changed<br>';
    }
    echo '<h3>Files Added</h3>';
    foreach ($added as $add) {
        echo $add.'<br>';
    }
    echo '<h3>Files Removed</h3>';
    foreach ($removed as $remove) {
        echo $remove.'<br>';
    }
  }
?>
</body>
</html>
