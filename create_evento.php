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

    <?php
    require("config/conexion.php");
    $query = "SELECT nombre FROM productora WHERE pid = ?;";
    $result = $db_2 ->prepare($query);
    $result->execute([$_SESSION['id']]);
    $nombre_productora = $result->fetch();
    $nombre = $nombre_productora[0];

    $query2 = "SELECT MAX(id_eventos) FROM eventos;";
    $result2 = $db->prepare($query2);
    $result2->execute();
    $id_eventos_A = $result2->fetch();
    $id_eventos = $id_eventos_A[0]+1;
   
    

    $nombre_evento = $_POST['nombre_evento'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $recinto = $_POST['recinto'];
    $artistas = $_POST['artistas'];
 
    foreach ($artistas as $a) {
        $insertion = "INSERT INTO eventos (id_eventos, evento, productora, artista, fecha_inicio, recinto, estado) VALUES (?,?,?,?,?,?,?);";
        $insert = $db->prepare($insertion);
        $insert->execute([$id_eventos, $nombre_evento, $nombre, $a, $fecha_inicio,$recinto, 0]); 
        /* $insert->execute([301, $nombre_evento, $nombre, 'Duki', '2022-12-18', 'Producciones Baltimore', 0]); */
        $id_eventos = $id_eventos +1;
        
    }
    ?>

    <body>
        <br>
        <br>
        <h2 class="title is-3 has-text-white" align="center">¡¡Nuevo Evento Creado!!</h2>
        <br>
        <div align="center">
            <?php
            echo "<h3 align='center' class='has-text-white'>$nombre_evento</h3>";
            echo "<p class='has-text-white'>Lugar: $recinto</p>";
            echo "<p class='has-text-white'>Fecha: $fecha_inicio</p>";
            ?>
            <br>
            <p class='has-text-white'>Ahora debes esperar la confirmación de los artistas invitados</p>
            <br>
            <div>
                <a href="index_productoras.php" class="btn btn-secondary mb-6" align="center">Volver</a>
            </div>
        </div>
    </body>