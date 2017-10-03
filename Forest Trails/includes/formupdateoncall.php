<div>
  <a class="btn btn-secondary" data-toggle="modal" href="#oncallModal" style="border-radius:5px;margin-top:10px;"><h5>Update On-Call Staff</h5></a>
  <div id="oncallModal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color:black;border:solid 1px white;">
        <div class="modal-header">
          <h5 class="modal-title">Update On-Call Staff</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./be/logicupdateoncall.php" method="post">
            <?php include ('./be/db/fetchuserstooncall.php'); ?>
            <button type="submit" class="btn btn-primary" style="margin-top:10px;">Update On-Call Staff</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
