<?php
$error = filter_input(INPUT_GET, "error");
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
        <title>Signup</title>
    </head>
    <body>
        <?php if ($error) : ?>
            <div>
                <?= $error ?>
            </div>
        <?php endif; ?>
        <form action="submit.php" method="post">
            <h1>Sign up for our email list!</h1>
            Email: <input name="email" type="email" /><br />
            Confirm: <input name="confirm" type="email" /> <br />
            <input type="submit" />
        </form>    </body>
</html>
