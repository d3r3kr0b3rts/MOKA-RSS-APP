<?php
include('masterhomeandsuperlist.php');
?>

<h1>
Welcome to the MOKA RSS App
</h1>

<h3 style="margin-top:20px;margin-bottom:20px;">
  Select a Residence to Login
</h3>

<div id="accordion" role="tablist" aria-multiselectable="true" style="width:100%;text-align:center;margin-bottom:100px;">

  <div class="card" style="margin-bottom:10px;">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="text-decoration:none;">
      <h3 class="btn-secondary card-header dropdown-toggle" role="tab" id="headingOne" style="border:solid 1px white;border-radius:5px;">
          Muskegon County
      </h3>
    </a>
    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="padding:0;margin:0;">
      <div class="card-block" style="margin-left:10px;margin-right:10px;padding-left:10px;padding-right:10px;">
        <?php
          foreach ($mhomes as $home) {
            echo '<a class="btn btn-secondary container" href=pagemaker.php?homename='.urlencode($home).' style="margin-bottom:8px;"><h5>'.$home.'</h5></a>';
          }

          //echo "<a href=view_exp.php?compna=",urlencode($compname),">$compname</a>";

        ?>
      </div>
    </div>
  </div>

  <div class="card" style="margin-bottom:10px;">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration:none;">
      <h3 class="btn-secondary card-header dropdown-toggle" role="tab" id="headingTwo" style="border:solid 1px white;border-radius:5px;">
          Ottawa County
      </h3>
    </a>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" style="padding:0;margin:0;">
      <div class="card-block" style="margin-left:10px;margin-right:10px;padding-left:10px;padding-right:10px;">
        <?php
          foreach ($ohomes as $home) {
            echo '<a class="btn btn-secondary container" href=pagemaker.php?homename='.urlencode($home).' style="margin-bottom:8px;"><h5>'.$home.'</h5></a>';
          }
        ?>
      </div>
    </div>
  </div>

  <div class="card" style="margin-bottom:10px;">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration:none;">
        <h3 class="btn-secondary card-header dropdown-toggle" role="tab" id="headingThree" style="border:solid 1px white;border-radius:5px;">
            Kent County
        </h3>
      </a>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" style="padding:0;margin:0;">
      <div class="card-block" style="margin-left:10px;margin-right:10px;padding-left:10px;padding-right:10px;">
        <?php
          foreach ($khomes as $home) {
            echo '<a class="btn btn-secondary container" href=pagemaker.php?homename='.urlencode($home).' style="margin-bottom:8px;"><h5>'.$home.'</h5></a>';
          }
        ?>
      </div>
    </div>
  </div>

  <div class="card">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-decoration:none;">
        <h3 class="btn-secondary card-header dropdown-toggle" role="tab" id="headingFour" style="border:solid 1px white;border-radius:5px;">
            Allegan County
        </h3>
      </a>
    <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour">
      <div class="card-block" style="margin-left:10px;margin-right:10px;padding-left:10px;padding-right:10px;">
        <?php
          foreach ($ahomes as $home) {
            echo '<a class="btn btn-secondary container" href=pagemaker.php?homename='.urlencode($home).' style="margin-bottom:8px;"><h5>'.$home.'</h5></a>';
          }
        ?>
      </div>
    </div>
  </div>
</div>
