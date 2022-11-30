<?php include('header.php');   ?>

<?php 
    require("../config/conexion.php");

    function generateRandomString($length = 10) { 
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
    }


    $query = "CREATE TABLE usuarios (id_usuario int, nombre varchar(100), contrasena varchar(100), tipo varchar(30), id_antiguo int, PRIMARY KEY (id_usuario));";
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
        $name = $p[1];
        $name = strtolower(str_replace(" ", "_", $name));
        $query = "INSERT INTO usuarios VALUES ($id, '$name', '$password', 'productora', $p[0]);";
        $result = $db -> prepare($query);
        $result -> execute();
        $id += 1;
    }

    foreach ($artistas as $a) {
        $password = generateRandomString();
        $name = $a[1];
        $name = strtolower(str_replace(" ", "_", $name));
        $query = "INSERT INTO usuarios VALUES ($id, '$a[1]', '$password', 'artista', $a[0]);";
        $result = $db -> prepare($query);
        $result -> execute();
        $id += 1;
    }
  
?>