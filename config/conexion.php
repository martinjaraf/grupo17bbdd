<?php
  try {
    $databasename = 'grupo17e2';
    $user = 'grupo17';
    $password = 'martinalcuadrado';
    $db = new PDO("pgsql:dbname=$databasename;host=localhost;port=5432;user=$user;password=$password");
    
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>