<?php

require 'db.php';

$user = filter_input(INPUT_POST, "user");
$pass = filter_input(INPUT_POST, "pass");

$stmt = $db->query("SELECT * FROM user WHERE user = '$user' AND pass = '$pass'");
$row = $stmt->fetch();
if ($row) {
    header("Location: cars.php?user=" . urldecode($row['user']));
} else {
    header("Location: index.php?error=Incorrect+user+or+pass");
}