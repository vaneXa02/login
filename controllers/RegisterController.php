<?php

class  RegisterController extends Usuario{
    public function register(){
        require_once('views/register/register.php');

    }
    public function registro(){
        $name=$_POST['name'];
        $last=$_POST['Last'];
        $correo=$_POST['email'];
        $password=$_POST['password'];
        $text=$_POST['text'];
        parent::registrar($name,$last,$correo,$password,$text);
        header('location:?c=register&m=register');
    }
}



?>