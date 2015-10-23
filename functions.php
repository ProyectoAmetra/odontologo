<?php

//buscar datos en base y exportar a select
function getbddata ($table) {

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Dentista_prueba";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT codigo, descripcion FROM ".$table."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<option value='". $row["id"]. "'>".$row["descripcion"]."</option>";
	     }
	} else {
	     echo "0 results";
	}

	$conn->close();
}

//mostrar datos del cliente
function getbddata ($table) {

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

		$sql = "SELECT codigo, descripcion FROM ".$table."";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		     // output data of each row
		     while($row = $result->fetch_assoc()) {
		         echo "<p>ID: ".$row["id"]."</p><br>";
		         echo "<p>Nombre: ".$row["nombre"]."</p><br>";
		         echo "<p>Apellido: ".$row["apellido"]."</p><br>";
		         echo "<p>Apellido: ".$row["ci"]."</p><br>";
		         echo "***********************************<br>";
		     }
		} else {
		     echo "0 results";
		}

		$conn->close();
	}

//mostrar tratamiento y descripcion del mismo
function getbddata ($table) {

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

		$sql = "SELECT descripcion, obs FROM ".$table."";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		     // output data of each row
		     while($row = $result->fetch_assoc()) {
		         echo "<p>Tratamiento: ".$row["descripcion"].".""</p><br>";
		         echo "<p>".$row["obs"]."</p>";
		     }
		} else {
		     echo "0 results";
		}

		$conn->close();
	}
?>