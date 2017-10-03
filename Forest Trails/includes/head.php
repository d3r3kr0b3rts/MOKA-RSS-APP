<?php
include ('./includes/residence.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $residence; ?> RSS App</title>

    <!-- Bootstrap -->
    <link href="/bs/css/bootstrap.css" rel="stylesheet">
    <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
    <link rel="icon" href="favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body style="border-radius:5px;">
    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
      <div class="row" style="padding:0;">
        <div class="col-8 d-inline"><?php echo $today.', '.$date; ?></div>
        <div class="col-4 d-inline" style="text-align:right;"><?php echo $shift.' Shift'; ?></div>
      </div>
    </div>
    <div id="bodydiv" class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
