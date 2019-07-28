<?php include "./php/conexion.php";?>
<?php include "./php/header.php";?>
<?php
if (@$_SESSION['loggedin']) {
  session_destroy();
  header('location: landing_page.php');
}?>
<div class="navbarHvg landing">
    <div class="leftNavHvg">
    <a href="./landing_page.php">  <img src="./img/here.png"/></a>
        <?php if (isset($_SESSION['mensaje'])) {?>
        <div class="<?=$_SESSION['mensaje_tipo']?>"><?=$_SESSION['mensaje']?></div>
        <?php session_unset();}?>
    </div>
    <nav class="rightNavHvg">
    <a href="./landing_page.php" class="link-landing" href="">HOME</a>
    </nav>
    <form class="group-nav" action="./php/login.php" method="POST">
    <input class="input-nav" name="user" type="text" placeholder="USER"/>
    <input class="input-nav" name="pass" type="password" placeholder="PASSWORD"/>
    <button class="btn-nav" type="submit" name="login">INICIAR</button>
    <a href="./signup.php" type="button" class="btn-nav">REGISTRAR</a>
    </form>
</div>
<div class="sign_up">
<h3 class="title_signup">Formulario de registro de usuarios</h3>
<div class="contentFormCenter">
            <form action="./php/signup_proc.php" method="POST" class="formHvg">
                <input class="input" type="text" id="user" name="user" placeholder="User">
                <input class="input" type="email" id="email" name="email"  placeholder="Email" />
                <input class="input" type="password" id="pass1" name="pass1" placeholder="Password" />
                <input class="input" type="password" id="pass2" name="pass2" placeholder="Repeat password" />
                <button type="submit" class="btn" name="sign_up" type="submit">REGISTRAR</button>
            </form>
        </div>
</div>
<?php include "./php/footer.php";?>
