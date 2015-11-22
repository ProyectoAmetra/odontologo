<?

function insertPaciente ($nombre, $apell, $sexo, $mail, $edad, $tel, $ci) {

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Ficha_dent";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO Cliente (nombre, apelliido, sexo, mail, dir, edad, tel, ci)
	VALUES ('$nombre', '$apell', '$sexo', '$mail', '$edad', '$tel', $ci')";

	if ($conn->query($sql) === TRUE) {
	    echo "Nueva consulta agendada correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

function insertTratamiento ($nombre, $descripcion) {

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Ficha_dent";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO Tratamiento(nombre, descripcion)
	VALUES ('$nombre', '$descripcion')";

	if ($conn->query($sql) === TRUE) {
	    echo "Nueva consulta agendada correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}
?>


