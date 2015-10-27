<?
function inserttratamiento($descr, $obs) {

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

	$sql = "INSERT INTO Tratamiento (descripcion, obs)
	VALUES ('$descr', '$obs')";

	if ($conn->query($sql) === TRUE) {
	    echo "Nuevo tratamiento ingresado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

function insertpaciente ($nombre, $apellido, $ci, $mail, $tel1, $tel2) {

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

	$sql = "INSERT INTO Paciente (nombre, apellido, ci, mail, tel1, tel2)
	VALUES ('$nombre', '$apellido', '$ci', '$mail', '$tel1', '$tel2')";

	if ($conn->query($sql) === TRUE) {
	    echo "Nuevo paciente ingresado correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}
?>