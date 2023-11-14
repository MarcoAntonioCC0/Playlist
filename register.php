
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
    <title>¡Registrate!</title>
</head>

<body>
    <div class="container-lg">
    <?php
        //*Header y footer
        include_once 'headerAndFooter.php'
    ?>

    <?php
    require_once 'includes/funciones.php';

    if (isset($_POST['create'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Validar y registrar al usuario
        $result = userRegister($nombre, $email, $password);
        
        if ($result === true) {
            echo "<div class='row justify-content-center'><div class='col-6'><h5 style='color:green;'>¡Registrado con éxito!</h5></div></div>";
        } else {
            echo "<div class='row justify-content-center'><div class='col-6'><h5 style='color:red;'>Error al registrar: $result</h5></div></div>";
        }
    }
    
    ?>
    <!-- //*Registrarse  -->

    <form class="mt-5" action="tablaRegister.php" method="post">
        <label for="username" class="form-label">Nombre</label>
        <input type="text" class="" name="nombre" required>

        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="" name="email" required>

        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="" name="password" required>
        <button type="submit" name="create" class="btn btn-primary">Registrarse</button>
    </form>
    </div>

</body>

</html>
