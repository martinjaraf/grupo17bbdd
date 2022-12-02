<html-->
    <?php include('templates/header2.php'); ?>
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
                        <form align="center" action="consultas/consulta_usuario.php" method="post"
                            class="subtitle has-text-white" style="opacity: 1.2">
                            <input type="text" class="form-control text-center" placeholder="Usuario"
                                name="nombre_usuario" required>
                            <br>

                            <div class="form-row">

                                <div class="col">
                                    <input type="password" name="contrasena_usuario" class="form-control text-center"
                                        placeholder="Contraseña" required id="myInput">
                                </div>

                                <div class="col">

                                    <input class="checkbox" type="checkbox" onclick="myFunction()"> Mostrar
                                    contraseña
                                    <script>
                                    function myFunction() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                    </script>

                                </div>
                            </div>

                            <br>
                            <div align="mensaje">
                                <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                                <center>
                                    <h4 class="subtitle has-text-white" style="opacity: 1.2">
                                        Los datos ingresados no son correctos </h4>
                                </center>
                                <?php endif; ?>
                            </div>
                            <br> <input type="submit" value="Iniciar sesion" class="btn btn-secondary mb-6">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>