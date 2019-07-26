<?php
include "./conexion.php";
if (isset($_POST['insert_employ'])) {
    $job = $_POST['puesto'];
    $name = $_POST['nombre'];
    $age = $_POST['edad'];
    $children = $_POST['hijos'];
    $salary = $_POST['salario'];
    $date_start = $_POST['ingreso'];
    $date_end = $_POST['retiro'];
    $query = "INSERT INTO `data` (date_admission, date_retirement, salary, job) VALUES ('$date_start', '$date_end', '$salary','$job')";
    $query2 = "INSERT INTO `employes` (name, age, children) VALUES ('$name', '$age', '$children');";
    $result = mysqli_query($conexion, $query);
    $result2 = mysqli_query($conexion, $query2);
    if (!$result || !$result2) {
        echo "Query Failed";
    }
    $_SESSION['mensaje']="Un empleado ha sido insertado";
    $_SESSION['mensaje_tipo']="greenAlert";
    header("Location:../index.php");
} else {
    echo "Not found";
}
