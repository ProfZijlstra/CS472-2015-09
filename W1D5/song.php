<?php
$bottles = filter_input(INPUT_GET, "bottles");
$drink = filter_input(INPUT_GET, "drink");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <?php for ($i = $bottles; $i > 0; $i--) :  ?>
        
            <?= $i ?> bottles of <?= $drink ?> 
            on the wall, <?= $i ?> bottles of <?= $drink ?>
            Take one down and pass it around, <?= ($i -1) ?> bottles of 
            <?= $drink ?> on the wall
           
            <br />
            
        <?php endfor; ?>
    </body>
</html>
