<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRERÍAS  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>SoundLoud</title>
</head>

<body>

    <div class="container-lg">
        <?php
        //*Header y footer
        include_once 'headerAndFooter.php'
            ?>
    </div>
    <!-- //*Formulario -->

    <div class="mt-5">

        <form class="mt-5" action="tablaLogin.php" method="post">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="" required>

            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="" required>

            <button type="submit" name="login" class="btn btn-primary">Iniciar sesión</button>
            <p>No eres cliente? Registrate <a href="register.php">aquí</a></p>
        </form>

    </div>

    <?php

    require_once 'includes/funciones.php';

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (userLogin($email, $password)) {
            header('Location: tabla.php');

            exit;
        } else {
            $error_message = "Credenciales no válidas. Por favor, inténtalo de nuevo.";
        }
    }

    ?>

</body>

</html>