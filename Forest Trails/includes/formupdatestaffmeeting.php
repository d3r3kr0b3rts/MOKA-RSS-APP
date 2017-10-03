<div>
  <a class="btn btn-secondary" data-toggle="modal" href="#staffmeetingModal" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Update Staff Meeting</h5></a>
  <div id="staffmeetingModal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title">Update Staff Meeting Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicupdatestaffmeeting.php" method="post">
            <div style="margin-bottom:10px;">

              <p style="margin-bottom:0;">Meeting Location:</p>
              <input class="form-control" list="locations" name="meetinglocation" placeholder="MOKA Offices"/></label>
              <datalist id="locations">
                <option value="<?php echo $residence; ?>">
              </datalist>
            </div>

            <div style="margin-bottom:10px;">
              <p style="margin-bottom:0;">Meeting Date:</p>
              <input class="form-control" type="date" name="meetingdate" required>
            </div>

            <div style="margin-bottom:10px;">
              <p style="margin-bottom:0;">Meeting Time:</p>
              <input class="form-control" type="time" name="starttime" value="10:00" required>
              <input class="form-control" type="time" name="endtime" value="12:00" required>
              Notes:<br><textarea rows="3" name="notes" style="width:100%;"></textarea><br>
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Update Staff Meeting Info</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
