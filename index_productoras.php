<?php session_start(); ?>
<?php include('templates/header.php'); ?>


<body>
    <?php

    require("config/conexion.php");
    $query = "SELECT nombre_artista FROM artistas WHERE id_artista = ?;";
    $result = $db->prepare($query);
    $result->execute([$_SESSION['id']]);
    $nombre_artista = $result->fetch();
    $nombre = $nombre_artista[0];

    $consulta1 = "SELECT evento.nombre, recinto.nombre, evento.fecha_inicio, evento.fecha_termino FROM productora, evento, recinto WHERE productora.nombre = '$nombre' AND productora.pid = evento.pid AND recinto.rid = evento.rid AND evento.estado = 'aprobado' ORDER BY evento.fecha_inicio DESC;";
    $consulta2 = "SELECT evento.nombre, recinto.nombre, evento.fecha_inicio, evento.fecha_termino FROM productora, evento, recinto WHERE productora.nombre = '$nombre' AND productora.pid = evento.pid AND recinto.rid = evento.rid AND evento.estado = 'en espera' ORDER BY evento.fecha_inicio DESC;";
    $consulta3 = "SELECT evento.nombre, recinto.nombre, evento.fecha_inicio, evento.fecha_termino FROM productora, evento, recinto WHERE productora.nombre = '$nombre' AND productora.pid = evento.pid AND recinto.rid = evento.rid AND evento.estado = 'rechazado' ORDER BY evento.fecha_inicio DESC;";


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

    <p class="title is-2" , align="center"> Hola
        <?php echo $nombre; ?>
    </p>


    <div class="column is-half is-offset-one-quarter">
        <h3 class="title has-text-white">
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
                <th>Término</th>
            </tr>
            <?php
            foreach ($aprovados as $aprovado) {
                echo "<tr><td>$aprovado[0]</td><td>$aprovado[1]</td><td>$aprovado[2]</td><td>$aprovado[3]</td></tr>";
            }
        }
            ?>

        </table>
    </div>


    <div class="column is-half is-offset-one-quarter">
        <h3 class="title has-text-white">
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
                <th>Término</th>
            </tr>
            <?php
            foreach ($en_espera as $esperado) {
                echo "<tr><td>$esperado[0]</td><td>$esperado[1]</td><td>$esperado[2]</td><td>$esperado[3]</td></tr>";
            }
        }
            ?>
        </table>
    </div>


    <div class="column is-half is-offset-one-quarter">
        <h3 class="title has-text-white">
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
                <th>Término</th>
            </tr>
            <?php
            foreach ($rechazados as $rechazado) {
                echo "<tr><td>$rechazado[0]</td><td>$rechazado[1]</td><td>$rechazado[2]</td><td>$rechazado[3]</td></tr>";
            }
        }
            ?>
        </table>

    </div>
</body>