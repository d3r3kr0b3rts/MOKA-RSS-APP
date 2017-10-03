<?php
include ('./be/db/fetchschedulelinks.php');
?>

<div>
  <a id="toggle" class="btn btn-secondary" data-toggle="modal" href="#openschedulelinksModal" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Update Schedule Links</h5></a>

  <div id="openschedulelinksModal" class="modal fade col-lg-6 offset-lg-3">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title">Update Schedule Links</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicupdateschedulelinks.php" method="post">
            <div style="text-align:right;">
              <p style="margin-bottom:0;">Publish Link (Display):</p>
              <textarea class="form-control" type="text" rows="4" name="scheduledisplay" style="width:100%;"><?php echo $scheduledisplay; ?></textarea>
              <p style="margin-bottom:0;">Share Link (Edit):</p>
              <textarea class="form-control" type="text" name="scheduleedit" rows="3" style="width:100%;"><?php echo $scheduleedit; ?></textarea>
              <button type="submit" class="btn btn-primary" style="margin-top:10px;">Update Links</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
