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
        <h2 align="center" class="title has-text-white" style="opacity: 0.8">Consulta 1</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.8">Listado del nombre y teléfono de
            contacto de todos los artistas</h3>
        <form align="center" action="consultas/consulta_1.php" method="post">
            <input type="submit" value="Ver" class="btn btn-secondary mb-2">
        </form>
        <br>
        <br>


        <h2 align=" center" class="title has-text-white" style="opacity: 0.7">Consulta 2</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Escriba el nombre o id del artista
            y
            obtendrá el número de entradas de
            cortesía
            que
            ha
            otorgado
        </h3>


        <form align="center" action="consultas/consulta_2.php" method="post" class="subtitle has-text-white"
            style="opacity: 1.2">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="text" class="form-control text-center" placeholder="Nombre artista"
                        name="nombre_artista">
                </div>
            </div>
            <br />
            <input type="submit" value="Buscar" class="btn btn-secondary mb-6">
        </form>

        <br>
        <br>

        <h2 class="title has-text-white" style="opacity: 0.7" align="center">Consulta 3</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Escriba el nombre o id del artista
            y
            obtendrá la información del último tour </h3>
        <form align="center" action="consultas/consulta_3.php" method="post" class="subtitle has-text-white"
            style="opacity: 1.2">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="text" class="form-control text-center" placeholder="Nombre artista"
                        name="nombre_artista">
                </div>
            </div>
            <br />
            <input type="submit" value="Buscar" class="btn btn-secondary mb-2">
        </form>


        <br>
        <br>

        <h2 class="title has-text-white" style="opacity: 0.7" align="center">Consulta 4</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Escriba el nombre o id del tour y
            obtendrá los países que serán visitados en
            el
            tour
        </h3>
        <form align="center" action="consultas/consulta_4.php" method="post" class="subtitle has-text-white"
            style="opacity: 1.2">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="text" class="form-control text-center" placeholder="Nombre tour" name="nombre_tour">
                </div>
            </div>
            <br />
            <input type="submit" value="Buscar" class="btn btn-secondary mb-2">
        </form>





        <br>
        <br>

        <h2 class="title has-text-white" style="opacity: 0.7" align="center">Consulta 5</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Escriba el nombre o id del artista
            y
            obtendrá todas las productoras con las
            que
            ha
            trabajado
        </h3>
        <form align="center" action="consultas/consulta_5.php" method="post" class="subtitle has-text-white"
            style="opacity: 1.2">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="text" class="form-control text-center" placeholder="Nombre artista"
                        name="nombre_artista">
                </div>
            </div>
            <br />
            <input type="submit" value="Buscar" class="btn btn-secondary mb-2">
        </form>


        <br>
        <br>

        <h2 class="title has-text-white" style="opacity: 0.7" align="center">Consulta 6</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2"> Escriba el nombre o id del artista
            y
            obtendrá los hoteles en los que
            se ha hospedado y cuantas veces se ha hospedado en cada uno
        </h3>
        <form align="center" action="consultas/consulta_6.php" method="post" class="subtitle has-text-white"
            style="opacity: 1.2">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="text" class="form-control text-center" placeholder="Nombre artista"
                        name="nombre_artista">
                </div>
            </div>
            <br />
            <input type="submit" value="Buscar" class="btn btn-secondary mb-2">
        </form>



        <br>
        <br>
        <h2 class="title has-text-white" style="opacity: 0.7" align="center">Consulta 7</h2>
        <h3 align="center" class="subtitle has-text-white" style="opacity: 1.2">Artista que ha entregado la mayor
            cantidad de entradas de cortesía </h3>
        <form align="center" action="consultas/consulta_7.php" method="post">
            <input type="submit" value="Ver" class="btn btn-secondary mb-2">
        </form>
        <br>
        <br>
    </body>