<?php
    include "Controller/plantillaController.php";
    session_start();
    include("conexion.php");
    

    if (isset($_POST["Usuario"]) && isset($_POST["Contrasenia"])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $Usuario = validate($_POST["Usuario"]);
        $Contrasenia = validate($_POST["Contrasenia"]);

        if (empty($Usuario) or empty($Contrasenia)){
            header("Location: index.php?error=Acceso inválido. Por favor, inténtelo otra vez");
            exit();
        }else {
            //$Contrasenia = md5($Constrasenia);
            $Sql = "SELECT * FROM TBL_MS_USUARIO WHERE usuario = '$Usuario' AND Contraseña = '$Contrasenia'";
            $Result = mysqli_query($conexion, $Sql);

            if (mysqli_num_rows($Result) === 1) {
                $Row = mysqli_fetch_assoc($Result);
                if ($Row["usuario"] === $Usuario && $Row["Contraseña"] === $Contrasenia) {
                    $_SESSION["Usuario"] = $Row["usuario"];
                    //$_SESSION["Nombre_usuario"] = $Row["NOMBRE_USUARIO"];
                    //$_SESSION["Id_usuario"] = $Row["ID_USUARIO"];
                    header("Location:home.php");
                    exit();
                }else {
                    header("Location: index.php?error=Acceso inválido. Por favor, inténtelo otra vez");
                    exit();
                }
            }else {
                header("Location: index.php?error=Acceso inválido. Por favor, inténtelo otra vez");
                exit();
            }
        }
    }else {
        header("Location:home.php");
        exit();
    }
    