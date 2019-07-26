<?php include "./php/conexion.php";?>
<?php include "./php/header.php";?>
    <div class="containerHvg">
        <div class="navbarHvg">
            <div class="leftNavHvg">
            <h2>Buscar</h2>
        </div>
            <div class="rightNavHvg">
                <a href="./index.php" class="link">INICIO</a>
            </div>
        </div>
        <div class="tablesHvg">
            <div class="contentFormHvg">
                <form action="search_employ.php" method="POST" class="formHvg">
                    Fecha de ingreso
                    <input type="date" id="ingreso" name="ingreso">
                    Fecha de retiro
                    <input type="date" id="retiro" name="retiro" />
                    <button class="btn" name="search_employ" type="submit">BUSCAR</button>
                </form>
            </div>
            <table width="75%" cellspacing="0" cellpadding="0">
            <thead>
                <td>
                    Puesto
                </td>
                <td>
                    Edad
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Hijos
                </td>
                <td>
                    Salario
                </td>
                <td>
                    Fecha de ingreso
                </td>
                <td>
                    Fecha de retiro
                </td>
                <td>
                    Opción
                </td>
            </thead>
            <tbody>
                <?php
    $date_start = $_POST['ingreso'];
    $date_end = $_POST['retiro'];
    $query = "SELECT * FROM employes INNER JOIN data on employes.data=data.id  WHERE data.date_admission>='{$date_start}' AND data.date_retirement<='{$date_end}' ORDER BY employes.job ASC";

    $result = mysqli_query($conexion, $query);

while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td>
                        <?php if ($row['job'] == 1) {
    echo "Programador";}
    ?>
                             <?php if ($row['job'] == 2) {
        echo "Tecnico";}
    ?>
                             <?php if ($row['job'] == 3) {
        echo "Obrero";}
    ?>
                    </td>
                    <td>
                        <?php echo $row['age'] ?>
                    </td>
                    <td>
                        <?php echo $row['name'] ?>
                    </td>
                    <td>
                        <?php echo $row['children'] ?>
                    </td>
                    <td>
                        <?php echo $row['salary'] ?>
                    </td>
                    <td>
                        <?php echo $row['date_admission'] ?>
                    </td>
                    <td>
                        <?php echo $row['date_retirement'] ?>
                    </td>
                    <td>
                        <a href="edit_employ.php?id=<?php echo $row['id'] ?>" class="iconEdit" title="Editar">&#9998;</a>

                        <a href="php/delete_employ.php?id=<?php echo $row['id'] ?>" class="iconDelete" title="Eliminar">&#10005;</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body>
<?php include "./php/footer.php";?>

