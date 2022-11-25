<?php include('header.php');   ?>

<?php 
    require("../config/conexion.php");

    function generateRandomString($length = 10) { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    }


    $query = "CREATE TABLE usuarios (id_usuario int, nombre varchar(100), contrasena varchar(100), tipo varchar(30), PRIMARY KEY (id_usuario));";
    $result = $db -> prepare($query);
    $result -> execute();
    
    $consulta = "SELECT * FROM productora;";
    $result = $db_2 -> prepare($consulta);
	$result -> execute();
	$productoras = $result -> fetchAll();

    $consulta = "SELECT * FROM artistas;";
    $result = $db -> prepare($consulta);
	$result -> execute();
	$artistas = $result -> fetchAll();

    $id = 0;
    foreach ($productoras as $p) {
        $password = generateRandomString();
        $query = "INSERT INTO usuarios VALUES ($id, '$p[1]', '$password', 'productora');";
        $result = $db -> prepare($query);
        $result -> execute();
        $id += 1;
    }

    foreach ($artistas as $a) {
        $password = generateRandomString();
        $query = "INSERT INTO usuarios VALUES ($id, '$a[1]', '$password', 'artista');";
        $result = $db -> prepare($query);
        $result -> execute();
        $id += 1;
    }
  
?>