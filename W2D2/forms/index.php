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
        <form action="submit.php" method="post" enctype="multipart/form-data">
            Name: <input type="text" name="name"/> <br />
            Student ID:<input type="text" name="sid" /> <br />
            <select name="assignment">
                <?php foreach (array(1, 2, 3, 4, 5, 6) as $day) : ?>
                    <option>W1D<?= $day ?></option>
                <?php endforeach; ?>
            </select>
            <input type="file" name="homework" />
            <input type="submit" />
        </form>
    </body>
</html>
