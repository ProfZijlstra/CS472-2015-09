<?php
$name = $_GET['name'];
$id = $_GET['id'];

if (isset($_GET['meat'])) {
    $eats_meat = TRUE;
}


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
        Hello <?= $name ?> [<?= $id?>] you are <?= $eats_meat ? "not" : "" ?> a vegetarian
    </body>
</html>
