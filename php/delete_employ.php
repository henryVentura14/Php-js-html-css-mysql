<?php
include "./conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM employees WHERE id='$id'";
    $result = mysqli_query($conexion, $query);
    $query2 = "DELETE FROM data WHERE id='$id'";
    $result2 = mysqli_query($conexion, $query2);
    if (!$result || !$result2) {
        die("Failed delete");
    }
    $_SESSION['mensaje'] = "Un empleado ha sido eliminado";
    $_SESSION['mensaje_tipo'] = "redAlert";
    header("Location:../index.php");
} else {
    echo "Not found";
}
