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

        require("config/conexion.php");
        $query = "SELECT nombre FROM productora WHERE pid = ?;";
        $result = $db_2 ->prepare($query);
        $result->execute([$_SESSION['id']]);
        $nombre_productora = $result->fetch();
        $nombre = $nombre_productora[0];

        $consulta1 = "SELECT evento, recinto, fecha_inicio FROM eventos WHERE productora = '$nombre' GROUP BY evento HAVING COUNT(DISTINCT artista) = COUNT(CASE WHEN estado = 1 THEN 1 END);"; //ORDER BY fecha_inicio DESC?
        $consulta2 = "SELECT evento, recinto, fecha_inicio FROM eventos WHERE productora = '$nombre' GROUP BY evento HAVING COUNT(CASE WHEN estado = 2 THEN 1 END) = 0 AND COUNT(CASE WHEN estado = 0 THEN 1 END) > 0;";
        $consulta3 = "SELECT evento, recinto, fecha_inicio FROM eventos WHERE productora = '$nombre' GROUP BY evento HAVING COUNT(CASE WHEN estado = 2 THEN 1 END) > 0;";


        $result1 = $db->prepare($consulta1);
        $result1->execute();
        $aprobados = $result1->fetchAll();

        $result2 = $db->prepare($consulta2);
        $result2->execute();
        $en_espera = $result2->fetchAll();

        $result3 = $db->prepare($consulta3);
        $result3->execute();
        $rechazados = $result3->fetchAll();

        ?>
        <br>
        <br>
        <p class="title is-2" , align="center"> Hola
            <?php echo $nombre; ?>
        </p>


        <div class="column is-half is-offset-one-quarter">
            <h3 class="title">
                Próximos Eventos
            </h3>

            <?php
            if (empty($aprobados)) {
                echo "<p>No hay eventos programados</p>";
            } else { ?>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Recinto</th>
                    <th>Inicio</th>
                </tr>
                <?php
                foreach ($aprovados as $aprovado) {
                    echo "<tr><td>$aprovado[0]</td><td>$aprovado[1]</td><td>$aprovado[2]</td></tr>";
                }
            }
                ?>

            </table>
        </div>


        <div class="column is-half is-offset-one-quarter">
            <h3 class="title">
                Eventos en Espera
            </h3>

            <?php
            if (empty($en_espera)) {
                echo "<p>No hay eventos en espera</p>";
            } else { ?>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Recinto</th>
                    <th>Inicio</th>
                </tr>
                <?php
                foreach ($en_espera as $esperado) {
                    echo "<tr><td>$esperado[0]</td><td>$esperado[1]</td><td>$esperado[2]</td></tr>";
                }
            }
                ?>
            </table>
        </div>


        <div class="column is-half is-offset-one-quarter">
            <h3 class="title">
                Eventos Rechazados
            </h3>

            <?php
            if (empty($rechazados)) {
                echo "<p>No hay eventos rechazados</p>";
            } else {
            ?>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Recinto</th>
                    <th>Inicio</th>
                </tr>
                <?php
                foreach ($rechazados as $rechazado) {
                    echo "<tr><td>$rechazado[0]</td><td>$rechazado[1]</td><td>$rechazado[2]</td></tr>";
                }
            }
                ?>
            </table>

        </div>
        
        <div>
            <a href="form_evento.php" class="btn btn-secondary mb-6" align="center">Crear Evento</a>
        </div>

    </body>