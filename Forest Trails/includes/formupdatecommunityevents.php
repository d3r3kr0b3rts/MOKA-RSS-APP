  <a class="btn btn-secondary" data-toggle="modal" href="#communityeventsModal" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Add Community Event</h5></a>
  <div id="communityeventsModal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title">Add Community Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicupdatecommunityevents.php" method="post">
            <div style="margin-bottom:10px;">

              <p style="margin-bottom:0;">Event Location:</p>
              <input class="form-control" list="eventlocations" name="eventlocation"/></label>
              <datalist id="eventlocations">
                <option value="<?php echo $_SESSION['residence']; ?>">
                <option value="Healthwest">
              </datalist>
            </div>

            <div style="margin-bottom:10px;">
              <p style="margin-bottom:0;">Event Date:</p>
              <input class="form-control" type="date" name="eventdate" required>
            </div>

            <div style="margin-bottom:10px;">
              <p style="margin-bottom:0;">Start Time:</p>
              <input class="form-control" type="time" name="starttime" required>
              <p style="margin-bottom:0;">End Time:</p>
              <input class="form-control" type="time" name="endtime" required>
              <div style="margin-top:20px;">
                <textarea rows="5" name="notes" placeholder="Notes?" style="width:100%;"></textarea><br>

              </div>

            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Add Community Event</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
