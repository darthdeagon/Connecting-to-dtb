<?php

  include 'include/autoloader.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $testname = new Test();
    $testname->SETUsersStmt("Petar", "Petrovic", 123);
     ?>
  </body>
</html>
