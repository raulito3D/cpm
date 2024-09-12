<?php
// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Datos de conexión a la base de datos
$host = "localhost";
$dbname = "registro_usuarios";
$username = "root";
$password = "";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    // Redirigir al login
    header("Location: ../html/login.html");
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
