<!DOCTYPE html>
<html>
<head>
	<title>Ingreso de Tratamientos</title>
</head>
<body>
<?
	include('inserts.php');
	insertPaciente($_REQUEST['nombre'],$_REQUEST['apellido'],$_REQUEST['sexo'],$_REQUEST['mail'],$_REQUEST['dir'],$_REQUEST['edad'],$_REQUEST['tel'],$_REQUEST['ci']);
?>
</body>
</html>