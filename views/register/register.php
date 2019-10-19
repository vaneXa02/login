<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="assets/libs/css/styles.css">
    <title>Register</title>
</head>
<body>



    <form class="login-box" action="?c=Register&m=registro" method=post>
    <h1>Register</h1>
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Name" name="name" required>
        </div>

        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Last Name" name="Last" required>
        </div>

        <div class="textbox">
        <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="Email" name="email" required>
        </div>

        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="textbox">
            <input type="text" placeholder="text" name="text">
        </div>
        <input class="btn" type="submit" name="" value="Register">


    </form>
</body>
</html>