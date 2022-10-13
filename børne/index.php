<?php
include '../config.php'
;?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/børne.css">
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    <title><?php echo $name?>- Børne historier</title>
  </head>
  <body>
    <b id="beta"><?php if ($devmode == True) {
      print "The site is currently in dev mode, the version is " . $pagevertion;
    } ?></b>
    <form action="test.php" method="POST">
      <label for="fname">Første børne navn:</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
      <label for="aname">Andet børne navn:</label><br>
      <input type="text" id="aname" name="aname" value=""><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
