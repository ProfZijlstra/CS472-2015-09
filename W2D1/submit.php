<?php

$name = filter_input(INPUT_POST, "name");
$sid = filter_input(INPUT_POST, "sid");
$assignment = filter_input(INPUT_POST, "assignment");
$entery = filter_input(INPUT_POST, "entry");
$honest = filter_input(INPUT_POST, "honest");

if (!$name) {
    header("Location: grades.php");
    exit();
}

//file_put_contents("data.txt", "$name, $sid, $assignment, $entery, $honest");

header("Location: thanks.php?name=" . urlencode($name));
?>
