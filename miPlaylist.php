<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SoundLoud</title>
	<meta charset="utf-8" />
	<!-- LIBRERÍAS  -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
		integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="miPlaylist.css">
</head>

<body>

	<div class="container-lg">

	<?php
	//*Header y footer
    include_once 'headerAndFooter.php'
    ?>

		<!-- botón para agregar la canción -->
		<div class="row mt-5">
			<div class="col-md-12 col-lg-6 text-center">

				<form method="POST">
					<div class="form-group">
						<input type="search" class="form-control" id="audioName" name="audioName"
							aria-describedby="nameHelp" size="40" placeholder="Busca una canción">
						<button type="submit" class="btn btn-info mt-3" id="addButton">Buscar</button>
					</div>
				</form>
				<!-- parrafo que aparece en caso de que la canción no esté en el localstorage "canción no disponible" -->
				<p id="textito"></p>
				<ul id="playlist"></ul>

				<p id="parrafito">Selecciona una canción</p>

				<div>
					<?php
					//Reproducir canción por nombre 
					require_once 'model/funcionesBD.php';
					require_once 'controller/funciones.php';

					if (isset($_POST['audioName'])) {
						$nombre = $_POST['audioName'];
						$listaCanciones = getAudioSongByName($nombre);
						while ($row = $listaCanciones->fetch_assoc()) {
							//Este echo muestra el nombre de la canción con efecto "marquee"(en movimiento)
							echo "<marquee>Estás escuchando: " . $nombre . "</marquee>";
							//Este echo muestra el audio de la canción seleccionada desde su dirección.
							echo "<div class='row'>
						<div class='col'>
							<audio src='" . $row['path'] . "' controls></audio>
					  </div>
					 </div>";
						}
					}
					?>

				</div>

			</div>
			<dilv class="col-md-12 col-lg-6">
				<div class="d-none d-lg-block">
					<?php
					//Reproducir canción por nombre 
					require_once 'model/funcionesBD.php';
					require_once 'controller/funciones.php';

					if (isset($_POST['audioName'])) {
						$nombre = $_POST['audioName'];

						$listaImagenes = getAlbumSongByName($nombre);
						while ($row = $listaImagenes->fetch_assoc()) {
							//Este echo muestra la imagen de la canción seleccionado desde su dirección.
							echo "<div class='row' >
                                        <div class='col'>
                                            <img width='70%' height='300px' src='" . $row['imagePath'] . "'></img>
                                      </div>
                                     </div>";
						}
					}
					?>

				</div>
			</dilv>
			<!-- Div Segundo ocupa toda la fila en dispositivos pequeños y se alinea a la izquierda -->

		</div>
	</div>
</body>

</html>