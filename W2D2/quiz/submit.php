<?php
$email = filter_input(INPUT_POST, "email");
$confirm = filter_input(INPUT_POST, "confirm");

if ($email != $confirm) {
	header("Location: signup.php?error=email+addresses+do+not+match");
	exit();
}

header("Location: success.php");
