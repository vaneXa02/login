<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/css/styles.css">
    <title>Document</title>
</head>
<body>
    <center><h1 style="color:#4caf50">Bienvenido</h1>
    <i class="fa fa-user" aria-hidden="true"></i>
    <p><?php echo $_SESSION['USER']->Nombres; ?> </p>
    <a href=""></a>Ver Perfil  <a href=""> Cerrar sesión</a></center>
</body>
</html>