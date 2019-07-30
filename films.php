<?php include "./php/conexion.php";?>
<?php include "./php/header.php";?>
<?php
if (!$_SESSION['loggedin']) {
    header("Location:./signup.php");
}?>
<div class="navbar films">


</div>
<?php include "php/footer.php";?>