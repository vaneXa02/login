<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="assets/libs/css/styles.css">
    <title>Login</title>
</head>
<body>
    <form class="login-box" action="?c=login&m=auth" method="post"> 
        <h1>Login</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="email" placeholder="Username" name="email" required>
        </div>

        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <input class="btn" type="submit" name="" value="Sign In">
        <span><a href="?c=register&m=register"> <input class="btn" type="" value="Create Account"></a></span>
</form>
</body>
</html>