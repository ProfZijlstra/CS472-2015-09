<?php
include "include/variables.php";
require_once "head.html";
?>

        <?php for ($i = $bottles; $i > 0; $i--) :  ?>
        
            <?= $i ?> bottles of <?= $drink ?> 
            on the wall, <?= $i ?> bottles of <?= $drink ?>
            Take one down and pass it around, <?= ($i -1) ?> bottles of 
            <?= $drink ?> on the wall
           
            <br />
            
        <?php endfor; ?>
    </body>
</html>
