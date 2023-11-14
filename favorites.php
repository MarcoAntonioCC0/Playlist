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
<div class="row mt-5">
			<div class="col">

				<form method="POST">
					<div class="form-group">
						<input type="search" class="form-control" id="songName" name="songName"
							aria-describedby="nameHelp" placeholder="Buscar por nombre">
					</div>
				</form>
			</div>
		</div>
		<div class="row text-center">
			<!-- gy- es un espaciado entre elementos. Funciona como padding  -->
			<div class="col gy-5">
				<table class="table">
					<thead style="border-color: #0dcaf0">
						<tr">
							<th class="text-info" scope="col">Nombre</th>
							<th class="text-info" scope="col">Artista</th>
							<th class="text-info" scope="col">Género</th>
							<th class="text-info" scope="col">Album</th>
							<th class="text-info" scope="col">Fecha de lanzamiento</th>
							</tr>
					</thead>
					<tbody>
						<?php
						require_once 'model/funcionesBD.php';
						require_once 'controller/funciones.php';
						if (isset($_POST['songName'])) {
							$nombre = $_POST['songName'];
							$resultName = getSongByName($nombre);
							foreach ($resultName as $cancion) {
								echo '<tr>
				
				<td> ' . $cancion['name'] . '</td>
				<td> ' . $cancion['artist'] . '</td>
				<td> ' . $cancion['genre'] . '</td>
				<td> ' . $cancion['album'] . '</td>
				<td> ' . $cancion['release_date'] . '</td>
				</tr>
				';
							}

						} else {
							require_once 'model/funcionesBD.php';
							require_once 'controller/funciones.php';
							$result = getAllSongs();

							foreach ($result as $cancion) {

								echo '<tr>
					<td> ' . $cancion['name'] . '</td>
					<td> ' . $cancion['artist'] . '</td>
					<td> ' . $cancion['genre'] . '</td>
					<td> ' . $cancion['album'] . '</td>
					<td> ' . $cancion['release_date'] . '</td>
				</tr>
				';
							}
						}
						?>
					</tbody>
				</table>


			</div>
		</div>


    </div>
</body>
</html>