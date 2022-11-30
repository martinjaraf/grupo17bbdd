<html-->
    <?php include('templates/header.php');   ?>

    <style>
    body {
        background-image: url('https://www.todofondos.net/wp-content/uploads/3840x2400-Fondo-de-Pantalla-Oscuro-Fondo-Linea-Superficie.-COSAS-768x480.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;

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
    </style>

    <body>

        <br>
        <br>
        <br>
        <br>
        <h2 align="center" class="title has-text-white" style="opacity: 0.8">¡Bienvenido!</h2>
        <br>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Propuestas de eventos
        </h3>
        <form align="center" action="consultas/consulta_1.php" method="post">
            <input type="submit" value="Aceptar" class="btn btn-secondary mb-2">
            <input type="submit" value="Rechazar" class="btn btn-secondary mb-2">
        </form>
        <br>
        <br>
        <br>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2">Eventos programados
        </h3>

        <?php

require("config/conexion.php");


$query = "SELECT eventos.evento, eventos.fecha_inicio, eventos.recinto FROM eventos WHERE eventos.artista = 'Paulo Londra';";
	$result = $db -> prepare($query);
	$result -> execute();
	$pokemones = $result -> fetchAll();
  ?>
        <div class="container2" align="center">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Evento</th>
                        <th>Fecha</th>
                        <th>Recinto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
	foreach ($pokemones as $pokemon) {
  		echo "<tr> <td>$pokemon[0]</td> <td>$pokemon[1]</td> <td>$pokemon[2]</td></t
        r>";
	}
  ?>
                </tbody>
            </table>
        </div>

    </body>