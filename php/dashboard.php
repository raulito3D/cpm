<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: ../html/login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;url=inicio.php"> <!-- Redirección en 5 segundos -->
    <title>Dashboard - Bienvenido</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="../images/escudo.jpeg" alt="Escudo del colegio" class="escudo">
        </header>
        <div class="welcome-message">
            <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
            <p>En breves serás dirigido a la página principal</p>
            <p>¡Ten una bonita experiencia!</p>
        </div>
    </div>
</body>
</html>
