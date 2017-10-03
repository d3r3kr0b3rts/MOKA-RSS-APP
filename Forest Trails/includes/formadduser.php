<?php
include ('staffroles.php');
include ('mobilecarriergateways.php');
?>

<div id="adduser" class="container">
  <h1>Add New User</h1>
  <form action="./be/logicadduser.php" method="post">
    <input class="form-control" type="number" placeholder="MOKA Login PIN" name="userpin" data-toggle="tooltip" data-placement="right" title="Enter your 4-digit MOKA PIN (EX: 1234)" autofocus required>
    <select class="form-control"  name="role" required>
      <option>Select a Role:</option>
      <?php
        foreach ($staffroles as $role) {
          echo '<option value="'.$role.'">'.$role.'</option>';
        }
      ?>
    </select>
    <input class="form-control" type="text" placeholder="First Name" name="fname" required>
    <select class="form-control" name="minitial" required>
      <option>Middle Initial</option>
      <?php
        $letters = range('A', 'Z');
        foreach ($letters as $letter) {
          echo '<option value="'.$letter.'">'.$letter.'</option>';
        }
      ?>
    </select>
    <input class="form-control" type="text" placeholder="Last Name" name="lname" required>
    <input class="form-control" type="email" placeholder="Email Address" name="email" >
    <input class="form-control" type="number" placeholder="Phone #" name="phone" data-toggle="tooltip" data-placement="right" title="EX: 2314567890; Must be exactly 10 digits, numbers only, no spaces">
    <select class="form-control"  name="carrier">
      <option>Select a mobile carrier:</option>
      <?php
        foreach ($mobilecarrierlist as $provider => $gateway) {
          echo '<option value="'.$provider.'">'.$provider.'</option>';
        }
      ?>
    </select>
    <input class="form-control" type="password" placeholder="Password" name="password" data-toggle="tooltip" data-placement="right" title="Password must be at least 8 characters." required>
    <button type="button" class="btn btn-warning" onclick="if(password.type=='text')password.type='password'; else password.type='text';" name="showpass" style="margin-top:10px;">Show Password</button><br>
    <button type="submit" class="btn btn-primary" name="submit" style="margin-top:10px;">Add New User</button>
  </form>
</div>
