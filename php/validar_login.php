<?php
session_start();

// Mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Conectar a la base de datos
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
$correo = $_POST['correo'];
$password = $_POST['password'];

// Buscar al usuario por correo
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    
    // Verificar la contraseña
    if (password_verify($password, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['nombre'];
        header("Location: ../index.php"); // Redirige a index.php sin parámetros
        exit();
    } else {
        // Redirige a la misma página con un mensaje de error
        header("Location: ../index.php?error=invalid_password");
        exit();
    }
} else {
    // Redirige a la misma página con un mensaje de error
    header("Location: ../index.php?error=user_not_found");
    exit();
}

// Cerrar conexión
$conn->close();
?>
