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
        <!-- para centrar imagen usamos align-items-center (dentro de una fila, en este caso, de 600px) -->
        <div class="row align-items-start">
            <div class="col"></div>
            <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1000">
                            <!--//! no estoy usando pixeles o % en :height="600"; -->
                            <img class="imgCarousel" src="resources/cats-3061372_640.jpg" class="d-block w-100" height="600" alt="img1" />
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <img class="imgCarousel" src="resources/tree-736877_640.jpg" class="d-block w-100" height="600" alt="img2" />
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <img class="imgCarousel" src="resources/tigers-591359_640.jpg" class="d-block w-100" height="600" alt="img3" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-5 align-items-center">
            <div class="col">
                <div class="card text-center">
                    <div class="card-header"> <h5>Suscripción Basic</h5></div>

                    <div class="card-body">
                        <div class="card-text">
                            Accede a toda la música de forma gratuita y crea tus listas de favoritos
                        </div>
                        <button class="btn btn-primary mt-2">Detalles</button>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header"><h5>Suscripción Premium</h5></div>

                    <div class="card-body">
                        <div class="card-text">
                        Compra música en la plataforma de los artistas emergentes
                    </div>
                        <button class="btn btn-primary mt-2">Detalles</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header"><h5>Creadores</h5></div>

                    <div class="card-body">
                        <div class="card-text">
                        Sube contenido a la plataforma y despega tu carrera musical!!!
                    </div>
                        <button class="btn btn-primary mt-2">Detalles</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- //* -->
        
    </div>
</body>

</html>