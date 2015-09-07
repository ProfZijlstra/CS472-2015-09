<?php
$name = filter_input(INPUT_GET, "name");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Retrieve Grade</title>
                <style>
                </style>
	</head>
	<body>
            Thanks for requesting <?= $name ?>
        </body>
</html>
