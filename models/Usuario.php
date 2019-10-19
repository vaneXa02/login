<?php

class Usuario extends DB{

    public function requestEmail($email){

        try{
            $stm=parent::conectar()->prepare("SELECT * FROM usuario WHERE Correo = ? ");
            $stm->bindParam(1,$email,PDO::PARAM_STR);
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exeption $e){
            die($e->getMessage());
        }
    }
    public function registrar($name,$last,$email,$password,$text){
        try{
            $stm=parent::conectar()->prepare("INSERT INTO usuario (Nombres,Apellidos, Correo, Contraseña, Descripcion) VALUES ('$name','$last','$email','$password', '$text')");
            $stm->execute();
        }catch (Exception $error){
            die('Error Found '.$error->getMessage());
        }
    }
    
}

?>