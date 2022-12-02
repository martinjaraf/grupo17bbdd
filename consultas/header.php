<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DCConciertos</title>
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />

</head>
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 10000000;
}
</style>
<?php
session_start();
?>
<body>
    <nav class="navbar navbar-fixed-top is-white">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../index.php">
                    <img src="logo.jpg" width="150" height="120" class="d-inline-block align-top">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span>
                    </span>
                    <span>
                    </span>
                    <span>
                    </span>
                </span>
            </div>

            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <?php if (isset($_SESSION)) {
                    if ($_SESSION['tipo'] =='artista') { ?>
                    <a class="navbar-item" href="/~grupo17/index_artistas.php">Menú artista</a>
                    <?php } ?>
                    <?php
                    if ($_SESSION['tipo'] =='productora') { ?>
                    <a class="navbar-item" href="/~grupo17/index_productoras.php">Menú productora</a>
                    <?php } ?>

                    <a class="navbar-item" href="/~grupo17/cerrar_sesion.php">Cerrar sesión</a>
                    <a class="navbar-item">
                        <?php echo $_SESSION["nombre"]; ?>
                    </a>



                    <?php } else { ?>
                    <a class="navbar-item" href="index.php">Inicio</a>
                    <a class="navbar-item" href="/~grupo17/inicio_sesion.php">Iniciar sesión</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>
<!-- 
<body>
    <nav class="navbar navbar-fixed-top is-white">
        <div class="container">
            <div class="navbar-brand"><a class=" navbar-item" href="../index.php"><img src="logo.jpg" width="150"
                        height="120" class="d-inline-block align-top"></a><span class="navbar-burger burger"
                    data-target="navbarMenu"><span></span><span></span><span></span></div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end"><a class="navbar-item" href="../index.php">Inicio</a><a class="navbar-item"
                        href="../consultas.php">Consultas</a></div>
                <div class="navbar-dropdown"><a class="navbar-item" href="../index.php">Inicio</a><a class="navbar-item"
                        href="../consultas.php">Consultas</a></div>
            </div>
        </div>
        </div>
    </nav> -->