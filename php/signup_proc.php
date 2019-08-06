<?php
include "./conexion.php";
if (isset($_POST['sign_up'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $passEcrt = sha1($pass1);
    $query = "SELECT * FROM  users WHERE user='$user' OR email='$email'";
    $result = mysqli_query($conexion, $query);
    $row = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['mensaje'] = "Este usuario ya existe";
        $_SESSION['mensaje_tipo'] = "red-alert";
        $_SESSION['time'] = time(); 
        $_SESSION['close'] = $_SESSION['time'] + (1 * 60);
        header("Location: ./../signup.php");
    } else {
        $query2 = "INSERT INTO `users` (user, email, pass) VALUES ('$user', '$email', '$passEcrt')";
        $result2 = mysqli_query($conexion, $query2);
        $_SESSION['mensaje'] = "Usuario creado";
        $_SESSION['mensaje_tipo'] = "green-alert";
        header("Location: ./../signup.php");
    }
} else {
    echo "Not found";

}
