<?

function insertpaciente ($mes, $dia, $fecha, $hora, $duracion, $nombre, $ci) {

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "agenda_dent";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO consulta (mes, dia, fecha, hora, duracion, nombre, ci)
	VALUES ('$mes', '$dia', '$fecha', '$hora', '$duracion', '$nombre', '$ci')";

	if ($conn->query($sql) === TRUE) {
	    echo "Nueva consulta agendada correctamente";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}
?>


