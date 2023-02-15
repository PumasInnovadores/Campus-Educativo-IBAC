<?php


class ControladorHome{

//Metodo que incluye la plantilla
public function ctrHome(){

    include "Views/home.php";
}

}

class ControladorLogin{

    //Metodo que incluye el login
    public function ctrLogin(){

    include "Views/Pages/Login/index.php";

}
}
?>