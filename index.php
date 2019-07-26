<?php include "./php/conexion.php";?>
<?php include "./php/header.php";?>

<div class="containerHvg">
    <div class="navbarHvg">
        <div class="leftNavHvg">
            <h2>HVG TEST</h2>
        </div>
        <div class="rightNavHvg">
            <a href="search_employ.php" class="link">BUSCAR</a>
        </div>
    </div>
    <div class="tablesHvg">
        <?php if (isset($_SESSION['mensaje'])) {?>

        <div class="<?=$_SESSION['mensaje_tipo']?>"><?=$_SESSION['mensaje']?></div>

        <?php session_unset();}?>
        <div class="contentFormHvg">
            <form action="./php/insert_employ.php" onsubmit="validarFormulario()" method="POST" class="formHvg">
                <select name="puesto" id="puesto">
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
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input type="text" id="edad" name="edad" placeholder="Edad" />
                <input type="text" id="hijos" name="hijos" placeholder="Cantidad de hijos" />
                <input type="text" id="salario" name="salario" placeholder="Salario" />
                <input type="date" id="ingreso" name="ingreso" placeholder="Ingreso" />
                <input type="date" id="retiro" name="retiro" placeholder="Retiro" />
                <button class="btn" name="insert_employ" id="button" type="submit">INSERTAR</button>
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
$query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id WHERE employees.job=1 ORDER BY employees.age ASC";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td>
                        <?php if($row['job']==1){
                            echo "Programador"; }
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
                        <a href="edit_employ.php?id=<?php echo $row['id']?>" class="iconEdit" title="Editar">&#9998;</a>

                        <a href="php/delete_employ.php?id=<?php echo $row['id']?>" class="iconDelete" title="Eliminar">&#10005;</a>
                    </td>
                </tr>
                <?php }?>
                <?php
$query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id WHERE employees.job=2 ORDER BY employees.age ASC";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td>
                        <?php if($row['job']==2){
                            echo "Tecnico"; }
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
                        <a href="edit_employ.php?id=<?php echo $row['id']?>" class="iconEdit" title="Editar">&#9998;</a>

                        <a href="php/delete_employ.php?id=<?php echo $row['id']?>" class="iconDelete" title="Eliminar">&#10005;</a>
                    </td>
                </tr>
                <?php }?>

                <?php
$query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id WHERE employees.job=3 ORDER BY employees.age ASC";
$result = mysqli_query($conexion, $query);
while ($row = mysqli_fetch_array($result)) {?>
                <tr>
                    <td>
                        <?php if($row['job']==3){
                            echo "Obrero"; }
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
                        <a href="edit_employ.php?id=<?php echo $row['id']?>" class="iconEdit" title="Editar">&#9998;</a>

                        <a href="php/delete_employ.php?id=<?php echo $row['id']?>" class="iconDelete" title="Eliminar">&#10005;</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
</div>
<?php include "php/footer.php";?>