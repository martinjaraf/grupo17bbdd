<html-->
    <?php include('../templates/header.php'); ?>

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

                        $query = "SELECT * FROM usuarios WHERE contrasena = '$contrasena_usuario';";
                        $result = $db->prepare($query);
                        $result->execute();
                        $usuario = $result->fetch();


                        if ($usuario[1] == $nombre_usuario) {
                            $_SESSION['id'] = $usuario[4];
                            $_SESSION['nombre'] = $usuario[1];
                            if ($usuario[3] == "productora") {
                                $_SESSION['productora'] = $usuario[3];
                                header('Location: ../index_productoras.php', true);
                            } else {
                                $_SESSION['artista'] = $usuario[3];
                                header('Location: ../index_artistas.php', true);
                            }
                            exit();
                        } else {
                            header('Location: ../inicio_sesion.php?error=true', true);
                            exit();
                        }
                        ?>