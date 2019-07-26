<?php
include "./php/conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM employes INNER JOIN data on employes.data=data.id WHERE employes.id='$id'";
    $result = mysqli_query($conexion, $query);
 
    if (mysqli_num_rows($result)==1) {
        $row=mysqli_fetch_array($result);
        $nombre=$row['name'];
        $edad=$row['age'];
        $hijos=$row['children'];
        $puesto=$row['job'];
        $salario=$row['salary'];
        $ingreso=$row['date_admission'];
        $retiro=$row['date_retirement'];
        $newDateStart = date("m-d-Y", strtotime($ingreso));
        $newDateEnd = date("m-d-Y", strtotime($retiro));
    }
} 
else {
    echo "Not found";
}
if(isset($_POST['edit_employ'])){
    $id = $_GET['id'];
    $job = $_POST['puesto'];
    $name = $_POST['nombre'];
    $age = $_POST['edad'];
    $children = $_POST['hijos'];
    $salary = $_POST['salario'];
    $date_start = $_POST['ingreso'];
    $date_end = $_POST['retiro'];
    $query = "UPDATE data SET salary='$salary', date_admission='$date_start', date_retirement='$date_end' WHERE id='$id'";
    $result = mysqli_query($conexion, $query);
    $query2 = "UPDATE employes SET job='$job', name='$name', age='$age',children='$children' WHERE id='$id'";
    $result2 = mysqli_query($conexion, $query2);

    $_SESSION['mensaje'] = "Datos modificados datos";
$_SESSION['mensaje_tipo'] = "greenAlert";
header("Location:index.php");
}


?>
<?php include "./php/header.php"; ?>
<div class="contentFormHvg">
            <form action="edit_employ.php?id=<?php echo $_GET['id'];?>" method="POST" class="formHvg">
                <select name="puesto" id="puesto" default="<?php echo $puesto?>">
                    <option value="1">
                        Programador
                    </option>
                    <option value="2">
                        Tecnico
                    </option>
                    <option value="3">
                        Obrero
                    </option>
                </select>
                <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>" placeholder="Nombre">
                <input type="text" id="edad" name="edad" value="<?php echo $edad?>"  placeholder="Edad" />
                <input type="text" id="hijos" name="hijos" value="<?php echo $hijos?>"  placeholder="Cantidad de hijos" />
                <input type="text" id="salario" name="salario" value="<?php echo $salario?>"  placeholder="Salario" />
                <input type="date" id="ingreso" name="ingreso" value="<?php echo $newDateStart?>"  placeholder="Ingreso" />
                <input type="date" id="retiro" name="retiro" value="<?php echo $newDateEnd?>"  placeholder="Retiro" />
                <button class="btn" name="edit_employ" type="submit">EDITAR</button>
            </form>
        </div>
        <?php include "./php/footer.php"; ?>
