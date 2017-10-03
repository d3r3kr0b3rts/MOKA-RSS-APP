<script>
function showUser(str) {
if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
} else {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","./be/db/fetchuserstoupdateusers.php?q="+str,true);
    xmlhttp.send();
}
}
</script>
<?php

include "./be/db/connect.php";


$query = $handler->query("SELECT * FROM access");

 ?>
<div id="updateuser" class="container">
  <h1>Update User Info</h1>

  <form>
    <select class="form-control" name="users" onchange="showUser(this.value)">
      <option value="">Select a Staff:</option>
      <?php
      while($r = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="'.$r['userpin'].'">'.$r['fname'].' '.$r['lname'].'</option>';
      }
      ?>
    </select>
  </form>

  <div id="txtHint">



  </div>
</div>
