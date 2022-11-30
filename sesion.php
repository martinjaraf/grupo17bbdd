<html-->
    <?php include('templates/header.php');   ?>

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
                        <a class="btn btn-secondary mb-2" href="consultas.php">Importar usuarios
                        </a>
                        <br>

                        <form align="center" action="consultas/consulta_tipo_nombre.php" method="post">
                        Nombre:
                        <input type="text" name="nombre_usuario">
                        <br/>
                        Contrasena:
                        <input type="text" name="contrasena_usuario">
                        <br/><br/>
                        <input type="submit" value="Buscar">
                        </form>

                        <br>
                        <a class="btn btn-secondary mb-2" href="sesion.php">Iniciar Sesión
                        </a>
                    </div>

                    <script async type="text/javascript" src="../js/bulma.js"></script>
        
    <?php
    #Primero obtenemos todos los tipos de pokemones
    require("config/conexion.php");
    $result = $db -> prepare("SELECT DISTINCT nombre FROM usuarios;");
    $result -> execute();
    $dataCollected = $result -> fetchAll();
    ?>

    <form align="center" action="consultas/consulta_tipo.php" method="post">
      Seleccinar un tipo:
      <select name="nombre">
        <?php
        #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
        foreach ($dataCollected as $d) {
          echo "<option value=$d[0]>$d[0]</option>";
        }
        ?>
      </select>
      <br><br>
      <input type="submit" value="Verificar usuario">
    </form>

</body>