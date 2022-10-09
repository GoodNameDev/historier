<?php
include 'config.php'
;?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title><?php echo $name?>- Hjem</title>
  </head>
  <body>
    <b id="beta"><?php if ($devmode == True) {
      print "The site is currently in dev mode, the version is " . $pagevertion;
    } ?></b>
    <div class="choose">
      <a href="børne/index.php">Børne historier</a>
      <a href="gyser/index.php">Gyser historier</a>
      <a href="sjove/index.php">Sjove historier</a>
      <a href="about.php">Om os</a>
    </div>

  </body>
</html>
