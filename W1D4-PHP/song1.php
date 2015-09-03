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
        <?php for ($i = 99; $i > 0; $i--) {  
            print "$i bottles of milk on the wall, $i bottles of milk";
            print "Take one down and pass it around,".($i -1)." bottles of milk on the wall";
            print "<br />";
        }?>
    </body>
</html>
