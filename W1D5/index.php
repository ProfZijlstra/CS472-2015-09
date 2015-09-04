<?php
$school = "MUM";


function test() {
    //global $school;
    $school = "Awesome?";
    print "Does this show: $school";
}

print $school;

$a = array("a", "b", "c");

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
        <?php
        test();
        
        ?>
        
        <?= $school ?><br />
        
        <?php foreach ($a as $key => $val) : ?>
            <?= $key ?>: <?= $val?> <br />
        
        <?php endforeach; ?>
    </body>
</html>
