<?php include "./php/conexion.php"; ?>
<?php
if (!$_SESSION['loggedin']) {
    header("Location:./signup.php");
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
<div class="container">
    <div class="navbar">
        <div class="left-nav">
            <h2>HVG TEST</h2>
        </div>
        <div class="right-nav">
            <a href="search_employ.php" class="link">BUSCAR</a>
            <a href="landing_page.php" class="link">SALIR</a>
        </div>
    </div>
    <div class="tables">
        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="<?= $_SESSION['mensaje_tipo'] ?>"><?= $_SESSION['mensaje'] ?></div>
        <?php } ?>
        <div class="content-form">
            <form action="./php/insert_employ.php" onsubmit="EmployValidate()" method="POST" class="form">
                <select class="select" name="puesto" id="puesto">
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
                <input class="input" type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input class="input" type="text" id="edad" name="edad" placeholder="Edad" />
                <input class="input" type="text" id="hijos" name="hijos" placeholder="Cantidad de hijos" />
                <input class="input" type="text" id="salario" name="salario" placeholder="Salario" />
                <input class="input" type="date" id="ingreso" name="ingreso" placeholder="Ingreso" />
                <input class="input" type="date" id="retiro" name="retiro" placeholder="Retiro" />
                <button class="btn" name="insert_employ" id="button" type="submit">INSERTAR</button>
            </form>
        </div>
        <table width="75%" cellspacing="0" cellpadding="0">
            <thead class="thead">
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
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php if ($row['job'] == 1) {
                                echo "Programador";
                            }
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
                            <a href="edit_employ.php?id=<?php echo $row['id'] ?>" class="icon-edit" title="Editar">&#9998;</a>

                            <a href="php/delete_employ.php?id=<?php echo $row['id'] ?>" class="icon-delete" title="Eliminar">&#10005;</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                $query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id WHERE employees.job=2 ORDER BY employees.age ASC";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php if ($row['job'] == 2) {
                                echo "Tecnico";
                            }
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
                            <a href="edit_employ.php?id=<?php echo $row['id'] ?>" class="icon-edit" title="Editar">&#9998;</a>

                            <a href="php/delete_employ.php?id=<?php echo $row['id'] ?>" class="icon-delete" title="Eliminar">&#10005;</a>
                        </td>
                    </tr>
                <?php } ?>

                <?php
                $query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id WHERE employees.job=3 ORDER BY employees.age ASC";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php if ($row['job'] == 3) {
                                echo "Obrero";
                            }
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
                            <a href="edit_employ.php?id=<?php echo $row['id'] ?>" class="icon-edit" title="Editar">&#9998;</a>
                            <a href="php/delete_employ.php?id=<?php echo $row['id'] ?>" class="icon-delete" title="Eliminar">&#10005;</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
<script src="js/employ.js"></script>
</body>
</html>