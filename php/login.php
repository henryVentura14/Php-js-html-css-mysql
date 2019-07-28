<?php
include "./conexion.php";
if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $passEcrt= sha1($pass);
    $query = "SELECT * FROM users WHERE user='$user' OR email='$user'";
    $result = mysqli_query($conexion, $query);
    $row=mysqli_fetch_array($result);

    if (($passEcrt == $row['pass'])){
        $_SESSION['loggedin'] = true;
        $_SESSION['mensaje'] = "Has iniciado sesion";
        $_SESSION['mensaje_tipo'] = "greenAlert";
        header("Location: ./../index.php");
    }if (mysqli_num_rows($result)==0) {
        $_SESSION['mensaje'] = "El usuario no existe, registrate!";
        $_SESSION['mensaje_tipo'] = "redAlert";
        header("Location: ./../signup.php");
    }
} else {
    echo "Not found";
}