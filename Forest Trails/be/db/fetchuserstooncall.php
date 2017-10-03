<div class="btn-group btn-group-vertical" data-toggle="buttons" style="width:100%;">

  <?php
  include "fetchoncall.php";

  $query = $handler->query("SELECT * FROM access WHERE role='RSS'");
  while($r = $query->fetch(PDO::FETCH_ASSOC)) {
    $step1 = str_split($r['lname'], 1);
    $linitial = $step1['0'];
    ?>
    <label class="btn btn-secondary <?php if ($oncallnumber == $r['phone']) {echo 'active';} ?>" style="border-radius:5px;">
      <input type="radio" name="oncall" value="<?php echo $r['phone']; ?>" autocomplete="off"
        <?php if ($oncallnumber == $r['phone']) {echo 'checked';} ?>
      >
      <?php echo $r['fname'].' '.$linitial.' '.$r['phone']; ?>
    </label>
  <?php } ?>

</div>
