<?php

//me permite hacer usos de sesiones
session_start();


require_once('models/DB.php');
require_once('models/Login.php');
require_once('models/Usuario.php');

//definicion de variables metodo y controller
$controller=isset($_GET['c']) ? $_GET['c'] : 'Login';
$method=isset($_GET['m']) ? $_GET['m'] : 'login';

//llamado al controller
require_once('controllers/'.$controller.'controller.php');
$controller=$controller.'controller';

//creación dce objeto
$objeto= new $controller();
$objeto->$method();

?>
