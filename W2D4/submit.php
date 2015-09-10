<?php

$name = filter_input(INPUT_POST, "name", FILTER_VALIDATE_REGEXP, 
        array("options" => array("regex" => "/^\w+\s+\w+$/")));
$sid = filter_input(INPUT_POST, "sid", FILTER_VALIDATE_REGEXP, "/^\d{6}$/");
$assignment = filter_input(INPUT_POST, "assignment", FILTER_VALIDATE_REGEXP, "/^W1D[1-6]$/");
$entery = filter_input(INPUT_POST, "entry", FILTER_VALIDATE_REGEXP, "/^20\d{2}-\d{2}$/");
$honest = filter_input(INPUT_POST, "honest", FILTER_VALIDATE_REGEXP, "/^on$/");

if (!$name) {
    header("Location: grades.php?error=" . urlencode("Missing name"));
    exit();
}

//file_put_contents("data.txt", "$name, $sid, $assignment, $entery, $honest");

header("Location: thanks.php?name=" . urlencode($name));
?>
