<?php
  include('include/autoloader.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
    <?php
      $obj = new Test();
      $obj->getUsersStmt("Sasa", "Sasic");
     ?>
  </body>
</html>
