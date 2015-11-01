<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="agendar.php" method="get">
		Ingrese dia: 
		<select name="dia">
			<?php  
				include 'functions.php';
				for ($i=1; $i < 6; $i++) {
					$dia = getdia($i);
					echo "<option value='".$i. "'>".$dia."</option>";
				}
			?>
		</select>
		<br>
		Ingrese mes: 
		<select name="mes">
			<?php  
				for ($i=1; $i < 13; $i++) {	
					$mes = getmes($i);
					echo "<option value='".$i. "'>".$mes."</option>";
				}
			?>
		</select>
		<br>
		Ingrese fecha: 
		<select name="fecha">
			<?php 
				for ($i=1; $i < 32; $i++) { 
					echo "<option value='".$i. "'>".$i."</option>";
				}
			?>
		</select>
		<input type="submit" value="enviar">
	</form>
</body>
</html>