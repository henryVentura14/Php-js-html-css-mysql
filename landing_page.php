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
    <a href="#1" class="link-landing" href="">HOME</a>
    <a href="#2" class="link-landing" href="">ABOUT</a>
    <a href="#3" class="link-landing" href="">PRODUCTS</a>
    <a href="#4" class="link-landing" href="">CONTACT</a>
    </nav>
    <form class="group-nav" action="./php/login.php" method="POST">
    <input class="input-nav" name="user" type="text" placeholder="USER"/>
    <input class="input-nav" name="pass" type="password" placeholder="PASSWORD"/>
    <button class="btn-nav" type="submit" name="login">INICIAR</button>
    <a href="./signup.php" type="button" class="btn-nav">REGISTRAR</a>
    </form>
</div>
<div class="cover"></div>
<div id="1"class="home"></div>
<div id="2" class="about"></div>
<div id="3" class="products"></div>
<div id="4" class="contact"></div>
<?php include "./php/footer.php";?>