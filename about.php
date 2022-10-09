<?php
include 'config.php'
;?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <title><?php echo $name?>- Hjem</title>
  </head>
  <body>
    <b id="beta"><?php if ($devmode == True) {
      print "The site is currently in dev mode, the version is " . $pagevertion;
    } ?></b>
  </body>
</html>
