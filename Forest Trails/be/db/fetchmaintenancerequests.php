<?php
include ('connect.php');

$query = $handler->query("SELECT * FROM maintenancerequests ORDER BY safetyconcern");
$requests = $query->fetchall();
$x = '0';

foreach ($requests as $request) {
  $requestnumber = $request['requestnumber'];
  $requestdate = date('l, m-d-Y' , strtotime($request['requestdate']));
  $requestby = $request['requestby'];
  $safetyconcern = $request['safetyconcern'];
  $location = $request['location'];
  $object = $request['object'];
  $type = $request['type'];
  $note = $request['note'];
  $senttosuper = $request['senttosuper'];
  echo '
  <div class="container" style="margin-bottom:10px;">
    <form action="./be/logicmaintenancerequestsdeletesend.php" method="post">
      <table>
        <tr>
          <th id="bottom">Request #:</th>
          <td style="text-align:left;"><input id="maintenanceforminputs" name="requestnumber" class="form-control" type="number" disabled readonly>'.$requestnumber.'</td>
        </tr>
        <tr>
          <th>Request Date:</th>
          <td style="text-align:left;">'.$requestdate.'</td>
        </tr>
        <tr>
          <th>Submitted By:</th>
          <td style="text-align:left;">'.$requestby.'</td>
        </tr>
        <tr>
          <th>Safety Concern:</th>
          <td style="text-align:left;">'.$safetyconcern.'</td>
        </tr>
        <tr>
          <th>Location:</th>
          <td style="text-align:left;">'.$location.'</td>
        </tr>
        <tr>
          <th>Object:</th>
          <td style="text-align:left;">'.$object.'</td>
        </tr>
        <tr>
          <th>Type:</th>
          <td style="text-align:left;">'.$type.'</td>
        </tr>
        <tr>
          <th>Notes:</th>
          <td style="text-align:left;">'.nl2br($note).'</td>
        </tr>
        <tr>
          <th>Sent to Super?</th>
          <td style="text-align:left;">'.ucwords($senttosuper).'</td>
        </tr>
        <tr>
          <th>Sent to Maint?</th>
          <td style="text-align:left;">Not Yet</td>
        </tr>
      </table>';
      if($_SESSION['role'] == 'Supervisor') {
        echo '
          <button type="submit" class="btn btn-primary" name="submit" value="send" style="margin-top:10px;">Send to Maintenance</button>
          <button type="submit" class="btn btn-danger" name="submit" value="delete" style="margin-top:10px;">Delete Request</button>
        ';}
      echo'</form>
  </div>';
  $x++;
}
?>
