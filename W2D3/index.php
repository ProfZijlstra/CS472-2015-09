<?php
session_start();
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

$user = filter_input(INPUT_COOKIE, "rememberme");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL Inject Example</title>
        <style>
            #container {
                width: 230px;
                position: absolute;
                left: 50%;
                top: 40%;
                margin-left: -125px;
            }
            h1 {
                margin-bottom: 0px;
            }
            #form_border {
                padding: 20px;
                border: 1px solid black;
                line-height: 1.5em;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <h1>Please Login:</h1>
            <div id="form_border">
                <form action="login.php" method="post">
                    <?php if ($error): ?>
                        <div class="error"><?= $error ?></div>
                    <?php endif; ?>
                    <input type="text" name="user" <?php if ($user) : ?>
                               value="<?= $user ?>" 
                           <?php endif; ?> placeholder="username" /><br />
                    <input type="password" name="pass" placeholder="password" /> <br />
                    <input type="checkbox" name="remembercheck" value="on"
                    <?php if ($user) : ?>
                               checked
                           <?php endif; ?>
                           />Remember me<br />
                    <input type="submit" />
                </form>
            </div>
        </div>
    </body>
</html>
