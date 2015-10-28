<?php

//mostrar dias ocupados 
function getbddata () {

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "agenda_dent";
	$table = "consulta";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT mes, dia, fecha, hora FROM ".$table."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<li>".$row['dia']." ".$row['fecha']." de ".$row['mes']."</li>";
	         echo "<li>hora: ".$row['hora']."</li>";
	     }
	} else {
	     echo "0 results";
	}

	$conn->close();
}

//filtrar dias ocupados
function filtrarocupados($criterio, $valorini, $falorfin) {
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "agenda_dent";
	$table = "consulta";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT mes, dia, fecha, hora FROM ".$table." WHERE ".$criterio." BETWEEN ".$valorini." AND ".$valorfin."";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<li>".$row['dia']." ".$row['fecha']." de ".$row['mes']."</li>";
	         echo "<li>hora: ".$row['hora']."</li>";
	     }
	} else {
	     echo "0 results";
	}

	$conn->close();	

}

?>