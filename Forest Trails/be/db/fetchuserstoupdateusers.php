<?php
include ('connect.php');
include ('../../includes/staffroles.php');
include ('../../includes/mobilecarriergateways.php');

$q = intval($_GET['q']);
$query = $handler->query("SELECT * FROM access WHERE userpin='".$q."' ");
while($r = $query->fetch(PDO::FETCH_ASSOC)) {
  $pinnumber = $r['userpin'];
  $role = $r['role'];
  $firstname = $r['fname'];
  $middleinitial = $r['minitial'];
  $lastname = $r['lname'];
  $email = $r['email'];
  $phone = $r['phone'];
  $carrier = $r['carrier'];
}
?>
<div style="margin-top:20px;">
  <h3>Name and Contact</h3>
  <form action="./be/logicupdateuser.php" method="post">
    <input class="form-control" type="number" value="<?php echo $pinnumber; ?>" name="userpin" required>
    <select class="form-control"  name="role" required>
      <option><?php echo $role; ?></option>
      <?php
        foreach ($staffroles as $role) {
          echo '<option value="'.$role.'">'.$role.'</option>';
        }
      ?>
    </select>
    <input class="form-control" type="text" value="<?php echo $firstname; ?>" name="fname" required>
    <select class="form-control" name="minitial" required>
      <option><?php echo $middleinitial; ?></option>
      <?php
        $letters = range('A', 'Z');
        foreach ($letters as $letter) {
          echo '<option value="'.$letter.'">'.$letter.'</option>';
        }
      ?>
    </select>
    <input class="form-control" type="text" value="<?php echo $lastname; ?>" name="lname" required>
    <input class="form-control" type="email" value="<?php echo $email; ?>" name="email" required>
    <input class="form-control" type="tel" value="<?php echo $phone; ?>" name="phone" data-toggle="tooltip" data-placement="right" title="Phone # must be in this format." required>
    <select class="form-control"  name="carrier">
      <option value="<?php echo $carrier; ?>"><?php echo $carrier; ?></option>
      <?php
        foreach ($mobilecarrierlist as $provider => $gateway) {
          echo '<option value="'.$provider.'">'.$provider.'</option>';
        }
      ?>
    </select>
    <button type="submit" class="btn btn-primary" style="margin-top:10px;" onclick="return confirm('Change name and contact info for <?php echo $firstname.' '.$lastname;?>?');">Update Name and Contact</button><br>
  </form>
</div>

<div style="margin-top:20px;">
  <h3>Password</h3>
  <form action="./be/logicupdatepassword.php" method="post">
    <input class="form-control" type="number" value="<?php echo $pinnumber; ?>" name="userpin" required>
    <input class="form-control" type="password" placeholder="Enter New Password" name="password" title="Password must be at least 8 characters." required>
    <button type="button" class="btn btn-warning" onclick="if(password.type=='text')password.type='password'; else password.type='text';" name="showpass" style="margin-top:10px;">Show Password</button><br>
    <button type="submit" class="btn btn-primary" style="margin-top:10px;" onclick="return confirm('Change password for <?php echo $firstname.' '.$lastname;?>?');">Update Password</button><br>
  </form>
</div>

<div style="margin-top:20px;">
  <h3>DELETE USER<h3>
  <form action="./be/logicdeleteuser.php" method="post">
    <input class="form-control" type="number" value="<?php echo $pinnumber; ?>" name="userpin" required>
    <button type="submit" class="btn btn-danger" style="margin-top:10px;" onclick="return confirm('DELETE USER <?php echo $firstname.' '.$lastname;?>?');">DELETE USER</button>
  </form>
</div>
