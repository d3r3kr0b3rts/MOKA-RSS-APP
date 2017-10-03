<?php
$root = $_SERVER['DOCUMENT_ROOT'];

include ($root.'/be/db/connect.php');
$residence = $_SESSION['residence'];

$r = $handler->query("SELECT * FROM homes WHERE residence='".$residence."'");
$step1 = $r->fetchall();
foreach ($step1 as $step2) {
  $streetnumber = $step2['streetnum'];
  $streetname = $step2['streetname'];
  $streetname1 = str_replace('.','', $streetname);
  $streetname2 = str_replace(' ','+', $streetname1);
  $city = $step2['city'];
  $city2 = str_replace(' ','+', $city);
  $state = $step2['state'];
  $zip = $step2['zip'];
  $supervisor = $step2['supervisor'];
}
$apikey = 'AIzaSyDad5IgwM1L_tF6tRCsyvUQ6prZmoNO2-I';
$jskey = 'AIzaSyB14GvHhVdDW3bH2wonZTxd3yLV4Y-gejY';
if ($residence == 'Forest Trails') {
  $urlstring = 'Heights+Ravenna+Rd+and+'.$streetname2.'+'.$zip;
}else {
  $urlstring = $streetnumber.'+'.$streetname2.','.$city2.','.$state.'+'.$zip;
}
$zoom = 11;

$embedlink = 'https://www.google.com/maps/embed/v1/place?key='.$apikey.'&maptype=satellite&zoom='.$zoom.'&q='.$urlstring;
?>

<div class="container">
  <h1 style="text-align:right;">Map to <?php echo $_SESSION['residence']; ?></h1>
  <?php
  if ($residence == 'Forest Trails') {
    $message = 'Hilton Park Rd is not a through-street to Apple Ave, so most automated directions do not provide accurate routes to 3088 S Hilton Park Rd.<br>Instead we have mapped to the nearest (and only) crossroad, Heights Ravenna Rd (Co Rd 72). From Heights Ravenna Rd, turn North onto S Hilton Park Rd. Forest Trails is after the first curve on Hilton Park Rd, the first house on the right!';
    echo '<p>'.$message.'</p>';

  }
  ?>
  <iframe src="<?php echo $embedlink; ?>" frameborder="0" style="border:0;border-radius:5px;width:100%;height:500px;" allowfullscreen></iframe>
</div>
<div class="container" style="margin-top:20px;">
  <h1><?php echo $_SESSION['residence']; ?></h1>
    <h3>Address</h3>
      <p class="container">
        <?php echo
          $streetnumber.' '.$streetname.'<br>'.$city2.', '.$state.' '.$zip;
        ?>
      </p>
    <h3>Supervisor</h3>
    <div class="container">
      <table>
      <?php
      include ('./be/db/connect.php');
      $query = $handler->query("SELECT * FROM access WHERE role='Supervisor'");
      while($r = $query->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
          echo '<th>'.$r['fname'].' '.$r['lname'].'</th>';
          echo '<td><a class="btn btn-secondary d-inline" style="padding:1px;border:solid 1px white;" href="tel: '.$r['phone'].' ">'.$r['phone'].'</a></td>';
        echo '</tr>';
      }
      ?>
      </table>
    </div>
</div>
<!--
<div id="map" style="border:0;border-radius:5px;width:100%;height:500px"></div>
<script>
var map, infoWindow;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(41.850033, -87.6500523);
  var mapOptions = {
    zoom:7,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  directionsDisplay.setMap(map);
}
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      infoWindow.open(map);
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB14GvHhVdDW3bH2wonZTxd3yLV4Y-gejY&callback=myMap"></script>
-->
