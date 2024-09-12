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
    <title>Actividades - Institución Educativa Carlos Pérez Mejía</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Ajuste para que el footer siempre esté al final */
        html, body {
            height: 100%;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1;
        }
        .footer {
            margin-top: auto;
        }

        /* Estilo para ocultar y mostrar la descripción larga */
        .more-content {
            display: none;
        }
    </style>
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
                            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content for Actividades -->
        <div class="container mt-5 main-content">
            <h1 class="text-center">Actividades</h1>
            <p class="text-center">Aquí puedes ver todas las actividades asignadas y gestionarlas.</p>
            
            <!-- Ejemplo de contenido dinámico con descripción larga -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">Actividad 1</div>
                        <div class="card-body">
                            <p>Descripción breve de la actividad.</p>
                            <p id="extra1" class="more-content">Esta es una descripción más detallada de la actividad. Aquí se puede incluir todo lo relacionado con la actividad, los objetivos, la metodología, los recursos necesarios, y cualquier otra información relevante que los estudiantes necesiten conocer para completar esta tarea.</p>
                            <a href="#" class="btn btn-danger" onclick="toggleContent('extra1', this)">Ver más detalles</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">Actividad 2</div>
                        <div class="card-body">
                            <p>Descripción breve de la actividad.</p>
                            <p id="extra2" class="more-content">Descripción más larga y detallada de la actividad 2. Incluir objetivos, plazos, criterios de evaluación, y otros detalles importantes que los estudiantes deben considerar al realizar esta actividad.</p>
                            <a href="#" class="btn btn-danger" onclick="toggleContent('extra2', this)">Ver más detalles</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-danger text-white">Actividad 3</div>
                        <div class="card-body">
                            <p>Descripción breve de la actividad.</p>
                            <p id="extra3" class="more-content">Descripción extensa de la actividad 3. Aquí se puede detallar el proceso paso a paso de lo que los estudiantes deben hacer para completar esta actividad con éxito.</p>
                            <a href="#" class="btn btn-danger" onclick="toggleContent('extra3', this)">Ver más detalles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer bg-danger text-white text-center">
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
    <script>
        // Función para desplegar u ocultar contenido adicional
        function toggleContent(id, el) {
            var content = document.getElementById(id);
            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
                el.textContent = "Ver menos detalles";
            } else {
                content.style.display = "none";
                el.textContent = "Ver más detalles";
            }
        }
    </script>
</body>
</html>
