<?php

class LoginController extends Login{

    private $usuario;
    public function __construct()
    {
        try{
            $this->usuario = new Usuario();
        }catch(Exeption $e){

        }

    }

    public function login(){
//formulñario para iniciar sesion
        require_once('views/login/login.php');
    }

    public function register(){
//formulario para registrar 1un usuario
    }
// uncion encargada de generar la autenticacion y respectiva redireccion
    public function auth(){
        //informacion del formulario
        $correo= $_POST['email'];
        $password= $_POST['password'];
        $data=$this->usuario->requestEmail($_POST['email']);

        if($correo==$data->Correo && $password== $data->Contraseña){
            $_SESSION['USER']=$data;
           header("location:?c=administrador&m=home");
        }else{
            header("location:?c=login&m=login");
        }
        
    }
}

?>