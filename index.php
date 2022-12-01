<html-->
    <?php include('templates/header.php'); ?>

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
            height: 50%;
        }

        .container.has-text-centered {
            margin: auto;
            top: 42px;
            width: 100%;
            text-align: center;
        }
    </style>

    <body>
        <br>
        <br>
        <br>
        <div class="hero-body">
            <div class="transparent">
                <div class="container has-text-centered">
                    <div class="column is-6 is-offset-3">
                        <br>
                        <h1 class="title has-text-white" style="opacity: 0.8">
                            DCConciertos
                        </h1>
                        <br>
                        <h2 class="subtitle has-text-white" style="opacity: 1.2">
                            Presiona importar para importar (valga la redundancia) los usuarios
                        </h2>
                        <br>
                        <a class="btn btn-secondary mb-2" href="consultas/importar_usuarios.php">Importar usuarios
                        </a>
                        <br>
                        <br> <a class="btn btn-secondary mb-2" href="index_artistas.php">Index artistas test
                        </a>
                        <br>
                        <a class="btn btn-secondary mb-2" href="sesion2.php">Inicio de Sesión
                        </a>
                    </div>

                    <script async type="text/javascript" src="../js/bulma.js"></script>
    </body>