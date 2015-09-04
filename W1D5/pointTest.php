<?php
require 'Point.php';

$p1 = new Point(0,0);
$p2 = new Point(3, 4);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?= $p1 ?>
        <?= $p2 ?>
        Distance between the two points: <?= $p1->distance($p2) ?>
        <?= var_dump($p1)?>
    </body>
</html>
