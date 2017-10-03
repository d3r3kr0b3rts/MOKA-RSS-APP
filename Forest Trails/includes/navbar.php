<?php
$logoutdisplay = "Logout, ".$_SESSION['fname'];
$logoutlink = "./be/logiclogout.php";
$homeselect = "/index.php";
$schedulelink = 'https://docs.google.com/spreadsheets/d/1jAEeBnZNapUi1cFzUjgfIG0tHQssy-Kd-ctqHBPZpic/edit?usp=sharing';
$admincontent = '<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Supervisor Menu</a>
  <div class="dropdown-menu" aria-labelledby="dropdown01">
    <a class="dropdown-item" href="./adduser.php">Add User</a>
    <a class="dropdown-item" href="./updateuser.php">Update User</a>
  </div>
</li>';

?>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse container" style="border-radius:5px;margin-bottom:190px;padding-bottom:1px;padding-top:3px;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:solid 1px white;">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php if ($_SESSION['role'] == 'Maintenance') {?>
  <a class="navbar-brand" href="./maintenancerequests.php"><?php echo $residence; ?></a>
<?php }else{?>
  <a class="navbar-brand" href="./index.php"><?php echo $residence; ?></a>
<?php }?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php
      if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'Supervisor'){
        echo $admincontent;
      }}?>
    </ul>

  <?php
    if ($_SESSION['role'] == 'Maintenance') {?>

      <ul class="nav navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maintenance Menu</a>
          <div class="dropdown-menu" aria-labelledby="dropdown02">
  <!--          <a class="dropdown-item disabled" href="#" style="color:red;">Emergency Contacts</a>
            <a class="dropdown-item" href="./duties.php">Shift Duties Log</a>-->
            <a class="dropdown-item" href="./maintenancerequests.php">Maintenance Requests</a>
            <a class="dropdown-item" href="./location.php">Location</a>
          </div>
        </li>
      </ul>
    <?php }else{?>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Records</a>
        <div id="bg1" class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item disabled" href="#">Shift Duties</a>
          <a class="dropdown-item disabled" href="#">Shopping List</a>
          <a class="dropdown-item disabled" href="#">Trip Log</a>
          <a class="dropdown-item" href="./maintenancerequests.php">Maintenance Requests</a>
        </div>
      </li>
    </ul>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RSS Menu</a>
        <div id="bg1" class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="./directory.php">Staff Directory</a>
          <a class="dropdown-item" href="./schedule.php">Schedule Info</a>
          <a class="dropdown-item" href="./location.php">Location</a>
        </div>
      </li>
    </ul>
    <?php }?>
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $logoutdisplay ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
          <a class="dropdown-item" href="<?php echo $logoutlink ?>">Logout</a>
          <a class="dropdown-item" href="<?php echo $homeselect ?>">MOKA Home Page</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div id="bodydiv">
<div id="bodydiv" class="col-md-6 offset-md-3">
