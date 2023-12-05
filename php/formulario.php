<?php
// Obtén los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$ayuda = $_POST['ayuda'];

// Establecer la conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "brandon";
$password = "12345";
$database = "paginaraul";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la consulta SQL para la inserción
$sql = "INSERT INTO comentarios (nombres, apellidos, telefono, direccion, correo, ayuda) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo', '$ayuda')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito.";
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>