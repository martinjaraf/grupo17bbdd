<?php
  try {
    // GRUPO 17 ENTREGA 3
    $databasename = 'grupo17e3';
    $user = 'grupo17';
    $password = 'martinalcuadrado';
    $db = new PDO("pgsql:dbname=$databasename;host=localhost;port=5432;user=$user;password=$password");

    // GRUPO 18 ENTREGA 3
    $databasename_2 = 'grupo18e3';
    $user_2 = 'grupo18';
    $password_2 = 'grupo18';
    $db_2 = new PDO("pgsql:dbname=$databasename_2;host=localhost;port=5432;user=$user_2;password=$password_2");
    
    
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>