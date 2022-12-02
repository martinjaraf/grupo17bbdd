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


<body>
    <br>
    <br>
    <br>
    <div class="hero-body">
        <div class="transparent">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <br>
                    <form align="center" action=".php" method="post"
                        class="subtitle has-text-white" style="opacity: 1.2">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>