<!DOCTYPE html>
<html>
<head>
	<title>Ingreso de Tratamientos</title>
</head>
<body>
<?
	include('inserts.php');
	insertTratamiento($_REQUEST['nombreTrat'],$_REQUEST['descripcion']);
?>
</body>
</html>