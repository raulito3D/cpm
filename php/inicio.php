<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institución Educativa Carlos Pérez Mejía</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="inicio.php">
                <img src="../images/escudo.jpeg" width="30" height="30" alt="">
                EDUCA
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="actividades.php">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Citas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="otrosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Otros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="otrosDropdown">
                            <a class="dropdown-item" href="#">Contacto</a>
                        </div>
                    </li>

                    <!-- Mostrar nombre del usuario y opción de cerrar sesión -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['usuario']; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="../index.php">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <header class="main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-left">
                        <h1>A TU ALCANCE</h1>
                        <h2>I.E CARLOS PEREZ MEJIA</h2>
                        <p>Plataforma educativa institucional abierta a la comunidad para la gestión académica y directiva</p>
                        <a class="btn btn-danger" href="#">Explora</a>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="escudo-container">
                            <img src="../images/escudo.jpeg" class="img-fluid escudo" alt="Escudo">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer -->
        <footer class="footer bg-danger text-white text-center mt-auto">
            <div class="container py-2">
                <p>&copy; 2024 - Institución Educativa Carlos Pérez Mejía - <a href="#" class="text-white">Política de Privacidad</a></p>
                <div class="social-icons mt-2">
                    <a href="http://facebook.com/iecarlosperezmejia/" target="_blank" class="text-white mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-white mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="text-white mx-2">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <!-- FontAwesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>