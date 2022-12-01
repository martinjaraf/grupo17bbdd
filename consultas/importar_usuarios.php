<?php include('header.php'); ?>

<?php
require("../config/conexion.php");

function generateRandomString($length = 10)
{
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}


$query = "CREATE TABLE usuarios (id_usuario int, nombre varchar(100), contrasena varchar(100), tipo varchar(30), id_antiguo int, PRIMARY KEY (id_usuario));";
$result = $db->prepare($query);
$result->execute();

$consulta = "SELECT * FROM productora;";
$result = $db_2->prepare($consulta);
$result->execute();
$productoras = $result->fetchAll();

$consulta = "SELECT * FROM artistas;";
$result = $db->prepare($consulta);
$result->execute();
$artistas = $result->fetchAll();

$id = 0;
foreach ($productoras as $p) {
    $password = generateRandomString();
    $name = $p[1];
    $name = strtolower(str_replace(" ", "_", $name));
    $query = "INSERT INTO usuarios VALUES ($id, '$name', '$password', 'productora', $p[0]);";
    $result = $db->prepare($query);
    $result->execute();
    $id += 1;
}

foreach ($artistas as $a) {
    $password = generateRandomString();
    $name = $a[1];
    $name = strtolower(str_replace(" ", "_", $name));
    $query = "INSERT INTO usuarios VALUES ($id, '$name', '$password', 'artista', $a[0]);";
    $result = $db->prepare($query);
    $result->execute();
    $id += 1;
}
header('Location: ../index.php', true);
?>
<style>
.hero-body {
    opacity: 1;
}

body {
    background-image: url('https://c0.wallpaperflare.com/preview/600/388/1006/group-of-people-enjoying-concerts.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

.transparent {
    opacity: 0.6;
    background-color: black;
    width: 100%;
    height: 50%;
}

.container.has-text-centered {
    margin: auto;
    top: 42px;
    width: 100%;
    text-align: center;
}
</style>

<body>
    <h1 class="title has-text-white" style="opacity: 0.8">Se realizo con exito la importacion de usuarios!</h1>
    <a class="btn btn-secondary mb-2" href="../index.php">Volver Inicio</a>
</body>