<?php
require 'db.php';

$user = filter_input(INPUT_POST, "user");
$pass = filter_input(INPUT_POST, "pass");
$rememberme = filter_input(INPUT_POST, "remembercheck");

if ($rememberme) {
    setcookie("rememberme", $user, time() + 60*60*24*60);
} else if (isset($_COOKIE['rememberme'])){
    setcookie("rememberme", "", time() -1);
}

$stmt = $db->prepare("SELECT * FROM user WHERE user = :user AND pass = :pass");
$stmt->execute(array(":user" => $user, ":pass" => $pass));
$row = $stmt->fetch();

session_start();

if ($row) {
    session_regenerate_id();
    $_SESSION['user'] = $user;
    header("Location: cars.php");
} else {
    $_SESSION['error'] = "Incorrect user or pass";
    header("Location: index.php");
}