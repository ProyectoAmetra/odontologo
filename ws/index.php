<?php  
//user&pass
$cmd = $_GET['cmd'];
$user = $_GET['u'];
$pass = $_GET['p'];
if ($user != 'test' || $pass != 'test') {
	die("unauthorized");
}

switch ($cmd) {
	case 'create':
		# nuevo
		$mm = $_GET['mm'];
		$dd = $_GET
		...
		//conect bd
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "inmobiliaria";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO inmuebles (tipo_vivienda, zona, direccion, cant_dorm, precio, extras)
		VALUES ('$_REQUEST[tipo]','$_REQUEST[zona]','$_REQUEST[dir]','$_REQUEST[dorm]','$_REQUEST[precio]','$_REQUEST[extra]')";

		if ($conn->query($sql) === TRUE) {
		    echo "Nuevo inmueble ingresado";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
		break;
	case 'read':
		# lista
		break;
	case 'update':
		# modificar
		break;
	case 'delete':
		# borrar
		break;
	default:
		# code...
		break;
}

?>