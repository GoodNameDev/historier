<?php
include 'config.php'
;?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title><?php echo $name?>- Om os</title>
  </head>
  <body>
    <b id="beta"><?php if ($devmode == True) {
      print "The site is currently in dev mode, the version is " . $pagevertion;
    } ?></b>
    <ul>
      <li><a class="active" href="index.php">Hjem</a></li>
      <li><a href="børne">Børne historier</a></li>
      <li><a href="gyser">Gyser historier</a></li>
      <li><a href="sjove">Sjove historier</a></li>
      <li><a href="about.php">Om os</a></li>
    </ul>
  </body>
</html>
