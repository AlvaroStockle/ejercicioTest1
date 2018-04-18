<?php

	$h = $_POST["altura"];
	$m = $_POST["peso"];

	$imc = $h / ($m*$m);

	header("Location: ejercicio.php?imc=".$imc);
	exit();

?>