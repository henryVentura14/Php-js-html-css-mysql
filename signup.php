<?php include "./php/conexion.php"; ?>
<?php
if (@$_SESSION['loggedin']) {
    session_destroy();
    header('location: landing_page.php');
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My capacity test</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/landing.css">
    <link rel="icon" type="image/png" href="img/skills.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar landing">
        <div class="left-nav">
            <a href="./landing_page.php"> <img src="./img/here.png" /></a>
            <?php if (isset($_SESSION['mensaje'])) { ?>
                <div class="<?= $_SESSION['mensaje_tipo'] ?>"><?= $_SESSION['mensaje'] ?></div>
                <?php session_unset();
            } ?>
        </div>
        <nav class="right-nav">
            <a href="./landing_page.php" class="link-landing" href="">HOME</a>
        </nav>
        <form class="group-input" action="./php/login.php" method="POST">
            <input class="input-nav" name="user" type="text" placeholder="USER" />
            <input class="input-nav" name="pass" type="password" placeholder="PASSWORD" />
            <button class="btn-nav" type="submit" name="login">INICIAR</button>
            <a href="./signup.php" type="button" class="btn-nav">REGISTRAR</a>
        </form>
    </div>
    <div class="sign_up">
        <h3 class="title-signup">Formulario de registro de usuarios</h3>
        <div class="center-form">
            <form action="./php/signup_proc.php" onsubmit="SignupValidate()" method="POST" class="form">
                <input class="input" type="text" id="user" name="user" placeholder="User">
                <label id="userValid" class="validate" for="user">El campo no debe ir vacío</label>
                <input class="input" type="email" id="email" name="email" placeholder="Email" />
                <label id="emailValid" class="validate" for="email">Debe escribir un correo válido</label>
                <input class="input" type="password" id="pass1" name="pass1" placeholder="Password" />
                <label id="passValid2" class="validate">El campo no debe ir vacío</label>
                <input class="input" type="password" id="pass2" name="pass2" placeholder="Repeat password" />
                <label id="passValid" class="validate">Las contraseñas no coinciden</label>
                <label id="passValid3" class="validate">El campo no debe ir vacío</label>
                <button type="submit" class="btn" name="sign_up">REGISTRAR</button>
            </form>
        </div>
    </div>
    <script src="js/signup.js"></script>
</body>

</html>