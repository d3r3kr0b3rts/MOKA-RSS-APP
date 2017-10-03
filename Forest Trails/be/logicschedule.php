<?php
include ('./be/db/connect.php');
include ('./be/db/fetchschedulelinks.php');
?>

<div class="container">
  <h1><?php echo $_SESSION['residence']; ?> Staff Schedule</h1>
<?php if ($_SESSION['role'] == 'Supervisor') {?>
  <a id="toggle" class="btn btn-secondary" href="<?php echo $scheduleedit; ?>" target="_blank" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Edit in Google Sheets</h5></a>
  <?php
  include ('./includes/formopenshiftalert.php');
  include ('./includes/formupdateschedulelinks.php');
  ?>
</div>
</div id="bodydiv">
<div id="display" class="col-11">
  <iframe src="<?php echo $scheduleedit; ?>" style="border-radius:5px;width:105%;height:650px;margin-top:20px;"></iframe>
</div id="display">
  <?php }else{
  include ('./includes/formopenshiftsignup.php');
  ?>
</div>

</div id="bodydiv">
<div id="display" class="col-lg-10 offset-lg-1" style="text-align:right;">
  <iframe src="<?php echo $scheduledisplay; ?>" style="border-radius:5px;width:100%;height:570px;margin-top:20px;">
  </iframe>
</div id="display">
<?php } ?>
