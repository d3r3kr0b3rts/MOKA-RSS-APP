<div>
  <a id="toggle" class="btn btn-secondary" data-toggle="modal" href="#openshiftModal" style="border:solid 1px white;border-radius:5px;margin-top:10px;"><h5>Open Shift Sign-up</h5></a>

  <div id="openshiftModal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title"><?php echo $residence;?> Open Shift Request</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align:right;">
          <form action="./be/logicopenshiftsignup.php" method="post">
            <div>

              <p style="margin-bottom:0;">Shift Date:</p>
                <input class="form-control" type="date" name="shiftdate" required>
              <p style="margin-bottom:0;">Start Time:</p>
                <input class="form-control" type="time" name="starttime" value="07:00" required>
              <p style="margin-bottom:0;">End Time:</p>
                <input class="form-control" type="time" name="endtime" value="14:00" required>

            </div>
            <div style="margin-top:20px;">
              <textarea rows="5" name="notes" placeholder="Notes?" style="width:100%;"></textarea><br>

            </div>

            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Request Open Shift</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
