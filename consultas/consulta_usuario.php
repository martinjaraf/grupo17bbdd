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

                        <?php 
                        session_start();

                        $nombre_usuario = $_POST["nombre_usuario"]; 
                        echo "<p>Nombre ingresado: $nombre_usuario</p>"; 
                        $contrasena_usuario = $_POST["contrasena_usuario"]; 
                        echo "<p>Contrasena ingresada: $contrasena_usuario</p>"; 

                        require("../config/conexion.php");

                        $query = "SELECT * FROM usuarios WHERE nombre=$nombre_usuario;";
                        $result = $db -> prepare($query);
                        $result -> execute();
                        $usuario = $result->fetchAll();

                        if ($usuario && $contrasena_usuario == $usuario[2]) {
                            $_SESSION['uid'] = $usuario[0];
                            $_SESSION['nombre_usuario'] = $usuario[1];
                            header('Location: index_artistas.php', true);
                            exit();
                        }
                        elseif ($usuario) {
                            header('Location: consulta_usuario.php?message=Clave+Incorrecta', true);
                            exit();
                        }
                        else {
                            header('Location: ../index_artistas.php', true);
                            exit();
                        }
                        ?>

                        foreach ($resultado as $r) {
                        if $r[0] == $nombre_usuario
                        echo "Nombre de usuario encontrado.";
                        if $r[1] == $contrasena_usuario
                        echo "Contrasena correcta, Bienvenid@"
                        else
                        echo "Contrasena incorrecta, vuelve a intentarlo :("
                        break
                        if not $encontrado
                        echo "Nombre de usuario no encontrado"
                        }

                        if ($nombre_usuario == 'hola') {
                        echo "No puedes entrar";
                        }else{
                        echo "Bienvenido";
                        }
                        ?>

    </body>

    </html>