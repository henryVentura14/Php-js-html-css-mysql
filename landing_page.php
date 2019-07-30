<?php include "./php/conexion.php"; ?>
<?php include "./php/header.php"; ?>
<?php
if (@$_SESSION['loggedin']) {
  session_destroy();
  header('location: landing_page.php');
} ?>
<div class="navbar landing">
  <div class="left-nav">
    <a href="./landing_page.php"> <img src="./img/here.png" /></a>
    <?php if (isset($_SESSION['mensaje'])) { ?>
      <div class="<?= $_SESSION['mensaje_tipo'] ?>"><?= $_SESSION['mensaje'] ?></div>
      <?php session_unset();
    } ?>
  </div>
  <nav class="right-nav">
    <a href="#1" class="link-landing" href="">HOME</a>
    <a href="#2" class="link-landing" href="">ABOUT</a>
    <a href="#3" class="link-landing" href="">PRODUCTS</a>
    <a href="#4" class="link-landing" href="">CONTACT</a>
    <a class="link-landing" onclick="openFunction()">USER</a>
  </nav>
  <div id="menu" class="drop-right">
    <i class="close" onclick="closeFunction()">&#9746;</i>
    <form class="group-box column" action="./php/login.php" method="POST">
      <input class="input-box" name="user" type="text" placeholder="USER" />
      <input class="input-box" name="pass" type="password" placeholder="PASSWORD" />
      <div class="group-box row">
        <button class="btn-box" type="submit" name="login">INICIAR</button>
        <a class="btn-box" href="./signup.php" role="button" type="button">REGISTRAR</a>
      </div>
    </form>
  </div>
</div>
<div class="carousel">
  <button id="retroceder" class="btn-cover-left"><i class="icon">&#8656;</i></button>
  <div id="imagen" class="cover">
    <div class="content-text-cover">
      <h2 class="text-cover">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br><br> Mollitia ducimus quaerat
        assumenda</h2>
    </div>
  </div>
  <button id="avanzar" class="btn-cover-right"><i class="icon">&#8658;</i></button>
</div>
<div id="1" class="home">
  <div class="home-left">
    <h2 class="title-home-left">Lorem ipsum dolor sit amet</h2>
    <div class="hr"></div>
    <h4 class="sub-title-home-left">Lorem ipsum dolor sit amet</h4>
    <p class="text-home-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nam rerum? Sit
      necessitatibus sed in ipsum debitis soluta assumenda, molestias architecto cum, vero ratione ducimus! Aut
      laudantium sed illum iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et minima obcaecati dolores
      provident iusto qui explicabo inventore in voluptate ut maiores nihil nesciunt dolorum, nulla quisquam, quaerat
      nemo vel libero?</p>
  </div>
  <div class="home-right">
    <img class="img-home" src="./img/phone.png" width="600" height="300">
  </div>
</div>
<div id="2" class="about">
</div>
<div id="3" class="products"></div>
<div id="4" class="contact"></div>
<button id="to-top" onclick="topFunction()" class="to-top">Ir arriba</button>
<?php include "./php/footer.php"; ?>