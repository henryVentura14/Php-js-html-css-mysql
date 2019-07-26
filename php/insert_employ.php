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

    $query = "INSERT INTO `data` (date_admission, date_retirement, salary, job, reg_date) VALUES ('$date_start', '$date_end', '$salary','$job',current_timestamp())";
    $result = mysqli_query($conexion, $query);
    $id = mysqli_insert_id( $conexion);
    mysqli_free_result( $result);
    $query3 = "INSERT INTO `employees` (name, age, children, job, data, reg_date) VALUES ('$name', '$age', '$children', '$job', '$id', current_timestamp())";
    $result3 = mysqli_query($conexion, $query3);
    if (!$result || !$result3) {
        echo "Query Failed";
    }
    $_SESSION['mensaje'] = "Un empleado ha sido insertado";
    $_SESSION['mensaje_tipo'] = "greenAlert";
    header("Location:../index.php");
} else {
    echo "Not found";
}
