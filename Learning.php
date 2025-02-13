<?php
session_start();
if (!empty($_SESSION["name"])) {
  header("loaction: ./intranet.php");
} else {
  if (
    (time() - $_SESSION['time']) >
    40
  ) {
    header("location: ./intranet.php");
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./IMG/x.png" />
  <title>Learning</title>

  <!--STYLE ICON-->
  <link rel="stylesheet" href="./CSS/style.css" />
  <link rel="stylesheet" href="./CSS/test.css">
  <link rel="stylesheet" href="./CSS/responsive.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--STYLE ICON-->

  <!--SCRIPT-->
  <script src="./JS/Bootstrap.js"></script>
  <!--SCRIPT-->
</head>

<body>
  <header>
    <div class="logo">
      <img src="./IMG/xdv.png" alt="" />
    </div>

    <input type="checkbox" id="check" />
    <label style="float: right" for="check" class="checkbtn">
      <i class="bx bx-menu" undefined></i>
    </label>

    <ul>
      <li><a href="./portal.php">Portal de Aprendizaje</a></li>
      <li><a href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
    </ul>
  </header>


  <div class="container-header-library">
    <img src="./IMG/animation/cuboazul.gif" alt="">
    <h6 clas="title">Hola, <b><?php echo $_SESSION['name']; ?></b> Bienvenido al Potal ST</h6>
    <p><small>"Genius is made up of 1% talent and 99% effort."</small></p>

    <div class="icon-item">
      <button type="button" class="btn btn-secondary"><a href="./cod_fail.php">Service Library</a></button>
    </div>

  </div>

  <main>

    <div class="text">

      <h6>¡Le damos la bienvenida al Portal de servicio técnico!</h6>

      <p>
        Descubra un concentrador integral para todos los recursos,
        herramientas y asistencia que necesita para mejorar su negocio.
        Manténgase informado sobre las últimas noticias de Xerox y explore
        información detallada sobre productos, software, servicios y
        programas exclusivos. Acceda a materiales de marketing, módulos de
        formación y gestione su cuenta sin esfuerzo para racionalizar las
        operaciones de su negocio, en un solo lugar.
      </p>

    </div>

    <div class="container-learning-card">
      <div class="we-make">
        <img src="./IMG/we_make.png" alt="" />
      </div>
    </div>
    <!--CONTAINER-LEARNING-PUBLIC-->
  </main>

  <!--START FOOTER-->
  <footer>
    <p class="m-0">Service Library
      2010-2024 &copy; Xerox de Venezuela Todos los derechos reservados. <small style="color:brown;">XDV®</small></p>
  </footer>
  <!--START FOOTER-->

</body>

</html>