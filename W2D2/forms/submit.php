<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$sid = filter_input(INPUT_POST, "sid");
$assignment = filter_input(INPUT_POST, "assignment");

if (is_uploaded_file($_FILES['homework']['tmp_name'])) {
    if (!is_dir($sid)) {
        mkdir($sid);
    }
    move_uploaded_file($_FILES['homework']['tmp_name'], 
        "$sid/" . $_FILES['homework']['name']);
}

header("Location: thankyou.php?name=" . urlencode($name));