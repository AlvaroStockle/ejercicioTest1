<?php

	$h = $_POST["altura"];
	$m = $_POST["peso"];

	$imc = $m / ($h*$h);

	header("Location: ejercicio.php?imc=".$imc);
	exit();

?>