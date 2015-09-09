<?php
require 'db.php';
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    $_SESSION['error'] = "Please login first";
    header("Location: index.php");
    exit();
}

$color = filter_input(INPUT_GET, "color");
$sql = "SELECT * FROM car ";

if ($color) {
    $token = filter_input(INPUT_GET, "token");
    
    if ($token != $_SESSION['cars_token']) {
        echo "Token: $token Session: {$_SESSION['token']}";
        die("Bad form submission, token mismatch");
    }
    
    $sql .= " WHERE color = :color";
}

$token = md5(uniqid($user . time()));
$_SESSION['cars_token'] = $token;

$cars = $db->prepare($sql);
if ($color) {
    $cars->execute(array(":color" => $color));
} else {
    $cars->execute();
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL Inject Example 2</title>
        <style>
            #hello {
                position: absolute;
                top: 10px;
                right: 20px;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 1px solid black;
            }
            input[type="text"] {
                width: 600px;
            }
        </style>
    </head>
    <body>
        <h1>Available Cars:</h1>
        <div id="hello">
            Welcome: <?= $user ?>
            <a href="logout.php">logout</a>
        </div>
        <form action="" method="get">
            <input type="hidden" name="token" value="<?= $token ?>">
            Filter Color<input type="text" name="color" />
            <input type="submit" />
        </form>
        <table>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
            </tr>
            <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?= $car['make'] ?></td>
                <td><?= $car['model'] ?></td>
                <td><?= $car['year'] ?></td>
                <td><?= $car['color'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
