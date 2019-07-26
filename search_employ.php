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
                <form class="formHvg">
                    Fecha de ingreso
                    <input type="date" id="ingreso" name="ingreso">
                    Fecha de retiro
                    <input type="date" id="retiro" name="retiro" />
                    <button class="btn" type="submit">BUSCAR</button>
                </form>
            </div>
            <table width="65%" cellspacing="0" cellpadding="0">
                <thead>
                    <td>
                        puesto
                    </td>
                    <td>
                        nombre
                    </td>
                    <td>
                        fecha de ingreso
                    </td>
                    <td>
                        fecha de retiro
                    </td>
                </thead>
                <tr>
                    <td rowspan="3">
                        <p>Programadores</p>
                    </td>

                    <td>
                        <p>Alex</p>
                    </td>
                    <td>
                        <p>12-12-1233</p>
                    </td>
                    </td>
                    <td>
                        <p>12-12-1444</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Henry</p>
                    </td>
                    <td>
                        <p>12-12-1313</p>
                    </td>
                    <td>
                        <p>12-12-1555</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <p>Jose</p>
                    </td>
                    <td>
                        <p>12-12-1555</p>
                    </td>
                    <td>
                        <p>12-12-1555</p>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td rowspan="3">
                        <p>Obreros</p>
                    </td>

                    <td>
                        <p>Luis</p>
                    </td>
                    <td>
                        <p>12-12-1313</p>
                    </td>
                    <td>
                        <p>12-12-1313</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <p>Fernando</p>
                    </td>
                    <td>
                        <p>12-12-3131</p>
                    </td>
                    <td>
                        <p>12-12-3131</p>
                    </td>
                </tr>
                <tr>

                    <td>
                        <p>Luis</p>
                    </td>
                    <td>
                        <p>12-12-4213</p>
                    </td>
                    <td>
                        <p>12-12-1314</p>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">
                        <p>Tecticos</p>
                    </td>

                    <td>
                        <p>Henry</p>
                    </td>
                    <td>
                        <p>03-03-1319</p>
                    </td>
                    <td>
                        <p>03-03-1319</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Jose</p>
                    </td>
                    <td>
                        <p>04-04-2342</p>
                    </td>
                    <td>
                        <p>04-04-2342</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Luis</p>
                    </td>
                    <td>
                        <p>01-01-2134</p>
                    </td>
                    <td>
                        <p>01-01-2139</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
<?php include "./php/footer.php";?>

