<?php
//solo un usuariocon sesion iniciada puede ingresar aqui
class AdministradorController{

    public function home(){
        require_once('views/administrador/home.php');
    }

    public function profile(){

    }
}
?>