<?php
session_start();
include('templates/header.php');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<style>
    .hero-body {
        opacity: 1;
    }

    body {
        background-image: url('https://c0.wallpaperflare.com/preview/600/388/1006/group-of-people-enjoying-concerts.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    .transparent {
        opacity: 0.6;
        background-color: black;
        width: 100%;
        height: 60%;
    }

    .container.has-text-centered {
        margin: auto;
        top: 42px;
        width: 100%;
        text-align: center;
    }

    .form-row {
        align-items: center;
    }
</style>

<?php
require("config/conexion.php");
$query = "SELECT * FROM recintos;";
$result = $db->prepare($query);
$result->execute();
$recintos = $result->fetchAll();

$query = "SELECT * FROM artistas;";
$result = $db->prepare($query);
$result->execute();
$artistas = $result->fetchAll();
?>

<body>
    <br>
    <br>
    <br>
    <div class="hero-body">
        <div class="transparent">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <br>
                    <form align="center" action="create_evento.php" method="post" class="subtitle has-text-white"
                        style="opacity: 1.2">
                        <input type="text" class="form-control text-center" placeholder="Nombre del evento"
                            name="nombre_evento" required>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <input type="date" class="form-control text-center" placeholder="Fecha de Inicio"
                                    name="fecha_inicio" required>
                            </div>
                            <div class="col">
                                <input type="date" class="form-control text-center" placeholder="Fecha de Termino"
                                    name="fecha_termino" required>
                            </div>
                        </div>
                        <br>
                        <select name="recinto" id="recinto" class="form-control text-center">
                            <option value="" disabled selected hidden>Selecciona el Recinto</option>
                            <?php
                            foreach ($recintos as $r) {
                                echo "<option value='$r[1]'>$r[1]</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <label>Artistas a Invitar</label>
                        <br>
                        <div class="custom-control custom-checkbox">
                            <?php
                            foreach ($artistas as $a) {
                                echo "<label><input type='checkbox' name='artistas[]' value='$a[1]'> $a[1]</label><br>";
                            }
                            ?>
                        </div>
                        <p align="center"><input type="submit" value="Crear /"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>