<?php
include ('./be/db/fetchstaffmeeting.php');
include ('./be/db/fetchoncall.php');
?>

<div style="margin-top:20px;">
  <h1>Message Board</h1>

  <div style="margin-top:20px;">
    <h3>On-Call Staff</h3>
    <div class="container">
      <?php if($_SESSION['role'] == "Supervisor") {include ('./includes/formupdateoncall.php');} ?>
      <table>
        <tr>
          <th><?php echo $oncallname; ?></th></tr>
          <tr><td style="text-align:right"><a class="btn btn-secondary d-inline" style="padding:1px;border:solid 1px white;" href="tel:<?php echo $oncallnumber; ?>"><?php echo $oncallnumber; ?></a></td>
        </tr>
      </table>
    </div>
  </div>

  <div style="margin-top:20px;">
    <h3>Next Staff Meeting</h3>
    <div class="container">
      <?php if($_SESSION['role'] == "Supervisor") {include ('./includes/formupdatestaffmeeting.php');} ?>
      <table>
        <tr>
          <th>Location:</th>
          <td><?php echo $meetinglocation; ?></td>
        </tr>
        <tr>
          <th>Date:</th>
          <td><?php echo $meetingdate; ?></td>
        </tr>
        <tr>
          <th>Time:</th>
          <td><?php echo $meetingtime; ?></td>
        </tr>
        <tr>
          <th>Notes:</th>
          <td><?php echo nl2br($notes); ?></td>
        </tr>
      </table>
    </div>
  </div>

  <div style="margin-top:20px;">
    <h3>Upcoming Community Events</h3>
    <div class="container">
      <?php if($_SESSION['role'] == "Supervisor") {include ('./includes/formupdatecommunityevents.php');} ?>
    <?php include ('./be/db/fetchcommunityevents.php');?>
  </div>
</div>
