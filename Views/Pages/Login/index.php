<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="Views/Recursos/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <!--link rel="stylesheet" href="Views/Recursos/dist/css/adminlte.min.css"-->
        <link rel="stylesheet" href="Views/Pages/Login/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>CABAC</title>
    </head>
    <body>
        <form action="iniciar_sesion.php" method="POST">
            <h1>CABAC</h1>
            <hr>
            <?php
                if (isset($_GET["error"])) {
                ?>
                <p class="error">
                    <?php
                    echo $_GET["error"]
                    ?>
                </p>
            <?php
                }
            ?>
            <hr>
            <i class="fa-solid fa-user"></i>
            <label>Usuario</label>
            <input type="text" name="Usuario" placeholder="Nombre de usuario">

            <i class="fa-solid fa-unlock"></i>
            <label>Contraseña</label>
            <input type="text" name="Contrasenia" placeholder="Contraseña">
            <hr>
            <button type="submit">Acceder</button>
            <a href="crear_cuenta.php">Recuperar contraseña?</a>
        </form>
    </body>
</html>