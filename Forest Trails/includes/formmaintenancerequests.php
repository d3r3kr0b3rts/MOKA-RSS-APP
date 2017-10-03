<div class="container">
  <h1>Maintenance Requests</h1>
  <a class="btn btn-secondary" data-toggle="modal" href="#maintenanceModal" style="margin-bottom:10px;"><h5>New Request</h5></a>
  <div id="maintenanceModal" class="modal fade col-lg-6 offset-lg-3">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title">Maintenance Request Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicmaintenancerequests.php" method="post">
            <select class="form-control"  name="safetyconcern" required>
              <option>Safety Concern</option>
              <?php
                foreach ($safetyconcerns as $key => $value) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                }
              ?>
            </select>
            <select class="form-control"  name="location" required>
              <option>Location</option>
              <?php
                foreach ($locations as $key => $value) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                }
              ?>
            </select>
            <select class="form-control"  name="object" required>
              <option>Objects</option>
              <?php
                foreach ($objects as $key => $value) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                }
              ?>
            </select>
            <select class="form-control"  name="type" required>
              <option>Type</option>
              <?php
                foreach ($types as $key => $value) {
                  echo '<option value="'.$key.'">'.$key.'</option>';
                }
              ?>
            </select>
            <div class="form-group">
              <textarea class="form-control" name="note" placeholder="Describe the damage or problem:" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-success" name="starttrip" style="margin-top:10px;;">Submit Request</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <h5 style="text-align:left;">Submitted Requests</h5>
  <?php include('./be/db/fetchmaintenancerequests.php');?>
</div>
