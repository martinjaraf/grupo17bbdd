<html-->
    <?php include('templates/header.php');   ?>

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
        <br>
        <br>
        <br>
        <div class="hero-body">
            <div class="transparent">
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <br>
                        <h1 class="title has-text-white" style="opacity: 0.8">
                            DCConciertos
                        </h1>
                        <br>
                        <h2 class="subtitle has-text-white" style="opacity: 1.2">
                            Presiona importar para importar (valga la redundancia) los usuarios
                        </h2>
                        <br>

                        <? 
                        $nombre_usuario = $_POST["nombre_usuario"]; 
                        echo "Nombre ingresado: $nombre_usuario<p>"; 
                        $contrasena_usuario = $_POST["contrasena_usuario"]; 
                        echo "Contrasena ingresada: $contrasena_usuario<p>"; 

                        if ($nombre_usuario == 'hola') { 
                          	echo "No puedes entrar"; 
                        }else{ 
  	                        echo "Bienvenido"; 
                        } 
                        ?> 

                        <?php

                        require("../config/conexion.php");

                         	$query = "SELECT nombre_usuario, contrasena_usuario FROM usuarios;";
                        	$result = $db -> prepare($query);
                        	$result -> execute();
                        	$resultado = $result -> fetchAll();
                          ?>
                        <?php
                            encontrado = FALSE
                        	foreach ($resultado as $r) {
                                if $r[0] == $nombre_usuario
                          		echo "Nombre de usuario encontrado.";
                                    if $r[1] == $contrasena_usuario
                                    echo "Contrasena correcta, Bienvenid@"
                                    else 
                                    echo "Contrasena incorrecta, vuelve a intentarlo :("
                                    break
                            if not encontrado
                            echo "Nombre de usuario no encontrado"
        
                        	}
                          ?> 

    </body> 
</html>