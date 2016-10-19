<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include 'animal.php';
$animalnuevo=new animal();

$tipoanima=$animalnuevo->getanimal()
echo 'el animal es:'. $tipoanimal;
$patasanimal=$animalnuevo->getpatas()
echo'las patas son:' .$patasanimal;

$animal1='gato';

$animalnuevo



     ?>
  </body>
</html>
