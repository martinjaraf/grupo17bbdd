<html-->

    <?php session_start();
    include('header.php'); ?>

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


        $query = "SELECT * FROM traslados WHERE nombre_artista = ?;";
        $result = $db->prepare($query);
        $result->execute([$nombre_artista[0]]);
        $resultado = $result->fetchAll();
        ?>
        <div class="container2" align="center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Id Traslado</th>
                        <th>Artista</th>
                        <th>Aeropuerto Salida</th>
                        <th>Aeropuerto Llegada</th>
                        <th>Hora salida</th>
                        <th>Hora llegada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $r) {
                        echo "<tr> <td>$r[0]</td> <td>$r[1]</td> <td>$r[2]</td><td>$r[3]</td> <td>$r[4]</td> <td>$r[5]</td></t
        r>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>