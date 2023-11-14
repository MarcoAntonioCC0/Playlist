<?php
require_once 'model/funcionesBD.php';

//*recoge todas las canciones almacenadas en la base de datos
function getAllSongs()
{
    $conn = openConnectionDB("notabase");

    $sql = "select * from songs";

    $result = $conn->query($sql);

    closeConnection($conn);
    return $result;
}

//*recoge el nombre de la canción
function getSongByName($nombre)
{
    $conn = openConnectionDB("notabase");

    $sql = "SELECT * FROM songs WHERE name = '" . $nombre . "'";

    $resultName = $conn->query($sql);

    closeConnection($conn);
    return $resultName;

}

//*Recoge la imagen de la canción mediante el nombre
function getAlbumSongByName($nombre)
{
    $conn = openConnectionDB("notabase");
    $sql = "SELECT imagePath FROM songs WHERE name = '" . $nombre . "'";
    $imageResultList = $conn->query($sql);
    closeConnection($conn);
    return $imageResultList;

}

//*Recoge el audio de la canción mediante el nombre
function getAudioSongByName($nombre)
{
    $conn = openConnectionDB("notabase");

    $sql = "SELECT path FROM songs WHERE name = '" . $nombre . "'";

    $listaCancionesResultado = $conn->query($sql);

    closeConnection($conn);
    return $listaCancionesResultado;
}

