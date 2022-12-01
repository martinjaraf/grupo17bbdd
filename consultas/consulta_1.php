<html-->
    <?php include('header.php');   ?>

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


 	$query = "ELECT id_artista, nombre_artista, contacto FROM artistas;";
	$result = $db -> prepare($query);
	$result -> execute();
	$resultado = $result -> fetchAll();
  ?>
        <div class="container2" align="center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Artista</th>
                        <th>Número de teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
	foreach ($resultado as $r) {
  		echo "<tr> <td>$r[0]</td> <td>$r[1]</td> <td>$r[2]</td></t
        r>";
	}
  ?>
                </tbody>
            </table>
        </div>
    </body>