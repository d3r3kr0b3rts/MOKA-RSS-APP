<h3>RSS Staff</h3>
<div class="container">
  <table>
  <?php
  include ('connect.php');

  $query = $handler->query("SELECT * FROM access WHERE role='RSS'");
  while($r = $query->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
      echo '<th>'.$r['fname'].' '.$r['lname'].'</th></tr>';
      echo '<tr><td style="text-align:right"><a class="btn btn-secondary d-inline" style="padding:1px;border:solid 1px white;" href="tel: '.$r['phone'].' ">'.$r['phone'].'</a></td>';
    echo '</tr>';
  }
  ?>
  </table>
</div>

<h3>Supervisor</h3>
<div class="container">
  <table>
  <?php
  $query = $handler->query("SELECT * FROM access WHERE role='Supervisor'");
  while($r = $query->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
      echo '<th>'.$r['fname'].' '.$r['lname'].'</th></tr>';
      echo '<tr><td style="text-align:right"><a class="btn btn-secondary d-inline" style="padding:1px;border:solid 1px white;" href="tel: '.$r['phone'].' ">'.$r['phone'].'</a></td>';
    echo '</tr>';
  }
  ?>
  </table>
</div>
