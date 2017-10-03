<?php
include ('./be/db/fetchuserstoalert.php');
$notes = 'If the shift is now, please call '.$residence.'. Otherwise please submit an Open Shift Request to the Supervisor, thank you!'
?>
<div>
  <a id="toggle" class="btn btn-secondary" data-toggle="modal" href="#openshiftalertModal" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Send Open Shift Alert</h5></a>

  <div id="openshiftalertModal" class="modal fade" style="text-align:right;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo $residence;?> Open Shift Alert</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicopenshiftalert.php" method="post">
            Send to:<br>
            (All are preselected)<br>
            <?php foreach ($fullname as $sendto): ?>
            <div class="btn-group btn-group-vertical" data-toggle="buttons" style="padding:0;width:49%;">
                <label class="btn btn-outline-secondary btn-block active" style="margin-right:0;">
                  <?php echo $sendto; ?>
                  <input type="checkbox" name="<?php echo $sendto; ?>" checked autocomplete="off">
                </label>
            </div>
          <?php endforeach; ?>

            <div>
              <p style="margin-bottom:0;">Shift Date:</p>
              <input class="form-control" type="date" name="shiftdate" required>

              <p style="margin-bottom:0;">Start Time:</p>
              <input class="form-control" type="time" name="starttime" value="07:00" required>
              <p style="margin-bottom:0;">End Time:</p>
              <input class="form-control" type="time" name="endtime" value="14:00" required>

            </div>
            <div style="margin-top:0px;">(Maximum 150 characters)
              <textarea rows="7" name="notes" maxlength="150" style="width:100%;"><?php echo $notes; ?></textarea><br>

            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Send Open Shift Alert</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
