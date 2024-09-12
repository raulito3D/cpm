<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Ruta absoluta para los estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales para la página */
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
        }

        .wrapper {
            flex: 1;
        }

        .menu-container {
            text-align: center;
        }

        .welcome-info {
            margin-top: 20px;
        }

        .btn {
            background-color: #dc3545; /* Color rojo de la institución */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin: 5px;
            display: inline-block;
        }

        .btn:hover {
            background-color: #c82333;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #dc3545;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .alert {
            padding: 20px;
            background-color: #dc3545; /* Rojo de alerta */
            color: white;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="images/escudo.jpeg" alt="Logo de la institución">
            </div>
        </header>
        
        <div class="menu-container">
            <h1>Bienvenido a nuestra institución educativa</h1>

            <?php if (isset($_SESSION['usuario'])): ?>
                <center><p class="welcome-text">Has iniciado sesión como <?php echo htmlspecialchars($_SESSION['usuario']); ?>.</p></center>
                <br>
                <nav>
                    <ul>
                        <li><a href="php/dashboard.php" class="btn">Ir al Dashboard</a></li> 
                        <li><a href="php/logout.php" class="btn">Cerrar Sesión</a></li> 
                    </ul>
                </nav>
            <?php else: ?>
                <div class="welcome-info">
                    <p>Únete a nuestra comunidad educativa o accede a tu cuenta.</p>
                    <nav>
                        <ul>
                            <li><a href="html/formulario.html" class="btn">Registrarse</a></li>
                            <li><a href="html/login.html" class="btn">Iniciar Sesión</a></li>
                        </ul>
                    </nav>
                </div>
            <?php endif; ?>
        </div>

        <!-- Mostrar el mensaje de error si existe -->
        <?php if (isset($_GET['error'])): ?>
    <script>
        var error = "<?php echo $_GET['error']; ?>";
        var message;

        switch (error) {
            case 'invalid_password':
                message = "Contraseña incorrecta.";
                break;
            case 'user_not_found':
                message = "El usuario no está registrado.";
                break;
            default:
                message = "Error desconocido.";
        }

        alert(message);
    </script>
<?php endif; ?>

    </div>

    <footer>
        <p>&copy; 2024 Institución Educativa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
