<html-->
    <?php include('header.php'); ?>

    <style>
    body {
        background-image: url('https://www.todofondos.net/wp-content/uploads/3840x2400-Fondo-de-Pantalla-Oscuro-Fondo-Linea-Superficie.-COSAS-768x480.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .transparent {
        opacity: 0.9;
        background-color: black;
        width: 100%;
        height: 100%;
    }

    .container.has-text-centered {
        margin: auto;
        top: 42px;
        text-align: center;
        width: 100%;
    }

    .th {
        position: sticky;
        top: 0;
    }
    </style>


    <body>
        <br>
        <br>
        <br>

        <?php

        require("../config/conexion.php");

        $query = "SELECT nombre_artista FROM artistas WHERE id_artista = ?;";
        $result = $db->prepare($query);
        $result->execute([$_SESSION['id']]);
        $nombre_artista = $result->fetch();
        $nombre = $nombre_artista[0];
        
        $evento = $_POST['rechazado'];

        $query = "UPDATE eventos SET estado = 2 WHERE artista = '$nombre' AND evento = '$evento';";
        $result = $db->prepare($query);
        $result->execute();

        
        ?>
        <br>
        <div align="center">
            <p class='has-text-white'>Se rechazó con éxito</p>
            <br>
            <a href="../index_artistas.php" class="btn btn-secondary mb-6">Volver</a>
        </div>

    </body>