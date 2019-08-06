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
            <h2>Buscar</h2>
        </div>
        <div class="right-nav">
            <a href="./index.php" class="link">INICIO</a>
        </div>
    </div>
    <div class="tables">
        <div class="content-form">
            <form action="search_employ.php" method="POST" class="form">
                Fecha de ingreso
                <input class="input" type="date" id="ingreso" name="ingreso">
                Fecha de retiro
                <input class="input" type="date" id="retiro" name="retiro" />
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
                $date_start = @$_POST['ingreso'];
                $date_end = @$_POST['retiro'];
                $query = "SELECT * FROM employees INNER JOIN data on employees.data=data.id  WHERE data.date_admission>='{$date_start}' AND data.date_retirement<='{$date_end}' ORDER BY employees.job ASC";

                $result = mysqli_query($conexion, $query);

                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td>
                            <?php if ($row['job'] == 1) {
                                echo "Programador";
                            }
                            ?>
                            <?php if ($row['job'] == 2) {
                                echo "Tecnico";
                            }
                            ?>
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
        </table>
    </div>
</div>
</body>
<script src="js/main.js"></script>
</body>
</html>