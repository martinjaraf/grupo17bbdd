<html-->
    <?php
    session_start();
    include('templates/header.php'); ?>
    

    <style>
    body {
        background-image: url('https://www.todofondos.net/wp-content/uploads/3840x2400-Fondo-de-Pantalla-Oscuro-Fondo-Linea-Superficie.-COSAS-768x480.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        z-index: 1;
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
        <?php
    if ($_SESSION['id']) { ?>
        <br>
        <br>
        <br>
        <br>
        <h2 align="center" class="title has-text-white" style="opacity: 0.8">¡Bienvenido!</h2>
        <br>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Ver historial de traslados y hospedajes
        </h3>
        <div class="form-row">
            <div class="col">
                <form align="right" action="consultas/traslados.php" method="post">
                    <input type="submit" value="Traslados" class="btn btn-secondary mb-2">
                </form>
            </div>

            <div class="col">
                <form align="left" action="consultas/hospedajes.php" method="post">
                    <input type="submit" value="Hospedajes" class="btn btn-secondary mb-2">
                </form>
            </div>
        </div>



        <br>
        <br>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Propuestas de eventos

        </h3>
        <form align="center" action="consultas/consulta_1.php" method="post">
            <input type="submit" value="Aceptar" class="btn btn-secondary mb-2">
            <input type="submit" value="Rechazar" class="btn btn-secondary mb-2">
        </form>

        <br>
        <br>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2">Eventos programados
        </h3>

        <?php

        require("config/conexion.php");

        $query = "SELECT nombre_artista FROM artistas WHERE id_artista = ?;";
        $result = $db->prepare($query);
        $result-> execute([$_SESSION['id']]);
        $nombre_artista = $result->fetch();
        

        $query = "SELECT eventos.evento, eventos.fecha_inicio, eventos.recinto, entradas.asiento  FROM eventos, entradas WHERE eventos.artista = 'Paloma Mami' AND eventos.artista = entradas.artista AND eventos.fecha_inicio >= NOW() AND eventos.estado = 1; ";
        $result = $db->prepare($query);
        $result->execute([$nombre_artista[0]]);
        $eventos = $result->fetchAll();
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
        foreach ($eventos as $evento) {
            echo "<tr> <td>$evento[0]</td> <td>$evento[1]</td> <td>$evento[2]</td></t
        r>";
        }
                    ?> 
                </tbody>
            </table>
        </div>


        <?php
    } else { ?>

        }


        <div class="hero-body">

            <div class="container has-text-centered">
                <br>
                <h1 class="title has-text-white" style="opacity: 0.8">
                    No iniciaste sesión
                </h1>
            </div>
        </div>


        <?php } ?>

    </body>