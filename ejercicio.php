<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>
</head>
<body>
	<fieldset>
		<legend>Cálculo del índice de masa corporal</legend>
		Por favor indique los siguientes datos:
		<form action="calculo.php" method="GET">
			<label for="altura">Altura: </label><input type="" id="altura" name="altura" /> metros<br/>
			<label for="peso">Peso: </label><input type="" id="peso" name="peso" /> kilogramos<br/>
			<input type="submit" value="Calcular">
		</form>
	</fieldset>

	<br/><br/>
	<?php
		if(isset($_GET["imc"])){
			$imc = $_GET["imc"])
			if($imc>=30) echo "Usted sufre obesidad.";
			if(($imc>=25)&&($imc<30)) echo "Usted tiene sobrepeso.";
			if($imc<25) echo "Su peso es normal.";
		}
	?>
</body>
</html>