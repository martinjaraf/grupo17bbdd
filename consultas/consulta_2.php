<html-->
    <?php include('header.php');   ?>

    <style>
    body {
        background-image: url('https://www.todofondos.net/wp-content/uploads/3840x2400-Fondo-de-Pantalla-Oscuro-Fondo-Linea-Superficie.-COSAS-768x480.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .title {}

    .subtitle {}

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
    </style>


    <body>
        <br>
        <br>
        <br>

        <?php

require("../config/conexion.php");

    $nombre = $_POST["nombre_artista"];
 	$query = "SELECT entradas.artista, COUNT(entradas.asiento) FROM entradas WHERE UPPER(entradas.artista) LIKE UPPER('%$nombre%') GROUP BY artista;";
	$result = $db -> prepare($query);
	$result -> execute();
	$resultado = $result -> fetchAll();
  ?>
        <div class="container2" align="center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad entradas que ha dado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
	foreach ($resultado as $r) {
  		echo "<tr> <td>$r[0]</td> <td>$r[1]</td></t
        r>";
	}
  ?>
                </tbody>
            </table>
        </div>
    </body>