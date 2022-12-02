<html-->
    <?php
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

    <?php
    require("config/conexion.php");
    $query = "SELECT nombre FROM productora WHERE pid = ?;";
    $result = $db_2 ->prepare($query);
    $result->execute([$_SESSION['id']]);
    $productora = $result->fetch();

    $query2 = "SELECT MAX(id) FROM eventos;";
    $result2 = $db -> prepare($query2);
    $result2 -> execute();
    $id_eventos = $result2->fetch() + 1;
    
    $nombre_evento = $_POST['nombre_evento'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $recinto = $_POST['recinto'];
    $artistas = $_POST['artistas'];

    foreach($artistas as $a) {
        $insertion = "INSERT INTO eventos (id_eventos, evento, productora, artista, fecha_inicio, recinto, estado) VALUES ($id_eventos, '$evento', '$productora', '$a', $fecha_inicio, '$recinto', 0);";
        $id_eventos += 1;
        $insert = $db -> prepare($insertion);
        $insert -> execute();
    }
    ?>
    <body>
        <br>
        <br>
        <h2 class="title is-3" , align="center">¡¡Nuevo Evento Creado!!</h2>
        <br>
        <div align="center">
            <?php
                echo "<h3 align='center'>$nombre_evento</h3>";
                echo "<p>Lugar: $recinto</p>";
                echo "<p>Fecha: $fecha_inicio</p>";
            ?>
            <br>
            <p>Ahora debes esperar la confirmación de los artistas invitados</p>
            <br>
            <div>
                <a href="index_productoras.php" class="btn btn-secondary mb-6" align="center">Volver</a>
            </div>
        </div>
        
    </body>

    